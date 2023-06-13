var radioInputs = document.querySelectorAll("input[type='radio']");

// Verificar si hay al menos un input de tipo radio
if (radioInputs.length > 0) {
    // Activar la primera opción por defecto
    radioInputs[0].checked = true;

    // Agregar un evento "change" a todos los inputs de tipo radio
    for (var i = 0; i < radioInputs.length; i++) {
        radioInputs[i].addEventListener("change", function () {
            // Verificar si todas las opciones están deseleccionadas
            var allUnchecked = true;
            for (var j = 0; j < radioInputs.length; j++) {
                if (radioInputs[j].checked) {
                    allUnchecked = false;
                    break;
                }
            }

            // Si todas las opciones están deseleccionadas, activar la primera opción
            if (allUnchecked) {
                radioInputs[0].checked = true;
            }
        });
    }
}

var inputs = document.querySelectorAll("input");

for (var i = 0; i < inputs.length; i++) {
    inputs[i].setAttribute("required", "required");
}

