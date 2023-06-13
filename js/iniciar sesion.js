var correo = document.getElementById('correo');
var contrasena = document.getElementById('contrasena');
document.getElementById('error');

function EnviarFormulario() {
    var mensajesError = [];
    if (correo.value === null || correo.value === '' || contrasena.value === null || contrasena.value === '') {
        mensajesError.push('RELLENE TODOS LOS CAMPOS')

    } else {
        return true;
    }
    error.innerHTML = mensajesError.join('                  ');
    return false;
}