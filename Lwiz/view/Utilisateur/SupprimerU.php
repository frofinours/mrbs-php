<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Supprimer utilisateur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
    <script src="js/Utilisateur/utilisateur.js"></script>
</head>

<?php require('view/template/Header.php'); ?>

<body>
    <div class="form">
    <h1>Supprimer un utilisateur</h1>
    <form id="formDeleteUser" method="post" action="deleteUser">
        <label>Séléctionnez l'utilisateur à supprimer.</label><select id="user">
        </select>
        <input type="submit" value="Supprimer">
        <input type="button" value="Retour" onclick="window.location='Utilisateurs.php'">
    </form>   
</div>
</body>
</html>