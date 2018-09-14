<!doctype html>
<html>
<?php include('connexion.php');  
?>
<?php
$id=$_GET['CinUser'];
$aid=mysql_query("SELECT * FROM utilisateur WHERE CinUser = '$id'");
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
	
	if (isset ($_GET['CinUser']) && $_GET['CinUser'] == $id){

	  ?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<table >
		<tr>
	<td>CIN :</td>
	<td><input type="text" name="CinUser" value="<?php echo $affiche['CinUser']  ;?>"/></td>
        </tr>
	<tr>
	<td>NOM :</td>
	<td><input type="text" name="NomUser" value="<?php echo $affiche['NomUser']  ;?>"/></td>
	</tr>
	<tr>
	<td>PRENOM :</td>
	<td><input type="text" name="PrenUser" value="<?php echo $affiche['PrenUser']  ;?>"/></td>
	</tr>
	<tr>
		<td>TEL:</td>
		<td><input type="text" name ="TelUser" value="<?php echo $affiche['TelUser']  ;?>"/></td>
	</tr>
	<tr>
		<td>TYPE :</td>
		<td><input type="text" name="TypeUser" value="<?php echo $affiche['TypeUser']  ;?>"/></td>
	</tr>
	<tr>
		<td>LOGIN :</td>
		<td><input type="text" name="LogUser" value="<?php echo $affiche['LogUser']  ;?>"/></td>
	</tr>
	<tr>
		<td>PASSWORD :</td>
		<td><input type="password" name="PassUser" value="<?php echo $affiche['PassUser']  ;?>"/></td>
	</tr>
	<tr>
		<td>ID_SERVICE :</td>
		<td><input type="text" name="id_Serv" value="<?php echo $affiche['id_Serv']  ;?>"/></td>
	</tr>
    <tr>
		<td>ID_FACTURE :</td>
		<td><input type="text" name="id_Fact" value="<?php echo $affiche['id_Fact']  ;?>"/></td>
	</tr>
		<td><input type="submit" name="supp" value="Supprimer"/></td>
	</tr>
</table>
</form>
<?php
}else{ 
if(isset($_POST['supp']) && $_POST['supp'] == "Supprimer"){ 
$id=$_POST['CinUser'];
$nom=$_POST['NomUser'];
$prenom=$_POST['PrenUser'];
$tel=$_POST['TelUser'];
$type=$_POST['TypeUser'];
$login=$_POST['LogUser'];
$pass=$_POST['PassUser'];
$id_ser=$_POST['id_Serv'];
$id_fac=$_POST['id_Fact'];
?>
<?php
$sql=("DELETE FROM utilisateur WHERE CinUser='$id' ");
$exec=mysql_query($sql) or die (mysql_error());
if($exec){
  echo "la modification est réussé";}
else{
	echo "Error";
}
}
?>
<?php

  $sql1=mysql_query("SELECT * FROM utilisateur" );
?>
<table border="1">
<tr>
<td width="10%">CIN</td>
<td width="10%">NOM</td>
<td width="10%">PRENOM</td>
<td width="10%">TEL</td>
<td width="10%">TYPE</td>
<td width="10%">LOGIN</td>
<td width="10%">PASSWORD</td>
<td width="10%">ID_SERVICE</td>
<td width="10%">ID_FACTURE</td>
<td width="10%">Supprimer</td>
</tr>
<?php 
while ($sql2=mysql_fetch_array($sql1)) {?>
<tr>
<td width="10%"><?php echo $sql2['CinUser']?></td>
<td width="10%"><?php echo $sql2['NomUser'] ?></td>
<td width="10%"><?php echo $sql2['PrenUser']?></td>
<td width="10%"><?php echo $sql2['TelUser']?></td>
<td width="10%"><?php echo $sql2['TypeUser']?></td>
<td width="10%"><?php echo $sql2['LogUser']?></td>
<td width="10%"><?php echo $sql2['PassUser']?></td>
<td width="10%"><?php echo $sql2['id_Serv']?></td>
<td width="10%"><?php echo $sql2['id_Fact']?></td>
<td width="10%"><a href="supprimerutilisateur.php?CinUser=<?php echo $sql2['CinUser']; ?>">Supprimer</a></td>
</tr>
<?php } ?>
</table>
<?php } ?>

</body>
</html>