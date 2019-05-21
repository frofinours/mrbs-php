<header>
    <?php 
    //On vérifie l'existence du cookie
    if (isset($_COOKIE['Utilisateur']) && $_COOKIE['Utilisateur'] != null)
    {
        echo "
        <div id='userBanner'>
            <p>", $_COOKIE['Utilisateur'] , "</p>
            <form id='btnDeconnexion' method='POST' action='?action=DeconnexionU'>
                <input type='submit' value='Se déconnecter'>
            </form> 
            <nav class='menu' id='SessionU'>
                <ul>
                    <li><a href='#'>Utilisateurs</a></li>
                    <li><a href='#'>Salles</a></li>
                    <li><a href='#'>Associations</a></li>
                </ul>
            </nav>
        </div>";
        //TODO: Fix les href au prochain merge si on casse pas tout lol
        //Et j'ai besoin que les autres taffs soient finis pour que je puisse ajouter les conditions admins (edit data toussa toussa)
    }
?>
</header>


