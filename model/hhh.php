<?php
    // function getEmail($name){
    include 'connexionBDDAssoc.php';
    $name = $_POST['name'];
    if(isset($name)){
        //function getEmail($name){
            $requete = "SELECT email FROM mrbs_users WHERE name = '".$name."' ;";
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
            //var_dump($email->email);
            echo $email->email;

            
        //}
    }
        
    // }

?>