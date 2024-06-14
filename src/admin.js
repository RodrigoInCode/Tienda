const allSideMenu = document.querySelectorAll("#sidebar .side-menu.top li a");
cargarPendientes();
cargarVentasTotales();
document.getElementById("campo").addEventListener("keyup", () => {
  cargarPedidos();
});
function cargarPedidos() {
  let input = document.getElementById("campo").value;
  let content = document.getElementById("contentTable");
  let formData = new FormData();
  formData.append("campo", input);

  // let response = await fetch("dataBase/consultarPedido.php");
  // let data = await response.text();
  // console.log("Respuesta del servidor:", data);

  // let pedidos = JSON.parse(data);

  // if (!Array.isArray(pedidos)) {
  //   throw new Error("La respuesta no es un array");
  // }
  fetch("dataBase/consultarPedido.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      content.innerHTML = data.html;
      // console.log(data.html);
      // console.log("Consulta SQL: ", data.sql);
      // console.log("Campo: ",data.campo);
    })
    .catch((err) => console.log(err));
}
function cargarPendientes() {
  let contenedor = document.getElementById("nuevasOrdenes");

  // let response = await fetch("dataBase/consultarPedido.php");
  // let data = await response.text();
  // console.log("Respuesta del servidor:", data);

  // let pedidos = JSON.parse(data);

  fetch("dataBase/consultarPendientes.php")
    .then((response) => response.json())
    .then((data) => {
      contenedor.innerHTML = data.count;
    })
    .catch((err) => console.log(err));
}
function cargarVentasTotales() {
    let contenedor = document.getElementById('ventasTotales');
    
  fetch("dataBase/cargarVentasTotales.php")
    .then((response) => response.json())
    .then((data) => {
      contenedor.innerHTML = data.total_cantidad;
      
    })
    .catch((err) => console.log(err));
}
allSideMenu.forEach((item) => {
  const li = item.parentElement;

  item.addEventListener("click", function () {
    allSideMenu.forEach((i) => {
      i.parentElement.classList.remove("active");
    });
    li.classList.add("active");
  });
});

const searchIcon = document.getElementById("search-icon");
const searchInput = document.getElementById("campo");

searchIcon.addEventListener("click", () => {
  searchInput.classList.toggle("activo");
  if (searchInput.classList.contains("activo")) {
    searchInput.focus();
  } else {
    searchInput.blur();
  }
});

// TOGGLE SIDEBAR
const menuBar = document.querySelector("#content nav .bx.bx-menu");
const sidebar = document.getElementById("sidebar");

menuBar.addEventListener("click", function () {
  sidebar.classList.toggle("hide");
});

const searchButton = document.querySelector(
  "#content nav form .form-input button"
);
const searchButtonIcon = document.querySelector(
  "#content nav form .form-input button .bx"
);
const searchForm = document.querySelector("#content nav form");

searchButton.addEventListener("click", function (e) {
  if (window.innerWidth < 576) {
    e.preventDefault();
    searchForm.classList.toggle("show");
    if (searchForm.classList.contains("show")) {
      searchButtonIcon.classList.replace("bx-search", "bx-x");
    } else {
      searchButtonIcon.classList.replace("bx-x", "bx-search");
    }
  }
});

if (window.innerWidth < 768) {
  sidebar.classList.add("hide");
} else if (window.innerWidth > 576) {
  searchButtonIcon.classList.replace("bx-x", "bx-search");
  searchForm.classList.remove("show");
}

window.addEventListener("resize", function () {
  if (this.innerWidth > 576) {
    searchButtonIcon.classList.replace("bx-x", "bx-search");
    searchForm.classList.remove("show");
  }
});

const switchMode = document.getElementById("switch-mode");

switchMode.addEventListener("change", function () {
  if (this.checked) {
    document.body.classList.add("dark");
  } else {
    document.body.classList.remove("dark");
  }
});
document.addEventListener("DOMContentLoaded", cargarPedidos);
