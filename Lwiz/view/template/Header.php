<header class="Entete">
    <?php 
    //On vérifie l'existence du cookie
    if (isset($_COOKIE['Utilisateur']) && $_COOKIE['Utilisateur'] != null)
    {
        setcookie('Utilisateur',$theRow[0],time()+300);
        echo "",'
        <div class="userBanner">',"
            <nav class='menu' id='SessionU'>
                <ul>
                    <li><a href='#'>Home</a></li>
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
?>
</header>


