<?php
//require_once('view/View.php');
class Router
{
    private $_ctrl;
    private $_view;

    public function routeReq()
    {
        try
        {
            //Chargement auto des classes
            spl_autoload_register(function($class)){
                require_once('model/'.$class.'.php');
            }

            //On initie la variable URL
            $url = '';

            //Si une action GET url existe
            if(isset($_GET['url']))
            {
                //explode sert à récupérer les paramètres de l'URL de manière séparée
                //filter pour éliminer les caractères illégaux dans les URL, un peu dans ce style-là: ಠᴗಠ 

                $url = explode('/', filter_var($_GET['url'],
                FILTER_SANITIZE_URL));

                //Modifie le 1er paramètre de l'url pour que seul la 1ère lettre soit en majuscule
                //$controller = ucfirst(strlower($url[0]));

                $controllerFile = "controller.php";

                //Si le fichier existe
                if(file_exists($controllerFile))
                {
                    //Alors on récupère ce même fichier
                    require_once($controllerFile);
                    //Encapsulation (faut bien sécuriser un peu tout ça)
                    //$this->_ctrl =  new $controllerClass($url);
                }
                //Si le fichier n'existe pas ¯\_(ツ)_/¯
                else
                {
                    
                    throw new Exception('Page introuvable!');
                }
            }

            //Si aucune action existe
            else
            {
                //TODO: Si une session existe déjà et n'a pas expiré
                if()
                {
                    //TODO: Rediriger vers la page user
                }
                //Si personne n'est connecté
                else
                {
                    require_once('controller/controller.php');
                    $this->_ctrl = new ControllerLogin($url);
                }

            }
        }
        //Gestion des erreurs
        catch(Exception $e)
        {
            $errorMsg = $e->getMessage();
            require_once('view/template/ViewError.php');
            //$this->_view = new View('Error');
            //$this->_view->generate(array('errorMsg' => $errorMsg));
        }
    }
}