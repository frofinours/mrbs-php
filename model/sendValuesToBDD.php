
<?php
    include 'connexionBDDAssoc.php';
    $nom = $_POST['nom_assoc'];
    $mail_assoc = $_POST['mail_assoc'];
    $id_res = $_POST['id_res'];
    $message = '';
    try{
        $requete_Insert = "INSERT INTO mrbs_league(nom, adresse_mail_asso, id_responsable) VALUES ('".$nom."','".$mail_assoc."', '".$id_res."');";
        $bdd->exec($requete_Insert);
        $message = 'Données transmises avec succès';
    }
    catch(Exception $e){
        die("Erreur : " .$e->getMessage());
        $message = $e->getMessage();
    }

    echo $message;

    
?>
