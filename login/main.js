function clickContraseña(){
    alert("La contraseña fue cambiada")
}


var botonEncendido = document.getElementById('encendido');
var botonApagado = document.getElementById('apagado');
var boronContraseña = document.getElementById('contraseña');
var mensaje = document.getElementById('mensaje');

//agregar event listener al boton de encendido


  
botonEncendido.addEventListener('click', function(){
    event.preventDefault();
    mensaje.textContent = 'Encendido';
    mensaje.style.color = "#fff";
    mensaje.style.backgroundColor = "rgba(71, 178, 61, 0.8)";
    mensaje.style.borderRadius = "50px";
});

botonApagado.addEventListener('click', function(){
    event.preventDefault();
    mensaje.textContent = 'Apagado';
    mensaje.style.color = "#fff";
    mensaje.style.backgroundColor= "rgba(178, 61, 61, 0.8)";
    mensaje.style.borderRadius="50px";
});

function mostrarInput() {
    var contenedorInput = document.getElementById("contenedorInput");
    contenedorInput.style.display = "block";
    event.preventDefault();
  }
  
  function guardarContraseña() {
    var nuevaContraseña = document.getElementById("nuevaContraseña").value;
    // Aquí puedes hacer algo con la nueva contraseña, como enviarla al servidor
    console.log("Nueva contraseña:", nuevaContraseña);
    // Puedes agregar más lógica aquí, como mostrar un mensaje de éxito o restablecer el formulario
  }