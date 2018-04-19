<?php

function getUsername()
{
    if(!isset($_SESSION['username'])) return null;
    return $_SESSION['username'];
}

function getRole()
{
    if(!isset($_SESSION['role'])) return null;
    return $_SESSION['role'];
}

function createSession($user)
{
    $_SESSION['role']     = $user['role'];
    $_SESSION['username'] = $user['username'];
}