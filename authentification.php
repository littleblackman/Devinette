<?php

$login    = $_POST['login'];
$password = $_POST['password'];

if($user = getUser($login, $password)) {
    createSession($user);
    header("location:index.php?action=home");
    exit;
} else {
    header("location:index.php?action=login");
    exit;
}






