<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Voir une salle</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="css/style.css" media="screen" />
</head>
     <title>Voir les salles</title>

<form class="form">
 <body class="formulaire">
     
 <h1>Gestion des salles</h1>
    <input type='button' id='buttonRetour' value="<- Retour" onclick="document.location.href='?action=menuSalle'"/><br>

    <h2>Voir les salles</h2>
    <i>Voici la liste des salles enregistrées</i>
    <br><br>

    <table id="roomList" class="display" cellspacing="5" width="100%">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Type</th>
                <th>Description</th>
                <th>Capacité</th>
                <th>E-mail</th>
            </tr>
        </thead>
    <tbody>
      <?php
    foreach($salles as $salle)
      {
        ?>
        <tr>
          <td><center><?php echo $salle->room_name ?><center></td>
          <td><center><?php echo getAreaFromId($salle->area_id) ?><center></td>
          <td><center><?php echo $salle->description ?><center></td>
          <td><center><?php echo $salle->capacity ?><center></td>
          <td><center><?php echo $salle->room_admin_email ?><center></td>
        </tr>
    <?php
      }
      ?>
    </tbody>
    </table>
</body>

<br>
