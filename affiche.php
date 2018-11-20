<?php
include 'PDO.php'; //on se connecte à la base de donnée


$SQL = "SELECT * FROM mrbs_room WHERE area_id = '2'";

$resultats=$connexion->query($SQL); // on execute notre requête

$resultats->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le résultat soit récupérable sous forme d'objet

while( $ligne = $resultats->fetch() ) // on récupère la liste des resultats
{
	echo 	$ligne->room_name.'<br>';
}

$resultats->closeCursor(); // on ferme le curseur des résultats*/
?>
