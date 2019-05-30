<?php

    /****** Maxime ******/

    function getUtilisateurs()
    {
        require('model/PDO.php');
        require('model/fonctions.php');
        $userList = getUsers();
        require('view/Utilisateur/Utilisateurs.php');
    }

    function addUtilisateur()
    {
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
        require('view/Utilisateur/ModifierU.php');
    }

    function deleteUtilisateurId($id)
    {
        deleteUserId($id);
    }


    /****** Cécile ******/

    function menuAssoc() 
    {
        require('view/Association/menuAssoc.php');
    }
    function creationAssoc()
    {
        require('model/PDO.php');
        //require('js/verif.js');
        require('model/fonctions.php');
        
        $email = getVAluesFromBDD(null, 5, 'mail');
        $responsable = getValuesFromBDD('mrbs_users', null, null);
        require('view/Association/creerAssoc.php');
    }
    function modifAssoc()
    {
        require('model/PDO.php');
        require('model/fonctions.php');
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
            //On le renvoie au portail de connexion si la requête a retourné false
            echo "<script>window.location = 'http://127.0.0.1/things/Lwiz/'</script>";
        }
        else
        {
            //On paramètre les cookies Utilisateurs, qui expireront au bout de 15min
            setcookie('Utilisateur',$theRow[0],time()+900);
            $_COOKIE['Utilisateur'] = $theRow[0];
            //On va chercher le niveau de l'utilisateur
            //on renvoie un true/false en fonction de si l'utilisateur est admin ou non
            //Et on stock la valeur dans un cookie pour pouvoir l'appeler plus tard
            $isAdmin = isAdmin($username);
            setcookie('Level', $isAdmin, time()+900);
            $_COOKIE['Level'] = $isAdmin;
            //On renvoie à la page d'origine après le require pour effacer le ?action=ConnexionU de l'URL
            //Pour éviter de faire planter au F5 ou si l'utilisateur appuie sur "retour"
            require('view/Login/ViewAfterLogin.php');
            echo "<script>window.location = 'http://127.0.0.1/things/Lwiz/'</script>";
        }
        
    }

    function getDeconnexion()
    {
        require('model/fonctions.php');
        logout();
        echo "<script>window.location = 'http://127.0.0.1/things/Lwiz/'</script>";
    }

?>