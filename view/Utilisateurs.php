<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion utilisateurs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" media="screen" href="css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/buttons.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/select.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.buttons.min.js"></script>
    <script src="js/dataTables.select.min.js"></script>
    <script src="js/utilisateur.js"></script>
</head>

<body>
    <table id="userList" class="display">
        <thead>
            <tr>
                <th>id</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Supprimé?</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($users = $userList->fetch()) {
                ?>
            <tr>
                <td> <?php echo $users['id']; ?> </td>
                <td>
                    <center><?php echo $users['name']; ?></center>
                </td>
                <td>
                    <center><?php echo $users['email']; ?></center>
                </td>
                <td>
                    <center>
                        <?php 
                        if ($users['dateSuppression'] == null) {
                            echo ("Non");
                        } else {
                            echo ("Oui");
                        }
                        ?>
                    </center>
                </td>
            </tr>
            <?php

        }
        ?>
        </tbody>
    </table>
    <?php
    $userList->closeCursor();
    ?>
</body>

</html> 