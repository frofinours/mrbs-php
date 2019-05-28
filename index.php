<?php
require('controller/controller.php'); 

if (isset($_GET['action'])) 
{
    if ($_GET['action'] == 'menuAssoc') {
        menuAssoc();
    }
    if ($_GET['action'] == 'creerAssoc') {

    creationAssoc();
    }
    if ($_GET['action'] == 'modifAssoc') {
        modifAssoc(/*$_GET['id']*/);
    }
}
/*if (!empty($_POST)) 
{
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
        addUtilisateurBDD($_POST['name'], $_POST['email'], $_POST['password']);
    }
}*/