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
