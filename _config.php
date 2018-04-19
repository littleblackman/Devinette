<?php
/*** configuration *****/
ini_set('display_errors','on');
error_reporting(E_ALL);

// start session
session_start();
include_once ('_bdd.php');
include_once ('_session.php');
include_once ('_security.php');



// constantes
$root = $_SERVER['DOCUMENT_ROOT'];
define('ROOT', $root);

