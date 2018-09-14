<?php
    session_start();
    if(isset($_GET['decnx'])) session_destroy();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>CRI_GESION2STOCK</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<?php
	if (isset($_GET['err'])) {
	
	if($_GET['err']==2)
	{
	?>
	<script type="text/javascript">alert("Veuillez choisire votre profile !!  ")</script>
	<a href="javascript:history.back();"><h2>Retour</h2></a></p>
	
<?php
}
}
else
{
	//<p style="color:red;">Veuillez verifier votre donnes .<br><a href="javascript:history.back();">Retour</a></p>
?>
		<div class="container demo-3">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<a class="codrops-icon codrops-icon-prev" href="#"><span>Previous Demo</span></a>
				<span class="right"><a class="#"><span>Back to the Codrops Article</span></a></span>
			</div>
			<style type="text/css">
            
			</style>
			<header>
				
				<nav class="codrops-demos">
					 <img src="images/gs.jpg"><br>
					<a href="http://www.safi-ville.com/investissement.php">CENTRE REGIONAL D'INVESTISSEMENT( Doukkala-Abda )</a>
				</nav>
			</header>
			<ul class="grid cs-style-6">
				<li>
					<figure>
						<img src="images/supAD.png" alt="img01">
						<figcaption>
							<h3>CRI</h3>
							<span>SUPER ADMIN</span>
							<a href="formSupAdmin.php">Entrer</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/admine.jpg" alt="img03">
						<figcaption>
							<h3>CRI</h3>
							<span>ADMIN</span>
							<a href="http://dribbble.com/shots/1117308-Phone">Entrer</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/util (1).png" alt="img04">
						<figcaption>
							<h3>CRI</h3>
							<span>USER</span>
							<a href="formUser.php">Entrer</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="images/About-Us.jpg" alt="img02">
						<figcaption>
							<h3>CRI</h3>
							<span>About us !</span>
							<a href="http://dribbble.com/shots/1115960-Music">Entrer</a>
						</figcaption>
					</figure>
				</li>
				<li>
			</ul>
		</div><!-- /container -->
		<script src="js/toucheffects.js"></script>
		<?php
}
?>
	</body>
</html>