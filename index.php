<?php
    require_once('./layout/header.php');
    include_once('./db/conexion.php');
?>
    <section class="py-5 container">
        <div class="row">
            <div class="col-md-6">
                <img src="./img/SuperStore.jpg" class="img-fluid" alt="Productos">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="text-dark">
                    <h1 class="font-weight-light">Explora nuestras mejores ofertas y disfruta de nuestros beneficios.</h1>
                    <p class="lead">Conoce lo nuevo y disfruta de nuestras grandes ofertas, cuenta con nosotros.</p>
                    <p>
                        <a href="#" class="btn btn-secondary my-2">Ofertas.</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section >
        <div class="container">
            <h2 class="text-center mb-4">Lo más nuevo</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="./img/S24 ultra.jpg" class="card-img-top" alt="Anime 1" height=400 px" width="500 px">
                        <div class="card-body">
                            <h5 class="card-title">S24 ultra</h5>
                            <p class="card-text">SAMSUNG Galaxy S24 Ultra, Violeta, 12GB_256GB </p>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-outline-primary">Ver detalles</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./img/alexa.jpg" class="card-img-top" alt="Anime 2" height="400 px" width="500 px">
                        <div class="card-body">
                            <h5 class="card-title">Alexa</h5>
                            <p class="card-text">Amazon Echo Dot Alexa 5ta Generación / Negro</p>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-outline-primary">Ver detalles</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./img/msi.jpg" class="card-img-top" alt="Anime 3" height="300 px" width="400 px">
                        <div class="card-body">
                            <h5 class="card-title">MSI GF75 Thin Gaming Laptop</h5>
                            <p class="card-text">MSI GF75 Thin Gaming Laptop, 17.3" FHD 120Hz IPS Screen, Intel Core i5-10300H Procesador hasta 4.50 GHz, gráficos NVIDIA GTX 1650, 
                                8GB RAM, 512GB PCIe SSD, cámara web, Wireless-AC, Bluetooth, Win10 Home, Negro</p>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-outline-primary">Ver detalles</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="container">
        <h2 class="text-center mb-4">Visitanos en nuestras cuenta de mercado libre</h2>
        <div class="">
            <iframe src="https://tienda.mercadolibre.com.mx/nuvitu-games?item_id=MLM1376759455&category_id=MLM167860&official_store_id=6379&client=recoview-selleritems&recos_listing=true" width="100%" height="600" frameborder="0" allowfullscreen></iframe>
        </div>
    </section> -->

<?php
    include_once('./carrucel2.0.php')
?>

<?php
    require_once('./layout/footer.php');
?>