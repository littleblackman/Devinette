<?php
include_once('_config.php');

MyAutoload::start();

$url = $_GET['r']; // index.php?r....

$routeur = new Routeur($url);
$routeur->renderController();


