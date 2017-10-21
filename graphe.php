<?php

	session_start();

	if (isset($_SESSION['log']) && isset($_SESSION['pass'])){
	include ('include/header1.inc.php');
	echo"<p><br/><br/><br/></p>";
   echo"<p style=\"text-align: right\">Connecté sous le login «".$_SESSION['log']."»,<a href=\"./logout.php\">(Déconnexion).</a></p>";	
?>


<article>
	<h2>Graphe de synthèse du premier sondage</h2>
	<fieldset style="text-align:center">
		<?php
		
         $oui1=0;
         $non1=0;
         $oui2=0;
         $non2=0;
         $oui3=0;
         $non3=0;
         $oui4=0;
         $non4=0;
         $oui5=0;
         $non5=0;
         $oui6=0;
         $non6=0;
         $oui7=0;
         $non7=0;
         $oui8=0;
         $non8=0;
          

			for($i=1 ; $i<11; $i++){
		 		if($fic = fopen("sondage/universite/etudiants_etrangers/ucp".$i.".csv", "r+")){

		 		for($j=0;$j<10;$j++){
	 			$tab=fgetcsv($fic,1024,',');

	 				

	 				if($j==2){
	 					if($tab[1]=='NON'){
	 						$non1= $non1+5;
	 					}

	 					elseif($tab[1]=='OUI'){
 							
	 						$oui1=$oui1+5;
	 					}
					}
	 					

					

					if($j==3){
	 					if($tab[1]=='NON'){
	 						$non2= $non2+5;
	 					}

						elseif($tab[1]=='OUI'){	 
							$oui2=$oui2+5;
	 					}
 					}
	 					

 					if($j==4){
	 					if($tab[1]=='NON'){
	 						$non3= $non3+5;
	 					}

						elseif($tab[1]=='OUI'){	
	 						$oui3=$oui3+5;
	 					}

	 				}	

					if($j==5){
	 					if($tab[1]=='NON'){
	 						$non4= $non4+5;
	 					}

 						elseif($tab[1]=='OUI'){
	 						$oui4=$oui4+5;
	 					}

	 				}	


 					if($j==6){
	 					if($tab[1]=='NON'){
	 						$non5= $non5+5;
	 				
	 					}
 						elseif($tab[1]=='OUI'){
	 						$oui5=$oui5+5;
	 					}

	 				}	


 					if($j==7){
	 					if($tab[1]=='NON'){
	 						$non6= $non6+5;
	 					}

 						elseif($tab[1]=='OUI'){
	 						$oui6=$oui6+5;
	 					}

	 				}	


 					if($j==8){
	 					if($tab[1]=='NON'){
	 						$non7= $non7+5;
	 					}

 						elseif($tab[1]=='OUI'){
	 						$oui7=$oui7+5;
	 					}
 					}
	 					


	 				if($j==9){
	 					if($tab[1]=='NON'){
	 						$non8= $non8+5;
	 					}

 						elseif($tab[1]=='OUI'){
	 						$oui8=$oui8+5;
	 					}
 					}

 				}

 				}

 				else{


  				echo "Impossible d'accéder au fichier.";
  				}  
				fclose($fic);
 				

		 	}

		 
		 	




    $s=200;//hauteur svg

    $o1=$s-$oui1;//RECADRAGE pour le OUI

    //print_r($y);
	$n1=$s-$non1;//RECADRAGE pour le NON


	$o2=$s-$oui2;//RECADRAGE pour le OUI

    //print_r($y);
	$n2=$s-$non2;//RECADRAGE pour le NON


	$o3=$s-$oui3;//RECADRAGE pour le OUI

    //print_r($y);
	$n3=$s-$non3;//RECADRAGE pour le NON


	$o4=$s-$oui4;//RECADRAGE pour le OUI

    //print_r($y);
	$n4=$s-$non4;//RECADRAGE pour le NON


	$o5=$s-$oui5;//RECADRAGE pour le OUI

    //print_r($y);
	$n5=$s-$non5;//RECADRAGE pour le NON


    $o6=$s-$oui6;//RECADRAGE pour le OUI

    //print_r($y);
	$n6=$s-$non6;//RECADRAGE pour le NON


	$o7=$s-$oui7;//RECADRAGE pour le OUI

    //print_r($y);
	$n7=$s-$non7;//RECADRAGE pour le NON


    $o8=$s-$oui8;//RECADRAGE pour le OUI

    //print_r($y);
	$n8=$s-$non8;//RECADRAGE pour le NON

	echo"<p>Aimez vous la vie universitaire ?</p>";
 	// Création d'une image de 200x200 pixels
    $im = imagecreatetruecolor(200,200);
    $backgroundcolor=imagecolorallocate($im,0,255, 127);
    $green = imagecolorallocate($im,0,255,127);
    $yellow=imagecolorallocate($im,255,255, 0);
    $orange=imagecolorallocate($im,255,127,0);


     //legende
    $string1="OUI";
    $string2="NON";


    imagefilledrectangle($im, 25,$o1,75,200 , $green);
    imagefilledrectangle($im, 100,$n1,150,200, $yellow);
    imagestring($im,25,25,0,$string1,$green);
    imagestring($im,100,100,0,$string2,$yellow);
    imagestring($im,25,25,15,$oui1,$green);
    imagestring($im,100,100,15,$non1,$yellow);
    
    imagepng($im, 'imagefilledrectangle.png');
    echo '<img src="imagefilledrectangle.png" alt="ImageRectangle"/>';
    imagedestroy($im);
    
    


	 echo"<p><br/><br/>Etes-vous à l’aise dans la filière que vous avez choisi ?</p>";
 	 // Création d'une image de 200x200 pixels
    $im = imagecreatetruecolor(200,200);
    $backgroundcolor=imagecolorallocate($im,0,255, 127);
    $green = imagecolorallocate($im,0,255,127);
    $yellow=imagecolorallocate($im,255,255, 0);
    $orange=imagecolorallocate($im,255,127,0);
    
    
    imagefilledrectangle($im, 25,$o2,50,200 , $green);
    imagefilledrectangle($im, 100,$n2,125,200, $yellow);
    imagestring($im,25,25,0,$string1,$green);
    imagestring($im,100,100,0,$string2,$yellow);
    imagestring($im,25,25,15,$oui2,$green);
    imagestring($im,100,100,15,$non2,$yellow); 
    
    imagepng($im, 'imagefilledrectangle5.png');
    echo '<img src="imagefilledrectangle5.png" alt="ImageRectangle"/>';
    imagedestroy($im);  


	 echo"<p><br/><br/>Les enseignants jouent-ils leurs rôles sérieusement dans les CM/TD/TP ?</p>";
 	 // Création d'une image de 200x200 pixels
    $im = imagecreatetruecolor(200,200);
    $backgroundcolor=imagecolorallocate($im,0,255, 127);
    $green = imagecolorallocate($im,0,255,127);
    $yellow=imagecolorallocate($im,255,255, 0);
    $orange=imagecolorallocate($im,255,127,0);

	 imagefilledrectangle($im, 25,$o3,75,200 , $green);
    imagefilledrectangle($im, 100,$n3,150,200, $yellow);
    imagestring($im,25,25,0,$string1,$green);
    imagestring($im,100,100,0,$string2,$yellow);
    imagestring($im,25,25,15,$oui3,$green);
    imagestring($im,100,100,15,$non3,$yellow);

	 // Sauvegarde l'image
    imagepng($im, 'imagefilledrectangle6.png');
    echo '<img src="imagefilledrectangle6.png" alt="ImageRectangle"/>';
    imagedestroy($im);


	 echo"<p><br/><br/>Arrivez-vous à vous intégrer avec les autres étudiants ?</p>";
 	 // Création d'une image de 200x200 pixels
    $im = imagecreatetruecolor(200,200);
    $backgroundcolor=imagecolorallocate($im,0,255, 127);
    $green = imagecolorallocate($im,0,255,127);
    $yellow=imagecolorallocate($im,255,255, 0);
    $orange=imagecolorallocate($im,255,127,0);

  	 imagefilledrectangle($im, 25,$o4,75,200 , $green);
    imagefilledrectangle($im, 100,$n4,150,200, $yellow);
    imagestring($im,25,25,0,$string1,$green);
    imagestring($im,100,100,0,$string2,$yellow);
    imagestring($im,25,25,15,$oui4,$green);
    imagestring($im,100,100,15,$non4,$yellow);

	 // Sauvegarde l'image
    imagepng($im, 'imagefilledrectangle7.png');
    echo '<img src="imagefilledrectangle7.png" alt="ImageRectangle"/>';
    imagedestroy($im);


	 echo"<p><br/><br/>Pensez-vous qu’il devrait y avoir d’avantages de stage durant les trois années de licence ?</p>";
 	 // Création d'une image de 200x200 pixels
    $im = imagecreatetruecolor(200,200);
    $backgroundcolor=imagecolorallocate($im,0,255, 127);
    $green = imagecolorallocate($im,0,255,127);
    $yellow=imagecolorallocate($im,255,255, 0);
    $orange=imagecolorallocate($im,255,127,0);

    imagefilledrectangle($im, 25,$o5,75,200 , $green);
    imagefilledrectangle($im, 100,$n5,150,200, $yellow);
    imagestring($im,25,25,0,$string1,$green);
    imagestring($im,100,100,0,$string2,$yellow);
    imagestring($im,25,25,15,$oui5,$green);
    imagestring($im,100,100,15,$non5,$yellow);

	 // Sauvegarde l'image
    imagepng($im, 'imagefilledrectangle8.png');
    echo '<img src="imagefilledrectangle8.png" alt="ImageRectangle"/>';
    imagedestroy($im);


	 echo"<p><br/><br/>Si nous pouvions revenir en arrière, choisiriez-vous de nouveau l’université de Cergy-Pontoise ?</p>";
 	 // Création d'une image de 200x200 pixels
    $im = imagecreatetruecolor(200,200);
    $backgroundcolor=imagecolorallocate($im,0,255, 127);
    $green = imagecolorallocate($im,0,255,127);
    $yellow=imagecolorallocate($im,255,255, 0);
    $orange=imagecolorallocate($im,255,127,0);

    imagefilledrectangle($im, 25,$o6,75,200 , $green);
    imagefilledrectangle($im, 100,$n6,150,200, $yellow);
    imagestring($im,25,25,0,$string1,$green);
    imagestring($im,100,100,0,$string2,$yellow);
    imagestring($im,25,25,15,$oui6,$green);
    imagestring($im,100,100,15,$non6,$yellow);

	 // Sauvegarde l'image
    imagepng($im, 'imagefilledrectangle9.png');
    echo '<img src="imagefilledrectangle9.png" alt="ImageRectangle"/>';
    imagedestroy($im);


	 echo"<p><br/><br/>Avez vous une idée pour votre futur métier ?</p>";
 	 // Création d'une image de 200x200 pixels
    $im = imagecreatetruecolor(200,200);
    $backgroundcolor=imagecolorallocate($im,0,255, 127);
    $green = imagecolorallocate($im,0,255,127);
    $yellow=imagecolorallocate($im,255,255, 0);
    $orange=imagecolorallocate($im,255,127,0);

    imagefilledrectangle($im, 25,$o7,75,200 , $green);
    imagefilledrectangle($im, 100,$n7,150,200, $yellow);
    imagestring($im,25,25,0,$string1,$green);
    imagestring($im,100,100,0,$string2,$yellow);
    imagestring($im,25,25,15,$oui7,$green);
    imagestring($im,100,100,15,$non7,$yellow);
    
    // Sauvegarde l'image
    imagepng($im, 'imagefilledrectangle10.png');
    echo '<img src="imagefilledrectangle10.png" alt="ImageRectangle"/>';
    imagedestroy($im);
    
    
    
    echo"<p><br/><br/>Si vous continuez en master, après l’obtention de votre diplôme, 
    			souhaiteriez-vous vous professionnalisez en France ou dans votre pays d’origine ?</p>";
 	 // Création d'une image de 200x200 pixels
    $im = imagecreatetruecolor(200,200);
    $backgroundcolor=imagecolorallocate($im,0,255, 127);
    $green = imagecolorallocate($im,0,255,127);
    $yellow=imagecolorallocate($im,255,255, 0);
    $orange=imagecolorallocate($im,255,127,0);

    imagefilledrectangle($im, 25,$o8,75,200 , $green);
    imagefilledrectangle($im, 100,$n8,150,200, $yellow);
    imagestring($im,25,25,0,$string1,$green);
    imagestring($im,100,100,0,$string2,$yellow);
    imagestring($im,25,25,15,$oui8,$green);
    imagestring($im,100,100,15,$non8,$yellow);
    
    // Sauvegarde l'image
    imagepng($im, 'imagefilledrectangle11.png');
    echo '<img src="imagefilledrectangle11.png" alt="ImageRectangle"/>';
    imagedestroy($im);

   
   

	?>
   </fieldset>

</article>

<?php
	}
	else {
		echo"<p><br/><br/><br/></p>";
		echo "<p>Les variables ne sont pas déclarées. Vous ne pouvez donc pas accéder au contenu de cette page.
				<br/> Je vous prie donc de bien vouloir vous diriger vers la page d'accueil afin d'entrer vos identifiants.
				Pour cela <a href=\"./logout.php\">Cliquez ici</a></p>";
	}
	
	include_once('include/footer.inc.php');
?>
