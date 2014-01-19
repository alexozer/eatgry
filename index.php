<!DOCTYPE HTML>
<html>
<head>
<title>Eatgry</title>
</head>
<style>
@font-face{
font-family:fr;
src: url('http://afapps.net/fr.ttf');
}
@font-face{
font-family:hl;
src: url('http://afapps.net/light.ttf');
}
body {
background-color:#017a9c;
}
#hello h1{
font-family:fr;
font-size:100px;
text-align:center;
margin-left:auto;
margin-right:auto;
width:70%;
color:white;
}
#infoo h2
{
font-family:hl;
font-size:20px;
text-align:center;
margin-left:auto;
margin-right:auto;
width:70%;
color:white;
}
#info h2
{
font-family:hl;
font-size:45px;
text-align:center;
margin-left:auto;
margin-right:auto;
width:70%;
color:white;
}

.try {
	-moz-box-shadow: 0px 2px 5px -1px #000000;
	-webkit-box-shadow: 0px 2px 5px -1px #000000;
	box-shadow: 0px 2px 5px -1px #000000;
	background-color:#14b8b8;
	-webkit-border-top-left-radius:16px;
	-moz-border-radius-topleft:16px;
	border-top-left-radius:16px;
	-webkit-border-top-right-radius:16px;
	-moz-border-radius-topright:16px;
	border-top-right-radius:16px;
	-webkit-border-bottom-right-radius:16px;
	-moz-border-radius-bottomright:16px;
	border-bottom-right-radius:16px;
	-webkit-border-bottom-left-radius:16px;
	-moz-border-radius-bottomleft:16px;
	border-bottom-left-radius:16px;
	border:1px solid white;
	color:white;
	font-family:hl;
	font-size:25px;
	font-style:normal;
	height:56px;
	line-height:56px;
	width:300px;
	margin:auto;
    width:30%;
	text-align:center;
	cursor:pointer;
}

.try:active {
	position:relative;
	top:1px;
}

.search {
	-moz-box-shadow: 0px 2px 5px -1px #000000;
	-webkit-box-shadow: 0px 2px 5px -1px #000000;
	box-shadow: 0px 2px 5px -1px #000000;
	background-color:#14b8b8;
	-webkit-border-top-left-radius:16px;
	-moz-border-radius-topleft:16px;
	border-top-left-radius:16px;
	-webkit-border-top-right-radius:16px;
	-moz-border-radius-topright:16px;
	border-top-right-radius:16px;
	-webkit-border-bottom-right-radius:16px;
	-moz-border-radius-bottomright:16px;
	border-bottom-right-radius:16px;
	-webkit-border-bottom-left-radius:16px;
	-moz-border-radius-bottomleft:16px;
	border-bottom-left-radius:16px;
	border:1px solid white;
	color:white;
	font-family:hl;
	font-size:25px;
	font-style:normal;
	height:56px;
	line-height:56px;
	width:300px;
	margin:auto;
    width:30%;
	text-align:center;
	cursor:pointer;
}

.search:active {
	position:relative;
	top:1px;
}
.hlp
{
font-family:fr;
font-size:35px;
text-align:center;
}
.hlp a{
color:white;
text-decoration:none;
}
.ita{
color:#10c6c6;
}

select {
outline: 0;
}
#cities select {

      border: 2;  /*Removes border*/
      border-color:white;
      border-radius:1;
      -webkit-appearance: none;  /*Removes default chrome and safari 
style*/
      -moz-appearance: none; /* Removes Default Firefox style*/
      background: url('drop.png') no-repeat;  /*Adds background-image*/
      background-color:white;
      background-size: 30px 30px;
      background-position: left 10px;  /*Position of the 
background-image*/
      width: 250px; /*Width of select dropdown to give space for arrow 
image*/
      text-indent: 0.01px; /* Removes default arrow from firefox*/
      font-family:hl;
	  font-size:20px;
      height:55px;
margin:auto;
width:100%;

      /*My custom style for fonts*/

      color: #1455a2;
}
</style>
<script>
function appear(target){
document.getElementById(target).style.display = 'block';
}
function hide(target){
document.getElementById(target).style.display = 'none';
}
</script>
<body>
<div id="hello">
<h1><a href="http://eatgry.com/" style="text-decoration:none; 
color:white;"><b 
class="ita">EAT</b>GRY</a></h1>
</div>
<div id="info">
<h2>           Eatgry helps you to find 
           restaurants near the city you're in!
          </h2>
</div>
<div id="cities" style="display:none;">
<form method="post" action="search.php">
<select name="city">
<option 
value="atlanta">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Atlanta</option>
<option 
value="baltimore">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Baltimore</option>
<option 
value="boston">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Boston</option>
<option 
value="chicago">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Chicago</option>
<option 
value="dallas">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Dallas - 
Ft. Worth</option>
<option 
value="denver">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Denver</option>
<option 
value="houston">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Houston</option>
<option 
value="las-vegas">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Las 
Vegas</option>
<option 
value="los-anegles">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Los 

Angeles</option>
<option 
value="miami">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Miami</option>
<option 
value="minneapolis">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Minneapolis 
- St. Paul</option>
<option 
value="montreal">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Montreal 
/ Quebec</option>
<option 
value="new-orleans">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;New 
Orleans</option>
<option 
value="new-york">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;New 
York City</option>
<option 
value="philadelphia">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Philadelphia</option>
<option 
value="phoenix">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Phoenix</option>
<option 
value="san-diego">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;San 
Diego</option>
<option 
value="san-francisco">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;San 
Francisco Bay Area</option>
<option 
value="seattle">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Seattle</option>
<option 
value="toronto">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Toronto</option>
<option value="vancouver">&#160;&#160;&#160;&#160;&#160;&#160;&#160;         
&#160;Vancouver / BC</option>
<option value="washington 
dc">&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Washington 
DC</option>
</select>
<button style="display:none;" id="srch" class="search" >Search</button>
</form>
</div>
<br>
<div id="trry" class="try" onclick="hide('info'); hide('trry'); 
appear('cities');appear('srch');" >Try now!</div>
<div id="infoo">
<h2>Created by <i>Ahmed</i>, <i>Alex</i>, and <i>Justin</i></h2>
</div>
<br>
<h3 class="hlp"><a href="mailto:me@afapps.net">HELP</a></h3>
</body>
</html>
