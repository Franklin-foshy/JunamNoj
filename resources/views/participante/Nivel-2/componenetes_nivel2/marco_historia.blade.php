<div id = "contenedor" class="container">
    <!------------------------------------------ gifs  ---------------------------------------------->
    
    @include('participante.Nivel-2.componenetes_nivel2.gifs')

    
    <!------------------------------------------ gifs  ---------------------------------------------->
    <!------------------------------------------------------- mensajes ------------------------------------------------------>

<!------------------------------ botones respuestas ------------------------------------>

@include('participante.Nivel-2.componenetes_nivel2.respuesas_botones')

<!------------------------------ botones respuestas ------------------------------------>
    
    @include('participante.Nivel-2.componenetes_nivel2.mensajes')

    <!------------------------------------------------------- mensajes ------------------------------------------------------>
        </div>
        <style>
            .container {
                background-image: url("{{ asset('imgs/nivel2/escena_1.jpg')}}");
                }
        </style>