<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Procesar el formulario de envío aquí
  $selectedEnvio = $_POST['envio'];

  // Realizar acciones adicionales según el método de envío seleccionado
  if ($selectedEnvio === 'regular') {
    // Acciones específicas para el envío regular
  } elseif ($selectedEnvio === 'tienda1') {
    //Envío a Tienda 1
  } elseif ($selectedEnvio === 'tienda2') {
    // Envío a Tienda 2
  } elseif ($selectedEnvio === 'tienda3') {
    // Envío a Tienda 3
  } elseif ($selectedEnvio === 'tienda4') {
    // Envío a Tienda 4
  }

  // Redireccionar al siguiente paso
  header("Location: pago.php");
  exit();
}
