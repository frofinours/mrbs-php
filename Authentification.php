<html>
<head>
<meta charset="UTF-8">
<link href="forme.css" rel="stylesheet" type="text/css">
<title>Formulaire CV</title>
</head>
<body>
<button onclick="myTest()">test js</button> <!--On teste vite fait si le javascript est bien présent et fonctionnel -->
<br />
<br />
    <form action="[à changer].php" method="post" id="myForm">

    <label class="test" for="mail">Adresse mail : </label>
    <input type="text" id="mail" name="mail"><br /><br />

    <label class="test" for="mdp">Mot de passe:  </label>
    <input type="password" id="mdp" name="mdp"/><br /><br />

    <input type="submit" value="Se connecter">
 </form>
<script src="VerifAuthentification.js"></script>
</body>
