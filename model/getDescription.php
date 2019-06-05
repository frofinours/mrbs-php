<?php
    include 'PDO.php';

    $room_id = $_GET['id'];
    if(isset($room_id)){


            $requete = "SELECT description FROM mrbs_room WHERE id = '".$room_id."' ;";

            $type = null;
            try {
                $resultat = connexionBDD()->query($requete);
                $resultat->setFetchMode(PDO::FETCH_OBJ);
                

                while ($ligne = $resultat->fetch())
                {
                    $type = $ligne;
                }
                $resultat->closeCursor();
            } 
            catch (Exception $e) {
                die("Erreur : " .$e->getMessage());
            }

            echo $type->description;
            
        //}
    }
        
    // }
