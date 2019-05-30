<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>403</title>
    </head>
    <body>
        <h1>Accès interdit</h1>
        <p>Vous n'êtes pas autorisé à consulter cette page.</p>
        <a id="Return" href="Salut ça va" 
        onclick="Return();return false;">Retourner à la page d'accueil</a>
    </body>
    <script>
    function Return(){
        window.location = 'http://127.0.0.1/things/Lwiz/';
    }
    </script>

</html>