<?php
include 'connexionBDDAssoc.php';
$table = $_POST['table'];
$id = $_POST['id_assoc'];
if(isset($id)) {
    $requete = "SELECT * FROM " .$table. " WHERE id = " .$id. ";";
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
    
    return $values[0];
}
?>