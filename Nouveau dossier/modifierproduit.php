<!doctype html>
<html>
<?php include('connexion.php');  
?>
<?php
$id=$_GET['idProd'];
$aid=mysql_query("SELECT * FROM produit WHERE idProd = '$id'");
$affiche=mysql_fetch_array($aid);
?>
<head>
<meta charset="utf-8" />
<title>Welcome</title>
<style type="text/css">
body{
margin: 0;
padding: 0;
background-color:#d0e4fe;

}
#entete{
padding-left: 320px;
background-color: white;
height: 200px;
}
h1{
	text-align: center;
}
form{
   position: absolute;
   left:380px;
   background-image: url("exe.jpg");
   box-shadow: 10px 10px 20px #000066;
}
h2{
   padding-left: 100px;
}
marquee{
	font-size: 17px;
	box-shadow: 1px 2px 10px black;
	color: #0000ff;
}
</style>
</head>
<body >
	<div id="entete">
     <img src="images/cri.jpg"	alt="CRI" title="CRI" height="200px"/>
    </div> 
    <hr>
    <marquee  direction="left" onmouseover="this.stop()" onmouseout="this.start()">Welcome to my Application</marquee>
    <hr>
    <h1>Mon Compte</h1>
	<h2>Remplir la Formulaire Suivant :</h2>
      <?php 
	
	if (isset ($_GET['idProd']) && $_GET['idProd'] == $id){

	  ?>
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
	<td><input type="text" name="QSotck" value="<?php echo $affiche['QStock']  ;?>" /></td>
	</tr>
	<tr>
		<td>prix unitaire :</td>
		<td><input type="text" name ="Prixunitaire" value="<?php echo $affiche['Prixunitaire']  ;?>"/></td>
	</tr>
	<tr>
		<td>nombre de produit :</td>
		<td><input type="text" name="nbrprod" value="<?php echo $affiche['nbrprod']  ;?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="modif" value="Modifier"/></td>
	</tr>
</table>
</form>
<?php
}else{
  $sql1=mysql_query("SELECT * FROM produit" );
?>
<table border="1">
<tr>
<td width="10%">ID_produit</td>
<td width="10%">Libelle</td>
<td width="10%">Quantité Stock</td>
<td width="10%">Prix Unitaire</td>
<td width="10%">Nombre De produit</td>
<td width="10%">Modifier</td>
</tr>
<?php 
while ($sql2=mysql_fetch_array($sql1)) {?>
<tr>
<td width="10%"><?php echo $sql2['idProd']?></td>
<td width="10%"><?php echo $sql2['Libelle'] ?></td>
<td width="10%"><?php echo $sql2['QStock']?></td>
<td width="10%"><?php echo $sql2['Prixunitaire']?></td>
<td width="10%"><?php echo $sql2['nbrprod']?></td>
<td width="10%"><a href="modifierproduit.php?idProd=<?php echo $sql2['idProd']; ?>">Modifier</a></td>
</tr>
<?php } ?>
</table>
<?php } ?>
<?php 
if(isset($_POST['modif']) && $_POST['modif'] == 'Modifier'){ 
$id=$_POST['idProd'];
$libelle=$_POST['Libelle'];
$Qstocke=$_POST['QStock'];
$prix=$_POST['Prixunitaire'];
$nbrprod=$_POST['nbrprod'];
?>
<?php
$sql=("UPDATE produit SET idProd = '$id' ,Libelle='$libelle', QStock='$Qstocke' ,Prixunitaire='$prix' ,nbrprod='$nbrprod' WHERE idProd='$id' ");
$exec=mysql_query($sql) or die (mysql_error());
if($exec){
  echo "la modification est réussé"; 
}
else{
	echo "Error";
}
}
?>
</body>
</html>