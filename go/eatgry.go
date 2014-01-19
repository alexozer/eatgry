package main

import (
	"bufio"
	"errors"
	"fmt"
	"log"
	"math/rand"
	"time"
	"net/http"
	"os"
	"strconv"
	"strings"
)

const (
	siteName = "http://opentable.com"
	postFix  = "restaurant-listings"
)

const (
	tableElem = `<table class="ResultsGrid SortingEnabled"`
	restElem = `<a class="r"`
)

type Restaurant struct {
	name, location, style string
	rating, priceRank int
}

func main() {
	var trySingle bool
	var scanner *bufio.Scanner
	var url string
	for {
		if trySingle {
			if len(os.Args) >= 2 {
				city := os.Args[1]
				url = fmt.Sprintf("%s/%s-%s", siteName, city, postFix)
			} 
		} else {
			var city, state string
			if len(os.Args) >= 3 {
				city, state = os.Args[1], os.Args[2]
			} else if len(os.Args) >= 2 && strings.Contains(os.Args[1], "-") {
				splits := strings.SplitN(os.Args[1], "-", 2)
				city, state = splits[0], splits[1]
			} else {
				if trySingle {
					log.Fatal(errRestGrid)
				} else {
					trySingle = true
					continue
				}
			}
			url = fmt.Sprintf("%s/%s-%s-%s", siteName, city, state, postFix)
		}

		resp, err := http.Get(url)
		if err != nil {
			log.Fatal(err)
		}
		defer resp.Body.Close()

		scanner = bufio.NewScanner(resp.Body)
		var gridFound bool
		for scanner.Scan() {
			if strings.Contains(scanner.Text(), tableElem) {
				gridFound = true
				break
			}
		}

		if !gridFound {
			if trySingle {
				log.Fatal(errRestGrid)
			} else {
				trySingle = true
				continue
			}
		}

		break;
	}

	var rests []*Restaurant
	for scanner.Scan() {
		if txt := scanner.Text(); strings.Contains(txt, restElem) {
			if rest, err := parseRestLine(txt); err != nil {
				log.Fatal(err)
			} else {
				rests = append(rests, rest)
			}
		}
	}

	fmt.Println(randRestaurant(rests))
}

func (rest *Restaurant) String() string {
	return fmt.Sprintf("%s,%s,%s,%d,%d", 
			rest.name, 
			rest.location, 
			rest.style,
			rest.rating,
			rest.priceRank,
	)
}

var (
	errRestGrid = errors.New("Error parsing restaurant grid")
	errParseName = errors.New("Error parsing restaurant name")
	errParseLoc = errors.New("Error parsing restaurant location")
	errParseRating = errors.New("Error parsing restaurant rating")
	errParsePriceRank = errors.New("Error parsing restaurant price rank")
)

func parseRestLine(txt string) (rest *Restaurant, err error) {
	rest = new(Restaurant)
	if rest.name, err = parseName(txt); err != nil {
		return
	}

	if rest.location, rest.style, err = parseLocAndStyle(txt); err != nil {
		return
	}

	if rest.rating, err = parseRating(txt); err != nil {
		return
	}

	rest.priceRank, err = parsePriceRank(txt)
	return
}

func randRestaurant(rests []*Restaurant) *Restaurant {
	rand.Seed(time.Now().UTC().UnixNano())
	return rests[rand.Intn(len(rests))]
}

func parseName(txt string) (string, error) {
	splits := strings.SplitN(txt, `class="rinfo"`, 2)
	if len(splits) < 2 {
		return "", errParseName
	}
	txt = splits[1]

	splits = strings.SplitN(txt, `>`, 3)
	if len(splits) < 3 {
		return "", errParseName
	}
	txt = splits[2]

	splits = strings.SplitN(txt, `<`, 2)
	if len(splits) < 2 {
		return "", errParseName
	}

	return splits[0], nil
}

func parseLocAndStyle(txt string) (loc, style string, err error) {
	splits := strings.SplitN(txt, `<div class="d">`, 2)
	if len(splits) < 2 {
		err = errParseLoc
		return
	}
	txt = splits[1]

	splits = strings.SplitN(txt, `<`, 2)
	if len(splits) < 2 {
		err = errParseLoc
		return
	}
	txt = splits[0]

	splits = strings.SplitN(txt, "|", 2)
	if len(splits) < 2 {
		err = errParseLoc
		return
	}

	loc = strings.TrimSpace(splits[0])
	style = strings.TrimSpace(splits[1])
	return
}

func parseRating(txt string) (rating int, err error) {
	splits := strings.SplitN(txt, `<div class="Star S`, 2)

	if len(splits) < 2  || len(splits[1]) < 3 {
		return
	}

	ratingBytes := []byte{splits[1][0], splits[1][2]}
	ratingUnsized, err := strconv.ParseInt(string(ratingBytes), 10, 32)

	return int(ratingUnsized), err
}

func parsePriceRank(txt string) (rank int, err error) {
	priceStart := strings.IndexByte(txt, '$')
	splits := strings.SplitN(txt[priceStart:], `<`, 2)
	if len(splits) < 2 {
		return 0, errParsePriceRank
	}

	return len(splits[0]), nil
}
