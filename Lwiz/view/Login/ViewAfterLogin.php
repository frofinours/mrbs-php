<html>
    
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>

    <?php 
    $theRow = $login->fetch(); 
    var_dump($theRow);

    //Le $login->fetch() retourne un bool false si la requête ne retourne rien
    if($theRow == false)
    {
        //On le renvoie à la page d'origine
        echo "<script>window.location = 'http://127.0.0.1/things/Lwiz/'</script>";
    }
    //Si la requête a renvoyé une ligne
    else
    {
        //On définie un cookie Utilisateur contenant le nom de l'utilisateur
        //Avec 5min avant expiration
        setcookie('Utilisateur',$theRow[0],time()+300);
        $_COOKIE['Utilisateur'] = $theRow[0];
        var_dump($_COOKIE['Utilisateur']);
        require('view/template/Header.php'); 
        ?>
        <body>
            <p>Bienvenue 
            <?php 
            echo $_COOKIE['Utilisateur'];
            ?>
            </p>
        </body> <?php
    }
    ?>

</html>