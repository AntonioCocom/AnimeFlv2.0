<?php
include_once('conexion.php');
session_start();
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$año = $_POST['año'];
$idCategoria = $_POST['categoria'];
$idPublicador = $_SESSION['id'];

$sql = "INSERT INTO anime (nombre, descripcion, año, idCategoria, idPublicador) VALUES ('$nombre', '$descripcion', '$año', '$idCategoria', '$idPublicador')";
$resultado = $conn->query($sql);

$idAnime = $conn->insert_id;

$targetDirectory = "../uploads/$nombre/";
$targetlocal = "./uploads/$nombre/";

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

foreach ($_FILES["imagenes"]["name"] as $key => $name) {
    $targetFile = $targetDirectory . basename($name);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["imagenes"]["tmp_name"][$key]);
    if ($check !== false) {
        if (move_uploaded_file($_FILES["imagenes"]["tmp_name"][$key], $targetFile)) {
            $nombre_imagen = basename($name);
            $targetFile = $targetlocal . basename($name);
            $ruta_imagen = $targetFile;
            $sql2 = "INSERT INTO imagenes (propietario, nombre_imagen, ruta_imagen, idAnime) VALUES ('$nombre', '$nombre_imagen', '$ruta_imagen', $idAnime)";
            $resultado = $conn->query($sql2);
            echo "<script>
                alert('Guardado con exito')
                window.location= '../admin.php' 
            </script>";
        } else {
            $delete = "DELETE FROM anime WHERE id = $idAnime";
            $conn->query($delete);
            echo "<script>
            alert('error en guardar')
            window.location= '../admin.php'
            </script>";
        }
    } else {
        echo "<script>
        alert('Formato no soportado')
        window.location= '../admin.php'
        </script>";
    }
}
?>