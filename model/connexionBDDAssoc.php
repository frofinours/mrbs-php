<?php
    function connexionBDD()
    {
        try {
            //host à changer en 172.17.21.17 pour la base du serveur
            $bdd = new PDO('mysql:host=localhost;dbname=mrbs;charset=utf8', 'root', 'root');
            $bdd->exec('SET NAMES utf8');
            return $bdd;
    
        } catch (Exception $e) {
    
            die('Erreur : ' .$e->getMessage());
        }
    }
?>