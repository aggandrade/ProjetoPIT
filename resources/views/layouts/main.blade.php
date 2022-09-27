<!DOCTYPE html>
<!-- Coding by Multiwebpress-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css"/>
    <title> @yield('title') </title>
     <!-- Fonte  -->
     <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans" rel="stylesheet">
    <!-- Estilos -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4606f64c79.js" crossorigin="anonymous"></script>
    <!-- Progress Bar -->
    <script src="/js/progressbar.min.js"></script>
    <!-- Parallax -->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

    <script src="/js/script.js"></script>
</head>
<body>
    @yield('content')
    <nav>
        <div class="logo">
            <img src="images/multiwebpress.png" alt="Logo Image">
        </div>
        <div class="hamburger">
            <div class="bars1"></div>
            <div class="bars2"></div>
            <div class="bars3"></div>
        </div>
        <ul class="nav-links">
            <li><a href="#">HTML & CSS</a></li>
            <li><a href="#">WordPress</a></li>
            <li><a href="#">Javascript</a></li>
            <li><a href="#">JQuery</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><button class="login-button" href="#">Sign In</button></li>
        </ul>
    </nav>
</body>
</html>