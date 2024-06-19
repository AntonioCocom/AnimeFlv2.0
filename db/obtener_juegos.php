<?php
$servername = "localhost";
$username = "root";
$password = "151222";
$dbname = "anime";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT 

anime.id, 
anime.nombre,
anime.descripcion,
anime.año,
anime.idCategoria,
anime.idPublicador 
 FROM anime";

$result = $conn->query($sql);

$juegos = array();



if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $sqlimg = "SELECT * FROM imageurl WHERE idAnime = " . $row['id'];
        $resultimg = $conn->query($sqlimg);
        $imagenes = array();
        if ($resultimg->num_rows > 0) {
            while ($rowimg = $resultimg->fetch_assoc()) {
                $imagen = array(
                    "id" => $rowimg['id'],
                    "url" => $rowimg['src'],
                    "idAnime" => $rowimg['idAnime'],
                );
                array_push($imagenes, $imagen);
            }
        }
        $juego = array(
            "id" => $row['id'],
            "nombre" => $row['nombre'],
            "descripcion" => $row['descripcion'],
            "año" => $row['año'],
            "categoria" => $row['idCategoria'],
            "Publicador" => $row['idPublicador'],
            "imagenes" => $imagenes
        );
        array_push($animes, $anime);
    }
}

$conn->close();


echo "<pre>";
print_r($animes);
echo "</pre>";

?>