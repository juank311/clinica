<header class="py-3">
    <nav>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <a href="<?= RUTA_URL ?>">
                        <img src="<?= RUTA_URL ?>/img/logo.png" class="img-fluid" alt="Responsive image font-weight-bold">
                    </a>
                </div>
                <div class="col-md-10">
                    <?php if (isset($_SESSION['activo']) and $_SESSION['activo'] == true) : ?>
                        <div class="d-flex justify-content-end">
                            <a href="<?= RUTA_URL ?>/formularios/" class="btn btn-light mx-2"><i class="fa-solid fa-laptop-medical"></i> Formularios</a>
                            <a href="<?= RUTA_URL ?>/welcomes/close" class="btn btn-light mx-2"><i class="fa-solid fa-magnifying-glass"></i> Buscar</a>
                            <a href="<?= RUTA_URL ?>/welcomes/close" class="btn btn-light mx-2"><i class="fa-solid fa-up-right-from-square"></i> Cerrar Sesión</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
</header>