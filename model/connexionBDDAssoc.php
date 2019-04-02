<?php
    try {
        //host à changer en 172.17.21.17 pour la base du serveur
        $bdd = new PDO('mysql:host=localhost;dbname=mrbs;charsetutf8', 'root', 'root');
        $bdd->exec('SET NAMES utf8');

    } catch (Exception $e) {

        die('Erreur : ' .$e->getMessage());
    }
?>