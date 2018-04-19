<?php
include_once('_config.php');

// create the action request
if(isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "home";
}

// create the user session
$username = getUsername();
$role     = getRole();

// firewall page
if( isPublicArea($action) ) {
    if(file_exists($action.'.php')) {
        include($action.'.php');
    } else {
        include('404.php');
    }

} else {

    // page private if authorized
    if (isUserAuthorized($action, $role))
    {
        include($action.'.php');
    } else {
        header('location:index.php?action=login');
        exit;
    }
}



