<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Super G</title>
    <link rel="stylesheet" href="./src/style.css" />
    <link
      rel="icon"
      type="image/x-icon"
      href="src/imagenes/logo_sin_fondp.png"
    />
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </head>
  <body>
    <div class="menu">
      <ion-icon name="menu-outline"></ion-icon>
      <ion-icon name="close-outline"></ion-icon>
    </div>

    <div class="barra-lateral">
      <div>
        <div class="nombre-pagina">
          <img
            src="src/imagenes/logo_sin_letras (1).png"
            alt=""
            id="cloud"
            width="50px"
            height="50px"
          />
          <span>Super G</span>
        </div>
      </div>

      <nav class="navegacion">
        <ul>
          <li>
            <a id="inbox" href="">
              <ion-icon name="home-outline"></ion-icon>
              <span>Inicio</span>
            </a>
          </li>
          <li class="productos list_item">
            <div class="list_button list_button--click">
              <a href="#">
                <ion-icon name="fast-food-outline"></ion-icon>
                <span>Productos</span>
              </a>
            </div>

            <ul class="list_show dropdown-content-second">
              <li class="list_shide">
                <a href="catalogo.php">
                  <ion-icon name="beer-outline"></ion-icon>
                  Bebidas
                </a>
              </li>
              <li class="list_shide">
                <a href="">
                  <ion-icon name="pizza-outline"></ion-icon>
                  Abarrotes
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="">
              <ion-icon name="paper-plane-outline"></ion-icon>
              <span>Sent</span>
            </a>
          </li>
          <li>
            <a href="">
              <ion-icon name="document-text-outline"></ion-icon>
              <span>Drafts</span>
            </a>
          </li>
        </ul>
      </nav>

      <div>
        <div class="linea"></div>

        <div class="modo-oscuro">
          <div class="info">
            <ion-icon name="moon-outline"></ion-icon>
            <span>Dark Mode</span>
          </div>
          <div class="switch">
            <div class="base">
              <div class="circulo"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
