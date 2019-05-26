<?php 
//define('URL', str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" :   
//   "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

//require_once('controller/Router.php');

//$router = new Router();
//$router->routeReq();
require('controller/controller.php');

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
    if (isset($_COOKIE['Utilisateur']) && $_COOKIE['Utilisateur'] != null)
    {
        require('view/Login/ViewAfterLogin.php');
    }
    else
    {
        require('view/Login/ViewLogin.php');
    }
    //if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
    //    addUtilisateurBDD($_POST['name'], $_POST['email'], $_POST['password']);
    //}
}
?>
