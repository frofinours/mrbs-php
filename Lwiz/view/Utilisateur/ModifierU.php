<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modifier utilisateur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="js/Utilisateur/utilisateur.js"></script>
</head>

<?php require('view/template/Header.php'); ?>

<body class="formulaire">
    <div class="form">
        <h1>Modifier un utilisateur</h1>
        <form id="formulaireModifierU" method="post" action="?action=ModifierU">
            <label>Séléctionnez l'utilisateur à modifier.</label><select id="user">

            </select>

            <label>Email </label><input type="email" id="email" name="email" required><br /><br />

            <label>mot de passe </label><input type="password" id="mdp" name="mdp" required minlength="3" onkeyup="mdpConfirm();"></span><br /><br />

            <label>mot de passe confirmation </label><input type="password" id="mdpc" name="mdpc" required minlength="3" onkeyup="mdpConfirm();"><br /><br />

            <input type="submit" value="Envoyer">
            <input type="reset" value="Réinitialiser" id="reset">
            <input type="button" value="Retour" onclick="window.location='Utilisateurs.php'">
        </form>
    </div>
</body>

</html> 