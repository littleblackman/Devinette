<?php
include_once('_config.php');

$request = $_GET['r']; // index.php?r....

include_once (CLASSES.'Routeur.php');

$routeur = new Routeur($request);
$routeur->renderController();


