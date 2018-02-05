<?php
    session_start();
    function __autoload($className) {
        $path = "libs/" . $className . ".php";
        require_once($path);
    }
    require_once('define.php');

    $bootstrap = new Bootstrap();
?>