<?php
 
require('controller/controller.php');

if (isset($_GET['action'])) 
{
    if ($_GET['action'] == 'editSalle') {
        editSalle();
    }
    else if ($_GET['action'] == 'viewSalle') {
        viewSalle();
    }
    else if($_GET['action'] == 'menuSalle'){
        menuSalle();
    }
    else{
        lostinspace();
    }
}
else
{
    menuSalle();
}

// if (!empty($_POST)) 
// {
//     if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
//         addUtilisateurBDD($_POST['name'], $_POST['email'], $_POST['password']);
//     }
// }

 ?>


