<?php
require_once('./layout/header.php'); 
if (isset($_SESSION['nombre'])) {
    header("Location: ./index.php");
}
?>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-primary text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Inicio de Sesión</h2>
              <p class="text-dark-50 mb-5">Por favor ingrese su correo electrónico y contraseña.</p>

              <form action="./db/login.php" method="post">
                <div class="form-outline form-dark mb-4">
                  <input type="email" id="typeEmailX" name="email" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmailX">Correo Electrónico</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" id="typePasswordX" name="pass" class="form-control form-control-lg" />
                  <label class="form-label" for="typePasswordX">Contraseña</label>
                </div>

                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="./recuperar-contraseña.php">¿Olvidó su contraseña?</a></p>

                <button class="btn btn-outline-light btn-lg px-5" type="submit">Iniciar Sesión</button>
              </form>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">¿No tienes una cuenta? <a href="./registro.php" class="text-white-50 fw-bold">Registrarse</a>
              </p>
              
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
require_once('./layout/footer.php');
?>