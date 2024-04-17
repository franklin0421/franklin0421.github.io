<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: mamei; /* Cambio de color de fondo */
            margin: 0;
            padding: 0;
            text-align: left;
        }r

        h1 {
            color: #333;
            margin-top: 50px;
        }

        p {
            color: #666;
            margin-bottom: 50px;
        }

        a {
            color: #ff5733;
            text-decoration: none;
            font-weight: bold;
        }

        /* Estilos para las barras */
        .navbar {
            overflow: hidden;
            background-color: #333;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar a.active {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a class="active" href="#">Inicio</a>
        <a href="#">Sobre Nosotros</a>
        <a href="#">Servicios</a>
        <a href="#">Contacto</a>
    </div>

    <h1>Bienvenido a mi página web creada con LARAVEL</h1>
    <p>Laravel es un framework de desarrollo web PHP de código abierto que sigue el patrón de arquitectura de software Modelo-Vista-Controlador (MVC). Ofrece una sintaxis elegante y expresiva que permite desarrollar aplicaciones web de manera rápida y eficiente.</p>
    <p>Algunas características clave de Laravel incluyen:</p>
    <ul>
        <li>Sistema de enrutamiento simple y potente.</li>
        <li>Motor de plantillas Blade que permite la reutilización de código y la creación de vistas dinámicas de manera sencilla.</li>
        <li>ORM Eloquent para trabajar con bases de datos de forma intuitiva y segura.</li>
        <li>Autenticación integrada y sistema de autorización.</li>
        <li>Una amplia gama de paquetes adicionales disponibles a través de Composer.</li>
    </ul>

    <p>Aquí tienes un <a href="/otra-pagina">enlace a otra página</a>.</p>

</body>
</html>

