<?php
	define("DEFAULT_SIZE", 10);
    
    /**
    * affiche la table de multiplication
    * $n : la taille de la table
    */
    function afficherTableMultiplication ($n = "DEFAULT_SIZE") {
    	if ($n<1 || $n > 20) {
      	$n = DEFAULT_SIZE;
      }
      echo "<table>";
      echo "<tr><th> X </th>";
      for ($colonne = 1 ; $colonne <= $n ; $colonne++ ) {
      	echo "<th>".$colonne."</th>";
      }
      echo "</tr>";
      for ($ligne = 1 ; $ligne <= $n ; $ligne++ ) {
      	echo "<tr><th>".$ligne."</th>";
         for ($colonne = 1 ; $colonne <= $n ; $colonne++ ) {
         	echo "<td>".($ligne * $colonne)."</td>";
         }
         echo "</tr>";
      }
      echo "</table>";
	} 



	/*
	*Fonction base de numération
	*/
	function baseDeNumeration ($n) {
		
		if($n == "colonne") {
   		echo "<table><tr><th>binaire</th><th>octal</th><th>d&eacute;cimal</th><th>hexad&eacute;cimal</th></tr>";
   		for($i = 0 ; $i <= 17 ; $i++) {
    	 		printf ("<tr><td>%08b</td><td>%02o</td><td>%02d</td><td>%02X</td></tr>", $i, $i, $i, $i);   
  	 		}
   		echo "</table>";
   	}
   	elseif ($n == "ligne") {
   		echo"<p><br/></p>";
   		echo "<table><tr><th>binaire</th>";
   		for($i = 0 ; $i <= 17 ; $i++) {
    	 		printf ("<td>%08b</td>", $i);   
  	 		}
  	 	
   	echo "</tr>";
   	
   	echo "<tr><th>octal</th>";
   		for($i = 0 ; $i <= 17 ; $i++) {
    	 		printf ("<td>%02o</td>", $i);   
  	 		}
  	 	
   	echo "</tr>";
   		
   	echo "<tr><th>d&eacute;cimal</th>";
   		for($i = 0 ; $i <= 17 ; $i++) {
    	 		printf ("<td>%02d</td>", $i);   
  	 		}
  	 	
   	echo "</tr>";
   	
   	echo "<tr><th>hexad&eacute;cimal</th>";
   		for($i = 0 ; $i <= 17 ; $i++) {
    	 		printf ("<td>%02X</td>", $i);   
  	 		}
  	 		echo "</tr></table>";
  	 	}
   	
   	
   }
   



/*
*fonctions tables ascii et palette web
*/

//Fonction table ascii
function tableASCII() {
    echo "<table>\n";
    echo "<tr><th> &nbsp; </th>";
    for ($colonne = 0 ; $colonne <= 0xF ; $colonne++ ) {
        echo "<th>".strtoupper(dechex($colonne))."</th>";
    }
    echo "</tr>\n";
    for ($ligne = 2 ; $ligne <= 7 ; $ligne++ ) {
        echo "<tr><th>".$ligne."</th>";
        for ($colonne = 0 ; $colonne <= 0xF ; $colonne++ ) {
            $carValue = $ligne * 16 + $colonne;
            $class="";
            if ($carValue >= 0x30 && $carValue <= 0x39) {
                $class = " class=\"chiffre\"";
            }
            if ($carValue >= 0x41 && $carValue <= 0x5A) {
                $class = " class=\"majuscule\"";
            }
            if ($carValue >= 0x61 && $carValue <= 0x7A) {
                $class = " class=\"minuscule\"";
            }
            echo "<td".$class.">".htmlentities(chr($carValue))."</td>";
        }
        echo "</tr>\n";
    }
    echo "</table>\n";
}





//Fonction palette web
function paletteWeb() {
    $rouge = 0;
    $vert = 0;
    $bleu = 0;
    $couleur = 0;
    $seuil = 0xFF;
    
    echo "<table style=\"font-size:9pt;\">\n";
    for ($rouge = 0x00; $rouge <= 0xFF ; $rouge+=0x33) {
        for ($vert = 0x00; $vert <= 0xFF ; $vert+=0x33) {        
            if ($vert % 2 == 0) { echo "<tr>"; }
            for ($bleu = 0x00; $bleu <= 0xFF ; $bleu+=0x33) {
                $couleur = ($rouge << 16) + ($vert << 8) + $bleu;
                if ( ($rouge + $vert + $bleu) <= $seuil ) {
                    $fontColor = " color:#FFFFFF";
                }
                else {
                    $fontColor = " color:#000000;";
                }
                printf("<td style=\"background-color:#%06X; %s \"> #%06X </td>", $couleur, $fontColor, $couleur);
            }
            if ($vert % 2 == 1) { echo "</tr>\n"; }    
        }
    }
    echo "</table>\n";
}

   
?>
