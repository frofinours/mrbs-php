<?php
function connectionBDD(){
    try
    {
        $bdd = new PDO('mysql:host=172.17.21.14;dbname=mrbs;charset=utf8', 'root', 'mdp');
    }
    
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    return $bdd;
}

function nbLignesRequete($requete){
	$connexion = connectionBDD();
	$req=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

	return $req->rowcount();
}
?>

