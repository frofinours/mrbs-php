<?php

function connexionBDD(){
    try
    {
        // $bdd = new PDO('mysql:host=172.17.21.14;dbname=mrbs;charset=utf8', 'root', 'mdp');
        $bdd = new PDO('mysql:host=localhost;dbname=mrbs;charset=utf8', 'root', 'root');
    
    }
    catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return $bdd;
}
function nbLignesRequete($requete){
	$connexion = connexionBDD();
	$req=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
	return $req->rowcount();
}
?>