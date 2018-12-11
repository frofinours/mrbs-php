<?php
$dbh = new PDO('mysql:host=localhost;dbname=mrbs-php', $user, $pass);

$sth = $dbh->query('SELECT * FROM Utilisateurs');

$sth = null;
$dbh = null;
?>
