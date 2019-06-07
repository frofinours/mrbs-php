<header class="Entete">
    <?php 
    //On vérifie l'existence du cookie pour savoir si l'utilisateur est toujours connecté ou non
    if (isset($_COOKIE['Utilisateur']) && $_COOKIE['Utilisateur'] != null)
    {
        ?>
        <div class="userBanner">
            <nav class='menu' id='SessionU'>
                <ul>
                    <li><a id="Home" href="view/template/JavascriptError.php" onclick="HomeReturn();return false;">Home</a></li>                                                                                                 
                    <li><a href='?action=utilisateurs'>Utilisateurs</a></li>
                    <li><a href='?action=menuSalle'>Salles</a></li>
                    <li><a href='?action=menuAssoc'>Associations</a></li>
                    <span id='ProfilU'>
                        <li>
                        <span class='pseudo'><?php echo $_COOKIE['Utilisateur']; ?></span>
                        </li>
                        <li>
                            <form id='btnDeconnexion' method='POST' action='?action=DeconnexionU'>
                                <input type='submit' value='Se déconnecter'>
                            </form>
                        </li>
                    </span>
                </ul>
            </nav>
        </div>
        <?php
    }
    else
    {
        echo "<script>window.location = 'http://127.0.0.1/GESTBASE';</script>";
    }
?>
<script src="js/Template/Redirection.js"></script>
</header>
<br />
<br />
<br />


