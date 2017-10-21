<?php 
	session_start();
	
	function stocke_csv($r1,$jst1,$nq){
 		if ($fic = fopen('sondage/universite/etudiants_etrangers/'.$_SESSION['log'].'.csv', 'a+')) {
 			$data = array($nq,$r1, $jst1,);
    		fputcsv($fic, $data);
		}
 		else {
  			echo "Impossible d'acc&eacute;der au fichier.";
  		}  
		fclose($fic);
  	}

	for( $i=5 ; $i<9 ; $i++){
		if(isset($_POST['q_f'.$i]) && isset($_POST['JST_q_f'.$i])){
			stocke_csv($_POST['q_f'.$i],$_POST['JST_q_f'.$i],$i);
		}
	}
	
	

	if (isset($_SESSION['log']) && isset($_SESSION['pass'])) {
		include ("include/header1.inc.php");
		echo"<p><br/><br/><br/></p>";
   	echo"<p style=\"text-align: right\">Connecté sous le login «".$_SESSION['log']."»,<a href=\"./logout.php\">(Déconnexion).</a></p>";	
?>


<article>
	<fieldset style="text-align:center">
		<?php
			echo'Merci de votre participation dans cette enquete';
			echo'<h3>Votre réponse a été prise en compte.</h3>';
		?>
   </fieldset>
   <a href="graphe.php">Cliquez ici pour voir les résultats de ce sondage.</a>
   
   
</article>

<?php
	}
	else {
		echo"<p><br/><br/><br/></p>";
		echo "<p>Les variables ne sont pas declarees. Vous ne pouvez donc pas acceder au contenu de cette page.
				<br/> Je vous prie donc de bien vouloir vous diriger vers la page d'accueil afin d'entrer vos identifiants.
				Pour cela <a href=\"./logout.php\">Cliquez ici</a></p>";
	}
	
	include_once("include/footer.inc.php");
?>
