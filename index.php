<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Super G</title>
    <link rel="stylesheet" href="public\bundle.css" />
    <link rel="icon" type="image/x-icon" href="src/imagenes/logo_sin_fondp.png" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
</head>

<body>
    <?php
    include('./layout/menu.php');
    ?>
    <main>
        <div class="contenedor-main">
            <div class="contenedor_head">
                <img src="src/imagenes/logo_sin_letras (1).png" alt="" width="50px" height="50px" />
                <div class="contenedor_head_texto">
                    <p>Tienda Super G</p>
                </div>
                <div class="contenedor_head_boton">
                    <span>Contactanos</span>
                    <img src="src\assets\arrow-forward-outline.svg" height="15px" width="15px">
                </div>
                <div class="contenedor_head_secion">
                    <span><a href="login.php">Iniciar Seción</a></span>
                    <img src="src\assets\arrow-forward-outline.svg" height="15px" width="15px">
                </div>
            </div>
            <section id="seccion1">
                <div class="contenedor_contenido">
                    <p>
                       <span class="Tlqb"> Todo lo que buscas,<span> </br>
                        <span class="typed "></span>
                    </p>
                    <div class="parrafo_contenido">
                     
                    </div>
                    <div class="boton_contenido">
                        <span>Pide ya</span>
                    </div>
                </div>
            </section>
            <section id="seccion2">
                <div class="contenedor-info" id="info">
                    <h3>Sobre Nosotros</h3>
                    <p><br>Soy una tienda de abarrotes que esta desde hace ""
                       y que tenemos una variedad de productos, el encargado que es el dueño 
                       de la tienda se llama Gerardo.Cuando hat un pedido cierra la tienda poco tiempo hasta
                       que entregue el producto y el tiene la politica de que hoy no fia mañana si.
                      </p>
                    <img src="./src/assets/compra_online.svg" id="imagen-info">
                </div>
            </section>
            <section id="seccion3">
                <div class="contenedor_comentarios" id="com">
                    <div class="slider-contenedor">
                        <div class="slider-test">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, nulla.</p>
                            <img src="./src/imagenes/imagen-comentario.jpg" alt="">
                            <h3>Nombre1</h3>
                        </div>
                        <div class="slider-test">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, nulla.</p>
                            <img src="./src/imagenes/imagen-comentario.jpg" alt="">
                            <h3>Nombre2</h3>
                        </div>
                        <div class="slider-test">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, nulla.</p>
                            <img src="./src/imagenes/imagen-comentario.jpg" alt="">
                            <h3>Nombre3</h3>
                        </div>
                    </div>
                </div>
            </section>
            <section id="seccion4">
                <h1>Nuestra Ubicacion</h1>
                <div class="contenedor-map" id="map">

                    <div id="map" style="height: 800px;">

                    </div>
                </div>
            </section>
        </div>
        </div>
    </main>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <script src="./public/bundle.js"></script>
</body>

</html>