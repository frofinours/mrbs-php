<?php 
require('controller/controller.php');


//On vérifie si une action existe
if (isset($_GET['action'])) 
{
    if ($_GET['action'] == 'utilisateurs') {
        getUtilisateurs();
    }
    else if ($_GET['action'] == 'ConnexionU') {
        getConnexion($_POST['username'], $_POST['password']);
    }
    else if ($_GET['action'] == 'DeconnexionU') {
        getDeconnexion();
    }
    else if ($_GET['action'] == 'menuAssoc') {
        menuAssoc();
    }
    else if ($_GET['action'] == 'menuSalle'){
        menuSalle();
    }
    else if ($_GET['action'] =='viewSalle'){
        viewSalle();
    }

    /** Droits admin nécessaire**/

    else if ($_GET['action'] == 'AjouterU') {
        if(isset($_COOKIE['Level']) && $_COOKIE['Level'] == 1){
            addUtilisateur();
        }
        else
        {
            get403();
        }
    }
    else if ($_GET['action'] == 'ModifierU') {
        if(isset($_COOKIE['Level']) && $_COOKIE['Level'] == 1){
            editUtilisateurId($_GET['id']);
        }
        else
        {
            get403();
        }
    }
    else if ($_GET['action'] == 'creerAssoc') {
        if(isset($_COOKIE['Level']) && $_COOKIE['Level'] == 1){
            creationAssoc();
        }
        else
        {
            get403();
        }
    }
    else if ($_GET['action'] == 'modifAssoc') {
        if(isset($_COOKIE['Level']) && $_COOKIE['Level'] == 1){
            modifAssoc();
        }
        else
        {
            get403();
        }
    }
    else if($_GET['action'] == 'editSalle'){
        if(isset($_COOKIE['Level']) && $_COOKIE['Level'] == 1){
            editSalle();
        }
        else
        {
            get403();
        }
    }
    else{
        lostinspace();
    }
}
else
{
    //On vérifie l'existence d'un cookie
    if (isset($_COOKIE['Utilisateur']) && $_COOKIE['Utilisateur'] != null)
    {
        //Page d'accueil
        getMenu();
    }
    else
    {
        //Portail de connexion
        getPortail();
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
?>
