<?php
//recuperar contrasea utilizando phpMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require_once('./conexion.php');
require_once('../phpMailer/PHPMailerAutoload.php');
$email = $_POST['email'];
$sql = "SELECT * FROM usuarios WHERE correo = '$email'";

$result = $conn->query($sql);
if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = '';
    $mail->Password = '';
    $mail->setFrom('
    ', 'Recuperar contraseña');
    $mail->addAddress($email, $row['nombre']);
    $mail->Subject = 'Recuperar contraseña';
    $mail->Body = 'Hola '.$row['nombre'].'. Tu contraseña es: '.$row['contraseña'];
    if($mail->send()){
        echo "
            <script>
                alert('Contraseña enviada a tu correo');
                window.location = '../login.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Error al enviar contraseña');
                window.location = '../recuperar.php';
            </script>
        ";
    }
}else{
    echo "
        <script>
            alert('Correo no encontrado');
            window.location = '../recuperar.php';
        </script>
    ";
}


?>