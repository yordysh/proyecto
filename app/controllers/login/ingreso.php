<?php
include "../../../app/config.php";


$base_de_datos = DataBase::Conectar();

$email = $_POST["email"];
$password_user = $_POST["password_user"];

$contador = 0;
$sql = "SELECT * FROM tb_usuarios WHERE email=:email AND CONVERT(nvarchar(max), password_user) = :password_user";
$query = $base_de_datos->prepare($sql);
$query->bindParam(':email', $email, PDO::PARAM_STR);
$query->bindParam(':password_user', $password_user, PDO::PARAM_STR);
$query->execute();


$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios as $usuario) {
    $contador++;
    $email_table = $usuario['email'];
    echo $nombres = $usuario['nombres'];
}
if ($contador == 0) {
    // echo "Datos incorrectos";
    session_start();
    $_SESSION['mensaje'] = 'Error datos incorrectos';
    header('location: ' . $baseURL . '/login');
} else {
    echo "Datos correctos";
    session_start();
    $_SESSION["session_email"] = $email;
    header("location: $baseURL/index.php");
}
