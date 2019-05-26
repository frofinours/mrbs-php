<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
<header class="Entete">
    <?php 
    //On vérifie l'existence du cookie
    if (isset($_COOKIE['Utilisateur']) && $_COOKIE['Utilisateur'] != null)
    {
        echo "",'
        <div class="userBanner">',"
            <nav class='menu' id='SessionU'>
                <ul>
                    <li><a href='#'>Utilisateurs</a></li>
                    <li><a href='#'>Salles</a></li>
                    <li><a href='#'>Associations</a></li>
                    <span id='ProfilU'>
                        <li>
                        <span class='pseudo'>", $_COOKIE['Utilisateur'] , "</span>
                        </li>
                        <li>
                            <form id='btnDeconnexion' method='POST' action='?action=DeconnexionU'>
                                <input type='submit' value='Se déconnecter'>
                            </form>
                        </li>
                    </span>
                </ul>
            </nav>
        </div>";
        //TODO: Fix les href au prochain merge si on casse pas tout lol
        //Et j'ai besoin que les autres taffs soient finis pour que je puisse ajouter les conditions admins (edit data toussa toussa)
    }
    else
    {
        echo "<script>window.location = 'http://127.0.0.1/things/Lwiz/'</script>";
    }
?>
</header>


