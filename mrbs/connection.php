
<?php
try {
    $dbh = new PDO('mysql:host=172.17.21.14;dbname=mrbs-php', "root", "mdp");
    foreach($dbh->query('SELECT '$user', '$mdp' from Utilisateurs') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur de connexion: " . $e->getMessage() . "<br/>";
    die();
}
//$_GET['URL précédente à placer']

?>
