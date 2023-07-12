<?php
session_start();
include './bd/conexion.php';

$consultaenvio = "SELECT * FROM tipo_envio WHERE id_envio=1";
$resultadoenvio = mysqli_query($conexion, $consultaenvio);
while ($filaenvio = mysqli_fetch_array($resultadoenvio)) {
  $descripcionenvio = $filaenvio['descripcion'];
  $precioenvio = $filaenvio['precio'];
}
$consultaenvio2 = "SELECT * FROM tipo_envio WHERE id_envio=2";
$resultadoenvio2 = mysqli_query($conexion, $consultaenvio2);
while ($filaenvio2 = mysqli_fetch_array($resultadoenvio2)) {
  $descripcionenvio2 = $filaenvio2['descripcion'];
  $precioenvio2 = $filaenvio2['precio'];
}
$consultaenvio3 = "SELECT * FROM tipo_envio WHERE id_envio=3";
$resultadoenvio3 = mysqli_query($conexion, $consultaenvio3);
while ($filaenvio3 = mysqli_fetch_array($resultadoenvio3)) {
  $descripcionenvio3 = $filaenvio3['descripcion'];
  $precioenvio3 = $filaenvio3['precio'];
}
$consultaenvio4 = "SELECT * FROM tipo_envio WHERE id_envio=4";
$resultadoenvio4 = mysqli_query($conexion, $consultaenvio4);
while ($filaenvio4 = mysqli_fetch_array($resultadoenvio4)) {
  $descripcionenvio4 = $filaenvio4['descripcion'];
  $precioenvio4 = $filaenvio4['precio'];
}
$consultaenvio5 = "SELECT * FROM tipo_envio WHERE id_envio=5";
$resultadoenvio5 = mysqli_query($conexion, $consultaenvio5);
while ($filaenvio5 = mysqli_fetch_array($resultadoenvio5)) {
  $descripcionenvio5 = $filaenvio5['descripcion'];
  $precioenvio5 = $filaenvio5['precio'];
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Envio</title>
  <link rel="stylesheet" href="css/style_envio.css" />

</head>

<body>

  <!--CONTENIDO-->
  <div class="contenido_pago">
    <div class="form">
      <div class="logo">
        <a href="#"><img src="imagenes/logo.png" alt="" /></a>
      </div>
      <nav class="migas_pan">
        <div class="migas"><a href="#">Carrito</a></div>
        <div class="signo">&#62;</div>
        <div class="migas"><a href="#">Información</a></div>
        <div class="signo">&#62;</div>
        <div class="migas_select">Envíos</div>
        <div class="signo">&#62;</div>
        <div class="migas"><a href="#">Pago</a></div>
      </nav>
      <!--Contenido de contacto, enviar y envios-->

      <div class="contenido_general">
        <!--Contenido de Contacto y Enviar a-->
        <div class="contenido">
          <!--Informacion de contacto -->
          <div class="informacion">
            <div class="texto">Contacto</div>
            <div class="correo"><?php echo $_SESSION['correo'] ?></div>
            <div class="d_cambiar">
              <a href="Informacion.php">Cambiar</a>
            </div>
          </div>
          <!--Informacion de Enviar a-->
          <div class="informacion">
            <div class="texto">Enviar a</div>
            <div class="correo"><?php echo $_SESSION['direccion'] . "," . $_SESSION['ciudad'] . "," . $_SESSION['codigo_postal'] . "," . $_SESSION['region'] . "," . $_SESSION['pais'] ?></div>
            <div class="d_cambiar">
              <a href="Informacion.php">Cambiar</a>
            </div>
          </div>
        </div>
        <!--Contenido de Pago-->
        <div class="pagogeneral">
          <div class="titulo">
            <h3>Envíos</h3>
          </div>
          <div class="metodos_envio">
            <form action="form_procesar_envio.php" method="POST">
              <div class="cont">
                <input type="radio" name="envio" value="<?php echo $precioenvio ?>" /><?php echo $descripcionenvio ?> <span>S/. <?php echo $precioenvio ?></span>
              </div>
              <div class="cont">
                <input type="radio" name="envio" value="<?php echo $precioenvio2 ?>" /><?php echo $descripcionenvio2 ?> <span>S/. <?php echo $precioenvio2 ?></span>
              </div>
              <div class="cont">
                <input type="radio" name="envio" value="<?php echo $precioenvio3 ?>" /><?php echo $descripcionenvio3 ?> <span>S/. <?php echo $precioenvio3 ?></span>
              </div>
              <div class="cont">
                <input type="radio" name="envio" value="<?php echo $precioenvio4 ?>" /><?php echo $descripcionenvio4 ?> <span>S/. <?php echo $precioenvio4 ?></span>
              </div>
              <div class="cont">
                <input type="radio" name="envio" value="<?php echo $precioenvio5 ?>" /><?php echo $descripcionenvio5 ?> <span>S/. <?php echo $precioenvio5 ?></span>
              </div>
              <div class="botones">
                <div class="btnenvios">
                  <a href="Informacion.php">&#60; Volver a información</a>
                </div>
                <div class="btn_cpago">
                  <input type="submit" value="Continuar con el pago"></input>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!--Contenido de botones-->


    <div class="pie">
      <hr />
      <div class="submenu">
        <ul>
          <li>
            <a href="reembolso.php" target="_blank">Política de reembolso</a>
          </li>
          <li>
            <a href="privacidad.php" target="_blank">Política de privacidad</a>
          </li>
          <li>
            <a href="terminos.php" target="_blank">Términos y condiciones</a>
          </li>
        </ul>
      </div>
      <p>&copy; Relevant 2023 - Todos los derechos reservados</p>
    </div>
  </div>

  <div class="product">
    <?php if (!empty($_SESSION['CARRITO'])) { ?>
      <?php $totalG = 0; ?>
      <?php foreach ($_SESSION['CARRITO'] as $indice => $producto) { ?>
        <div class="tproductos">
          <div class="contimg">
            <img src="<?php echo $producto['imagen'] ?>" alt="" />
          </div>
          <div class="context">
            <p><?php echo $producto['descripcion'] ?></p>
          </div>
          <div class="contprecio">
            <p><?php echo "S/. " . number_format($producto['precio'] * $producto['cantidad'], 2) ?></p>
          </div>
        </div>
        <?php $totalG = $totalG + ($producto['precio'] * $producto['cantidad']) ?>
      <?php } ?>
      <div class="montos">
        <hr />
        <div class="cont_monto">
          <div class="text">
            <p>Subtotal</p>
          </div>
          <div class="precio">
            <p>S/. <?php echo number_format($totalG, 2) ?></p>
          </div>
        </div>
        <div class="cont_monto">
          <div class="text">
            <p>Envíos</p>
          </div>
          <div class="precio">
            <p>En proceso</p>
          </div>
        </div>
        <hr />
        <div class="cont_monto">
          <div class="text">
            <p>Total</p>
          </div>
          <div class="precio">
            <p>S/. <?php echo number_format($totalG, 2) ?></p>
          </div>
        </div>
      </div>
    <?php } else { ?>
      <p style="min-height: 40vh;">NO HAY PRODUCTOS EN EL CARRITO</p>
    <?php } ?>
  </div>
  <script src="js/envio.js"></script>
</body>

</html>