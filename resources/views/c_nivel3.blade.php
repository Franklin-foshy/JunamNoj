<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nivel 3</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body class="body-nivel2" id="body-principal">

    
    <!-- modal -->

    @include ('componentes_c.modal')

    <!--Header de imagen -->

    @include ('componentes_c.header_imagen')


    <!--pantalla de carga-->

    @include ('componentes_c.pantalla_carga')


    <!-- Barra de progreso -->

    @include ('componentes_c.barra_progreso')


<!--cuaddro de juego-->

    @include ('componentes_c.cuadro_juego')


<!-- Boton de continuar -->

    @include ('componentes_c.boton_continuar')


    <!-- Script JavaScript para el confeti -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.4.0/dist/confetti.browser.min.js"></script>

    <!-- Script JavaScript para nivel1.html -->
    <script src="{{ asset('js/script_c_nivel3.js')}}"></script>
</body>
</html>

