<?php
    try {

        $bdd = new PDO('mysql:host=172.17.21.14;dbname=mrbs;charsetutf8', 'root', 'mdp');
        $bdd->exec('SET NAMES utf8');

    } catch (Exception $e) {

        die('Erreur : ' .$e->getMessage());
    }
?>