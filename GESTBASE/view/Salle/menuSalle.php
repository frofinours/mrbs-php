<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="css/style.css" media="screen" />
    <meta charset="utf-8" />
    <title>Salles</title>
    <!-- <script src=""></script> -->
</head>

<form class="form">
  <body class="formulaire">
  <h1>Gestion des salles</h1>
      <i>Que souhaitez-vous faire?</i>

 <br><br>
   <input type='button' id='menuButtonEdit' value="Modifier une salle" onclick="window.location='?action=editSalle'"/>
 <br><br>
   <input type='button' id='menuButtonView' value="Voir les salles" onclick="window.location='?action=viewSalle'"/>
<br><br>
   <input type='button' id='buttonQuit' value="<- Quitter" onclick="document.location.href='index.php'"/>