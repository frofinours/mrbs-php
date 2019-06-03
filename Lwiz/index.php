<?php 
require('controller/controller.php');

//On vérifie si une action existe
if (isset($_GET['action'])) 
{
    if ($_GET['action'] == 'utilisateurs') {
        getUtilisateurs();
    }
    if ($_GET['action'] == 'ConnexionU') {
        getConnexion($_POST['username'], $_POST['password']);
    }
    if ($_GET['action'] == 'DeconnexionU') {
        getDeconnexion();
    }
    if ($_GET['action'] == 'menuAssoc') {
        menuAssoc();
    }

    if ($_GET['action'] == 'AjouterU') {
        if(isset($_COOKIE['Level']) && $_COOKIE['Level'] == 1){
            addUtilisateur();
        }
        else
        {
            require('view/template/403.php');
        }
    }
    if ($_GET['action'] == 'ModifierU') {
        if(isset($_COOKIE['Level']) && $_COOKIE['Level'] == 1){
            editUtilisateurId($_GET['id']);
        }
        else
        {
            require('view/template/403.php');
        }
    }
    if ($_GET['action'] == 'creerAssoc') {
        if(isset($_COOKIE['Level']) && $_COOKIE['Level'] == 1){
            creationAssoc();
        }
        else
        {
            require('view/template/403.php');
        }
    }
    if ($_GET['action'] == 'modifAssoc') {
        if(isset($_COOKIE['Level']) && $_COOKIE['Level'] == 1){
            modifAssoc(/*$_GET['id']*/);
        }
        else
        {
            require('view/template/403.php');
        }
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
}
?>
