<html>
    
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>

    <?php 
        require('view/template/Header.php'); 
        ?>
        <body class="Accueil">
            <p>Bienvenue 
            <?php 
            echo $_COOKIE['Utilisateur'];
            ?>
            </p>
            <br />
        </body> <?php
    ?>

</html>