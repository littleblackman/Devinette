<?php
include_once('_config.php');

$request = $_GET['r']; // index.php?r....

if($request == "home")
{
    include_once (CONTROLLER.'home.php');
} else {
    echo '404';
}


