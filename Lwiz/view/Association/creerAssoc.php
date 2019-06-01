<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Créer une association</title>
    <script src="js/Association/verif.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="http://jpconnexion.free.fr/2012_06/cnx.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

</head>

<?php require('view/template/Header.php'); ?>

<body class='formulaire'>
    <form id='formAssoc' action='' method='POST'>
        <div class='form'>
            <h1>Créer une association</h1>
            <label>Nom de l'association : </label>
            <input type='text' id='assocNom'/><br/><br/>
            <label>Sélectionnez le responsable : </label>
            <select id='responsable' onchange='setResEmail()' default='' >
            <?php
                
                foreach($responsable as $r)
                {
                    echo "<option   value='".$r->id."'>".$r->name."</ option>";
                }

            ?>

            </select>
            <br/><br/>
            <label>Adresse mail du responsable : </label>
            <input type="text" id="emailRes" default="admin.mrbs@lorraine-sport.net"/>
            <br/><br/>
            <label>Adresse mail association : </label>
            <input type="text" id="emailAssoc"      onkeyup="verifMail();"/><br/><br/>
            <input type="button" value="Créer"      onclick="sendValuesToBDD();"/>
            <input type="button" value="Retour"     onclick="document.location.href='menuAssoc.php'*/window.location='?action=menuAssoc'"/>
        </div>
    </form>
</body>
</html>

