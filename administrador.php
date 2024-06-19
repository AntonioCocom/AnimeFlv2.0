<?php
require_once('./layout/header.php');
?>
<div class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Panel de Administrador</span>
    </div>
</div>
<!-- Barra lateral -->
<div class="sidebar">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="#">
                <i class="fas fa-home"></i>
                Inicio
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="btnusers" href="#">
                <i class="fas fa-users"></i>
                Usuarios
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="btnProducto" href="#">
                <i class="fas fa-gamepad"></i>
                Animes
            </a>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-cog"></i>
                Configuración
            </a>
        </li>

    </ul>
</div>

<!-- Contenido principal -->
<div class="content">
    <h1>Bienvenido al Panel de Administrador</h1>
    <p>Este es el contenido principal del panel de administrador.</p>
</div>

<section>

    <?php
    require_once('./Animes.php');
    require_once('./agregarProductos.php');
    ?>
</section>

<script src="./js/view.js"></script>
<?php

require_once('./layout/footer.php');
?>