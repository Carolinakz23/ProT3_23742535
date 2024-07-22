<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo isset($titulo) ? $titulo : 'Título por defecto'; ?></title>

    <!-- Enlace a Bootstrap CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

</head>
<body>

<div class="container d-flex flex-column align-items-center justify-content-center" style="height: 10vh;">
    <div class="text-center">
        <h4 class="display-6">Bienvenidos</h4>
    </div>
</div>

<!-- Aquí debería ir el resto del contenido -->

<!-- Bootstrap JS y dependencias (opcional) -->
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

</body>
</html>
