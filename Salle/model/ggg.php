<?php
    include 'PDO.php';
    $room_name = $_POST['name'];
    if(isset($room_name)){
            $requete = "SELECT area_name FROM mrbs_area INNER JOIN mrbs_room ON mrbs_area.id = mrbs_room.area_id  WHERE room_name = '".$room_name."' ;";
            $type = null;
            try {
                $resultat = $connexion->query($requete);
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

            echo $type->area_name;
            
        //}
    }
        
    // }

?>