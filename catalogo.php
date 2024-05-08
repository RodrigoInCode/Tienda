<?php require('./layout/menu.php')?>

<section class="contenedor">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">Ameyal fr/Kiwi 600</span>
                <img src="Recursos/imagenes/ameyal600.jpg" alt="" class="img-item">
                <span class="precio-item">$18.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Ameyal 3L</span>
                <img src="Recursos/imagenes/ameyal3l.jpeg" alt="" class="img-item">
                <span class="precio-item">$35.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Ameyal 600 ml</span>
                <img src="Recursos/imagenes/ameyal600.webp" alt="" class="img-item">
                <span class="precio-item">$18.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Ameyal dura/man. 2 lts</span>
                <img src="Recursos/imagenes/durazno ameyal.webp" alt="" class="img-item">
                <span class="precio-item">$21.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Ameyal fresa kiwi 2 lts</span>
                <img src="Recursos/imagenes/ameyal.jpg" alt="" class="img-item">
                <span class="precio-item">$21.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Coca Cola 2.75 lts</span>
                <img src="Recursos/imagenes/coca2.70.jpeg" alt="" class="img-item">
                <span class="precio-item">$48.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Coca Cola 400 ml</span>
                <img src="Recursos/imagenes/coca400.webp" alt="" class="img-item">
                <span class="precio-item">$15.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Coca Cola 1.35 lts</span>
                <img src="Recursos/imagenes/coca1.3" alt="" class="img-item">
                <span class="precio-item">$29.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Coca Cola 1.75 lts NO Retornable</span>
                <img src="Recursos/imagenes/cocaola1.7.webp" alt="" class="img-item">
                <span class="precio-item">$30.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
        </div>
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">
                <!-- 
                <div class="carrito-item">
                    <img src="img/boxengasse.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Box Engasse</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="1" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$15.000,00</span>
                    </div>
                   <span class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </span>
                </div>
                <div class="carrito-item">
                    <img src="img/skinglam.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Skin Glam</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="3" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$18.000,00</span>
                    </div>
                   <button class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </button>
                </div>
                 -->
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section>
    <script src="./src/carrito.js"></script>
</body>
</html>
