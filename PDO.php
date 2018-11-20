
<?php
$PARAM_hote='localhost';
$PARAM_port='8081';
$PARAM_nom_bd='mrbs';
$PARAM_utilisateur='root';
$PARAM_mot_passe='root';

try
{
        $connexion = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
		$connexion->exec('SET NAMES utf8');
}

catch(Exception $e)
{
        echo 'Une erreur de connexion à la BDD est survenue !';
        die();
}
?>
