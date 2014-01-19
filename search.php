<?php
session_start();
$nm = $_POST['city'];
exec("eatgry $nm", $output, $status);
?>
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
#heo h1{
font-family:fr;
font-size:80px;
text-align:center;
margin-left:auto;
margin-right:auto;
width:20%;
color:white;
}
#res h2
{
font-family:fr;
font-size:45px;
text-align:center;
margin-left:auto;
margin-right:auto;
width:70%;
color:white;
}
#info h2
{
font-family:hl;
font-size:35px;
text-align:center;
margin-left:auto;
margin-right:auto;
width:70%;
color:white;
}
.ita{
color:#10c6c6;
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
</style>
<body>
<div id="hello">
<h1><a href="/#refresh" style="text-decoration:none; color:white;"><b 
class="ita">EAT</b>GRY</a></h1>
</div>
<div id="info">
<h2>Random result</h2>
<div id="heo">
<h1><?php echo $nm; ?></h1>
</div>
<div id="res">
<?php
$data = explode(',',trim($output[0]));
?>
<h2>
We choose <u><i><?php echo $data[0]; ?></i></u>  located in <u><i><?php echo 
$data[1]; ?></i></u>. They are a(n) <u><i><?php echo $data[2]; ?></i></u> 
restaurant, and are rated at <u><?php echo $data[3]/10; ?></u> star(s).  The overall price on a scale of 1 to 
4<b style="font-size:15px;">(4 being largest)</b> is <u><?php echo $data[4]; ?></u>.
</h2>
</div>
</div>
<div id="infoo">
<h2>Created by <i>Ahmed</i>, <i>Alex</i>, and <i>Justin</i></h2>
</div>
<br>
<h3 class="hlp"><a href="mailto:me@afapps.net">HELP</a></h3>
</body>
</html>
