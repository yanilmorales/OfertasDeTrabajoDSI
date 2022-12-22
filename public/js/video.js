let video = document.getElementsByTagName('video')[0];
let reproducir = document.getElementById('reproducir');
let barra = document.getElementById('barra');
let progreso = document.getElementById('progreso');
let silenciar = document.getElementById('silenciar');
let volumen = document.getElementById('volumen');
let bucle;

reproducir.addEventListener('click', cambiar);
silenciar.addEventListener('click',sonido);
barra.addEventListener('click', mover);
volumen.addEventListener('change', nivel);

function cambiar() {
    if(!video.paused && !video.ended){
        video.pause();
        reproducir.value = '>';
        clearInterval(bucle);
    }
    else {
        video.play();
        reproducir.value = 'Pausa'
        bucle = setInterval(estado, 1000);
    }
}

function estado() {
    if(!video.ended){
        let tamaño = parseInt(video.currentTime / video.duration * 100);
        progreso.style.width = tamaño+'%';
    }
    else {
        progreso.style.width = '0%'; 
        reproducir.innerHTML = '>'; 
        clearInterval(bucle)
    }
}

function sonido() {
    video.muted = !video.muted;
}

function mover(e) {
    if(!video.paused && !video.ended){
        let ratonX = e.pageX - barra.offsetLeft;
        let nuevoTiempo = ratonX * video.duration / barra.offsetWidth;
        video.currentTime = nuevoTiempo;
        progreso.style.width = parseInt(video.currentTime/video.duration*100)+'%';
    }
}

function nivel() {
    video.volume = volumen.value;
}