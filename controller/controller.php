<?php
// function getSalles()
// {
//     require('model/PDO.php');
//     require('model/BDDSalles.php');
//     require('view/viewSalle.php');
//     $roomList = getSalles();
//     // require('view/Salles.php');
// }

function menuSalle(){
    require('view/menuSalle.php');
}

function editSalle()
{
    require('model/PDO.php');
    require('model/BDDSalles.php');
    $salles = getRooms();
    $types = getAreas();
    require('view/editSalle.php');
    
}

function viewSalle()
{
    require('model/PDO.php');
    require('model/BDDSalles.php');
    $salles = getRooms();
    require('view/viewSalle.php');
}

function lostinspace()
{
    require('view/lostinspace.php');
}

// if(isset($_POST['envoiBDD'])){
//     envoiBDD();
// }

// CODE MAXIME
// function getUtilisateurs()
// {
//     require('model/PDO.php');
//     require('model/BDDUtilisateurs.php');
//     $userList = getUsers();
//     require('view/Utilisateurs.php');
// }
// function addUtilisateur()
// {
//     require('view/AjouterU.php');
// }
// function addUtilisateurBDD($name, $email, $password)
// {
//     require('model/PDO.php');
//     require('model/BDDUtilisateurs.php');
//     addUser($name, $email, $password);
// }

// function deleteUtilisateurId($id)
// {
//     deleteUserId($id);
// }
