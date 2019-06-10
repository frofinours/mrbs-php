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

    function addUtilisateurBDD($name, $email,$role, $password)
    {
        require('model/PDO.php');
        require('model/fonctions.php');
        $password = md5($password);
        addUser($name, $email,$role, $password);
        header('Location: ?action=utilisateurs');
    }

    function editUtilisateurId($id)
    {
        require('model/PDO.php');
        require('model/fonctions.php');
        $usertoEdit = userToEdit($id);
        require('view/template/Header.php');
        require('view/Utilisateur/ModifierU.php');
    }
    function editUtilisateurBDD($id, $name, $email,$role, $password)
    {
        require('model/PDO.php');
        require('model/fonctions.php');
        $password = md5($password);
        $usertoEdit = editUserId($id, $name, $email,$role, $password);
        header('Location: ?action=utilisateurs');
    }

    function deleteUtilisateurId($id)
    {
        require('model/PDO.php');
        require('model/fonctions.php');
        deleteUserId($id);
    }

    function checkEmailExist($email)
    {
        $nblEmail = checkEmail($email);
    }
    function checkNameExist($name)
    {
        $nblName = checkName($name);
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
        //require('js/verif.js');
        require('model/fonctions.php');
        
        //$email = getVAluesFromBDD(null, 5, 'mail');
        $responsable = getValuesFromBDD('mrbs_users', null, null);
        require('view/template/Header.php');
        require('view/Association/creerAssoc.php');
    }
    function modifAssoc()
    {
        require('model/PDO.php');
        require('model/fonctions.php');
        $associations = getValuesFromBDD('mrbs_league', null, null);
        require('view/template/Header.php');
        require('view/Association/modifAssoc.php');
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
            echo "<script>window.location = 'http://localhost/mrbsPPE/GESTBASE/'</script>";
        }
        else
        {
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

            echo "<script>window.location = 'http://localhost/mrbsPPE/GESTBASE/'</script>";
        }
        
    }

    function getDeconnexion()
    {
        require('model/fonctions.php');
        logout();
        echo "<script>window.location = 'http://localhost/mrbsPPE/GESTBASE/'</script>";
    }

?>