<?php
function erreur($err='')
{
   $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
   exit('<p>'.$mess.'</p>
   <p>Cliquez <a href="connexion.php">ici</a> pour revenir en arrière</p></div></body></html>');
}
?>
