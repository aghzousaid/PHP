<?php
	session_start();
	if (isset($_SESSION['log']) && isset($_SESSION['pass'])){
	include ('include/header1.inc.php');
	echo"<p><br/><br/><br/></p>";
   echo"<p style=\"text-align: right\">Connecté sous le login «".$_SESSION['log']."»,<a href=\"./logout.php\">(Déconnexion).</a></p>";	
?>


<article>
	<h2>Graphe de synthèse du deuxième sondage</h2>
	<fieldset style="text-align:center">
		<?php
		
      	$r1=0;
         $r2=0;
         $r3=0;
         $r4=0;
         $r5=0;

         $r6=0;
         $r7=0;
         $r8=0;

         $r9=0;
         $r10=0;
         $r11=0;

         $oui=0;
         $non=0;
          
          

			for($i=1 ; $i<11; $i++){
		 		if($fic = fopen("sondage/universite/etudiant_cigarette/ucp".$i.".csv", "r+")){

		 			for($j=0;$j<10;$j++){
	 					$tab=fgetcsv($fic,1024,',');

	 					if($j==2){
	 						if($tab[1]=='Jamais'){
	 							$r1= $r1+10;
	 						}
	 						if($tab[1]=='Une fois' ){
	 							$r2=$r2+10;
	 						}
	 						if($tab[1]=='Souvent' ){
	 							$r3=$r3+10;
	 						}
	 						if($tab[1]=='Toujours' ){
	 							$r4=$r4+10;
	 						}

	 					if($tab[1]=='Quelque-fois' ){
	 						$r5=$r5+10;
	 					}
					}
	 					

					

					if($j==3){
	 					if($tab[1]=='Aucune'){
	 						$r6= $r6+10;
	 					}

						if($tab[1]=='Une'){	 
							$r7=$r7+10;
	 					}

	 					if($tab[1]=='Plusieurs'){	 
							$r8=$r8+10;
	 					}
 					}
	 					

 				


 					if($j==8){
	 					if($tab[1]=='~25%'){
	 						$r9= $r9+10;
	 					}

 						if($tab[1]=='~50%'){
	 						$r10=$r10+10;
	 					}

	 					if($tab[1]=='~75%'){
	 						$r11=$r11+10;
	 					}
 					}
	 				

	 				if($j==9){
	 					if($tab[1]=='Oui'){
	 						$oui= $oui+10;
	 					}

 						if($tab[1]=='Non'){
	 						$non=$non+10;
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

    $o=$s-$oui;//RECADRAGE pour le OUI
	$n=$s-$non;//RECADRAGE pour le NON


	$R1=$s-$r1;//RECADRAGE pour le OUI
	$R2=$s-$r2;//RECADRAGE pour le NON
	$R3=$s-$r3;//RECADRAGE pour le OUI
	$R4=$s-$r4;//RECADRAGE pour le NON
	$R5=$s-$r5;//RECADRAGE pour le OUI
	$R6=$s-$r6;//RECADRAGE pour le NON
	$R7=$s-$r7;//RECADRAGE pour le OUI
	$R8=$s-$r8;//RECADRAGE pour le NON
   $R9=$s-$r9;//RECADRAGE pour le OUI
	$R10=$s-$r10;//RECADRAGE pour le NON
	$R11=$s-$r11;//RECADRAGE pour le OUI


	echo "<p>Pensez-vous que la cigarette est un bon moyen pour gérer le stress, pour se concentrer pendant vos etudes ?</p>";
 	// Création d'une image de 200x200 pixels
    $im = imagecreatetruecolor(200,200);
    $backgroundcolor=imagecolorallocate($im,0,255, 127);
    $green = imagecolorallocate($im,0,255,127);
    $yellow=imagecolorallocate($im,255,255, 0);
    $orange=imagecolorallocate($im,255,127,0);


     //legende
    $string1="OUI";
    $string2="NON";

    // Dessine un rectangle blanc
    imagefilledrectangle($im, 25,$o,75,200 , $green);
    imagefilledrectangle($im, 100,$n,150,200, $yellow);
    imagestring($im,25,25,0,$string1,$green);
    imagestring($im,100,100,0,$string2,$yellow);
    imagestring($im,25,25,15,$oui,$green);
    imagestring($im,100,100,15,$non,$yellow);

    imagepng($im, 'imagefilledrectangle1.png');
    echo '<img src="imagefilledrectangle1.png" alt="ImageRectangle"/>';
    imagedestroy($im);




	 echo "<p><br/><br/>Combien de cigarette fumez-vous par jour ?</p>";
    // Création d'une image de 300x200 pixels
    $im = imagecreatetruecolor(300,200);
    $backgroundcolor=imagecolorallocate($im,0,255, 127);
    $green = imagecolorallocate($im,0,255,127);
    $yellow=imagecolorallocate($im,255,255, 0);
    $orange=imagecolorallocate($im,255,127,0);
    $red=imagecolorallocate($im,255,0,0);
    $white=imagecolorallocate($im,255,255,255);


    //legende
    $string1="Aucune";
    $string2="Une";
    $string3="Plusieurs";



    imagefilledrectangle($im, 25,$R6,75,200, $green);
    imagefilledrectangle($im, 100,$R7,150,200, $yellow);
    imagefilledrectangle($im, 175,$R8,225,200 , $orange);



    imagestring($im,25,25,0,$string1,$green);
    imagestring($im,100,100,0,$string2,$yellow);
    imagestring($im,175,175,0,$string3,$orange);


    imagestring($im,25,25,15,$r6,$green);
    imagestring($im,100,100,15,$r7,$yellow);
    imagestring($im,175,175,15,$r8,$orange);

  
    // Sauvegarde l'image
    echo'<br/>';
    imagepng($im, 'imagefilledrectangle3.png');
    echo '<img src="imagefilledrectangle3.png" alt="ImageRectangle"/>';
    imagedestroy($im);
   


	 echo "<p><br/><br/>Pouvez vous me donner un pourcentage approximatif du nombre de fumeurs dans votre université ?<br/></p>";
    // Création d'une image de 300x200 pixels
    $im = imagecreatetruecolor(300,200);
    $backgroundcolor=imagecolorallocate($im,0,255, 127);
    $green = imagecolorallocate($im,0,255,127);
    $yellow=imagecolorallocate($im,255,255, 0);
    $orange=imagecolorallocate($im,255,127,0);
    $red=imagecolorallocate($im,255,0,0);
    $white=imagecolorallocate($im,255,255,255);


     //legende
    $string1="~25%";
    $string2="~50%";
    $string3="~75%";



    imagefilledrectangle($im, 25,$R9,75,200, $green);
    imagefilledrectangle($im, 100,$R10,150,200, $yellow);
    imagefilledrectangle($im, 175,$R11,225,200 , $orange);



    imagestring($im,25,25,0,$string1,$green);
    imagestring($im,100,100,0,$string2,$yellow);
    imagestring($im,175,175,0,$string3,$orange);


    imagestring($im,25,25,15,$r9,$green);
    imagestring($im,100,100,15,$r10,$yellow);
    imagestring($im,175,175,15,$r11,$orange);

  
    // Sauvegarde l'image
    echo'<br/>';
    imagepng($im, 'imagefilledrectangle4.png');
    echo '<img src="imagefilledrectangle4.png" alt="ImageRectangle"/>';
    imagedestroy($im);




	 echo "<p><br/><br/>Avez-vous déjà fumer ?<br/></p>";
    // Création d'une image de 500x200 pixels
    $im = imagecreatetruecolor(500,200);
    $backgroundcolor=imagecolorallocate($im,0,255, 127);
    $green = imagecolorallocate($im,0,255,127);
    $yellow=imagecolorallocate($im,255,255, 0);
    $orange=imagecolorallocate($im,255,127,0);
    $red=imagecolorallocate($im,255,0,0);
    $white=imagecolorallocate($im,255,255,255);


     //legende
    $string1="Jamais";
    $string2="Une fois";
    $string3="Souvent";
    $string4="Toujours";
    $string5="Quelque-fois";


    imagefilledrectangle($im, 25,$R1,75,200, $green);
    imagefilledrectangle($im, 100,$R2,150,200, $yellow);
    imagefilledrectangle($im, 175,$R3,225,200 , $orange);
    imagefilledrectangle($im, 250,$R4,300,200, $red);
    imagefilledrectangle($im, 325,$R5,375,200 , $white);


    imagestring($im,25,25,0,$string1,$green);
    imagestring($im,100,100,0,$string2,$yellow);
    imagestring($im,175,175,0,$string3,$orange);
    imagestring($im,250,250,0,$string4,$red);
    imagestring($im,325,325,0,$string5,$white);

    imagestring($im,25,25,15,$r1,$green);
    imagestring($im,100,100,15,$r2,$yellow);
    imagestring($im,175,175,15,$r3,$orange);
    imagestring($im,250,250,15,$r4,$red);
    imagestring($im,325,325,15,$r5,$white);



  
    // Sauvegarde l'image
    echo'<br/>';
    imagepng($im, 'imagefilledrectangle2.png');
    echo '<img src="imagefilledrectangle2.png" alt="ImageRectangle"/>';
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