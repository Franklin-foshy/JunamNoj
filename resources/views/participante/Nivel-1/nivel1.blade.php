<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles_puzzle.css')}}">
    <title>{{_('Puzzle')}}</title>
</head>
<body>

<!--------------------------     barra de carga       ------------------------------->

<!-------------------------------------- Header de imagen ---------------------------------------------->

@include ('participante.Nivel-1.componentes_nivel1.header_imagen')

<!-------------------------------------- Header de imagen ---------------------------------------------->

    
<!-------------------------------------- Barra de progreso --------------------------------------------->

@include ('participante.Nivel-1.componentes_nivel1.barra_progreso')

<!-------------------------------------- Barra de progreso --------------------------------------------->

<!-------------------------------------- piezas --------------------------------------------->

@include ('participante.Nivel-1.componentes_nivel1.piezas')

<!-------------------------------------- piezas --------------------------------------------->

<div class="rompecabezas_final" id="targetContainer">
    <div class="espacio" data-index="1" id="espacio1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div class="espacio" data-index="2" id="espacio2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div class="espacio" data-index="3" id="espacio3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div class="espacio" data-index="4" id="espacio4" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div class="espacio" data-index="5" id="espacio5" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    <div class="espacio" data-index="6" id="espacio6" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
</div>
<!-------------------------------------- modal --------------------------------------------->

@include ('participante.Nivel-1.componentes_nivel1.modal')

<!-------------------------------------- modal --------------------------------------------->

<!-------------------------------------- contador --------------------------------------------->

@include ('participante.Nivel-1.componentes_nivel1.contador')

<!-------------------------------------- contador --------------------------------------------->

<!-------------------------------------- boton_continuar --------------------------------------------->

@include ('participante.Nivel-1.componentes_nivel1.boton_continuar')

<!-------------------------------------- boton_continuar --------------------------------------------->

    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.4.0/dist/confetti.browser.min.js"></script>
    <script src="{{ asset('js/script_nivel1.js') }}"></script>
</body>
</html>