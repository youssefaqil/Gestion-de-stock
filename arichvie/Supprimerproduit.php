<?php
session_start();
if(isset($_SESSION['LogUser'])) 
{
?>
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
background-image:url('/Capture1.JPG');
background-color:#d0e4fe;

}
marquee{text-shadow: 5px 5px 5px #FF0000;font-family:"Matura MT Script Capitals";font-size:300%;color:#190d73;}
#logo{position: absolute;top:0%;right:0%;box-shadow:10px 10px 60px 20px #4a8cfa;}
#titre{padding-top: 2%;}
#menue{margin-left:-3%;width: 11%;}
#entete{width: 25%;box-shadow: 10px 10px 5px #241ea5;}
#table{background-color:#f7f2f3;position: absolute;left:10%;top:50%;box-shadow:10px 20px 70px 40px #031583;border-top: solid;border-bottom: solid;border-style:double;border-width:5px;}
tr{text-align: center;}
td{border: solid;width:200px;color:blue;font-weight:bold;}
span{color:red;font-size:110%;font-weight: bold;}
form{background-color:#f7f2f3;position: absolute;left: 40%;top:50%;box-shadow:10px 20px 70px 40px #031583;border-top: solid;border-bottom: solid;border-radius:0%;}
form td{border-style: none;width:40%;height:40%;}
form tr{border: 1px solid;}

</style>
</head>
<body >
	<div id="entete">
     <img src="images/cri.jpg"	alt="CRI" title="CRI" height="150px"/>
    </div> 
    <div id="logo"><img src="images/logo.JPG"/></div>
    <div id="titre">
    <hr>
    <marquee  direction="left" onmouseover="this.stop()" onmouseout="this.start()">	Supprimer Un Produit</marquee>
    <hr>
     </div>

    <div id="menue">
    	<?php
    include("menue/menu_pd.php");
    ?>
    </div>
    </div>

      <?php 
	
	if (isset ($_GET['idProd']) && $_GET['idProd'] == $id){

	  ?>
	  <div id="tableAff">
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
		<td><input type="text" name="NbrProd" value="<?php echo $affiche['NbrProd']  ;?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="supp" value="Supprimer"/></td>
	</tr>
</table>
</form>
</div>
<?php
}else{

if(isset($_POST['supp']) && $_POST['supp'] == 'Supprimer'){ 
$id=$_POST['idProd'];
$libelle=$_POST['Libelle'];
$Qstocke=$_POST['QStock'];
$prix=$_POST['Prixunitaire'];
$nbrprod=$_POST['NbrProd'];

?>
<?php
$sql=("DELETE FROM produit WHERE idProd='$id' ");
$exec=mysql_query($sql) or die (mysql_error());
if($exec){
  
  ?>
 <script type="text/javascript">alert("la modification est réussé !");</script>
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
<div id="table">
<table border="1">
<tr>
<td width="10%">ID_produit</td>
<td width="10%">Libelle</td>
<td width="10%">Quantité Stock</td>
<td width="10%">Prix Unitaire</td>
<td width="10%">Nombre De produit</td>
<td width="10%">Supprimer</td>
</tr>
<?php 
while ($sql2=mysql_fetch_array($sql1)) {?>
<tr>
<td width="10%"><?php echo $sql2['idProd']?></td>
<td width="10%"><?php echo $sql2['Libelle'] ?></td>
<td width="10%"><?php echo $sql2['QStock']?></td>
<td width="10%"><?php echo $sql2['Prixunitaire']?></td>
<td width="10%"><?php echo $sql2['NbrProd']?></td>
<td width="10%"><a href="Supprimerproduit.php?idProd=<?php echo $sql2['idProd']; ?>"><span>Supprimer</span></a></td>
</tr>
<?php } ?>
</table>
<?php } ?>
</div>
</body>
</html>
<?php
}
else{header("location:index.php?decnx=1");}
?>