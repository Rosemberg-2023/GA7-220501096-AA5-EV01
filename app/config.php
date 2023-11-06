<?php
global $pdo, $URL;
/**
 * Created by PhpStorm.
 * User: Jahsin farrufia
 * Date: 11/04/2023
 * Time: 13:00
 */
// Se definen las variables que contienen los datos de la conexion al servidor de base de datos y ala base de datos

define('SERVIDOR','localhost:3306');
define('USUARIO','root');
define('PASSWORD','@Salome8325');
define('BD','sadebb_web_v2');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "La conexión a la base de datos fue con exito";
}catch (PDOException $e){
    //print_r($e);
    echo "Error al conectar a la base de datos";
}
//a la variable URL se le asigna la direccion del servidor para hacer el traslado facilmente,
// solo se cambia la ruta de acuerdo al servidor donde se vaya a alojar este codigo
$URL = "http://localhost/sadebb.com";
// para evitar el ingreso de fechas y horas de zonas horarias basadas en la configuracion de la co[putadora
date_default_timezone_set("America/Bogota");
$fechaHora = date('Y-m-d H:i:s');


