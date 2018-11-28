<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajout utilisateur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" type="text/css" media="screen" href="main.css" />!-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/utilisateur.js"></script>
</head>
<body>
    <h1>Ajouter un utilisateur</h1>
    <form id="formulaireAjouterU" method="post" action="ajouterUtilisateur()">
        <label>Nom  </label><input type="text" id="nomAAjouter" onkeyup="verifierNom();"><span id="infoNomAAjouter"></span><br/><br/>
        <label>Email    </label><input type="text" id="emailAAjouter" onkeyup="verifierEmail();"><span id="infoEmailAAjouter"></span><br/><br/>
        <label>mot de passe </label><input type="password" id="mdpAAjouter" onkeyup="verifierMdpC();"><span id="infoMdpAAjouter"></span><br/><br/>
        <label>mot de passe confirmation  </label><input type="password" id="mdpCAAjouter" onkeyup="verifierMdpC();"><span id="infoMdpCAAjouter"></span><br/><br/>
        <input type="submit" value="Envoyer">
        <input type="button" value="Retour" onclick="window.location='Utilisateurs.php'">
    </form>
</body>
</html>