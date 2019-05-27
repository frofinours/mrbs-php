<?php

function getUsers()
{
	$result = connexionBDD()->query('SELECT id, name, email, dateSuppression FROM mrbs_users');
	return $result;
}

function addUser($name, $email, $password)
{
	$req = connexionBDD()->prepare('INSERT INTO mrbs_users(name, email, password)
		VALUES(:name, :email, :password)');
	$req->execute(array(
		'name' => $name,
		'email' => $email,
		'password' => $password
	));
}
function editUserId($id)
{
	$result = connexionBDD()->query('SELECT id, name, email, dateSuppression FROM mrbs_users WHERE id = '.$id.'');
	return $result;
}

function deleteUserId($id)
{
	$req = connexionBDD()->exec('UPDATE mrbs_users SET dateSuppression = SYSDATE() WHERE id = '.$id.'');
}

//Connexion
function login($username, $password)
{
	//On passe le mot de passe en MD5 pour la requête
	$password = md5($password);
	$result = connexionBDD()->query("SELECT name, password FROM mrbs_users WHERE name = '".$username."' AND password = '".$password."'");
	return $result;
}

//Déconnexion
function logout()
{
	//On met le timer du cookie à -1 pour le faire expirer immédiatement et le "détruire"
	setcookie('Utilisateur', 'Somebody once told me', time()-1);
	setcookie('Level', 'The world is gonna roll me', time()-1);
}

//Vérification des droits
function isAdmin($username){
	$req = connexionBDD()->query("SELECT level FROM mrbs_users WHERE name = '".$username."'");
	$theRow = $req->fetch();
	//On vérifie sur le level est admin ou non
	if ($theRow[0] == 2)
	{
		$result = true;
	}
	else 
	{
		$result = false;
	}
	return $result;
}





// function supprimerUtilisateur(nom){
//     $bdd->exec('UPDATE mrbs_users SET dateSuppression = 'SYSDATE()' WHERE name = 'nom';');
// }

// function changerMDP(nom, nouveauMDP){
//     $bdd->exec('UPDATE mrbs_users SET password = 'nouveauMDP' WHERE name = 'nom';');
// }   

// function changerEmail(nom, nouveauEmail){
//     $bdd->exec('UPDATE mrbs_users SET email = 'nouveauEmail' WHERE name = 'nom';');
// }
// function afficherUtilisateurs(){
//     $reponse = $bdd->query('SELECT name FROM mrbs_users;');
// } 
 