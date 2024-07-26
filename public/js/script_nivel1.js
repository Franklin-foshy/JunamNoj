document.querySelectorAll('.pieza').forEach(pieza => {
    pieza.addEventListener('dragstart', (event) => {
        let index = pieza.getAttribute('data-index');
        event.dataTransfer.setData("text", event.target.id);
        event.dataTransfer.setData("index", index);
    });
});

function allowDrop(event) {
    event.preventDefault();
}

function drop(event) {
    event.preventDefault();
    let data = event.dataTransfer.getData("text");
    let pieza = document.getElementById(data);
    let piezaIndex = pieza.getAttribute('data-index');
    let espacioIndex = event.target.getAttribute('data-index');
    event.target.appendChild(pieza);
    if (piezaIndex === espacioIndex) {
            pieza.setAttribute('draggable', 'false');
            pieza.style.pointerEvents = 'none'
        mostrarPregunta(piezaIndex);
        mostrarModal();
    }
}

let preguntas = [
    {
        pregunta: "¿Cuál es la capital de Francia?",
        images: ["imgs/nivel2/imagen_5.jpeg", "imgs/nivel2/imagen_1.jpeg","imgs/nivel2/imagen_3.jpeg"],
        respuestas: ["París", "Londres", "Madrid"],
        correcta: 0
    },
    {
        pregunta: "¿Cuál es la capital de Alemania?",
        images: ["imgs/nivel2/imagen_1.jpeg", "imgs/nivel2/imagen_1.jpeg","imgs/nivel2/imagen_3.jpeg"],
        respuestas: ["Berlín", "Viena", "Zurich"],
        correcta: 0
    },
    {
        pregunta: "¿Cuál es la capital de Guatemala?",
        images: ["imgs/nivel2/imagen_1.jpeg", "imgs/nivel2/imagen_1.jpeg","imgs/nivel2/imagen_3.jpeg"],
        respuestas: ["Berlín", "Viena", "Zurich"],
        correcta: 0
    },
    {
        pregunta: "¿Cuál es la capital de Alemania?",
        images: ["imgs/nivel2/imagen_1.jpeg", "imgs/nivel2/imagen_1.jpeg","imgs/nivel2/imagen_3.jpeg"],
        respuestas: ["Berlín", "Viena", "Zurich"],
        correcta: 0
    },
    {
        pregunta: "¿Cuál es la capital de Alemania?",
        images: ["imgs/nivel2/imagen_1.jpeg", "imgs/nivel2/imagen_1.jpeg","imgs/nivel2/imagen_3.jpeg"],
        respuestas: ["Berlín", "Viena", "Zurich"],
        correcta: 0
    },
    {
        pregunta: "¿Cuál es la capital de Alemania?",
        images: ["imgs/nivel2/imagen_1.jpeg", "imgs/nivel2/imagen_1.jpeg","imgs/nivel2/imagen_3.jpeg"],
        respuestas: ["Berlín", "Viena", "Zurich"],
        correcta: 0
    },
    // Añadir más preguntas según sea necesario
];

let tamaño = 100 / preguntas.length;
let confetti_ = 0 ;

function cargar_barra() {
    const barra = document.getElementById('barra');
    barra.value += tamaño;
}
let correctas = 0
let completadas = 0;
let modal = document.getElementById("modal");
let span = document.getElementsByClassName("close")[0];
let preguntaTexto = document.getElementById("pregunta");
let imagenesRespuesta = document.querySelectorAll(".respuesta");
let contador = document.getElementById("contador");
const close_modal = document.querySelector('.close_modal');
const imagen1 = document.getElementById('imagen1');
const imagen2 = document.getElementById('imagen2');
const imagen3 = document.getElementById('imagen3');
const rompecabezas = document.querySelector('.rompecabezas_final');
const espacios = document.querySelector('.espacio');
const espacio1 = document.getElementById('espacio1');
const espacio2 = document.getElementById('espacio2');
const espacio3 = document.getElementById('espacio3');
const espacio4 = document.getElementById('espacio4');
const espacio5 = document.getElementById('espacio5');
const espacio6 = document.getElementById('espacio6');



close_modal.style.display = "none";
/*
close_modal.addEventListener('click', (e) => {
    e.preventDefault();
    modal.classList.remove('modal_show');
}); */

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

imagenesRespuesta.forEach((imagen, i) => {
    imagen.addEventListener('click', (e) => {
        let index = modal.getAttribute('data-index');
        let esCorrecta = imagen.getAttribute('data-correct') === 'true';
        document.querySelector(`.pieza[data-index="${index}"]`).classList.add('completada');
        if (esCorrecta) {
            correctas++;
        }
        completadas++;
        if (completadas > 6) {
            completadas = 6;
            
        }
        if (completadas == 6) {
            confetti_++;
            espacio1.style.border = "none";
            espacio2.style.border = "none";
            espacio3.style.border = "none";
            espacio4.style.border = "none";
            espacio5.style.border = "none";
            espacio6.style.border = "none";
            rompecabezas.style.gap = "0px";
        }

        if (confetti_ == 1) {
            launchConfetti();
        }
        contador.innerText = `${completadas}/6`;
        e.preventDefault();
        modal.classList.remove('modal_show');
        cargar_barra();
    });
});

function mostrarPregunta(index) {
    let pregunta = preguntas[index - 1];
    preguntaTexto.innerText = pregunta.pregunta;

    imagen1.src = pregunta.images[0];
    imagen1.setAttribute('data-correct', 0 === pregunta.correcta ? 'true' : 'false');

    imagen2.src = pregunta.images[1];
    imagen2.setAttribute('data-correct', 1 === pregunta.correcta ? 'true' : 'false');

    imagen3.src = pregunta.images[2];
    imagen3.setAttribute('data-correct', 2 === pregunta.correcta ? 'true' : 'false');

    modal.classList.add('modal_show');
    modal.setAttribute('data-index', index);
}


modal.addEventListener('click', (e) => {
    if (e.target === modal) {
        e.stopPropagation(); // Evita que el clic en el fondo cierre el modal
    }
});

// Evita que el modal se cierre al hacer clic en el contenido
modalContent.addEventListener('click', (e) => {
    e.stopPropagation(); // Evita que el clic en el contenido cierre el modal
});

function goHome() {
    window.location.href = 'dashboard';
}


//----------------------------------------Confetti------------------------------------------
function launchConfetti() {
    const duration = 4 * 1000; // Duración en milisegundos
    const animationEnd = Date.now() + duration;
    const defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 0 };

    function randomInRange(min, max) {
        return Math.random() * (max - min) + min;
    }

    const interval = setInterval(function() {
        const timeLeft = animationEnd - Date.now();
        if (timeLeft <= 0) {
            return clearInterval(interval);
        }
        const particleCount = 250 * (timeLeft / duration);
        // Lanzar confeti desde diferentes lugares
        confetti(Object.assign({}, defaults, { 
            particleCount, 
            origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 }
        }));
        confetti(Object.assign({}, defaults, { 
            particleCount, 
            origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 }
        }));
    }, 300);
}





