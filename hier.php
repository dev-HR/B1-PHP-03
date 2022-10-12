<?php
	
	echo "Journal de Bord\n\n";

	echo "Saisir le numéro du jour d'aujourd'hui : " ;
	$jourA = rtrim( fgets( STDIN ) ) ;

	echo "Saisir le numéro du mois d'aujourd'hui : " ;
	$moisA = rtrim( fgets( STDIN ) ) ;

	echo "Saisir l'année d'aujourd'hui : " ;
	$anneeA = rtrim( fgets( STDIN ) ) ;

	// Traitement (calcul des valeurs des variables $jourH, $moisH et $anneeH)

	echo "\nHier nous étions le " , $jourH , "/" , $moisH , "/" , $anneeH , ".\n" ;
	
?>
