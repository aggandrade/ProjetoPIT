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
<body id="escolher-perfil">
<div class="container">    
    <div class="card col-md-3">
        <div class="card-body">
            <h5 class="card-title">Prestador de Serviços</h5>
            <p class="card-text">Selecionando essa opção você poderá cadastrar serviços como: bar, limpeza, segurança etc.</p>
            <a href="/escolher-perfil/prestador" class="btn btn-primary">selecionar</a>        

        </div>
    </div>
    <div class="card col-md-3">
        <div class="card-body">
            <h5 class="card-title">Casa de Evento</h5>
            <p class="card-text">Selecionando essa opção você poderá cadastrar seu espaço para eventos</p>
            <a href="/escolher-perfil/casa-de-evento" class="btn btn-primary">selecionar</a>        
        </div>
    </div>
    <div class="card col-md-3">
        <div class="card-body">
            <h5 class="card-title">Produtores de Evento</h5>
            <p class="card-text">Selecionando essa opção você poderá contratar espaços e prestadores de serviço para seu evento</p>
            <a href="/escolher-perfil/produtor" class="btn btn-primary">selecionar</a>        
        </div>
    </div>
</div>
</body>