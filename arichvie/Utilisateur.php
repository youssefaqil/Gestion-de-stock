<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Welcome</title>


<style type="text/css">
body{
	margin: 3%;
	padding: 0%;
background-image:url('imag.jpg');
box-shadow: 10px 10px 5px black;
}
marquee{text-shadow: 5px 5px 5px #FF0000;font-family:"Rosewood Std";font-size:250%;}
.menu img{width: 80px;cursor: pointer;}
    .menu {width:120%;position: fixed;text-align: center;}
    table{background-image:url('imag.jpg');box-shadow: 10px 10px 5px black;border:2px solid;
border-radius:25px;border-style: none;position: absolute;left: 25%;margin-top: 3%;}
   #image{background-color: #ffffff;padding:0px 0px 0px 400px;}
   h2{
   	color: #1b1bb3;
   }
</style>
</head>
<body>
<div id="image"><img src="images/CRI.jpg"/></div>
    <hr>
    <marquee>Welcome to my Application</marquee>
    <hr>
</div>
   <div id="main">
   	<h2>Utilisateur :</h2>
   	<?php
    include("menue/menu_pd.php");
    ?>
   </div>
</body>
</html>