<?php
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
}
if (!empty($_POST)) 
{
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
        addUtilisateurBDD($_POST['name'], $_POST['email'], $_POST['password']);
    }
}