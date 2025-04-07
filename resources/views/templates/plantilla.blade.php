<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('titulo')</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(#30cdd8, #b0b5ee);
        margin: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    h1 {
        color: white;
    }
    main {
        flex: 1;
    }
    footer {
        background-color: rgb(7, 79, 212);
        color: white;
        text-align: center;
        padding: 10px 0;
    }
</style>
</head>
<body>
    <main>
        @yield('contenido')
    </main>
    <footer>
        <hr>
        <p>&copy; 2025 - Todos los derechos reservados</p>
    </footer>
</body>
</html>