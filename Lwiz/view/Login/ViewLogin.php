<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <!-- <script src="js/utilisateur.js"></script> -->
</head>
    <body>
        <form id="FormLogin" action="?action=ConnexionU" method="POST">
            <p>
                <label>Utilisateur</label>
                <input id="username" value="" name="username" type="text" required="required" /><br>
            </p>
            <p>
                <label>Mot de passe</label>
                <input id="password" name="password" type="password" required="required" />
            </p>
              <br />
            <p>
               <input type="submit" value="Se connecter">
               <input type="reset" value="Effacer">
            </p>
        </form>
        <!-- <script src="checkLogin.js"></script> -->
    </body>
</html>
 
