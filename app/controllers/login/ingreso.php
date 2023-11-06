<?php
global $pdo, $URL;
/**
 * Created by PhpStorm.
 * User: Jahsin Farrufia Barco
 * Date: 11 - 03-2023
 * Time: 21-55
 * Version : 2.0
 * www.sadebb.com/sadebbv2
 */
//ruta del archivo que contiene las variables generales del sistema de gestion administrativo para salones de bellezas y barberias

include ('../../config.php');
//captura de datos proveniente de formulario de logueo para validar con los datos de la base de datos
$email = $_POST['email'];
$password_user = $_POST['password_user'];



$contador = 0;
//asignar a la variable sql la consulta sql para validar los datos recibidos por medio de Post  del formulario
$sql = "SELECT * FROM tb_usuarios WHERE email = '$email'";
//$sql = "SELECT * FROM tb_usuarios WHERE email = '$email'  AND password_user = '$password_user'";

//SELECT * FROM sadebb_web_v2.tb_usuarios where email = '$email' and  password_user = 'password_user';
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario){
    $contador = $contador + 1;
    $email_tabla = $usuario['email'];
    $nombres = $usuario['nombres'];
    $password_user_tabla = $usuario['password_user'];
}
//$hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';
//metodos para encriptar la informacion en la base de datos
if( ($contador > 0) && (password_verify($password_user, $password_user_tabla))  ){
    //if($contador ==0){
    echo "Datos correctos";
    session_start();
    $_SESSION['sesion_email'] = $email;
    header('Location: '.$URL.'/index.php');
}else{
    echo "Datos incorrectos, vuelva a intentarlo";
    session_start();
    $_SESSION['mensaje'] = "Error datos incorrectos";
    header('Location: '.$URL.'/login');
}

