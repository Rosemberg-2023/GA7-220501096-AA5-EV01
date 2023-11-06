<?php
global $pdo;
include ("../../config.php");
$sql_usuarios = "select * from tb_usuarios ";
$query_usuarios = $pdo->prepare($sql_usuarios);
$query_usuarios->execute();
$datos_usuarios = $query_usuarios->fetchAll((PDO::FETCH_ASSOC));