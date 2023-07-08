var acc = document.getElementsByClassName("acordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    var isActive = this.classList.contains("active");

    // Si el panel actual está activo y solo queda un panel activo, no hacer nada
    if (isActive && getActivePanelsCount() === 1) {
      return;
    }

    // Cerrar todos los paneles desplegados
    closeAllPanels();

    // Si el panel no estaba activo, abrirlo
    if (!isActive) {
      this.classList.add("active");
      var panel = this.nextElementSibling;
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

function closeAllPanels() {
  var panels = document.getElementsByClassName("panel");
  for (var j = 0; j < panels.length; j++) {
    panels[j].style.maxHeight = null;
    acc[j].classList.remove("active");
  }
}

function getActivePanelsCount() {
  var activePanels = document.getElementsByClassName("active");
  return activePanels.length;
}

// Activar el primer acordeón por defecto
if (acc.length > 0) {
  acc[0].classList.add("active");
  var panel = acc[0].nextElementSibling;
  panel.style.maxHeight = panel.scrollHeight + "px";
}


/*ACTIVACION DE UN RADIO POR DEFECTO*/
document.addEventListener('DOMContentLoaded', function () {
  var radioButtons = document.querySelectorAll('.metodos_pago input[type="radio"]');
  var acordions = document.querySelectorAll('.metodos_pago .acordion');

  // Verificar si al menos uno de los radio buttons está seleccionado
  function validateRadioSelection() {
    var checked = false;
    for (var i = 0; i < radioButtons.length; i++) {
      if (radioButtons[i].checked) {
        checked = true;
        break;
      }
    }
    return checked;
  }

  // Establecer el primer radio button como activo si no hay selecciones previas
  function setFirstRadioButtonActive() {
    var isFirstRadioButtonChecked = validateRadioSelection();
    if (!isFirstRadioButtonChecked) {
      radioButtons[0].checked = true;
    }
  }

  // Escuchar el evento click en los acordions
  acordions.forEach(function (acordion) {
    acordion.addEventListener('click', function () {
      var radioButton = this.querySelector('input[type="radio"]');
      radioButton.checked = true;
    });
  });

  setFirstRadioButtonActive();
});
//contenido de los tipos de pago
document.addEventListener('DOMContentLoaded', function () {
  var panel = document.querySelector('.panel');
  var textoPagoInput = panel.querySelector('input[name="texto_pago"]');
  var textoPago = panel.querySelector('p').textContent;
  textoPagoInput.value = textoPago;
});


