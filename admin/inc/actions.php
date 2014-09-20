<?php
require_once ('function.php');

$submit = filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_STRING);

switch($submit){
    case 'logar':

        $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

        $array = [
            'login' => $login,
            'senha' => password_hash($senha, PASSWORD_DEFAULT)
        ];

        if(logar($array) == true){
            $_SESSION['user'] = 1;
            header('Location: home');
        }else{
            $_SESSION['user'] = 0;
            header('Location: login.php');
            echo "Login e/ou Senha invalida!";
        }

        break;
    case 'update':

        $textarea = filter_input(INPUT_POST, 'textarea', FILTER_DEFAULT);
        $pg = filter_input(INPUT_POST, 'pg', FILTER_SANITIZE_STRING);
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

        if(update($pg, $textarea, $id) == true){
            header('Location:'.$pg);
        }else{
            echo "erro ao alterar conteudo";
        }


        break;
    default;
}