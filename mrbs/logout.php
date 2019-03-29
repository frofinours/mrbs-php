<?php
$dbh = new PDO('mysql:host=172.17.21.14;dbname=mrbs-php', $user, $pass);

$sth = $dbh->query('SELECT * FROM Utilisateurs');

$sth = null;
$dbh = null;
?>
<p>Vous êtes bien déconnecté</p>

