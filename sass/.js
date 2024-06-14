document.addEventListener('DOMContentLoaded', function() {
    const botonesIzquierda = document.querySelectorAll('.flecha-izquierda');
    const botonesDerecha = document.querySelectorAll('.flecha-derecha');
    const contenedoresItems = document.querySelectorAll('.contenedor-items');

    botonesIzquierda.forEach((boton, index) => {
        boton.addEventListener('click', () => {
            contenedoresItems[index].scrollBy({
                left: -200,
                behavior: 'smooth'
            });
        });
    });

    botonesDerecha.forEach((boton, index) => {
        boton.addEventListener('click', () => {
            contenedoresItems[index].scrollBy({
                left: 200,
                behavior: 'smooth'
            });
        });
    });
});
