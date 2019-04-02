<?php
  
    function getValuesFromBDD($table){
        include 'connexionBDDAssoc.php';
        $requete = "SELECT * FROM " .$table. ";";
        $values = array();

        try {
            $resultat = $bdd->query($requete);
            $resultat->setFetchMode(PDO::FETCH_OBJ);
            
            //parcourir les lignes de la requète
            while( $ligne = $resultat->fetch())
            {
                array_push($values, $ligne);
                 
            }
            $resultat->closeCursor();

        } catch (Exception $e) {
            die("Erreur : " .$e->getMessage());
        }
    
        return $values;
    }

?>

