<!DOCTYPE html>
<!-- Coding by Multiwebpress-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css"/>
    <title> @yield('title') </title>
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