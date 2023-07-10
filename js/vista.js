//Cantidades
function decrementarCantidad() {
  var cantidadInput = document.getElementById('cantidad');
  var cantidad = parseInt(cantidadInput.value);

  if (cantidad > 1) {
    cantidad--;
    cantidadInput.value = cantidad;
  }
}

function incrementarCantidad() {
  var cantidadInput = document.getElementById('cantidad');
  var cantidad = parseInt(cantidadInput.value);

  cantidad++;
  cantidadInput.value = cantidad;
}
//VISTAS
function cambiarImagen(elemento) {
  var imagenSrc = elemento.src;
  var imagenProducto = document.getElementById("imagenProducto");
  imagenProducto.src = imagenSrc;
}

function cambiarImagenCirculo(elemento, imagenIndex) {
  var dots = document.getElementsByClassName("dot");
  for (var i = 0; i < dots.length; i++) {
    dots[i].classList.remove("active");
  }
  elemento.classList.add("active");

  var imagenProducto = document.getElementById("imagenProducto");
  var imagenCambio = document.querySelector('.izquierda .imagen0' + imagenIndex + ' img');
  var imagenSrc = imagenCambio.src;
  imagenProducto.src = imagenSrc;
}
