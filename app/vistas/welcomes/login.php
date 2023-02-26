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
                    <?php if (isset($_SESSION['error'])) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong><?= $_SESSION['error']; ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif ?>
                    <form action="<?= RUTA_URL ?>/welcome/login" method="POST">
                        <div class="form-group mt-5 col-4 mx-auto">
                            <label for="username" style="color: white;">Usuario:<sup style="color: red;"> *</sup></label>
                            <input type="text" class="form-control" id="username" name="email" >
                        </div>
                        <div class="form-group mt-5 col-4 mx-auto">
                            <label for="password" style="color: white;">Contraseña:<sup style="color: red;"> *</sup></label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group mb-5 mt-5">
                            <input type="submit" class="btn btn-primary" value="ingresar">
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