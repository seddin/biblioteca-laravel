<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</head>
<body>
<div class="ui attached stackable menu">
    <div class="ui container">
        <a class="item" href="/">
            <i class="home icon"></i> Inicio
        </a>
        <a class="item" href="/autores">
            <i class="user layout icon"></i> Autores
        </a>
        <a class="item" href="/libros">
            <i class="book layout icon"></i> Libros
        </a>
        <a class="item" href="/usuarios">
            <i class="address book layout icon"></i> Usuarios
        </a>
        <a class="item" href="/passusuarios">
            <i class="address book layout icon"></i> Pass Usuarios
        </a>
        <a class="item" href="/rolesusuarios">
            <i class="address book layout icon"></i> Roles Usuarios
        </a>
        <a class="item" href="/permisos">
            <i class="address book layout icon"></i> Permisos Usuarios
        </a>
        <a class="item" href="/alquileres">
            <i class="handshake outline layout icon"></i> Alquileres
        </a>
    </div>
</div>
<div class="ui raised very padded text container segment">
    <h2 class="ui header">@yield('title')</h2>
    <p></p>
    <p></p>
    @yield('content')
</div>
</body>
</html>
