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
background-color:#d0e4fe;
background-image:url('/Capture1.JPG');

}
{position: absolute;left:20%;padding-top:-5%;width: 120%;}

marquee{text-shadow: 5px 5px 5px #FF0000;font-family:"Matura MT Script Capitals";font-size:300%;color:#190d73;}
#logo{position: absolute;top:0%;right:0%;box-shadow:10px 10px 60px 20px #4a8cfa;}
#titre{padding-top: 2%;}
#menue{margin-left:-3%;width: 11%;}
#entete{width: 25%;box-shadow: 10px 10px 5px #241ea5;}
span{color:red;font-size:110%;font-weight: bold;}
form{background-color:#f7f2f3;position: absolute;left: 40%;top:50%;box-shadow:10px 20px 70px 40px #031583;border-top: solid;border-bottom: solid;border-radius:0%;}
form td{border-style: none;width:40%;height:40%;}
form tr{border: 1px solid;}
 .CSSTableGenerator {
margin-left:260px;
margin-top:50px;
width:150%;
box-shadow: 10px 10px 5px #888888;
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
width:180%;
height:100%;
margin:0px;padding:0px;
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
font-size:80%;
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
font-size:100%;
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
</head>
<body >

<div id="entete">
     <img src="images/cri.jpg"	alt="CRI" title="CRI" height="150px"/>
    </div> 
    <div id="logo"><img src="images/logo.JPG"/></div>
    <div id="titre">
    <hr>
    <marquee  direction="left" onmouseover="this.stop()" onmouseout="this.start()">Modifier Un Produit</marquee>
    <hr>
     </div>
    <div id="menue">
    	
    <?php
    include("menue/menu_pd.php");
    ?>
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
		
		<td colspan="2"><input type="submit" name="modif" value="Modifier"/></td>
	</tr>
</table>
</form>
</div>

<?php
}else{	
if(isset($_POST['modif']) && $_POST['modif'] == 'Modifier'){ 
$id=$_POST['idProd'];
$libelle=$_POST['Libelle'];
$Qstocke=$_POST['QStock'];
$prix=$_POST['Prixunitaire'];
$nbrprod=$_POST['nbrprod'];
?>
<?php
$sql=("UPDATE produit SET idProd = '$id' ,Libelle='$libelle', QStock='$Qstocke' ,Prixunitaire='$prix' ,NbrProd='$nbrprod' WHERE idProd='$id' ");
$exec=mysql_query($sql) or die (mysql_error());
if($exec){
 ?>
 <script type="text/javascript">alert("la modification est réussé !");</script>
 <?php
}
else{
	echo mysql_error();
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
<td width="50%">Modifier</td>
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
<td width="100%"><a href="modifierproduit.php?idProd=<?php echo $sql2['idProd']; ?>"><span>Modifier</span></a></td>
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