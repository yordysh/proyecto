<?php
session_start();

if (isset($_SESSION['session_email'])) {
    $email_session = $_SESSION['session_email'];
    $consulta = "SELECT * FROM tb_usuarios WHERE email='$email_session'";
    $query = $base_de_datos->prepare($consulta);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($usuarios as $usuario) {
        $nombres_sesion = $usuario['nombres'];
    }
} else {
    echo "No existe ";
    header("location: $baseURL/login");
}
