<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 25/08/14
 * Time: 20:54
 */

$route = ['home', 'empresa', 'produtos', 'servicos', 'contato'];

//pegando url parcial
function getUrl()
{
    $getUrl = \parse_url($_SERVER['REQUEST_URI'], \PHP_URL_PATH);
    $url = explode("/", $getUrl);
    return $url[1];
}

//verificando se existe na array a url digitada
function inArray()
{
    return in_array(getUrl(), $GLOBALS['route']);
}

//verificando existencia do arquivo
function exists()
{
    return file_exists('inc/'.getUrl().'.php');
}

//Verifica se esta tudo certo e da require
function checks()
{
    if(getUrl() == null){
        require_once('inc/home.php');
    }else if(inArray() == true && exists() == true){
        require_once("inc/".getUrl().'.php');
    }else{
        require_once("inc/error.php");
    }
}