<?php
    function getConnexion($username, $password)
    {
        require('model/PDO.php');
        require('model/BDDUtilisateurs.php');
        $login = login($username, $password);
        $theRow = $login->fetch();
        setcookie('Utilisateur',$theRow[0],time()+900);
        $_COOKIE['Utilisateur'] = $theRow[0];
        if($theRow == false)
        {
            //On le renvoie à la page d'origine
            echo "<script>window.location = 'http://127.0.0.1/things/Lwiz/'</script>";
        }
        else
        {
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

    function getLevel($username){
        require('model/PDO.php');
        require('model/BDDUtilisateurs.php');
    }

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

    
?>