<?php
global $URL;
/**
 * Created by PhpStorm.
 * User: Jahsin Farrufia
 * Date: 11-03-2023
 * version: 2.0
 * Time: 08:47
 */

include ('../../config.php');

session_start();
if(isset($_SESSION['sesion_email'])){
    session_destroy(); // destruccion de sesion
    header('Location: '.$URL.'/login'); // redirecciona a la vista de login para volver validar los datos
}
