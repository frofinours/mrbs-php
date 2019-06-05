<?php
function getAreas(){
  $result = connexionBDD()->query('SELECT id, area_name FROM mrbs_area;');
  return $result;
}

function getRooms()
{
  $requete = "SELECT * FROM mrbs_room";
  $salles = array();

try {

    $bdd = connexionBDD();

    
    $resultat = $bdd->query($requete);

    $resultat->setFetchMode(PDO::FETCH_OBJ);
    //parcourir les lignes de la requète
    
    while ($ligne = $resultat->fetch()) {
      array_push($salles, $ligne);
      
    }
    $resultat->closeCursor();
  } catch (Exception $e) {
    
    die("Erreur : " . $e->getMessage());
  }
  
  return $salles;
}

function envoiBDD(){ 
				
  try{
      $test = "test";

      echo $test;

      // $civilite = $_POST['civilite'];
      // $nom = $_POST['nom'];
      // $prenom = $_POST['prenom'];
      // $dateNaissance = $_POST['dateNaissance'];
      // $mail = $_POST['mail'];
      // $mdp1 = $_POST['mdp1'];
      // $country = $_POST['id_pays'];
      // $avatar = $_POST['id_galerieAvatar'];

    // $req = "UPDATE "



      // $req = $bdd->prepare('INSERT INTO utilisateur(pseudo, civilite, nom, prenom, dateNaissance, adresseMail, motPasse, id_pays, id_galerieAvatar) VALUES(:pseudo, :civilite, :nom, :prenom, :dateNaissance, :adresseMail, :motPasse, :id_pays, :id_galerieAvatar)'); 
      
      // $req->execute(array(
      //   'pseudo' => $username,
      //   'civilite' => $civilite,
      //   'nom' => $nom,
      //   'prenom' => $prenom,
      //   'dateNaissance' => $dateNaissance,
      //   'adresseMail' => $mail,					
      //   'motPasse' => $mdp1,
      //   'id_pays' => $country,
      //   'id_galerieAvatar' => $avatar
      //   ));

      }
      catch(Exception $e)
      {
        alert('Erreur : '.$e->getMessage());
      }
    
}




