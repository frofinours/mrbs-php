<?php
function getUsers()
{
	$result = connexionBDD()->query('SELECT id, name, email, dateSuppression FROM mrbs_users;');
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
	$result = connexionBDD()->query("SELECT id, name, email, dateSuppression FROM mrbs_users WHERE id = '" .$id. '";');
	return $result;
}
function deleteUserId($id)
{
	$req = connexionBDD()->exec('UPDATE mrbs_users SET dateSuppression = SYSDATE() WHERE id = $id;');
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
 