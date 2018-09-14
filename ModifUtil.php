<?php
session_start();
if(isset($_SESSION['LogUser']))
{
?>
<!DOCTYPE html PUBLIC>
<html lang="en">

<?php include('connexion.php');  
?>
<?php
$id=$_GET['CinUser'];
$aid=mysql_query("SELECT * FROM utilisateur WHERE CinUser = '$id'");
$affiche=mysql_fetch_array($aid);
?>
<head>
<title>Modifier Utilisateur</title>
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
width:165%;
height:100%;
margin:0px;padding:0px;
margin-left: -7%;
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
background-color:#cccccc;
}
.CSSTableGenerator td{
vertical-align:middle;

background-color:#6699cc;
border:1px solid #ffffff;
border-width:0px 1px 1px 0px;
text-align:left;
padding:7px;
font-size:80%;
font-family:Arial;
font-weight:normal;
color:#000000;
}.CSSTableGenerator tr:last-child td{
border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td{
	background:-o-linear-gradient(bottom, #003366 5%, #003f7f 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #003366), color-stop(1, #003f7f) );	background:-moz-linear-gradient( center top, #003366 5%, #003f7f 100% );	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#003366", endColorstr="#003f7f");	background: -o-linear-gradient(top,#003366,003f7f);
background-color:#003366;
border:0px solid #ffffff;
text-align:center;
border-width:0px 0px 1px 1px;
font-size:100%;
font-family:Arial;
font-weight:bold;
color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #003366 5%, #003f7f 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #003366), color-stop(1, #003f7f) );	background:-moz-linear-gradient( center top, #003366 5%, #003f7f 100% );	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#003366", endColorstr="#003f7f");	background: -o-linear-gradient(top,#003366,003f7f);
background-color:#003366;
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

<h1><img src="images/centre.png" alt="flickr" class="img"/><center>Modifier Utilisateur</h1></center>

<ul id="nav" class="dropdown dropdown-vertical">
	<div id="menu">
	<li><a href="Acceuil.php">Acceuil</a></li>
	<li><a class="dir" href="Prod.php">Utilisateur</a>
		<ul>
			<li><a href="AjoutUtil">Ajouter Utilisateur</a></li>
			<li><a href="ModifUtil.php">Modifier Utilisateur</a></li>
			<li><a href="SupUtil.php">Supprimer Utilisateur</a></li>
		</ul>
	</li>
</ul>
</div>

       <?php 
	
	if (isset ($_GET['CinUser']) && $_GET['CinUser'] == $id){

	  ?>
	  	 <div id="stylized" class="myform">

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
	<tr>
		
		<td colspan="2"><button type="submit" name="modif" value="Modifier" style="margin-top:15px;">Modifier</button></td>
		
	</tr>
</table>
</form>
</div>

<?php 
}else{
if(isset($_POST['modif']) && $_POST['modif'] == 'Modifier'){ 
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
$sql=("UPDATE utilisateur SET NomUser='$nom', PrenUser='$prenom' ,TelUser='$tel' ,typeUser='$type',logUser
	='$login',passUser='$pass' WHERE CinUser='$id' ");
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
  $sql1=mysql_query("SELECT * FROM utilisateur" );
?>
<div class="CSSTableGenerator" style="width:600px;height:150px;">
<table> 
<tr>
<td width="10%">Cin</td>
<td width="20%">Nom</td>
<td width="20%">Prenom</td>
<td width="30%">Tel</td>
<td width="20%">Type</td>
<td width="40%">Login</td>
<td width="40%">Password</td>
<td width="20%">ID_SERVICE</td>
<td width="20%">ID_FACTURE</td>
<td width="50%">Modifier</td>
</tr>
</div>
<?php 
while ($sql2=mysql_fetch_array($sql1)) {?>
<tr>
<td width="10%"><?php echo $sql2['CinUser']?></td>
<td width="20%"><?php echo $sql2['NomUser'] ?></td>
<td width="20%"><?php echo $sql2['PrenUser']?></td>
<td width="30%"><?php echo $sql2['TelUser']?></td>
<td width="20%"><?php echo $sql2['TypeUser']?></td>
<td width="40%"><?php echo $sql2['LogUser']?></td>
<td width="40%"><?php echo $sql2['PassUser']?></td>
<td width="20%"><?php echo $sql2['id_Serv']?></td>
<td width="20%"><?php echo $sql2['id_Fact']?></td>
<td width="100%"><a href="ModifUtil.php?CinUser=<?php echo $sql2['CinUser']; ?>"><span>Modifier</span></a></td>
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