const btnSignIn = document.getElementById("sign-in"),
      btnSignUp = document.getElementById("sign-up"),
      containerFormRegister = document.querySelector(".register"),
      containerFormLogin = document.querySelector(".login");

btnSignIn.addEventListener("click", e => {
    containerFormRegister.classList.add("hide");
    containerFormLogin.classList.remove("hide")
})


btnSignUp.addEventListener("click", e => {
    containerFormLogin.classList.add("hide");
    containerFormRegister.classList.remove("hide")
})
const formulario=document.getElementById('register');
formulario.addEventListener("submit", (e) => {
    e.preventDefault();
  
      const formData = new FormData(formulario);
      console.log(formData);
      fetch("dataBase/agregarUsuario.php", {
        method: "POST",
        body: formData,
      })
        .then((response) => response.json())
        .then((data) => {
          console.log(data);
          if (data.success) {
            document
              .getElementById("formulario__mensaje-exito")
              .classList.add("formulario__mensaje-exito-activo");
            setTimeout(() => {
              document
                .getElementById("formulario__mensaje-exito")
                .classList.remove("formulario__mensaje-exito-activo");
            }, 5000);
  
            document
              .querySelectorAll(".formulario__grupo-correcto")
              .forEach((icono) => {
                icono.classList.remove("formulario__grupo-correcto");
              });
          }
        })
        .catch((error) => {
          console.error("Error:", error);
          alert("Ocurrió un error al enviar el formulario");
          document.getElementById("formulario__mensaje").textContent =
            "Error: Intentelo mas Tarde";
          setTimeout(() => {
              document.getElementById("formulario__mensaje")
              .classList.add("formulario__mensaje-activo");
          }, 5000);
        });
      // formulario.reset();
  });
  