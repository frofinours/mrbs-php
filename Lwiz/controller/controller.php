<?php
    function getConnexion($username, $password)
    {
        require('model/PDO.php');
        require('model/BDDUtilisateurs.php');
        $login = login($username, $password);
        $theRow = $login->fetch();
        if($theRow == false)
        {
            //On le renvoie à la page d'origine
            echo "<script>window.location = 'http://127.0.0.1/things/Lwiz/'</script>";
        }
        else
        {
            setcookie('Utilisateur',$theRow[0],time()+900);
            $_COOKIE['Utilisateur'] = $theRow[0];
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
        require('model/BDDUtilisateurs.php');
        logout();
        echo "<script>window.location = 'http://127.0.0.1/things/Lwiz/'</script>";
    }

  /*  function getLevel($username){
        require('model/PDO.php');
        require('model/BDDUtilisateurs.php');
        $isAdmin = isAdmin($username);

    } */

    function getUtilisateurs()
    {
        require('model/PDO.php');
        require('model/BDDUtilisateurs.php');
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
        require('model/BDDUtilisateurs.php');
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

    
?>