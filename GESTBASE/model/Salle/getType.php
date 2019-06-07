<?php
    include '../PDO.php';
    $room_id = $_GET['id'];
    if(isset($room_id)){

            $requete = "SELECT area_id FROM mrbs_room WHERE id = '".$room_id."' ;";
            

            $result = null;
            try {
                $resultat = connexionBDD()->query($requete);
                $resultat->setFetchMode(PDO::FETCH_OBJ);
                

                while ($ligne = $resultat->fetch())
                {
                    $result = $ligne;
                }
                $resultat->closeCursor();
            } 
            catch (Exception $e) {
                die("Erreur : " .$e->getMessage());
            }

            echo $result->area_id;
        
    }

?>