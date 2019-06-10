<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Modifier une salle</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css" media="screen" />
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script src="js/Salle/scripts.js"></script>
</head>

<body class="formulaire"> 
  <div class="form">
    <form id='editSalleForm' action='?action=editSalle' method='POST'>
    <h1>Gestion des salles</h1>
    <input type='button' id='buttonRetour' value="<- Retour" onclick="document.location.href='?action=menuSalle'"/>

  <h2>Séléctionnez la salle à modifier</h2>

  <b>Salle : </b>


  <select id="roomSelect" name="salleSelect" value="" onchange='setResults()'>
  <option value=null selected>--Choisissez une salle--</option>
  
<?php

    foreach($salles as $salle)
      {
        echo "<option value='".$salle->id."'>".$salle->room_name."</option>";
      }
?>

  </select>
  <br><br>
      <b>Type :</b>

      <select id="area" name="typeSelect" value="">
      <option value="">--Choisissez un type de salle--</option>
      <?php
        foreach($types as $type){
          echo "<option value='".$type['id']."'>".$type['area_name']."</option>";
        }

        ?>
        </select>

      <b>Description :</b>
      <input type="text" name="description" id="description"/><br><br>
      <b>Capacité :</b>
      <input type="text" name="capacite" id="capacite"/><br><br>
      <b>E-mail :</b>
      <input type="email" name="emailRoom" id="emailRoom" onkeyup="verifMail()"/><br>
      <input type='submit' id='buttonModif' value="Modifier la salle" disabled="true"/>
      <br><br>
      <input type='button' id='buttonCancel' value="Réinitialiser" onclick="setResults()" disabled="true"/>
    </form>
  </div>
</body>
  <br><br>



