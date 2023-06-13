var inputs = document.querySelectorAll("input");

for (var i = 0; i < inputs.length; i++) {
  inputs[i].setAttribute("required", "required");
}
function confirmacion() {
  alert("Correo enviado correctamente")
}
