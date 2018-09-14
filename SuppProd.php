<?php
session_start();
if(isset($_SESSION['LogUser']))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php include('connexion.php');  
?>
<?php
$id=$_GET['CinUser'];
$aid=mysql_query("SELECT * FROM utilisateur WHERE CinUser = '$id'");
$affiche=mysql_fetch_array($aid);
?>

<head>
<title>Supprimer Un Produit</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/helper.css" media="screen" rel="stylesheet" type="text/css" />

<link href="css/dropdown/dropdown.vertical.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/dropdown/themes/flickr.com/default.ultimate.css" media="screen" rel="stylesheet" type="text/css" />

<style type="text/css">
.img{margin-top:-5%;margin-left:-3%;}
center{font-family:"Old English Text MT";font-size:300%;color:#190d73;}
	#menu li ul{position: absolute;left: 2em;width:120px;top: 2.4em; }
 .CSSTableGenerator {
margin-left:200px;
margin-top:50px;
width:150%;
border:1px solid #ffffff;

-moz-border-radius-bottomleft:0px;
-webkit-border-bottom-left-radius:0px;
border-bottom-left-radius:0px;

-moz-border-radius-bottomright:0px;
-webkit-border-bottom-right-radius:0px;
border-bottom-right-radius:0px;

-moz-border-radius-topright:0px;
-webkit-border-top-right-radius:0px;
border-top-right-radius:0px;

-moz-border-radius-topleft:0px;
-webkit-border-top-left-radius:0px;
border-top-left-radius:0px;
}.CSSTableGenerator table{
width:200%;
height:100%;
margin:0px;padding:0px;
box-shadow: 10px 10px 5px #888888;
}.CSSTableGenerator tr:last-child td:last-child {
-moz-border-radius-bottomright:0px;
-webkit-border-bottom-right-radius:0px;
border-bottom-right-radius:0px;
}
.CSSTableGenerator table tr:first-child td:first-child {
-moz-border-radius-topleft:0px;
-webkit-border-top-left-radius:0px;
border-top-left-radius:0px;
}
.CSSTableGenerator table tr:first-child td:last-child {
-moz-border-radius-topright:0px;
-webkit-border-top-right-radius:0px;
border-top-right-radius:0px;
}.CSSTableGenerator tr:last-child td:first-child{
-moz-border-radius-bottomleft:0px;
-webkit-border-bottom-left-radius:0px;
border-bottom-left-radius:0px;
}.CSSTableGenerator tr:hover td{
background-color:#d3e9ff;
}
.CSSTableGenerator td{
vertical-align:middle;

background-color:#aad4ff;
border:1px solid #ffffff;
border-width:0px 1px 1px 0px;
text-align:center;
padding:7px;
font-family:arial;
font-size:100%;
font-weight: bold;
color:#000000;
}.CSSTableGenerator tr:last-child td{
border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td{
	background:-o-linear-gradient(bottom, #0057af 5%, #0057af 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #0057af), color-stop(1, #0057af) );	background:-moz-linear-gradient( center top, #0057af 5%, #0057af 100% );	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#0057af", endColorstr="#0057af");	background: -o-linear-gradient(top,#0057af,0057af);
background-color:#0057af;
border:0px solid #ffffff;
text-align:center;
border-width:0px 0px 1px 1px;
font-size:120%;
font-family:arial;
font-weight:bold;
color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #0057af 5%, #0057af 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #0057af), color-stop(1, #0057af) );	background:-moz-linear-gradient( center top, #0057af 5%, #0057af 100% );	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#0057af", endColorstr="#0057af");	background: -o-linear-gradient(top,#0057af,0057af);
background-color:#0057af;
}
.CSSTableGenerator tr:first-child td:first-child{
border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td:last-child{
border-width:0px 0px 1px 1px;
}	
	
</style>
<link rel="stylesheet" href="css/styleTab.css">
</head>
<body class="flickr-com">

<p><a href="#" class="main-site">Main site</a></p>

<h1><img src="images/centre.png" alt="flickr" class="img"/><center>Supprimer Un Produit</h1></center>

<ul id="nav" class="dropdown dropdown-vertical">
	<div id="menu">
	<li><a href="Acceuil.php">Acceuil</a></li>
	<li><a class="dir" href="Prod.php">Produit</a>
		<ul>
			<li><a href="AjoutProd.php">Ajouter un produit</a></li>
			<li><a href="ModifProd.php">Modifier un produit</a></li>
			<li><a href="SuppProd.php">Supprimer un produit</a></li>
		</ul>
	</li>
</ul>
</div>

      <?php 
	
	if (isset ($_GET['idProd']) && $_GET['idProd'] == $id){

	  ?>
	  <div id="stylized" class="myform">
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<table >
	<tr>
	<td>ID_produit :</td>
	<td><input type="text" name="idProd" value="<?php echo $affiche['idProd']  ;?>"/></td>
        </tr>
	<tr>
	<td>Libelle :</td>
	<td><input type="text" name="Libelle" value="<?php echo $affiche['Libelle']  ;?>"/></td>
	</tr>
	<tr>
	<td>Quantité stock :</td>
	<td><input type="text" name="QStock" value="<?php echo $affiche['QStock']  ;?>" /></td>
	</tr>
	<tr>
		<td>prix unitaire :</td>
		<td><input type="text" name ="Prixunitaire" value="<?php echo $affiche['Prixunitaire']  ;?>"/></td>
	</tr>
	<tr>
		<td>nombre de produit :</td>
		<td><input type="text" name="nbrprod" value="<?php echo $affiche['NbrProd']  ;?>"/></td>
	</tr>
	<tr>
		
		<td colspan="2"><button type="submit" name="supp" value="Supprimer" style="margin-top:15px;">Supprimer</button></td>

	</tr>
</table>
</form>

<?php
}else{	
if(isset($_POST['supp']) && $_POST['supp'] == 'Supprimer'){ 
$id=$_POST['idProd'];
$libelle=$_POST['Libelle'];
$Qstocke=$_POST['QStock'];
$prix=$_POST['Prixunitaire'];
$nbrprod=$_POST['nbrprod'];

?>
<?php
$sql=("DELETE FROM produit WHERE idProd='$id' ");
$exec=mysql_query($sql) or die (mysql_error());
if($exec){
  
  ?>
 <script type="text/javascript">alert("la suppression est réussé !");</script>
 <?php
}
else{
	echo "Error";
}
}
?>
<?php

  $sql1=mysql_query("SELECT * FROM produit" );
?>
<div class="CSSTableGenerator" style="width:600px;height:150px;">
<table> 
<tr>
<td width="10%">ID_produit</td>
<td width="50%">Libelle</td>
<td width="20%">Quantité Stock</td>
<td width="20%">Prix Unitaire</td>
<td width="20%">Nombre De produit</td>
<td width="50%">Supprimer</td>
</tr>
</div>
<?php 
while ($sql2=mysql_fetch_array($sql1)) {?>
<tr>
<td width="10%"><?php echo $sql2['idProd']?></td>
<td width="35%"><?php echo $sql2['Libelle'] ?></td>
<td width="20%"><?php echo $sql2['QStock']?></td>
<td width="20%"><?php echo $sql2['Prixunitaire']?></td>
<td width="20%"><?php echo $sql2['NbrProd']?></td>
<td width="100%"><a href="SuppProd.php?idProd=<?php echo $sql2['idProd']; ?>"><span>Supprimer</span></a></td>
</tr>
<?php } ?>
</table>
<?php } ?>
</div>
</body>
</html>
<?php
}
else{
	HEADER("location:index.php?decnx=1");
}
?>