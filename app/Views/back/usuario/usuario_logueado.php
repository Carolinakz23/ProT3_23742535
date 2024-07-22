<?php 
// Inicio de la sesión y obtención del nombre de usuario
$session = session();
$nombre = $session->get('nombre');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario Logueado</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>
<body>
<!-- Página de usuario logueado -->
<div class="content py-3 my-3">
    <div class="container-fluid">
        <div class="row">
            <!-- Mostrar mensaje flash si existe -->
            <?php if ($session->getFlashdata('msg')): ?>
                <div class="alert alert-info" role="alert">
                    <?= $session->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>

            <!-- Verificar el perfil del usuario -->
            <?php if ($session->get('perfil_id') == 1): ?>
                <!-- Contenido para Administrador -->
                <div class="card" data-bs-theme="dark">
                    <div class="card-body">
                        <h5 class="card-title">Permisos Especiales</h5>
                        <p class="card-text">Bienvenido a mi página, <b><?= esc($nombre); ?></b>. Tienes un perfil especial de <b>Administrador</b>.</p>
                        <p class="card-text"><small class="text-body-secondary">Devs:caro</small></p>
                    </div>
                    <img src="<?php echo base_url('assets/img/admin.png'); ?>" class="card-img-bottom" alt="Imagen de Administrador">
                </div>
            <?php elseif ($session->get('perfil_id') == 2): ?>
                <!-- Contenido para Cliente -->
                <div class="card" data-bs-theme="dark">
                    <div class="card-body">
                        <h5 class="card-title">Sesión Iniciada.</h5>
                        <p class="card-text">Bienvenido a mi página, <b><?= esc($nombre); ?></b>.</p>
                        <p class="card-text"><small class="text-body-secondary">ALMA CHINA</small></p>
                    </div>
                    <img src="<?php echo base_url('assets/img/logo.jpeg'); ?>" class="card-img-bottom" alt="Logo">
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
