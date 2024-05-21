'use strict';

const cloud = document.getElementById("cloud");
const barraLateral = document.querySelector(".barra-lateral");
const spans = document.querySelectorAll("span");
const palanca = document.querySelector(".switch");
document.querySelector(".navegacion");
const menu = document.querySelector(".menu");
const main = document.querySelector("main");

menu.addEventListener("click",()=>{
    barraLateral.classList.toggle("max-barra-lateral");
    if(barraLateral.classList.contains("max-barra-lateral")){
        menu.children[0].style.display = "none";
        menu.children[1].style.display = "block";
    }
    else {
        menu.children[0].style.display = "block";
        menu.children[1].style.display = "none";
    }
    if(window.innerWidth<=320){
        barraLateral.classList.add("mini-barra-lateral");
        main.classList.add("min-main");
        spans.forEach((span)=>{
            span.classList.add("oculto");
        });
    }
});
let listElements =document.querySelectorAll('.list_button--click');

listElements.forEach(listElement => {
    listElement.addEventListener('click',()=>{
        listElement.classList.toggle('arrow');
        let height=0;
        let menu=listElement.nextElementSibling;
        if (menu.clientHeight== "0") {
            height=menu.scrollHeight;
        }
        menu.style.height=`${height}px`;
    });
});
palanca.addEventListener("click",()=>{
    const circulo = document.querySelector(".circulo");
    let body = document.body;
    body.classList.toggle("dark-mode");
    circulo.classList.toggle("prendido");
    
});

cloud.addEventListener("click",()=>{
    barraLateral.classList.toggle("mini-barra-lateral");
    
    spans.forEach((span)=>{
        span.classList.toggle("oculto");
    });
});

let slider= document.querySelector('.slider-contenedor');
let sliderInd= document.querySelectorAll('.slider-test');
let contador = 1;
let tamañoWidth= sliderInd[0].clientWidth;
let intervalo=2000;

window.addEventListener('resize',()=>{
    sliderInd[0].clientWidth;

});
setInterval(()=>{
    slides();
},intervalo);
function slides() {
    slider.style.transform =`translate(${-tamañoWidth*contador-1}px)`;
    slider.style.transition=`transform 1s`;
    if (contador===sliderInd.length-1) {
        contador=-1;
        setTimeout(()=>{
            slider.style.transform =`translate(0px)`;
            slider.style.transition=`transform 0s`;
        }, intervalo);
    }
    contador++;
}

var map = L.map('map').setView([19.27194444, -99.60166667], 17);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var latitud = 19.27194444;
    var longitud = -99.60166667;
    
    
    L.marker([latitud, longitud]).addTo(map)
        .bindPopup('Aqui estamos ubicados')
        .openPopup();

new Typed('.typed',{
    strings:[
        '<i class="typed">Sin salir de casa.</i>'
    ],
    typeSpeed:75,
    startDelay:600
});
