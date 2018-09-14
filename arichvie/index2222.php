<?php
	session_start();
	if(isset($_GET['decnx'])) session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8" />
<title>Welcome</title>
<style type="text/css">
table{
border:1px solid black;
background-image: url("images/imgres.jpg");
width:400px ;
height: 180px;
position :absolute;
left:4%;
top:1200%;
box-shadow:  250px 100px 250px 150px black;
background-color: #333333;
box-shadow:10px 10px 60px 20px #4a8cfa;
border-bottom-color:#160bff;
border-top-color: #160bff;
border-left-color:#381855;
border-right-color: #381855;
border-width: 5px;
border-style: dotted;
border-radius: 30px;
}
h2{color: red;text-align: none;}

body{
   width: 800%;
	background-image: url("images/titre.jpg");
	
	position: absolute;
}
td{color: blue;font-family:"Times New Roman";font-size:100%;
}
input{
	width: 80%;
     height: 20px;
     }
input{
	border-radius:8px;border:3px solid;font-family:"Minion Pro";font-size:15px;font-weight:bold; }
#p{
	border-radius:7px;
	width: 120px;
	height: 30px;
}
span{font-family: "Modern No. 20";font-weight:bold;}
	</style>
</head>

<body>
	<?php
	if (isset($_GET['err'])) {
	
	if($_GET['err']==1)
	{
	?>
	<script type="text/javascript">alert("Veuillez verifier votre donnes !!  ")</script>
	<a href="javascript:history.back();"><h2>Retour</h2></a></p>
	
<?php
}
}
else
{
	//<p style="color:red;">Veuillez verifier votre donnes .<br><a href="javascript:history.back();">Retour</a></p>
?>

<form name="f1" action="connexionLOG.php" method="post">
<table>
<tr>
	<td><span>Login :</span></td>    
	<td><input type ="text" name="LogUser"/></td>
</tr></br></br>
<tr>
	<td><span>Password : </span></td> 
	 <td> <input type="password" name="PassUser"/></td>
</tr>
<tr>
	<td></td>
	<td><span><input id="p" type="submit" name="valider" value="Entrer"></span></td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>