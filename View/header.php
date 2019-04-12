<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Header MVC</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<!-- Menu du site -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

        <ul class="navbar-nav mr-0 mt-2 mt-lg-0 ">

            <li class="nav-item active">
                <a class="nav-link" href=".">ActuNews MVC<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    Accueil
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="http://localhost/MVC/membre/connexion.php">
                    Connexion
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=membre&action=inscription">
                    Inscription
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=membre&action=contact">
                    Contact
                </a>
            </li>
        </ul>

    </div>
</nav>
<!-- Fin du Menu du site -->

