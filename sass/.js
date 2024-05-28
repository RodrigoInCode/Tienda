document.addEventListener('DOMContentLoaded', () => {
    const contenedorItems = document.querySelector('.contenedor-items');
    const flechaIzquierda = document.querySelector('.flecha-izquierda');
    const flechaDerecha = document.querySelector('.flecha-derecha');

    let scrollAmount = 0;
    const scrollStep = 200; // Ajusta este valor según sea necesario

    flechaIzquierda.addEventListener('click', () => {
        contenedorItems.scrollBy({
            top: 0,
            left: -scrollStep,
            behavior: 'smooth'
        });
    });

    flechaDerecha.addEventListener('click', () => {
        contenedorItems.scrollBy({
            top: 0,
            left: scrollStep,
            behavior: 'smooth'
        });
    });
});
