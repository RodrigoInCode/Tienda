let slider= document.querySelector('.slider-contenedor');
let sliderInd= document.querySelectorAll('.slider-test');
let contador = 1;
let tamañoWidth= sliderInd[0].clientWidth;
let intervalo=2000;

window.addEventListener('resize',()=>{
    let tamañoWidth= sliderInd[0].clientWidth;

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
