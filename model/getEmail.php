<?php
    include 'connexionBDDAssoc.php';
    $id_res = $_POST['id_res'];
    $bdd = connexionBDD();
    if(isset($id_res)){
        $requete = "SELECT email FROM mrbs_users WHEREid = '".$id_res."'";
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
        
        echo $email->email;
    }
?>