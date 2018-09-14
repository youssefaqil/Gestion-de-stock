<?php
session_start();
if(isset($_SESSION['LogUser'])){
?>
<!doctype html>
<html>
<?php
include('connexion.php');
?>
<head>
<meta charset="utf-8" />
<title>Welcome</title>
<style type="text/css">
body{
margin: 0;
padding: 0;
background-color:#d0e4fe;
background-image:url('/Capture1.JPG');

}
marquee{text-shadow: 5px 5px 5px #FF0000;font-family:"Matura MT Script Capitals";font-size:300%;color:#190d73;}
#logo{position: absolute;top:0%;right:0%;box-shadow:10px 10px 60px 20px #4a8cfa;}
#titre{padding-top: 2%;}
#contenue{position: absolute;left: 30%;top:50%;box-shadow:10px 10px 60px 20px #4a8cfa;}
#menue{margin-left:-2%;width: 11%;}
#entete{width: 25%;box-shadow: 10px 10px 60px 20px #8f97e2;}
</style>
</head>
<body >
	<div id="entete">
     <img src="images/cri.jpg"	alt="CRI" title="CRI" height="150px"/>
    </div> 
    <div id="logo"><img src="images/logo.JPG"/></div>
    <div id="titre">
    <hr>
    <marquee  direction="left" onmouseover="this.stop()" onmouseout="this.start()">Page Des Produits</marquee>
    <hr>
    <div id="menue">
    <?php
    include("menue/menu_pd.php");
    ?>
    </div>
    </div>
    <div id="contenue"><img src="images/prod.png" height="300px" width="600"></div>
</body>
</html>
<?php
}else{
	HEADER("location:index.php?decnx=1");
}
?>
