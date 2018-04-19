<?php

/***** PARAMETRAGE **************/

// liste des pbages privées
function pages_private()
{
    return array('edit', 'delete');
}

function page_role($action)
{

    $page_role = array('edit' => 'ADMIN');

    if(!isset($page_role[$action])) return null;
    return $page_role[$action];
}



/****** METHODE ***********/

// public area
function isPublicArea($action)
{
    if(in_array($action, pages_private())) return false;
    return true;
}


function isUserAuthorized($action, $role)
{
    if(!page_role($action)) return null;
    if($role != page_role($action)) return null;
    return true;
}







