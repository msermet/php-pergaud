<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/bootstrap.min.css">
    <title>Bootstrap</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/index.php">Mon site</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/index.php">Accueil</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Bootstrap
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/bootstrap/index.php">Bases</a></li>
                        <li><a class="dropdown-item" href="/bootstrap/flex.php">Flex</a></li>
                        <li><a class="dropdown-item" href="/bootstrap/grille.php">Grille</a></li>
                        <li><a class="dropdown-item" href="/bootstrap/grille-responsive.php">Grille responsive</a></li>
                        <li><a class="dropdown-item" href="/bootstrap/grille-responsive-cards.php">Grille responsive cards</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<div class="container bg">
    <h1>Introduction à Bootstrap</h1>
    <p class="text-white text-uppercase fs-2 fw-bold bg-danger text-center border border-success border-2 rounded-pill shadow w-50 pt-3 mt-4 text-opacity-50 mx-auto">
        Ceci est un paragraphe</p>
    <h2 class="border-bottom border-3 border-primary fw-bold mx-3">Titre</h2>
    <div class="mt-3">
        <button class="btn btn-primary">Valider</button>
        <button class="btn btn-warning">Valider</button>
        <button class="btn btn-outline-primary btn-lg shadow">Valider</button>
        <a href="#" class="btn btn-success">Lien</a>
        <div class="mt-3">
            <p class="badge bg-primary">Nouveau</p>
            <p>Ce produit est <span class="badge bg-primary">nouveau</span></p>
            <p>Ce produit est en <span class="badge bg-danger fs-4">solde</span></p>
            <p>Ce prix est <span class="badge bg-success fs-4 text-decoration-line-through">25 euros</span> <span
                        class="badge bg-danger fs-4">15 euros</span>
            </p>
        </div>
    </div>
    <div class="card w-25 mx-auto">
        <img src="/assets/206.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Peugeot 206+ V8 bi-turbo</h5>
            <p class="card-text">Viens faire un tour sur circuit avec ce bolide et ressors avec le sourire !</p>
            <a href="#" class="btn btn-primary">Donne ta CB</a>
        </div>
    </div>
    <div id="carouselExample" class="carousel slide w-50 mx-auto">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/elephant.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/assets/panda.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/assets/chien.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>