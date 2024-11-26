<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>@yield('titre')</title>
    <style>
        /* Style pour la vidéo de fond */
        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* La vidéo couvre tout l'écran sans déformation */
            z-index: -1; /* Place la vidéo derrière le contenu */
        }

        .navbar li a.active {
        color: black; /* Couleur par défaut pour le lien actif */
        }



        .navbar li a{
            font-size: 1.5rem;
            color:black;
        }
        .navbar li a:hover,
        .navbar li a.active:hover{
            color: rgb(154, 102, 5);
        }
        .bi-instagram {
        color: antiquewhite; /* Couleur par défaut */
        font-size: 1.25rem; /* Taille de l'icône */
        transition: color 0.3s ease; /* Animation pour un effet fluide */
        }
        .bi-instagram:hover {
            color: rgb(156, 3, 72); /* Couleur au survol */
        }

        .bi-facebook {
        color:antiquewhite; /* Couleur par défaut */
        font-size: 1.25rem; /* Taille de l'icône */
        transition: color 0.3s ease; /* Animation pour un effet fluide */
        }
        .bi-facebook:hover {
            color: rgb(7, 7, 131); /* Couleur au survol */
        }



    </style>
</head>
<body>

    <video class="video-background" autoplay muted loop>
        <source src={{ asset('images\video-de-fond.mp4') }} type="video/mp4">
        Votre navigateur ne supporte pas la lecture de vidéos.
    </video>

    <nav class="navbar navbar-expand-lg bg-transparent mt-4">
        <div class="container-fluid mx-5 " >
          <a class="navbar-brand " href="#" style="color: antiquewhite;font-size: 2.5rem;font-weight: bold;">PIXAME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item" >
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About me</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Vitrines d’Art
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Culinaire</a></li>
                  <li><a class="dropdown-item" href="#">Fashion</a></li>
                  <li><a class="dropdown-item" href="#">Mariage</a></li>
                  <li><a class="dropdown-item" href="#">Buisness</a></li>
                  <li><a class="dropdown-item" href="#">Mode et beauté</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#" target="_blank">
                    <i class="bi bi-instagram" ></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" target="_blank">
                    <i class="bi bi-facebook"></i>
                </a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    @yield('contenu')
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8a8 8 0 1 0-16 0 8 8 0 0 0 16 0zM6.904 11.803l-3.718-3.718a.5.5 0 0 1 .708-.708l3.01 3.01L13.096 4.097a.5.5 0 1 1 .707.707l-6 6a.5.5 0 0 1-.707 0z"/>
        </symbol>
    </svg>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>
