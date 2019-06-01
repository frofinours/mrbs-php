<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Modifier association</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
<script src='js/Association/fonctions.js'></script>
<script src="js/jquery-3.3.1.min.js"></script>

<?php require('view/template/Header.php'); ?>

<body class='formulaire'>
    <div class='form'>
        <h1>Modifier une association</h1>
        <label>Liste des associations : </label>
        <select name="association" onchange="display('association', 'assocInfos')">
            <option value=null selected >-----Choisissez une association-----</option>
            <!-- <option value="ex1">Exemple 1</option>
            <option value="ex2">Exemple 2</option> -->
            <?php
                foreach($associations as $a)
                {
                    echo "<option   value='".$a->id."'>".$a->nom."</option>";
                }
            ?>
        </select>
        <div id='assocInfos'>
            <label>Nom de l'association : </label>
            <input type='text' id='assocNom'/><br/><br/>
            <label>Responsable : </label>
            <input type='text' id='assocRes'/><br/><br/>
            <label>Adresse mail du responsable : </label>
            <input type="text" id="emailRes" value=""/>
            <br/><br/>
            <label>Adresse mail : </label>
            <input type="text" id="emailAssoc"     onkeyup="verifMail();"/>
            <input type="button" value="Modifier"  onclick=""/>
        </div>
        <input type='button' value='Retour' onclick="/*document.location.href='menuAssoc.php'*/window.location='?action=menuAssoc'"/>
        <script>
            display('association', 'assocInfos')
        </script>
    </div>
</body>
</html>