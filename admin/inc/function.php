<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 25/08/14
 * Time: 20:54
 */

require_once ("Db/conexao.php");


$route = ['home', 'empresa', 'produtos', 'servicos', 'contato', 'actions', 'login'];

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
    if(user() == true){
        if(getUrl() == null){
            require_once('inc/home.php');
        }else if(inArray() == true && exists() == true){
            require_once("inc/".getUrl().'.php');
        }else{
            require_once("inc/error.php");
        }
    }elseif(user() == false){
        require_once("inc/login.php");
    }

}

function user()
{
    if(isset($_SESSION['user']) OR getUrl() == "actions"){
        return true;
    }{
        return false;
    }
}

function logar($array = array()){
    $db = conexao();

    $query = "SELECT * FROM users WHERE login = :login AND senha = :senha";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':login',$array['login']);
    $stmt->bindValue(':senha', $array['senha']);

    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}

function find($pg){
    $db = conexao();

    $query = "SELECT * FROM conteudo WHERE pagina = :pg";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':pg', $pg);
    $stmt->execute();
    return $stmt->fetch(\PDO::FETCH_ASSOC);
}

function update($pg, $con, $id)
{
    $db = conexao();
    $query = "UPDATE conteudo SET pagina = :pagina, conteudo= :conteudo WHERE id = :id";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':pagina', $pg);
    $stmt->bindValue(':conteudo', $con);
    $stmt->bindValue(':id', $id);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}