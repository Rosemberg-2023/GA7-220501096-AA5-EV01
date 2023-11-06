<?php
session_start();
if(isset($_SESSION['sesion_email'])) {
    // echo "Si existe Session ".$_SESSION['sesion_email'];
    $email_sesion = $_SESSION['sesion_email'];
    $sql = "SELECT * FROM tb_usuarios WHERE email = '$email_sesion'";
//SELECT * FROM sadebb_web_v2.tb_usuarios where email = '$email' and  passwor_user = 'password_user';
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($usuarios as $usuario) {
        $nombres = $usuario['nombres'];
    }
}else{

    echo "No Existe Sesion ";
    header('location: '.$URL.'/login');
}