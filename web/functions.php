<?php

function getCurrentPage()
{
    $current = $_SERVER['REQUEST_URI'];
    if ($current == '/')
    {
        $current = '/index.php';
    }
    return $current;
}

