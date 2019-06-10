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
<body class="formulaire">
<?php 
while ($user = $usertoEdit->fetch())
{
echo '<div class="form">
        <h1>Modifier un utilisateur</h1>
        <form id="formulaireModifierU" method="post" action="?action=ModifierU">
            <input value=',$user['id'],' type="hidden" id="id" name="id">
            <label>Nom </label><input onkeyup="','NameConfirm()','" value=',$user['name'],' type="text" id="name" name="name" required pattern="[A-Za-z]{3,20}" title="Le nom doit faire au moins 3 caractères sans chiffres ou caractères spéciaux."><br /><br />
            <label>Email </label><input onkeyup="','emailConfirm()','" value=',$user['email'],' type="email" id="email" name="email" required><br /><br />
            <label>Role </label>
            <select id="role" name="role">
                <option value="0">Utilisateur</option>
                <option value="2">Administrateur</option>
            </select>
            <label>mot de passe </label><input  type="password" id="password" name="password" required minlength="3" onkeyup="','mdpConfirm()','"></span><br /><br />
            <label>mot de passe confirmation </label><input  type="password" id="mdpc" name="mdpc" required minlength="3" onkeyup="','mdpConfirm()','"><br /><br />
            <input type="submit" value="Envoyer">
            <input type="reset" value="Réinitialiser" id="reset">
            <input type="button" value="Retour" onclick="window.location=','"Utilisateurs.php"','">
        </form>
    </div>';

}
?>   
</body>

</html> 