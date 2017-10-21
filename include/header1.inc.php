<?php
	$jour = "25";//jour d'arret du sondage
	$mois = "05";//mois d'arret du sondage
	$annee = "2016";//année d'arret du sondage
	$secondes = "00";//vous pouvez laisser à 00 ou définir des secondes
	$minutes = "15";//vous pouvez laisser à 00 ou définir des minutes
	$heures = "19"; //vous pouvez laisser à 00 ou définir des heures
	$value = "Durée du sondage";

	$maintenant = time();	
	$compte_a_rebours_fin = mktime($heures, $minutes, $secondes, $mois, $jour, $annee);	
	
	
	$jour2 = "25";//jour d'arret du sondage
	$mois2 = "05";//mois d'arret du sondage
	$annee2 = "2016";//année d'arret du sondage
	$secondes2 = "00";//vous pouvez laisser à 00 ou définir des secondes
	$minutes2 = "00";//vous pouvez laisser à 00 ou définir des minutes
	$heures2 = "20"; //vous pouvez laisser à 00 ou définir des heures
	$value2 = "Durée du sondage";

	$maintenant2 = time();	
	$compte_a_rebours_fin2 = mktime($heures2, $minutes2, $secondes2, $mois2, $jour2, $annee2);
	
	
	setcookie("sondage", "$value",$maintenant+$compte_a_rebours_fin);
	setcookie("sondage2", "$value2",$maintenant2+$compte_a_rebours_fin2);
	
	
	
	require_once 'styles/styleswitcher.inc.php';
?>

<!DOCTYPE html>

<html>
	
	<head>
		<title>Page membre</title>
		<meta charset="UTF-8"/>
		<link href="<?php echo $url;?>" rel="stylesheet" type="text/css" title="Design" media="screen" />	

				
		<style type="text/css">
		
			p {
				display:block;
			}
			
			#span {
    			float: left;
    			width: 0.7em;
    			font-size: 400%;
    			font-family: Georgia, "Times New Roman",Times, serif;
    			line-height: 80%;
			}
			
		
			.style {
				text-align:center;
				font-size:55px; 
				margin-left:3em; 
				margin-right:3em;
				color:#6633FF;
			}
		
    		#img {
    			background-image: url("Images/logo_ucp.png");
    			background-repeat: no-repeat;
    			background-position: right top;
    			margin-right: 50px;
    		}
			
 
 			h2 {
 				font-size: 110%;
 				padding:10px;
 				background-color:#CCFFFF;
 				text-align: center;
 			}

 		</style>
	</head>
	
	<body> 
		<header id="img">
		<p><br/><br/></p>
		<aside style="float:left">
			<h3 style="text-align:center">Thèmes</h3>
			<ul id="styleswitcher">
   			<li><a href="<?php echo $actuel; ?>?style=defaut">Palegoldenrod</a></li>
      		<li><a href="<?php echo $actuel; ?>?style=alternatif">Basic</a></li>
   		</ul>
		</aside>
			
		<h1 class="style"> Page membre !</h1>
		<h3 style="font-style:oblique; text-align:center"> Aghzou Said & Doucouré Oussy</h3>
		
		<nav>
			<ul>
  				<li><a href="sondage1.php" TARGET=_BLANK>Premier sondage</a></li>
  				<li><a href="page_membre.php">Page d'accueil</a></li>
  				<li><a href="sondage2.php">Deuxième sondage</a></li>
			</ul>
		</nav>
		
		</header>
		