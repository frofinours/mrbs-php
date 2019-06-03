
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Créer une association</title>
    <script src='js/verif.js'></script>
    <script src='js/jquery-3.3.1.min.js'></script>
    <script src='http://jpconnexion.free.fr/2012_06/cnx.js'></script>
    
    
    <link rel='stylesheet' type='text/css' href='css/styles.css'/>

</head>
<body class='formulaire'>
    <div class='form'>
        <form id='creerAssocForm' action='?action=creerAssoc' method='POST'>
        
            <h1>Créer une association</h1>
            <label>Nom de l'association : </label>
            <input type='text' id='assocNomCreer' name='assocNomCreer'/><br/><br/>
            <label>Sélectionnez le responsable : </label>
            <select id='responsableCreer' name='responsableCreer' onchange= 'setResEmail(1)' default='' >
            <?php
                
                foreach($responsable as $r)
                {
                    echo "<option   value='".$r->id."'>".$r->name."</ option>";    
                }
            ?>
            </select>
            <br/><br/>
            <label>Adresse mail du responsable : </label>
            <input type='text' id='emailResCreer' name='emailResCreer'  value='admin.mrbs@lorraine-sport.net'/>
            <br/><br/>
            <label>Adresse mail association : </label>
            <input type='text' id='emailAssocCreer' name='emailAssocCreer'    onkeyup='verifMail();'/><br/><br/>
            <input type='submit' value='Créer'/>
            <input type='button' value='Retour'     onclick="window.location='?action=menuAssoc'"/>
        </form>
    </div>
</body>
</html>

