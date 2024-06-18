<nav class="navbar navbar-expand-sm navbar-dark bg-danger sticky-top">
    <div class="container">
        <a class="navbar-brand" href="./index.php">SuperStore</a>
        <button class="navbar-toggler d-lg-none d-md-block" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="./index.php" aria-current="page">Inicio <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./catalogo.php">Nuevos productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./filtro.php">Filtro</a>
                </li>
                <?php
                if (!isset($_SESSION['nombre'])) {
                ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Iniciar Sesion</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="./login.php">Iniciar Sesion</a>
                            <a class="dropdown-item" href="./registro.php">Crear cuenta</a>
                        </div>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="./db/cerrar.php">Cerrar Sesion</a>
                    </li>
                <?php
                    if ($_SESSION['rol'] == 1) {
                        echo '
                        <li class="nav-item">
                        <a class="nav-link" href="./admin.php">Admin</a>
                    </li>
                        ';
                    }
                }
                ?>
            </ul>
            <!-- <form id="form-busqueda">
                <input type="text" id="busqueda" placeholder="Buscar nuevos productos">
            </form> -->
            <div class="">
                <input type="text" id="busqueda" placeholder="Buscar nuevos productos">
                <ul id="sugerencias" class="list-group mt-2"></ul>
            </div>

        </div>
    </div>
</nav>