<?php

include './bdd/PDO.php';
//on se connecte à la base de donnée de la ferme

$SQL = "SELECT * FROM mrbs_room WHERE area_id = '2'";

try {
	$resultats=$connexion->query($SQL);
	 // on execute notre requête


		 $resultats->setFetchMode(PDO::FETCH_OBJ);
			// on dit qu'on veut que le résultat soit récupérable sous forme d'objet

		 // while( $ligne = $resultats->fetch() )
		 //  // on récupère la liste des resultats (tant que c'est possible d'affecter quelque chose à $ligne)
		 // 	{
		 // 		echo 	$ligne->room_name.'<br>';
		 // 	}

		 $resultats->closeCursor();
		 // on ferme le curseur des résultats*/



}
catch(Exception $e){
	echo 'Une erreur de requête à la BDD est survenue !'. $e->getMessage();
	die();
}



?>
