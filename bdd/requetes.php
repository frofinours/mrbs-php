<?php

function getSalles(){

include('PDO.php');
$requete = "SELECT * FROM mrbs_room";
$salles = array();

try {
    $resultat = $connexion->query($requete);
    $resultat->setFetchMode(PDO::FETCH_OBJ);
    //parcourir les lignes de la requète
while( $ligne = $resultat->fetch())
    {
    array_push($salles, $ligne);
    }
$resultat->closeCursor();

    } catch (Exception $e) {
      die("Erreur : " .$e->getMessage());
    }
  return $salles;
}

function getArea($inputName){

include('PDO.php');
$requete = "SELECT area_id FROM mrbs_room WHERE room_name = " + $inputName;
$area = array();

try {
    $resultat = $connexion->query($requete);
    $resultat->setFetchMode(PDO::FETCH_OBJ);
    //parcourir les lignes de la requète
while( $ligne = $resultat->fetch())
    {
    array_push($area, $ligne);
    }
$resultat->closeCursor();

    } catch (Exception $e) {
      die("Erreur : " .$e->getMessage());
    }
  return $area;
}
?>
