<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Flickr Ultimate Vertical Left-to-Right Drop-Down Menu Demo | Free CSS Drop-Down Menu Framework</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Tomas Bagdanavicius, http://www.lwis.net/free-css-drop-down-menu/" />
<meta name="keywords" content=" css, dropdowns, dropdown menu, drop-down, menu, navigation, nav, horizontal, vertical left-to-right, vertical right-to-left, horizontal linear, horizontal upwards, cross browser, internet explorer, ie, firefox, safari, opera, browser, lwis" />
<meta name="description" content="Clean, standards-friendly, modular framework for dropdown menus" />
<link href="css/helper.css" media="screen" rel="stylesheet" type="text/css" />

<!-- Beginning of compulsory code below -->

<link href="css/dropdown/dropdown.vertical.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/dropdown/themes/flickr.com/default.ultimate.css" media="screen" rel="stylesheet" type="text/css" />

<!-- / END -->
<style type="text/css">
center{font-family:"Old English Text MT";font-size:300%;color:#190d73;}
	#menu li ul{position: absolute;left: 2em;width:120px;top: 2.9em; }

	p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
	margin-top:90%;
	margin-left:30%;
	width:400px;
	
}
	/* ----------- basic ----------- */
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


	/* ----------- stylized ----------- */
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

<p><a href="http://www.lwis.net/free-css-drop-down-menu/" class="main-site">Main site</a></p>

<h1><img src="images/centre.png" alt="flickr" />

<center>La gestion des produits</h1></center>


<!-- Beginning of compulsory code below -->

<ul id="nav" class="dropdown dropdown-vertical">
	<div id="menu">
	<li><a href="Acceuil.php">Acceuil</a></li>
	<li><a href="Prod.php"><span class="dir">Produit</span></a>
		<ul>
			<li><a href="ajouterprod.php">Ajouter un produit</a></li>
			<li><a href="ModifProd.php">Modifier un produit</a></li>
			<li><a href="#">Supprimer un produit</a></li>
		</ul>
	</li>
</ul>
</div>
<!-- / END -->


<div id="stylized" class="myform">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<table>
	<tr>
    <td>ID_produit :
   <span class="small">Add your ID_P</span></td>
    
<td><input type="text" name="name"></td>
</tr>
<tr>
<td>Libelle :
        <span class="small">Add your Libelle :</span></td>
<td><input type="text" name="name"></td>
</tr>
<tr>
    <td>Quantité stock :
       <span class="small">Add your Quantité stock </span></td>
    
<td><input type="text" name="email"></td>
</tr>
<tr>
    <td>prix unitaire :
        <span class="small">Add prix unitaire</span></td>
    
<td><input type="text" name="phone"></td>
</tr>
<br />
<br />
<tr>
    <td>nombre de produit :
        <span class="small">Add nombre de produit </span></td>
    
<td><input type="text" name="NbrProd"/></td>
</tr>
<tr>
   <td> <button type="submit" value="Send" style="margin-top:15px;">Ajouter</button></td>
</tr>
<div class="spacer"></div>
</table>
</form>
</div> <!-- end of form class -->


</body>
</html>