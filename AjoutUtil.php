<?php
session_start();
if(isset($_SESSION['LogUser'])){
?>
<!DOCTYPE html>
<html>
<?php
include('connexion.php');
?>
<head>
<title>Ajout d'utilisateur</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/helper.css" media="screen" rel="stylesheet" type="text/css" />



<link href="css/dropdown/dropdown.vertical.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/dropdown/themes/flickr.com/default.ultimate.css" media="screen" rel="stylesheet" type="text/css" />


<style type="text/css">
.img{margin-top:-5%;margin-left:-3%;}
center{font-family:"Old English Text MT";font-size:300%;color:#190d73;}
	#menu li ul{position: absolute;left: 2em;width:120px;top: 2.4em; }

	p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}

.myform{
	
	top: 300%;
	margin-left:30%;
	width:400px;
	
}

	#basic{
		border:solid 2px #DEDEDE;	
	}
	#basic h1 {
		font-size:14px;
		font-weight:bold;
		margin-bottom:8px;
	}
	#basic p{
		font-size:11px;
		color:#666666;
		margin-bottom:20px;
		border-bottom:solid 1px #dedede;
		padding-bottom:10px;
	}
	#basic td{
		display:block;
		font-weight:bold;
		text-align:right;
		width:140px;
		float:left;
	}
	#basic .small{
		color:#666666;
		display:block;
		font-size:11px;
		font-weight:normal;
		text-align:right;
		width:140px;
	}
	#basic input{
		float:left;
		width:200px;
		margin:2px 0 30px 10px;
	}
	#basic button{ 
		clear:both;
		margin-left:150px;
		background:#888888;
		color:#FFFFFF;
		border:solid 1px #666666;
		font-size:11px;
		font-weight:bold;
		padding:4px 6px;
	}



	#stylized{
		border:solid 2px #b7ddf2;
		background:#ebf4fb;

	}
	#stylized h1 {
		font-size:14px;
		font-weight:bold;
		margin-bottom:8px;
	}
	#stylized p{
		font-size:11px;
		color:#666666;
		margin-bottom:20px;
		border-bottom:solid 1px #b7ddf2;
		padding-bottom:10px;
	}
	#stylized td{
		display:block;
		font-weight:bold;
		text-align:right;
		width:140px;
		float:left;
	}
	#stylized .small{
		color:#666666;
		display:block;
		font-size:11px;
		font-weight:normal;
		text-align:right;
		width:140px;
	}
	#stylized input{
		float:left;
		font-size:12px;
		padding:4px 2px;
		border:solid 1px #aacfe4;
		width:200px;
		margin:2px 0 20px 10px;
	}
	#stylized button{ 
		clear:both;
		margin-left:160px;
		width:125px;
		height:31px;
		background:#444;
		text-align:center;
		line-height:31px;
		color:#FFFFFF;
		font-size:11px;
		font-weight:bold;
	}


</style>
</head>
<body class="flickr-com">
<p><a href="#" class="main-site">Main site</a></p>

<h1><img src="images/centre.png" alt="flickr" class="img"/>

<center>Ajouter Un Utilisateur</h1></center>


<ul id="nav" class="dropdown dropdown-vertical">
	<div id="menu">
	<li><a href="Acceuil.php">Acceuil</a></li>
	<li><a href="Prod.php"><span class="dir">Utilisateur</span></a>
		<ul>
			<li><a href="AjoutUtil.php">Ajouter Utilisateur</a></li>
			<li><a href="ModifUtil.php">Modifier Utilisateur</a></li>
			<li><a href="SupUtil.php">Supprimer Utilisateur</a></li>
		</ul>
	</li>
</ul>
</div>



<div id="stylized" class="myform">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<table>
	<tr>
    <td>ICIN:
   <span class="small">Add your CIN </span></td>
    
<td><input type="text" name="idProd"/></td>
</tr>
<tr>
<td>Libelle :
        <span class="small">Add your Libelle :</span></td>
<td><input type="text" name="CinUser" value="<?php echo $affiche['CinUser']  ;?>"/></td>
</tr>
<tr>
    <td>Nom
       <span class="small">Add your Name</span></td>
    
<td><input type="text" name="NomUser" value="<?php echo $affiche['NomUser']  ;?>"/></td>
</tr>
<tr>
    <td>Prenom:
        <span class="small">Add your nickname</span></td>
    
<td><input type="text" name="PrenUser" value="<?php echo $affiche['PrenUser']  ;?>"/ ></td>
</tr>
<br />
<br />
<tr>
    <td>Tel :
        <span class="small">Add number phone </span></td>
    
<td><input type="text" name ="TelUser" value="<?php echo $affiche['TelUser']  ;?>"/></td>
</tr>
<tr>
    <td>Type:
   <span class="small">Add Type</span></td>
    
<td><input type="text" name="TypeUser" value="<?php echo $affiche['TypeUser']  ;?>"/></td>
</tr>
<tr>
    <td>Login :
   <span class="small">Add Login</span></td>
    
<td><input  type="text" name="LogUser" value="<?php echo $affiche['LogUser']  ;?>"/></td>
</tr>
<tr>
    <td>PassWord :
   <span class="small">Add your password</span></td>
    
<td><input type="password" name="PassUser" value="<?php echo $affiche['PassUser']  ;?>"/></td>
</tr>
<tr>
    <td>ID_produit :
   <span class="small">Add your ID_P</span></td>
    
<td><input type="text" name="idProd"/></td>
</tr>
<tr>
   <td> <button type="submit" name="ajout" value="Ajouter" style="margin-top:15px;">Ajouter</button></td>
</tr>
<div class="spacer"></div>
</table>
</form>

<?php 
if(isset($_POST['ajout']) &&  @$_POST['ajout']=='Ajouter'){
$id=$_POST['CinUser'];
$nom=$_POST['NomUser'];
$prenom=$_POST['PrenUser'];
$tel=$_POST['TelUser'];
$type=$_POST['TypeUser'];
$login=$_POST['LogUser'];
$pass=$_POST['PassUser'];
$sql="INSERT INTO utilisateur VALUES ('$id','$nom','$prenom','$tel','$type','$login','$pass')";
	$exec=mysql_query($sql);
if($exec){
          ?>
          <script type="text/javascript">alert("Ajout est términé avec succé!")</script>
          <?php
}
else mysql_error();
}
?>
</div>
</body>
</html>
<?php
}else{
	HEADER("location:index.php?decnx=1");
}
?>
