<?php

    /****** Maxime ******/

    function getUtilisateurs()
    {
        require('model/PDO.php');
        require('model/fonctions.php');
        $userList = getUsers();
        require('view/template/Header.php');
        require('view/Utilisateur/Utilisateurs.php');
    }

    function addUtilisateur()
    {
        require('view/template/Header.php');
        require('view/Utilisateur/AjouterU.php');
    }

    function addUtilisateurBDD($name, $email, $password)
    {
        require('model/PDO.php');
        require('model/fonctions.php');
        addUser($name, $email, $password);
    }

    function editUtilisateurId($id)
    {
        $usertoEdit = editUserId($id);
        require('view/template/Header.php');
        require('view/Utilisateur/ModifierU.php');
    }

    function deleteUtilisateurId($id)
    {
        deleteUserId($id);
    }


    /****** Cécile ******/

function menuAssoc() 
{
    require('view/template/Header.php');
    require('view/Association/menuAssoc.php');
}
function creationAssoc()
{
    require('model/PDO.php');
    require('model/fonctions.php');
    $responsable = getValuesFromBDD('mrbs_users', null, null);
    require('view/Association/creerAssoc.php');
}
function modifAssoc()
{
    require('model/PDO.php');
    require('model/fonctions.php');
    $responsable = getValuesFromBDD('mrbs_users', null, null);
    $associations = getValuesFromBDD('mrbs_league', null, null);
    require('view/Association/modifAssoc.php');
}
function creationAssocBDD($nom_assoc, $mail_assoc, $id_res){
    $message = sendValuesToBDD($nom_assoc, $mail_assoc, $id_res);
    
}
function modifAssocBDD($id_assoc, $nom_assoc, $mail_assoc, $id_res){
    updateValuesBDD($id_assoc, $nom_assoc, $mail_assoc, $id_res);
}


    /****** Louise ******/

function getConnexion($username, $password)
{
    require('model/PDO.php');
    require('model/fonctions.php');
    $login = login($username, $password);
    $theRow = $login->fetch();
    if($theRow == false)
    {
        //On le renvoie au portail de connexion si la requête a retourné false pour retenter la connexion
        echo "<script>window.location = 'http://127.0.0.1/GESTBASE'</script>";
    }
    else
    {
        $isDead = isDead($username);
        if ($isDead == true){
            goto a;
        }
        //Expiration 30min
        //On stock les valeurs dans des cookies pour les appeler plus tard
        setcookie('Utilisateur',$theRow[0],time()+1800);
        $_COOKIE['Utilisateur'] = $theRow[0];
        $isAdmin = isAdmin($username);
        setcookie('Level', $isAdmin, time()+1800);
        $_COOKIE['Level'] = $isAdmin;
        //On renvoie à la page d'origine après le require pour effacer le ?action=ConnexionU de l'URL
        //Cela évite de faire planter l'app au F5 ou si l'utilisateur appuie sur "retour"
        require('view/Login/ViewAfterLogin.php');
        a:
        echo "<script>window.location = 'http://127.0.0.1/GESTBASE'</script>";
    }
    
}

function getDeconnexion()
{
    require('model/fonctions.php');
    logout();
    echo "<script>window.location = 'http://127.0.0.1/GESTBASE'</script>";
}

function get403(){
    require('view/template/403.php');
}

function getPortail(){
    require('view/Login/ViewLogin.php');
}

function getMenu(){
    require('view/Login/ViewAfterLogin.php');
}


?>