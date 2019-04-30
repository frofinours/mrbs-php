<?php
function getUtilisateurs()
{
    require('model/PDO.php');
    require('model/BDDUtilisateurs.php');
    $userList = getUsers();
    require('view/Utilisateurs.php');
}
function addUtilisateur()
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
}
 