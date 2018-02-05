<?php 
    class Bootstrap
    {
        public function __construct() {
            $controllerName = (isset($_GET['controller'])) ? $_GET['controller'] : 'index';
            $actionName = (isset($_GET['action'])) ? $_GET['action'] : 'index';

            $url = "controllers/" . $controllerName . ".php";
            if(file_exists($url)) {
                require_once($url);
                $controller = new $controllerName();
                $controller->loadModel($controllerName);
                if(method_exists($controllerName, $actionName)) {
                    $controller->$actionName();
                } else {
                    $this->getError('action');
                }
            } else {
                $this->getError('controller');
            }
        }

        public function getError($type) {
            require_once('controllers/error.php');
            $error = new Errors();
            if($type == "controller")
                $error->controller();
            elseif($type == "action")
                $error->action();
            else $error->total();
        }
    }
    
?>