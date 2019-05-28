<?php
  
    function getValuesFromBDD($table, $id, $type){
        //include 'connexionBDDAssoc.php';
        $final_result = '';
        $requete = '';
        $bdd = connexionBDD();
        if(isset($id)) {
            //getEmail
            if($type == 'mail'){
                $requete = "SELECT email FROM mrbs_users WHERE id = '".$id."' ";
                //var_dump($requete);
                $email = null;
                try {
                    $resultat = $bdd->query($requete);
                    $resultat->setFetchMode(PDO::FETCH_OBJ);
                    
                    while ($ligne = $resultat->fetch()) 
                    {
                        $email = $ligne;
                    }
                    $resultat->closeCursor();
                } 
                catch (Exception $e) {
                    die("Erreur : " .$e->getMessage());
                }
                $final_result = $email->email;
    
            }
            else {
                //getAssosInfos
                $requete = "SELECT * FROM " .$table. " WHERE id = " .$id. "";
                $values = array();
                try {
                    $resultat = $bdd->query($requete);
                    $resultat->setFetchMode(PDO::FETCH_OBJ);
            
                    while( $ligne = $resultat->fetch())
                    {
                        array_push($values, $ligne);
                        
                    }
                    $resultat->closeCursor();
                    
                } catch (Exception $e) {
                    die("Erreur : " .$e->getMessage());
                }
                //var_dump($values);
                
                $final_result = $values[0];

            }
        }
        else {
            //getValues
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
        }
        return $final_result;
    }

    function sendValuesToBdd($nom_assoc, $mail_assoc, $id_res){
        $message = '';
        try{
            $requete_Insert = "INSERT INTO mrbs_league(nom, adresse_mail_asso, id_responsable) VALUES   ('".$nom_assoc."','".$mail_assoc."', '".$id_res."');  ";
            $bdd->exec($requete_Insert);
            $message = 'Données transmises avec succès';
        }
        catch(Exception $e){
            die("Erreur : " .$e->getMessage());
            $message = $e->getMessage();
        }

        echo $message;

    }

?>

