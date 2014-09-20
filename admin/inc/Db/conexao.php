<?php

function conexao()
{

    try{
        $config = require_once 'config.php';
        if(!isset($config['db'])){
            throw new \InvalidArgumentException("Configuração do bando de dados não existe!");
        }

        $host = (isset($config['db']['host'])) ? $config['db']['host'] : null;
        $dbname = (isset($config['db']['dbname'])) ? $config['db']['dbname'] : null;
        $user = (isset($config['db']['user'])) ? $config['db']['user'] : null;
        $pass = (isset($config['db']['pass'])) ? $config['db']['pass'] : null;

        return new \PDO("mysql:host={$host};dbname={$dbname}",$user,$pass);


    }catch (\PDOException $e){
        echo $e->getMessage()."\n";
        echo $e->getTraceAsString()."\n";
    }

}