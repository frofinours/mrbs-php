<?php
function menuAssoc() 
{
    require('view/menuAssoc.php');
}
function creationAssoc()
{
    require('model/connexionBDDAssoc.php');
    //require('js/verif.js');
    require('model/fonctions.php');
    
    $email = getVAluesFromBDD(null, 5, 'mail');
    $responsable = getValuesFromBDD('mrbs_users', null, null);
    require('view/creerAssoc.php');
}
function modifAssoc()
{
    require('model/connexionBDDAssoc.php');
    require('model/fonctions.php');
    require('view/modifAssoc.php');
}
/*function addUtilisateur()
{
    require('view/AjouterU.php');
}
function addUtilisateurBDD($name, $email, $password)
{
    require('model/PDO.php');
    require('model/BDDUtilisateurs.php');
    addUser($name, $email, $password);
}
function editUtilisateurId($id)
{
    $usertoEdit = editUserId($id);
    require('view/ModifierU.php');
}
function deleteUtilisateurId($id)
{
    deleteUserId($id);
}*/