<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="../css/style.css" media="screen" />
 
<script src="../js/scripts.js"></script>

 <head>


    <div id="title"><title>Modifier une salle</title></div>
    <h1>Gestion des salles</h1>

    <body class="formulaire"> 
    <form class="form">

      <input type='button' id='buttonRetour' value="<- Retour" onclick="location.href='../index.php'"/>
    
    <h2>Modifier une salle</h2>
    <b>Salle : </b>

    <select id="roomname" name="salle" value="" onchange='setResults()'>
    <option value="">--Choisissez une salle--</option>
<?php
    include '..\bdd\requetes.php';

    $salles = getSalles();
 
    foreach($salles as $salle)
      {
        echo "<option value='".$salle->room_name."'>".$salle->room_name."</option>";
      }
?>
  </select>
  <br><br>

      <b>Type :</b>
      <input type="text" id="area"/><br><br>
      <b>Description :</b>
      <input type="text" id="description"/><br><br>
      <b>Capacité :</b>
      <input type="text" id="capacite"/><br><br>
      <b>E-mail :</b>
      <input type="email" id="email"/><br>
      <input type='submit' id='buttonCreer' value="Modifier la salle" onclick="" disabled="true"/>
    </form>

  <br><br>



