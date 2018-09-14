<?php
 session_start();
include('connexion.php');
$login=$_POST['LogUser'];
$pass=$_POST['PassUser'];
$type=$_POST['TypeUser'];
$string="SELECT * FROM utilisateur WHERE LogUser='$login' and PassUser ='$pass' and TypeUser='$type'";
$sql=mysql_query($string);
$nbr=mysql_num_rows($sql);
//echo $string;
//echo $nbr;
if($nbr==1)
{
   $_SESSION['LogUser']=$login;
   header("Location:Produit.php");
   //echo "welcom";
}
else
{
//echo "nn";
header("Location:index.php?err=1");
}
?>