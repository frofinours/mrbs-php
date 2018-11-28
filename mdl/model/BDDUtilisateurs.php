<?php
include ("PDOUtilisateurs.php");

function verifierEmailBDD()
{
    if ($_POST)
    {
	    $email_post = ($_POST['mrbs_user']);
	    $requete = "SELECT email FROM mrbs_users WHERE email = '".$email_post."' ";

	    $nbLignes = nbLignesRequete($requete);

	    if	($nbLignes > 0)
		    { echo 1; }
	    else	
		    { echo 2; } 
    }
}

function ajouterUtilisateur(nom, mdp, email){
    $bdd->exec('INSERT INTO mrbs_users VALUES ('nom','mdp','email');');
}

function supprimerUtilisateur(nom){
    $bdd->exec('UPDATE mrbs_users SET dateSuppression = 'SYSDATE()' WHERE name = 'nom';');
}

function changerMDP(nom, nouveauMDP){
    $bdd->exec('UPDATE mrbs_users SET password = 'nouveauMDP' WHERE name = 'nom';');
}   

function changerEmail(nom, nouveauEmail){
    $bdd->exec('UPDATE mrbs_users SET email = 'nouveauEmail' WHERE name = 'nom';');
}
function afficherUtilisateurs(){
    $reponse = $bdd->query('SELECT name FROM mrbs_users;');
} 

?>