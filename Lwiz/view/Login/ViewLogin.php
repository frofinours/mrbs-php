<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <!-- <script src="js/utilisateur.js"></script> -->
</head>
    <body class="formulaire">
        <div class="formLogin">
            <div class="Portail">        
                <form id="FormLogin" action="?action=ConnexionU" method="POST">
                    <p>
                        <input id="username" value="" name="username" type="text" required="required" placeholder="Utilisateur"/><br>
                    </p>
                    <p>
                        <input id="password" name="password" type="password" required="required" placeholder="Mot de passe"/>
                    </p>
                      <br />
                    <p>
                       <input class="bouton" type="submit" value="Se connecter">
                    </p>
                </form>
            </div>
        </div>
    </body>
</html>
 
