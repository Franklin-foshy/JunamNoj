document.addEventListener("DOMContentLoaded", function() {
    // Obtener elementos del DOM
    const gif_image = document.getElementById('gifImage');
    const gif_hijo = document.getElementById('gifhijo');
    const gif_hijo2 = document.getElementById('gifhijo2');
    const gif_hijo3 = document.getElementById('gifhijo3');
    const static_image = document.getElementById('staticImage');
    const message_mama1 = document.getElementById('messageCard');
    const message_mama2 = document.getElementById('messageCard2');
    const message_hijo1 = document.getElementById('messagehijo1');
    const message_hijo2 = document.getElementById('messagehijo2');
    const message_hijo3 = document.getElementById('messagehijo3');
    const mensaje_cambia_hijo = document.getElementById('mensaje_hijo');
    const mensaje_cambia_hijo2 = document.getElementById('mensaje_hijo2');
    const mensaje_cambia_hijo3 = document.getElementById('mensaje_hijo3');
    const mensaje_cambia_madre = document.getElementById('mensaje_mama');
    const mensaje_cambia_madre2 = document.getElementById('mensaje_mama2');
    const contendor = document.getElementById('contenedor');
    const boton_siguiente = document.getElementById('boton-siguiente');
    const gifImage2 = document.getElementById('gifImage2');
    const gifImage3 = document.getElementById('gifImage3');
    const static_image2 = document.getElementById('staticImage2');
    
    
    let contador ;
    
    let timeoutIDs = [];

    // Funcion para mostrar cosas 
    function show(variable) {
        variable.style.display = 'block';
    };

    // Funcion para ocultar cosas 
    function disguise(variable) {
        variable.style.display = 'none';
    };

    // Funcion para cambia contenido de un parrafo
    function change_message(variable, text_new) {
        variable.textContent = text_new;
    };

    // funcion para cambiar de ubicacion 
    function cambiar_ubicacion(variable, left, top) {
        variable.style.position = 'absolute';
        variable.style.left = left + 'px';
        variable.style.top = top + 'px';
    };

    // Funcion mover gifs 
    function mover_gif_o_imagen (variable,segundos,nombre_animacion){
        variable.style.animatio = `${nombre_animacion} ${segundos}s linear infinite`;
    }
    // funcion para ca,biar de ubicacion con %
    function cambiar_ubicacion_porcentaje(variable,left,top){
        variable.style.position = 'absolute';
        variable.style.left = left + '%';
        variable.style.top = top + '%';
    }
    // cambiar ubicacion e tipo relativo
    function cambiar_ubicacion_porcentaje_rela(variable,left,top){
        variable.style.position = 'relative';
        variable.style.left = left + '%';
        variable.style.top = top + '%';
    }
    // Funcion para cambiar de fondo 
    function cambiar_fondo(elemento, nueva_ruta) {
        elemento.style.backgroundImage = `url(${nueva_ruta})`;
    };

    // Cambiar tamaño de cosas
    function Cambiar_tamaño (variable,tamaño){
        variable.style.width = tamaño + 'px'; 
    }
    // Función para reiniciar todos los timeouts de la primera escena
    function reiniciar_tiempos() {
        timeoutIDs.forEach(id => clearTimeout(id));
        timeoutIDs = []; 
    }

    // Primer escena 
    function escena_1() {
        timeoutIDs.push(setTimeout(function() {
            disguise(gif_image);
            show(static_image);
            change_message(mensaje_cambia_madre,'Hola hijo querido'); //todos estos son mansajes 
            show(message_mama1);
        }, 3500));

        timeoutIDs.push(setTimeout(function(){
            change_message(mensaje_cambia_hijo,'Hola mamá...')
            show(message_hijo1)
        },4000));

        timeoutIDs.push(setTimeout(function(){
            change_message(mensaje_cambia_madre,'como estas hijo ?')
        },5000));

        timeoutIDs.push(setTimeout(function(){
            change_message(mensaje_cambia_hijo,'mmm...')
        },6000));

        timeoutIDs.push(setTimeout(function(){
            change_message(mensaje_cambia_hijo,'Bien.')
        },6500));

        timeoutIDs.push(setTimeout(function(){
            disguise(message_hijo1);
            change_message(mensaje_cambia_madre,'Hijo podrias ayudarme ?')
        },8500));

        timeoutIDs.push(setTimeout(function(){
            show(message_hijo1);
            change_message(mensaje_cambia_hijo,'mmm...');
        },9500));

        timeoutIDs.push(setTimeout(function(){
            change_message(mensaje_cambia_hijo,'No.')
        },10000));

        timeoutIDs.push(setTimeout(function(){
            disguise(message_mama1)
            change_message(mensaje_cambia_hijo,'Tu eres mujer, no tengo por que ayudarte.')
        },11000));

        timeoutIDs.push(setTimeout(function(){
            disguise(static_image)
            show(gifImage2)

        },12000));

        timeoutIDs.push(setTimeout(function(){
            disguise(gifImage2)
            show(static_image2)

        },15500));

        timeoutIDs.push(setTimeout(function(){
            disguise(message_hijo1)
            change_message(message_mama2,'Esta bien hijo, te quiero...')
            show(message_mama2)

        },16000));

        timeoutIDs.push(setTimeout(function(){
            disguise(message_mama2)
            change_message(mensaje_cambia_hijo,'Ella es la mujer, no yo.')
            show(message_hijo1)
    
        },17000));

        timeoutIDs.push(setTimeout(function(){
            change_message(mensaje_cambia_hijo,'Las mujeres hacen la limpieza.')

        },18500));

        timeoutIDs.push(setTimeout(function() {
            boton_siguiente.style.pointerEvents = 'auto';
        }, 19000));
        

        contador = 0 ;
    };

    // Segunda escena 
    function escena_2() {
        disguise(message_hijo1);
        disguise(gif_hijo)
        disguise(static_image2)
        cambiar_fondo(contendor, 'imgs/nivel2/escena1.jpg'); // ruta de las imagenes de fondo
        show(gif_hijo2);

        timeoutIDs.push(setTimeout(function() {
            change_message(mensaje_cambia_hijo2,'Creo que tenia que ayudar a mi mamá')
            show(message_hijo2)
        }, 2000));

        timeoutIDs.push(setTimeout(function() {
            boton_siguiente.style.pointerEvents = 'auto';
        }, 2500));
        
        contador = 1 ;
    };

    // tercera escena 
    function escena_3(){
        disguise(gif_hijo2);
        disguise(message_hijo2);
        cambiar_fondo(contendor, 'imgs/nivel2/escena2.avif');

        show(gif_hijo3);

        timeoutIDs.push(setTimeout(function() {
            change_message(message_hijo3,'Que divertido!')
            show(message_hijo3)
        }, 2000));

        timeoutIDs.push(setTimeout(function(){
            boton_siguiente.style.pointerEvents = 'auto';
            boton_siguiente.href = 'c_nivel2.html';
        },3000));
    };

    boton_siguiente.style.pointerEvents = 'none';
    escena_1()
    
    
    boton_siguiente.addEventListener('click', function() {
        reiniciar_tiempos(); 

        if (contador === 0) {
            escena_2();
        } else if (contador === 1) {
            escena_3();
        }

        boton_siguiente.style.pointerEvents = 'none';
    });
});