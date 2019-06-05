
<?php
function connexionBDD()
{
        // $PARAM_hote = '172.17.21.14';
        $PARAM_hote = 'localhost';
        $PARAM_port = '8081';
        $PARAM_nom_bd = 'mrbs';
        $PARAM_utilisateur = 'root';
        $PARAM_mot_passe = 'root';
        // $PARAM_mot_passe = 'mdp';

        // On récupère les données de la base de donnée sur la ferme.

        try {

                $connexion = new PDO('mysql:host=' . $PARAM_hote . ';dbname=' . $PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
                $connexion->exec('SET NAMES utf8');
                return $connexion;

        } catch (Exception $e) {
                
                echo 'Une erreur de connexion à la BDD est survenue !' . $e->getMessage();
                die();
                
        }
}

function nbLignesRequete($requete){
	$connexion = connexionBDD();
	$req=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

	return $req->rowcount();
}
?>
