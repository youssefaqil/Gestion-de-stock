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
td{font-family: "Modern No. 20";font-weight: bold;text-decoration: underline;}
marquee{text-shadow: 5px 5px 5px #FF0000;font-family:"Matura MT Script Capitals";font-size:300%;color:#190d73;}
#logo{position: absolute;top:0%;right:0%;box-shadow:0px 0px 5px 15px #4a8cfa;}
#titre{padding-top: 2%;}
#menue{margin-left:-2%;width: 11%;}
#entete{width: 25%;box-shadow: 10px 10px 5px #241ea5;}
table{background-color:#d0e4fe;position: absolute;left: 35%;top:50%;width:20%;height:40%;box-shadow:10px 20px 70px 40px #031583;border-top: solid;border-bottom: solid;border-radius: 10%;}

</style>
</head>
<body >
	<div id="entete">
     <img src="images/cri.jpg"	alt="CRI" title="CRI" height="150px"/>
    </div> 
    <div id="logo"><img src="images/logo.JPG"/></div>
    <div id="titre">
    <hr>
    <marquee  direction="left" onmouseover="this.stop()" onmouseout="this.start()">Ajouter Un Produit</marquee>
    <hr>
     </div>
    <div id="menue">
    <?php
    include("menue/menu_pd.php");
    ?>
    </div>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <table >
        <tr>
    <td>ID_produit :</td>
    <td><input type="text" name="idProd"/></td>
        </tr>
    <tr>
    <td>Libelle :</td>
    <td><input type="text" name="libelle"/></td>
    </tr>
    <tr>
    <td>Quantité stock :</td>
    <td><input type="text" name="QStock"/></td>
    </tr>
    <tr>
        <td>prix unitaire :</td>
        <td><input type="text" name ="Prixunitaire"/></td>
    </tr>
    <tr>
        <td>nombre de produit :</td>
        <td><input type="text" name="NbrProd"/></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="ajout" value="Ajouter"/></td>
    </tr>
</table>
</form>
<?php 
if(isset($_POST['ajout']) &&  @$_POST['ajout']=='Ajouter'){

$id=$_POST['idProd'];
$libelle=$_POST['libelle'];
$Qstocke=$_POST['QStock'];
$prix=$_POST['Prixunitaire'];
$nbrprod=$_POST['NbrProd'];
$sql="INSERT INTO produit  VALUES ('$id','$libelle','$Qstocke','$prix','$nbrprod')";
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
