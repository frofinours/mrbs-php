
<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=mrbs-php', $user, $pass);
    foreach($dbh->query('SELECT * from Utilisateurs') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur de connexion: " . $e->getMessage() . "<br/>";
    die();
}
?>
