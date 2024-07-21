<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles_puzzle.css')}}">
    <title>Puzzle</title>
</head>
<body>

    <!--------------------------     barra de carga       ------------------------------->

        <!-------------------------------------- Header de imagen ---------------------------------------------->
    
        @include ('componentes_nivel1.header_imagen')
    
    
        <!-------------------------------------- Barra de progreso --------------------------------------------->
    
        @include ('componentes_nivel1.barra_progreso')
    
    
    <!--cuaddro de juego-->
    <div class="rompecabezas">
        <div class="pieza" data-index="1"></div>
        <div class="pieza" data-index="2"></div>
        <div class="pieza" data-index="3"></div>
        <div class="pieza" data-index="4"></div>
        <div class="pieza" data-index="5"></div>
        <div class="pieza" data-index="6"></div>
    </div>
    <section class="modal" id="modal">
        <div class="modal_cont">
            <span class="close" style="display: none">&times;</span>
            <h2 id="pregunta">{{_('')}}</h2>
            <div class="cont_imagenes_modal">            
                <img src="{{ asset('imgs/nivel2/imagen_1.jpeg') }}" class="respuesta" id="imagen1" alt="Respuesta 1">
                <img src="{{ asset('imgs/nivel2/imagen_1.jpeg') }}" class="respuesta" id="imagen2" alt="Respuesta 2">
                <img src="{{ asset('imgs/nivel2/imagen_1.jpeg') }}" class="respuesta" id="imagen3" alt="Respuesta 3">
            </div>

            
            <div class="close_modal">{{_('x')}}</div>
        </div>
        <div class="gif_preguntas">
            <img src="{{ asset('imgs/nivel2/sujeto de preguntas.gif')}}" alt="">
        </div>
    </section>
    <div id="contador" class="contador">{{_('0/6')}}</div>

    <button class = "continuar" id="next-button"  href="{{ route('dashboard')}}" style="display:block;" onclick="goHome()">{{_('continuar')}}</button>
    <style>
        .pieza {
            background-image: url('{{ asset('imgs/nivel2/imagen_1.jpeg') }}');
        }
    
    </style>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.4.0/dist/confetti.browser.min.js"></script>
    <script src="{{ asset('js/script_nivel1.js') }}"></script>
</body>
</html>