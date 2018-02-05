<?php 
    class View
    {
        public function Render($conoller, $action, $full = true) {
            if($full == true) {
                include_once('views/header.php');
                require_once('views/' . $conoller . "/" . $action . ".php");
                include_once('views/footer.php');
            } else {
                require_once('views/' . $conoller . "/" . $action . ".php");
            }
            
        }
    }
    
?>