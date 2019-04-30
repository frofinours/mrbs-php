<html>

	<link rel="stylesheet" href="css/style.css" media="screen" />

 <?php

 include '/view/afficheTEST.php';

 ?>

 <head>

     <title>Gestion des salles</title>
     <div id="bandeau"><h1>Gestion des salles</h1>
     <i>Que voulez-vous faire?</i>
     
<body class="formulaire">
  <br>
    <div id="buttons"><input type='button' id='menuButtonEdit' value="Modifier une salle" onclick="location.href='view/editSalle.php'"/>
  <br><br>
    <input type='button' id='menuButtonView' value="Voir les salles" onclick="location.href='view/viewSalle.php'"/></div>

</div>