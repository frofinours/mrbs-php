<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Association</title>
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    
</head>

<?php require('view/template/Header.php'); ?>

<body class='formulaire'>
    <div class='form'>
        <h1>ASSOCIATIONS</h1>
        <input type="button" value="Créer association"  onclick="/*document.location.href='creerAssoc.php'*/window.location='?action=creerAssoc'")/>
        <input type="button" value="Modifier association"   onclick="/*document.location.href='modifAssoc.php'*/window.location='?action=modifAssoc'"/>
    </div>
</body>
</html>