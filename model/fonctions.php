<?php
  
    function getValuesFromBDD($table, $id, $type){
        $final_result = '';
        $requete = '';
        $bdd = connexionBDD();
        $requete = "SELECT * FROM " .$table. "";
        $values = array();
        try {
            $results = $bdd->query($requete);
            $results->setFetchMode(PDO::FETCH_OBJ);
            
            //parcourir les lignes de la requète
            while( $ligne = $results->fetch())
            {
                array_push($values, $ligne);
                 
            }
            $results->closeCursor();

        } catch (Exception $e) {
            die("Erreur : " .$e->getMessage());
        }
    
        $final_result = $values;
        
        return $final_result;
    }

    function sendValuesToBDD($nom_assoc, $mail_assoc, $id_res){
        $message = '';
        $bdd = connexionBDD();
        if($nom_assoc != '' && $mail_assoc != '' && $id_res != ''){
            try{
                $requete_Insert = "INSERT INTO mrbs_league(nom, adresse_mail_asso, id_responsable) VALUES   ('".$nom_assoc."','".$mail_assoc."', '".$id_res."');  ";
                $bdd->exec($requete_Insert);
                $message = 'Données transmises avec succès';
            }
            catch(Exception $e){
                die("Erreur : " .$e->getMessage());
                $message = $e->getMessage();
            }
        }
        else {
            $message = '/!\ Veuillez remplir les champs manquants /!\\';
        }

        echo $message ;

    }

    function updateValuesBDD($id_assoc, $nom_assoc, $mail_assoc, $id_res){
        $message = '';
        $bdd = connexionBDD();
        try{
            $requete_Update = "UPDATE mrbs_league SET nom = '".$nom_assoc."', adresse_mail_asso = '".$mail_assoc."', id_responsable = '".$id_res."' WHERE id = '".$id_assoc."';";
            $bdd->exec($requete_Update);
            $message = 'Données transmises avec succès';
        }
        catch(Exception $e){
            die("Erreur : " .$e->getMessage());
            $message = $e->getMessage();
        }

        echo $message;

    }

?>

