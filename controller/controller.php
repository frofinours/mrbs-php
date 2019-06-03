<?php
function menuAssoc() 
{
    require('view/menuAssoc.php');
}
function creationAssoc()
{
    require('model/connexionBDDAssoc.php');
    require('model/fonctions.php');

    $responsable = getValuesFromBDD('mrbs_users', null, null);
    require('view/creerAssoc.php');
}
function modifAssoc()
{
    require('model/connexionBDDAssoc.php');
    require('model/fonctions.php');

    $responsable = getValuesFromBDD('mrbs_users', null, null);
    $associations = getValuesFromBDD('mrbs_league', null, null);
    require('view/modifAssoc.php');
}

function creationAssocBDD($nom_assoc, $mail_assoc, $id_res){
    $message = sendValuesToBDD($nom_assoc, $mail_assoc, $id_res);
    

}

function modifAssocBDD($id_assoc, $nom_assoc, $mail_assoc, $id_res){
    updateValuesBDD($id_assoc, $nom_assoc, $mail_assoc, $id_res);
}

