<title>Catálogo de Productos</title>
<!-- Bootstrap CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<style>
    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .card img {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    .card-title {
        color: #343a40;
    }
    .card-text {
        color: #6c757d;
    }
    .btn-primary {
        background-color: #6c757d;
        border-color: #6c757d;
    }
    .btn-primary:hover {
        background-color: #5a6268;
        border-color: #545b62;
    }
</style>
</head>
<body>
<div class="container py-5">
    <h1 class="text-center mb-5">Nuestro Catálogo de Productos</h1>
    <div class="row">
        <!-- Producto 1 -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img src="assets\image\p1.jpeg" class="card-img-top" alt="Producto 1">
                <div class="card-body">
                    <h5 class="card-title">Aceite Esencial de Lavanda</h5>
                    <p class="card-text">Relaja y calma con nuestro aceite esencial puro de lavanda.</p>
                    <a href="#" class="btn btn-primary">Ver Detalles</a>
                </div>
            </div>
        </div>
        <!-- Producto 2 -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img src="assets\image\p2.jpeg" class="card-img-top" alt="Producto 2">
                <div class="card-body">
                    <h5 class="card-title">Tintura Madre de Manzanilla</h5>
                    <p class="card-text">Alivia la ansiedad y mejora la digestión con esta tintura natural.</p>
                    <a href="#" class="btn btn-primary">Ver Detalles</a>
                </div>
            </div>
        </div>

<!-- Producto 3 -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img src="assets\image\p4.jpeg" class="card-img-top" alt="Producto 3">
                <div class="card-body">
                    <h5 class="card-title">Bálsamo de Caléndula</h5>
                    <p class="card-text">Hidrata y repara la piel con nuestro bálsamo de caléndula.</p>
                    <a href="#" class="btn btn-primary">Ver Detalles</a>
                </div>
            </div>
        </div>
        <!-- Producto 4 -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img src="assets\image\p3.jpeg" class="card-img-top" alt="Producto 4">
                <div class="card-body">
                    <h5 class="card-title">Jabón Artesanal de Eucalipto</h5>
                    <p class="card-text">Refresca y revitaliza tu piel con nuestro jabón de eucalipto.</p>
                    <a href="#" class="btn btn-primary">Ver Detalles</a>
                </div>
            </div>
        </div>
    </div>
</div>