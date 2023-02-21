<div id="login">
<?php
require RUTA_APP . '/vistas/inc/head.php';
require RUTA_APP . '/vistas/inc/header.php';
?>
<main>
    <div class="container mt-4">
        <div class="row border" style="border-radius: 15px;">
            <div class="col-md-12 mx-auto">
                <div class="row">
                    <div class="col-7 d-flex align-items-center justify-content-center">
                        <h2>Clínica Universitaria Medicina Integral</h2>
                    </div>
                    <div class="col-5">
                        <img src="<?= RUTA_URL ?>/img/logo.png" class="img-fluid" alt="Responsive image font-weight-bold">
                    </div>
                </div>

                <h5>Formatos y Planillas en Línea</h5>

                <form action="" method="get">
                    <div class="form-group mt-5 col-4 mx-auto">
                        <label for="username" style="color: white;">Usuario:</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group mt-5 col-4 mx-auto">
                        <label for="password" style="color: white;">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group mb-5 mt-5">
                        <input type="submit" class="btn btn-primary" value="Ingresar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php
require RUTA_APP . '/vistas/inc/footer.php';
?>
</div>