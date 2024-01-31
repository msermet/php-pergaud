<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/bootstrap.min.css">
    <title>FlexBox</title>
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
    <h1>FlexBox</h1>
    <div class="d-flex justify-content-between border border-2 border-primary">
        <p class="border border-warning m-0 flex-fill">Texte 1</p>
        <p class="border border-warning m-0 flex-fill">Texte 2</p>
        <p class="border border-warning m-0 flex-fill">Texte 3</p>
    </div>
    <div class="d-flex justify-content-between align-items-stretch border border-2 border-primary mt-4"
         style="height: 200px">
        <p class="border border-warning m-0">Texte 1</p>
        <p class="border border-warning m-0">Texte 2</p>
        <p class="border border-warning m-0">Texte 3</p>
    </div>
    <div class="d-flex justify-content-between border border-2 border-primary mt-4">
        <p class="m-0">Le 24 janvier 2024</p>
        <p class="m-0">Connecté en tant que : Maxime</p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>