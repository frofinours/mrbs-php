<?php
    include 'PDO.php';

    $room_name = $_POST['name'];
    if(isset($room_name)){

            $requete = "SELECT room_admin_email FROM mrbs_room  WHERE room_name = '".$room_name."' ;";
            

            $result = null;
            try {
                $resultat = $connexion->query($requete);
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

            echo $result->room_admin_email;
            
        //}
    }
        
    // }

?>