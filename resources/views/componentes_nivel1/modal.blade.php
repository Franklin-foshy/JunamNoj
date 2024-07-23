<!-------------------------------------- modal --------------------------------------------->

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

<!-------------------------------------- modal --------------------------------------------->
