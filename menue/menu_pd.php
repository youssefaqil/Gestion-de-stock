<html>
<head>
	<TITLE>test_menue</TITLE>
	<style type="text/css">

	#menu{font-size: 20px;font-family: Verdana;
		list-style-type: none;text-align: center;}
	#menu a{display: block;padding-top: 5px;
		background:#e0e0e0; width: 120px;height: 24px;text-decoration: none;color: #1b50d8;
		border-radius: 30%;border: 1px #ccc solid;}
	#menu li{list-style: none; margin-right: 20px;height: 7%;}
	#menu a:hover{text-decoration: none;color: #e0e0e0;
		background: #1b50d8;}
		#menu li ul{position: absolute;left: -999em;
			width:120px; }
		/*  afficher lles elements*/
		#menu li:hover ul, #menu li.sfhover ul{ 
             left: auto;
		}

	</style>
	<script type="text/javascript">
  
sfHover=function(){
	var sfEls = document.getElementById('menu').getElementsByTagName('li');
	for(var i=0;i<sfEls=length;i++){
		sfEls[i].onmouseover=function(){
		 this.className+="sfhover";
	}
	sfEls[i].onmouseout=function(){
		this.className=this.className.replace(new RegExp("sfhover\b"),"");
}
	}
}
if (window.attachEvent) window.attachEvent("onload",sfHover);

	</script>
</head>
<BODY>
	<div id="menu">

			<ul>
				<li><a href="Acceuil.php">Acceuil</a></li>
				<li><a href="Produit.php">Produit</a>
                <ul>
                <li><a href="ajouterprod.php">Ajouter</a></li>
                 <li><a href="modifierproduit.php">Modifier</a></li>
                  <li><a href="Supprimerproduit.php">Supprimer</a></li>
                 </ul>
			</ul>
	</div>
</BODY>
<html>