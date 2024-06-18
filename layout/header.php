<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./css/styles.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>SuperStore</title>
</head>

<body>
    <?php
    session_start();
    include_once('./layout/navbar.php');

    // if (isset($_SESSION['id'])) {
    //     $tiempo_transcurrido = time() - $_SESSION['start_time'];
    //     if ($tiempo_transcurrido > 10) {
    //         session_unset();
    //         session_destroy();
    //         echo "<script>
    //         alert('Sesion expirada');
    //         window.location.reload();
    //         </script>";
    //         exit();
    //     }
        
    // }
    ?>
    <div class="container">
        <div id="resultados" class="mt-4"></div>
    </div>