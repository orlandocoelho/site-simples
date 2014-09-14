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


$paginas = [
    "home" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consectetur consequuntur dicta dolorem enim error hic in ipsa maiores minus, modi molestiae, mollitia omnis praesentium quasi repudiandae ullam velit vero. ",
    "empresa" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consectetur consequuntur dicta dolorem enim error hic in ipsa maiores minus, modi molestiae, mollitia omnis praesentium quasi repudiandae ullam velit vero. ",
    "produtos" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consectetur consequuntur dicta dolorem enim error hic in ipsa maiores minus, modi molestiae, mollitia omnis praesentium quasi repudiandae ullam velit vero. ",
    "serviços" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consectetur consequuntur dicta dolorem enim error hic in ipsa maiores minus, modi molestiae, mollitia omnis praesentium quasi repudiandae ullam velit vero. "
];

$sql = "INSERT INTO `code_education`.`conteudo` (`pagina`, `conteudo`) VALUES ('home', 'conteudo da pagina sobre')";
$stmt = $conn->prepare($sql);
if(!$stmt->execute()):
    die(var_dump($stmt->errorInfo()));
else:
    echo "Conteudo pagina de conteudo criado com sucesso ! \n";
endif;