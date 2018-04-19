<?php
include_once('_config.php');

if(isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "home";
}
include($action.'.php');
