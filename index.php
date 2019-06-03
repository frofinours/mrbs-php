<?php
require('controller/controller.php'); 

if (isset($_GET['action'])) 
{
    if ($_GET['action'] == 'menuAssoc') {
        menuAssoc();
    }
    if ($_GET['action'] == 'creerAssoc') {
        creationAssoc();
    }
    if ($_GET['action'] == 'modifAssoc') {
        modifAssoc();
    }
}
if (!empty($_POST)) 
{
    if (isset($_POST['assocNomCreer']) && isset($_POST['emailAssocCreer']) && isset($_POST['responsableCreer'])) {
        creationAssocBDD($_POST['assocNomCreer'], $_POST['emailAssocCreer'], $_POST['responsableCreer']);
    }
    
    if(isset($_POST['associationModif']) && isset($_POST['assocNomModif']) && isset($_POST['emailAssocModif']) && isset($_POST['assocResModif'])){
        updateValuesBDD($_POST['associationModif'], $_POST['assocNomModif'], $_POST['emailAssocModif'], $_POST['assocResModif']);
    }
   
}