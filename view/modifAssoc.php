<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Modifier association</title>
    <link rel='stylesheet' type='text/css' href='css/styles.css'/>
</head>


<script src="js/verif.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>


<body class='formulaire'>
    <div class='form'>
        <form id='modifAssocForm' action='?action=modifAssoc' method='POST'>
            <h1>Modifier une association</h1>
            <label>Liste des associations : </label>
            <select name="associationModif" id="associationModif" onchange="display('associationModif', 'assocInfos')">
                <option value=null selected >-----Choisissez une association-----</option>
                <?php

                    foreach($associations as $a)
                    {
                        echo "<option   value='".$a->id."'>".$a->nom."</option>";
                    }
                ?>
            </select>
            <div id='assocInfos'>
                <label>Nom de l'association : </label>
                <input type='text' id='assocNomModif' name='assocNomModif'/><br/><br/>
                <label>Responsable : </label>
                <select type='text' id='assocResModif'
                name='assocResModif' onchange= 'setResEmail(2)' default=''>
                <?php
                    foreach($responsable as $r)
                    {
                        echo "<option   value='".$r->id."'>".$r->name."</ option>";
                    }
                ?>
                </select>    
                <br/><br/>
                <label>Adresse mail du responsable : </label>
                <input type="text" id="emailResModif" name="emailResModif" value=""/>
                <br/><br/>
                <label>Adresse mail : </label>
                <input type="text" id="emailAssocModif" name="emailAssocModif"      onkeyup="verifMail();"/>
                <input type="submit" value="Modifier"/>
            </div>
            <input type='button' value='Retour' onclick="window.location='?action=menuAssoc'"/>

        </form>
        <script>
            display('associationModif', 'assocInfos');
        </script>
    </div>
</body>
</html>