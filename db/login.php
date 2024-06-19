<?php
    require_once('./conexion.php');
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM usuarios WHERE correo = '$email'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if($result->num_rows > 0){
        if(password_verify($pass, $row['pass'])){
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['apellido'] = $row['apellido'];
            $_SESSION['pass'] = $pass;
            $_SESSION['email'] = $row['correo'];
            $_SESSION['fechaNacimiento'] = $row['fechadenacimiento'];
            $_SESSION['rol'] = $row['idRol'];
            $_SESSION['start_time'] = time();
            header("Location: ../index.php");
        }else{
            echo "
                <script>
                    alert('Contraseña incorrecta');
                    window.location = '../login.php';
                </script>
            ";
        }
    }else{
        echo "
            <script>
                alert('Usuario no encontrado');
                window.location = '../login.php';
            </script>
        ";
    }
?>