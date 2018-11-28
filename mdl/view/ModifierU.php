<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modifier utilisateur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/utilisateur.js"></script>
</head>
<body>
    <h1>Modifier un utilisateur</h1>
    <form id="formulaireModifierU" method="post" action="modifierUtilisateur()">
        <label>Séléctionnez l'utilisateur à modifier.</label><select id="utilisateurAModifier">
        </select>
        <input type="submit" value="Modifier">
        <input type="button" value="Retour" onclick="window.location='Utilisateurs.php'">
    </form>
</body>
</html>