<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($page) && isset($page['title']) ? $page['title'] : 'Page sans titre'; ?></title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/app.css">

</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarLeftAlignExample"
                aria-controls="navbarLeftAlignExample"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
<!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Informations</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Sécurité</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Partenaires</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">S'inscrire</a>
                </li>

            </ul

        </div>

    </div>

</nav>

<body>
<header>

</header>