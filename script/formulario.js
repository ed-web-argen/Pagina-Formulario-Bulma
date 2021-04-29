var formu = document.querySelector("form[name='miform']");
var botonEnviar = document.getElementById("enviar");
var nombre = document.getElementById("nombre");

botonEnviar.addEventListener("click", ()=>{
    if (formu.checkValidity()) {
        console.log("bien");
    } else {
        console.log("mal");
          Swal.fire('el formulario no puede ser enviado, complete correctamente');
         }
})
