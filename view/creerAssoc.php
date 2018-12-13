<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Créer une association</title>
    <script src="../js/verif.js"></script>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="http://jpconnexion.free.fr/2012_06/cnx.js"></script>
    <?php include '..\model\fonctions.php'; ?>

</head>
<body>
    <h1>Créer une association</h1>
    <label>Nom de l'association : </label>
    <input/><br/><br/>
    <label>Sélectionnez le responsable : </label>
    <select id='responsable' onchange='setResult()' default=" ">
    <?php
        
        $responsable = getValuesFromBDD('mrbs_users');
        $respArray = array();
        foreach($responsable as $r)
        {
            echo "<option value='".$r->name."'>".$r->name."</option>";
        }
    ?>
   

    </select>
    </br></br>
    <label>Adresse mail du responsable : </label>
    <input type="text" id="emailRes" default=" "/>
    <br/><br/>
    <label>Adresse mail association : </label>
    <input type="text" id="email" onkeyup="verifMail();"/><br/><br/>

    <input type="button" value="Créer" onclick="<?php sendValuesToBDD(); ?>"/>
    <input type="button" value="Retour" onclick="document.location.href='indexAssoc.html'"/>
</body>
</html>

