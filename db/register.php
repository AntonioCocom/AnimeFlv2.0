<?php
    require_once('./conexion.php');
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fechaNacimiento = $_POST['FechaNacimiento'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM usuarios WHERE correo = '$email'";
    $results = $conn->query($sql);
    if($results->num_rows > 0){
        echo "
            <script>
                alert('El correo ya está registrado');
                window.location = '../registro.php';
            </script>
        ";
        exit();
    }else {
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios (nombre, apellido, fechadenacimiento, correo, pass, idRol) VALUES ('$nombre', '$apellido','$fechaNacimiento', '$email', '$pass', 2)";
        $result = $conn->query($sql);
    
        if($result){
            echo "
                <script>
                    alert('Usuario registrado con éxito');
                    window.location = '../login.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Error al registrar usuario');
                    window.location = '../registro.php';
                </script>
            ";
        }
    }
?>