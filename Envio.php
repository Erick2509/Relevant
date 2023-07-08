<?php
session_start();
include './bd/conexion.php';
$consultainfousuario = "SELECT * FROM usuario_informacion WHERE id_usuario=" . $_SESSION['id'];
$resultadoconsulta = mysqli_query($conexion, $consultainfousuario);
$existinfo = false;
while ($fila = mysqli_fetch_array($resultadoconsulta)) {
  $existinfo = true;
  $pais = $fila['pais'];
  $direccion = $fila['direccion'];
  $referencia = $fila['referencia'];
  $codigo_postal = $fila['codigo_postal'];
  $ciudad = $fila['ciudad'];
  $region = $fila['region'];
  $telefono = $fila['telefono'];
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
        <ol>
          <li class="migas"><a href="">Carrito</a></li>
          <li class="signo">&#62;</li>
          <li class="migas"><a href="">Información</a></li>
          <li class="signo">&#62;</li>
          <li class="migas_select">Envíos</li>
          <li class="signo">&#62;</li>
          <li class="migas"><a href="">Pago</a></li>
        </ol>
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
            <div class="correo"><?php echo $direccion . "," . $ciudad . "," . $codigo_postal . "," . $region . "," . $pais ?></div>
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
                <input type="radio" name="envio" value="59.90" /> Envío regular - 1 a 3 días
                hábiles <span>S/. 59.90</span>
              </div>
              <div class="cont">
                <input type="radio" name="envio" value="11.90" /> Recojo en - Tienda 1
                <span>S/. 11.90</span>
              </div>
              <div class="cont">
                <input type="radio" name="envio" value="9.90" /> Recojo en - Tienda 2
                <span>S/. 9.90</span>
              </div>
              <div class="cont">
                <input type="radio" name="envio" value="12.90" /> Recojo en - Tienda 3
                <span>S/. 12.90</span>
              </div>
              <div class="cont">
                <input type="radio" name="envio" value="19.90" /> Recojo en - Tienda 4
                <span>S/. 19.90</span>
              </div>
              <div class="botones">
                <div class="btnenvios">
                  <a href="Informacion.php">&#60; Volver a información</a>
                </div>
                <div class="btn_cpago">
                  <input type="submit" value="Continuar con el pago"></input>
            </form>
          </div>
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
    <?php
    include './bd/conexion.php';
    $consulta_carrito = "SELECT * FROM carrito where id_usuario='" . $_SESSION['id'] . "'";
    $resultado_carrito = mysqli_query($conexion, $consulta_carrito);
    $consulta_carritoTotal = "SELECT SUM(total) AS total_suma FROM carrito WHERE id_usuario = '" . $_SESSION['id'] . "'";
    $resultado_carritoTotal = mysqli_query($conexion, $consulta_carritoTotal);
    while ($resultado_fila = mysqli_fetch_array($resultado_carritoTotal)) {
      $Subtotal = $resultado_fila['total_suma'];
    }

    $i = 0;
    while ($carrito_fila = mysqli_fetch_array($resultado_carrito)) {
      $i++;
    ?>
      <div class="tproductos">

        <?php $i; ?>
        <div class="contimg">
          <img src="<?php echo $carrito_fila['imagen'] ?>" alt="" />
        </div>
        <div class="context">
          <p><?php echo $carrito_fila['descripcion'] ?></p>
        </div>
        <div class="contprecio">
          <p><?php echo "S/. " . $carrito_fila['total'] ?></p>
        </div>
      </div>
    <?php } ?>
    <div class="montos">
      <hr />
      <div class="cont_monto">
        <div class="text">
          <p>Subtotal</p>
        </div>
        <div class="precio">
          <p><?php echo "S/. " . $Subtotal ?></p>
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
          <p><?php echo "S/. " . $Subtotal ?></p>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="js/envio.js"></script>
</body>

</html>