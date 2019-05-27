<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion utilisateurs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    require('view/template/Header.php');
    ?>
    <link rel="stylesheet" type="text/css" media="screen" href="css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/buttons.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/select.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.buttons.min.js"></script>
    <script src="js/dataTables.select.min.js"></script>

    <?php
    //On vérifie si l'utilisateur est admin (ou non)
    if ($_COOKIE['Level'] == 1) {
        ?><script src="js/Utilisateur/utilisateur.js"></script><?php
    }
    else
    {
        ?><script src="js/Utilisateur/utilisateurNonAdmin.js"></script><?php
    }    
    ?>


    <!--Zone de Maxime -->

</head>
<body>
    <br />
    <br />
    <br />
    <table id="userList" class="display">
        <thead>
            <tr>
                <th>id</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Supprimé</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($users = $userList->fetch()) 
            {
                ?>
                <tr>
                    <td> <?php echo $users['id']; ?> </td>
                    <td>
                        <?php echo $users['name']; ?>
                    </td>
                    <td>
                        <?php echo $users['email']; ?>
                    </td>
                    <td>
                        <?php 
                        if ($users['dateSuppression'] == null) {
                            echo ("Non");
                        } else {
                            $users['dateSuppression'];
                        }
                        ?>
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