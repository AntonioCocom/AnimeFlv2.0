<div id="agregaranime" class="container d-none">
    <div>
        <button onclick="
        document.getElementById('agregarporducto').classList.add('d-none');
        document.getElementById('producto').classList.remove('d-none');
        " class="btn btn-success" id="btnagregarproductos">
            regresar
        </button>
    </div>
    <div class="container mt-5">
        <h2 class="mb-4">Agregar productos</h2>
        <form action="./db/agregarProductos.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del producto:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="año" class="form-label">Año:</label>
                <input type="date" class="form-control" id="año" name="año" pattern="^\d+(\.\d{1,2})?$" required>
            </div>
            <div class="mb-3">
                <label for="idCategoria" class="form-label">Categoría:</label>
                <select class="form-select" id="idCategoria" name="categoria" required>
                    <?php
                    require_once('db/conexion.php');
                    $sql = "SELECT * FROM categorias";

                    $resultado = $conn->query($sql);
                    while ($row = $resultado->fetch_assoc()) {
                        echo '<option value="' . $row['id'] . '">' . $row['nombre'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="imagenes" class="form-label">Imágenes:</label>
                <input type="file" class="form-control" id="validatedCustomFile" name="imagenes[]" multiple required>
                <div class="invalid-feedback">Agrega imagenes</div>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Producto</button>
        </form>
    </div>
</div>