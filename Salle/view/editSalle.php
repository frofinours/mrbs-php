<script type="text/javascript" src="../controller/js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="../controller/css/style.css" media="screen" />
 
<script src="../controller/js/scripts.js"></script>

 <head>

     <title>Modifier une salle</title>
     <div id="bandeau">
      <h1>Gestion des salles</h1>
       <div id="buttons"><input type='button' id='buttonRetour' value="<- Retour" onclick="location.href='../controller/index.php'"/>

     <h2>Modifier une salle</h2>Salle : </div>

  <select id="roomname" name="salle" value="" onchange='setResults()'>
    <option value="">--Choisissez une salle--</option>
<?php
    include '..\model\requetes.php';

    $salles = getSalles();
 
    foreach($salles as $salle)
      {
        echo "<option value='".$salle->room_name."'>".$salle->room_name."</option>";
      }
?>
  </select><br>


<body>
  <br>
    <form id="formuCreerSalle">
      Type :
      <input type="text" id="area"/><br><br>
      Description :
      <input type="text" id="description"/><br><br>
      Capacité :
      <input type="number" id="capacite"/><br><br>
      E-mail :
      <input type="email" id="email"/><br>
    </form>

    <div id="buttons"><input type='submit' id='buttonCreer' value="Modifier la salle" onclick="" disabled="true"/>
  <br><br>



