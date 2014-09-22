<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 11/09/14
 * Time: 18:55
 */

require_once "Db/conexao.php";

$conn = conexao();


$query = "CREATE DATABASE IF NOT EXISTS `sitesimple` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
$stmp = $conn->prepare($query);
if($stmp->execute()){
    echo "ok db\n";
}else{
    echo "DB ja existe\n";
}

$create = $conn->query("CREATE TABLE IF NOT EXISTS `sitesimple`.`conteudo` (
                      `id` INT NOT NULL AUTO_INCREMENT,
                      `pagina` VARCHAR(255) NULL,
                      `conteudo` TEXT NULL,
                      PRIMARY KEY (`id`));");
if($create){
    echo "ok conteudo\n";
}else{
    echo "conteudo ja existe\n";
}

$create = $conn->query("CREATE TABLE IF NOT EXISTS `sitesimple`.`contato` (
                      `id` INT NOT NULL AUTO_INCREMENT,
                      `nome` VARCHAR(255) NULL,
                      `email` VARCHAR(255) NULL,
                      `assunto` VARCHAR(255) NULL,
                      `mensagem` VARCHAR(255) NULL,
                      PRIMARY KEY (`id`));");
if($create){
    echo "ok contato\n";
}else{
    echo "Contato ja existe\n";
}

$sql = "INSERT INTO `sitesimple`.`conteudo` (`pagina`, `conteudo`) VALUES ('home', 'Conteudo home')";
$stmt = $conn->prepare($sql);

if(!$stmt->execute()):
    die(var_dump($stmt->errorInfo()));
else:
    echo "Conteudo home criado com sucesso ! \n";
endif;

$sql = "INSERT INTO `sitesimple`.`conteudo` (`pagina`, `conteudo`) VALUES ('empresa', 'Conteudo empresa')";
$stmt = $conn->prepare($sql);

if(!$stmt->execute()):
    die(var_dump($stmt->errorInfo()));
else:
    echo "Conteudo empresa criado com sucesso ! \n";
endif;

$sql = "INSERT INTO `sitesimple`.`conteudo` (`pagina`, `conteudo`) VALUES ('produtos', 'Conteudo produtos')";
$stmt = $conn->prepare($sql);

if(!$stmt->execute()):
    die(var_dump($stmt->errorInfo()));
else:
    echo "Conteudo produtos criado com sucesso ! \n";
endif;

$sql = "INSERT INTO `sitesimple`.`conteudo` (`pagina`, `conteudo`) VALUES ('servicos', 'Conteudo servicos')";
$stmt = $conn->prepare($sql);

if(!$stmt->execute()):
    die(var_dump($stmt->errorInfo()));
else:
    echo "Conteudo servicos criado com sucesso ! \n";
endif;


$sql = "INSERT INTO `sitesimple`.`conteudo` (`pagina`, `conteudo`) VALUES ('contato', 'Conteudo contato')";
$stmt = $conn->prepare($sql);

if(!$stmt->execute()):
    die(var_dump($stmt->errorInfo()));
else:
    echo "Conteudo contato criado com sucesso ! \n";
endif;

/**
 ADMIN
 **/


$create = $conn->query("CREATE TABLE IF NOT EXISTS `sitesimple`.`users` (
                      `id` INT NOT NULL AUTO_INCREMENT,
                      `login` VARCHAR(20) NULL,
                      `senha` VARCHAR(255) NULL,
                      PRIMARY KEY (`id`));");
if($create){
    echo "ok conteudo\n";
}else{
    echo "conteudo ja existe\n";
}

$senha = password_hash('123456', PASSWORD_DEFAULT);

$sql = "INSERT INTO `sitesimple`.`users` (`login`, `senha`) VALUES ('orlando', '$senha')";
$stmt = $conn->prepare($sql);

if(!$stmt->execute()):
    die(var_dump($stmt->errorInfo()));
else:
    echo "Conteudo contato criado com sucesso ! \n";
endif;