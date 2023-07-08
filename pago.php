<?php
session_start();

include './bd/conexion.php';
$consultametodo = "SELECT * FROM metodos_pagos WHERE id_pago='1'";
$resultado_metodo = mysqli_query($conexion, $consultametodo);
while ($metodofila = mysqli_fetch_array($resultado_metodo)) {
  $tipo_pago = $metodofila['tipo_pago'];
  $descricion = $metodofila['descripcion'];
}
$consultametodo2 = "SELECT * FROM metodos_pagos WHERE id_pago='2'";
$resultado_metodo2 = mysqli_query($conexion, $consultametodo2);
while ($metodofila2 = mysqli_fetch_array($resultado_metodo2)) {
  $tipo_pago2 = $metodofila2['tipo_pago'];
  $descricion2 = $metodofila2['descripcion'];
}
$consultametodo3 = "SELECT * FROM metodos_pagos WHERE id_pago='3'";
$resultado_metodo3 = mysqli_query($conexion, $consultametodo3);
while ($metodofila3 = mysqli_fetch_array($resultado_metodo3)) {
  $tipo_pago3 = $metodofila3['tipo_pago'];
  $descricion3 = $metodofila3['descripcion'];
}

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
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pago</title>
  <link rel="stylesheet" href="css/style_pago.css" />
</head>

<body>
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
          <li class="migas"><a href="">Envíos</a></li>
          <li class="signo">&#62;</li>
          <li class="migas_select">Pago</li>
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
          <!--Informacion de Metodo envio-->
          <div class="informacion">
            <div class="texto">Método</div>
            <div class="correo">
              Envío regular - 1 a 3 días hábiles - Gratis
            </div>
            <div class="d_cambiar"><a href="Envio.php">Cambiar</a></div>
          </div>
        </div>
        <!--Contenido de Pago-->
        <div class="pagogeneral">
          <form action="form_procesar_pago.php" method="POST">
            <div class="titulo">
              <h3>Pago</h3>
              <h4>Todas las transacciones son seguras y están encriptadas</h4>
            </div>
            <div class="metodos_pago">
              <div class="cont">
                <div class="acordion active"><input type="radio" value="<?php echo $tipo_pago ?>" name="metodo_pago"><?php echo $tipo_pago ?></div>
                <div class="panel">
                  <p>
                    <?php echo $descricion ?>
                  </p>
                </div>
              </div>
              <div class="cont">
                <div class="acordion"><input type="radio" name="metodo_pago" value="<?php echo $tipo_pago2 ?>"><?php echo $tipo_pago2 ?></div>
                <div class="panel">
                  <p>
                    <?php echo $descricion2 ?>
                  </p>
                </div>
              </div>
              <div class="cont">
                <div class="acordion"><input type="radio" name="metodo_pago" value="<?php echo $tipo_pago3 ?>"><?php echo $tipo_pago3 ?></div>
                <div class="panel">
                  <p>
                    <?php echo $descricion3 ?>
                  </p>
                </div>
              </div>
            </div>
            <div class="botones">
              <div class="btnenvios">
                <a href="Envio.php">&#60; Volver a envíos</a>
              </div>
              <div class="btn_cpago">
                <input type="submit" name="finalizar_pedido">Finalizar el pedido</input>
              </div>
            </div>
            <input type="hidden" name="texto_pago" value="">
          </form>
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
      $consulta_envio = "SELECT * FROM envio_venta WHERE id_usuario='" . $_SESSION['id'] . "'";
      $resultado_envio = mysqli_query($conexion, $consulta_envio);
      while ($resultado_fila = mysqli_fetch_array($resultado_carritoTotal)) {
        $Subtotal = $resultado_fila['total_suma'];
      }
      while ($envio_fila = mysqli_fetch_array($resultado_envio)) {
        $envio = $envio_fila['tipoenvio'];
      }
      $totalg = $Subtotal + $envio;
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
            <p><?php echo "S/. " . $envio ?></p>
          </div>
        </div>
        <hr />
        <div class="cont_monto">
          <div class="text">
            <p>Total</p>
          </div>
          <div class="precio">
            <p><?php echo "S/. " . $totalg ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/pago.js"></script>
</body>

</html>