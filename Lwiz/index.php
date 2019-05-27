<?php 
require('controller/controller.php');

//On vérifie si une action existe
if (isset($_GET['action'])) 
{
    if ($_GET['action'] == 'utilisateurs') {
        getUtilisateurs();
    }
    if ($_GET['action'] == 'AjouterU') {
        addUtilisateur();
    }
    if ($_GET['action'] == 'ModifierU') {
        editUtilisateurId($_GET['id']);
    }
    if ($_GET['action'] == 'ConnexionU') {
        getConnexion($_POST['username'], $_POST['password']);
    }
    if ($_GET['action'] == 'DeconnexionU') {
        getDeconnexion();
    }
}
else
{
    //On vérifie l'existence d'un cookie
    if (isset($_COOKIE['Utilisateur']) && $_COOKIE['Utilisateur'] != null)
    {
        //Page d'accueil
        require('view/Login/ViewAfterLogin.php');
    }
    else
    {
        //Portail de connexion
        require('view/Login/ViewLogin.php');
    }
    //if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
    //    addUtilisateurBDD($_POST['name'], $_POST['email'], $_POST['password']);
    //}
}
?>
