<?php

/****** Maxime ******/

function getUsers()
{
	$result = connexionBDD()->query('SELECT * FROM mrbs_users');
	return $result;
}

function addUser($name, $email,$level, $password)
{
	$req = connexionBDD()->prepare('INSERT INTO mrbs_users(name, email, level, password)
		VALUES(:name, :email, :level, :password)');
	$req->execute(array(
		'name' => $name,
		'email' => $email,
		'level' => $level,
		'password' => $password
	));
}
function userToEdit($id)
{
	$result = connexionBDD()->query('SELECT * FROM mrbs_users WHERE id = '.$id.'');
	return $result;
}
function editUserId($id, $name, $email, $level, $password)
{
	$req = connexionBDD()->prepare('UPDATE mrbs_users SET name = :name , email = :email ,level = :level, password = :password WHERE id = :id');
	$req->execute(array(
		'id' => $id,
		'name' => $name,
		'email' => $email,
		'level' => $level,
		'password' => $password
	));
}

function deleteUserId($id)
{
	$req = connexionBDD()->exec('UPDATE mrbs_users SET dateSuppression = SYSDATE() WHERE id = '.$id.'');
}
function checkEmail($email)
{
	var_dump("passage dans checkEmail bdd");
	return nbLignesRequete('SELECT id FROM mrbs_users WHERE email = '.$email.'');
}
function checkName($name)
{
	return nbLignesRequete('SELECT id FROM mrbs_users WHERE name = '.$name.'');
}



/****** Louise ******/

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
	//Et en valeur bah on peut mettre ce qu'on veut vu que le cookie sera instantanément détruit :>
	setcookie('Utilisateur', 'I am a teapot', time()-1);
	setcookie('Level', 'Salut ça va', time()-1);
}

//Vérification des droits
function isAdmin($username){
	$req = connexionBDD()->query("SELECT level FROM mrbs_users WHERE name = '".$username."'");
	$theRow = $req->fetch();
	//On vérifie si le level de l'utilisateur est admin ou non
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



/****** Cécile ******/

function getValuesFromBDD($table, $id, $type){
	$final_result = '';
	$requete = '';
	$bdd = connexionBDD();
	$requete = "SELECT * FROM " .$table. "";
	$values = array();
	try {
		$results = $bdd->query($requete);
		$results->setFetchMode(PDO::FETCH_OBJ);
		
		//parcourir les lignes de la requète
		while( $ligne = $results->fetch())
		{
			array_push($values, $ligne);
			 
		}
		$results->closeCursor();
	} catch (Exception $e) {
		die("Erreur : " .$e->getMessage());
	}

	$final_result = $values;
	
	return $final_result;
}


function sendValuesToBDD($nom_assoc, $mail_assoc, $id_res){
	$message = '';
	$bdd = connexionBDD();
	if($nom_assoc != '' && $mail_assoc != '' && $id_res != ''){
		try{
			$requete_Insert = "INSERT INTO mrbs_league(nom, adresse_mail_asso, id_responsable) VALUES   ('".$nom_assoc."','".$mail_assoc."', '".$id_res."');  ";
			$bdd->exec($requete_Insert);
			$message = 'Données transmises avec succès';
		}
		catch(Exception $e){
			die("Erreur : " .$e->getMessage());
			$message = $e->getMessage();
		}
	}
	else {
		$message = '/!\ Veuillez remplir les champs manquants /!\\';
	}
	echo $message ;
}


function updateValuesBDD($id_assoc, $nom_assoc, $mail_assoc, $id_res){
	$message = '';
	$bdd = connexionBDD();
	try{
		$requete_Update = "UPDATE mrbs_league SET nom = '".$nom_assoc."', adresse_mail_asso = '".$mail_assoc."', id_responsable = '".$id_res."' WHERE id = '".$id_assoc."';";
		$bdd->exec($requete_Update);
		$message = 'Données transmises avec succès';
	}
	catch(Exception $e){
		die("Erreur : " .$e->getMessage());
		$message = $e->getMessage();
	}
	echo $message;
}
?>