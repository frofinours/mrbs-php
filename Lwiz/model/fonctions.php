<?php

/****** Maxime ******/

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
	setcookie('Utilisateur', 'Seul Link peut vaincre Ganon', time()-1);
	setcookie('Level', 'Si vous êtes un ami, vous donnez le mot de SaaS et les portes s´ouvrirons', time()-1);
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
	//include 'connexionBDDAssoc.php';
	$final_result = '';
	$requete = '';
	$bdd = connexionBDD();
	if(isset($id)) {
		//getEmail
		if($type == 'mail'){
			$requete = "SELECT email FROM mrbs_users WHERE id = '".$id."' ";
			//var_dump($requete);
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
			$final_result = $email->email;

		}
		else {
			//getAssosInfos
			$requete = "SELECT * FROM " .$table. " WHERE id = " .$id. "";
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
			
			$final_result = $values[0];

		}
	}
	else {
		//getValues
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
	}
	return $final_result;
}

function sendValuesToBdd($nom_assoc, $mail_assoc, $id_res){
	$message = '';
	$bdd = connexionBDD();
	try{
		$requete_Insert = "INSERT INTO mrbs_league(nom, adresse_mail_asso, id_responsable) VALUES   ('".$nom_assoc."','".$mail_assoc."', '".$id_res."');  ";
		$bdd->exec($requete_Insert);
		$message = 'Données transmises avec succès';
	}
	catch(Exception $e){
		die("Erreur : " .$e->getMessage());
		$message = $e->getMessage();
	}

	echo $message;

}
?>