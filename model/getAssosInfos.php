<?php
include 'connexionBDDAssoc.php';
$table = $_POST['table'];
$id = $_POST['id_assoc'];
$bdd = connexionBDD();
if(isset($id)) {
    $requete = "SELECT * FROM " .$table. " WHERE id = " .$id. ";";
    $values = null;

    try {
        $resultat_assoc = $bdd->query($requete);
        $resultat_assoc->setFetchMode(PDO::FETCH_OBJ);

        while($ligne = $resultat_assoc->fetch())
        {
            $values = $ligne;
            
        }
        $resultat_assoc->closeCursor();
        
    } catch (Exception $e) {
        die("Erreur : " .$e->getMessage());
    }
    
    $id_res = $values->id_responsable;
    $requete_res = "SELECT * FROM mrbs_users WHERE id = " .$id_res.";";
    $res_info = null;
    try {
        $resultat = $bdd->query($requete_res);
        $resultat->setFetchMode(PDO::FETCH_OBJ);

        while($ligne_res = $resultat->fetch())
        {
            $res_info = $ligne_res;
            
        }
        $resultat->closeCursor();
        
    } catch (Exception $e) {
        die("Erreur : " .$e->getMessage());
    }
    
    $nom = $values->nom;
    $email_asso = $values->adresse_mail_asso;
    $nom_res = $res_info->name;
    $email_res = $res_info->email;

    $array = array($email_asso, $nom_res, $email_res, $nom);
    echo json_encode($array);
}
?>