<?php 
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>

<!--este es el Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="principal">
        <img src="<?php echo base_url('assets/image/logo.jpeg'); ?>" alt="marca" width="100" class="image-fluid" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- Botón Desplegable -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="principal" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    ALMA CHINA
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="productos">Productos</a></li>
                    <!-- aquí se pueden agregar más opciones -->
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="quienes_somos">Quienes somos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="acerca_de">Nosotros</a>
            </li>
            <?php if (!$session->get('logged_in')): ?>
                <li class="nav-item">
                    <a class="nav-link" href="registro">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login">Login</a>
                </li>
            <?php endif; ?>
        </ul>
        <form class="d-flex me-auto">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
        <?php if ($session->get('logged_in')): ?>
            <div class="btn btn-secondary active btnUser btn-sm ms-2">
                <a><?php echo $perfil == 1 ? 'Admin: ' : 'Cliente: '; ?><?php echo esc($nombre); ?></a>
            </div>
            <a class="btn btn-outline-danger ms-2" href="logout">Cerrar Sesión</a>
        <?php endif; ?>
    </div>
</nav>
<!--fin Navbar-->

<!-- Panel de control para Administrador -->
<?php if ($perfil == 1): ?>
    <div class="container mt-5">
        <h2>Panel de Control del Administrador</h2>
        <div class="row">
            <div class="col-md-12">
                <h3>Usuarios</h3>
                <?php echo view('back/usuario/usuarios'); ?> <!-- Cargar la vista de usuarios -->
            </div>
        </div>
    </div>
<?php endif; ?>