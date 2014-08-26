<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 25/08/14
 * Time: 20:54
 */

$route = ['home', 'empresa', 'produtos', 'servicos', 'contato'];

function getUrl()
{
    $getUrl = \parse_url($_SERVER['REQUEST_URI'], \PHP_URL_PATH);
    $url = explode("/", $getUrl);
    return $url[1];
}

function inArray(){
    return in_array(getUrl(), $GLOBALS['route']);
}
