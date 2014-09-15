<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 25/08/14
 * Time: 20:54
 */

require_once ("Db/conexao.php");


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

function read($tabela, $order = null, $sent = null) {
    $db = conexao();
    if($order == null && $sent == null){
        $query = "Select * from $tabela";
    }else if(!empty($order) && !empty($sent)){
        $query = "Select * from $tabela ORDER BY $order $sent";
    }else{
        $query = "Select * from $tabela";
    }

    $stmt = $db->query($query);
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);

}

function busca($val){
    $read = read('conteudo');
    if($read === $val){
        echo "Acessar: <a href='{$val}'>{$val}</a>";
    }
}