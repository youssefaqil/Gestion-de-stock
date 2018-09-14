<?php
session_start();
if(isset($_SESSION['LogUser']))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8" />
<title>Welcome</title>

<script src="http://code.jquery.com/jquery-1.9.0.js" type="text/javascript"></script>
<script src="jquery-2.0.3.min"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('.menu img').hover(function(){
          $(this).stop().css({'width':'300em','padding-bottom' :'8px'});
		},function(){ 
			$(this).stop().css({'width':'80px','padding-bottom':'0px'});
          });
		$('.menu img').click(function(){
			$(this).css({'padding-bottom':'70px'});
			$(this).css({'padding-bottom':'0px'});
			$(this).css({'padding-bottom':'70ppx'});
			$(this).css({'padding-bottom':'10px'});

		});
	});
	</script>


<style type="text/css">
body{background-image:url('images/imag.jp');}

marquee{text-shadow: 5px 5px 5px #FF0000;font-family:"Old English Text MT";font-size:300%;color:#190d73;}
SPAN{font-family:"Ravie"; font-size:250%;color: #1c30f1;}

.menu img{width: 80px;cursor: pointer;}
    .menu {width:160%;position: absolute;text-align:center;left:-5%;top:6%;}
    table{background-image:url('imag.jpg');box-shadow: 10px 10px 5px #241ea5;border:2px solid;
border-radius:25px;border-style: none;position: absolute;left: 25%;margin-top: 3%;}
  #image{position: absolute;left:0%;top: 0%;width:23%;box-shadow: 10px 10px 60px 20px #8f97e2;}
  #image1{position:absolute;right: 0%;top: -1%;box-shadow:10px 10px 60px 20px #4a8cfa;}
  #titre{position: absolute;top: 70%;left:0%;width: 100%;}
  table{width: 20%}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>
	<div id="image"><img src="images/CRI.jpg"/></div>
	<div id="image1"><img src="images/logo.JPG"/></div><br><br>
	
    <DIV class="menu">
    	<table>
	<tr>
<TD></TD>
<TD></TD>
<TD><a href="index.php?decnx=1"><img src="images/home.gif" title="Deconnecter"/></a></TD>
<TD></TD>
<TD></TD>
	</tr>
	<tr>
<TD></TD>
<TD><a href="Utilisateur1.php"><img src="images/user.png" title="Service"/></a></TD>
<TD></TD>
<TD><a href="#"><img src="images/fourn1.png" title="Fournisseur" /></a></TD>
<TD></TD>
	</tr>
	<tr>
<TD><a href="Prod.php"><img src="images/cmdd.png" title="Produit"/></a></TD>
<TD></TD>
<TD><a href="#"><img src="images/Commande.png" title="Commande"/></a></TD>
<TD></TD>
<TD><a href="#"><img src="images/facte.png" title="Facture"/></a></TD>
	</tr>
</table>
</DIV><br>
<div id="titre">
<hr>
	<marquee  onmouseover="stop()" onmouseout="start()" >Welcome To My Application <SPAN>G2S</SPAN></marquee>
	<hr>
</div>
</body>
</html>
<?php
}
else
{
	HEADER("location:index.php?decnx2=1");
}
?>