<?php
session_start();
include './bd/conexion.php';
$consulta = "SELECT * FROM usuario_informacion WHERE id_usuario='" . $_SESSION['id'] . "'";
$resultado = mysqli_query($conexion, $consulta);
while ($fila = mysqli_fetch_array($resultado)) {
  $pais = $fila['pais'];
  $direccion = $fila['direccion'];
  $referencia = $fila['referencia'];
  $codigo_postal = $fila['codigo_postal'];
  $ciudad = $fila['ciudad'];
  $region = $fila['region'];
  $telefono = $fila['telefono'];
}
$consultapago = "SELECT * FROM metodo_pago WHERE id_usuario='" . $_SESSION['id'] . "'";
$resultadopago = mysqli_query($conexion, $consultapago);
while ($fila_pago = mysqli_fetch_array($resultadopago)) {
  $metodopago = $fila_pago['metodo_pago'];
}

$consultainfopago = "SELECT * FROM metodos_pagos WHERE tipo_pago= '" . $metodopago . "'";
$resultadoinfopago = mysqli_query($conexion, $consultainfopago);
while ($filainfo = mysqli_fetch_array($resultadoinfopago)) {
  $info = $filainfo['instrucciones'];
}

?>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pantalla de pedido</title>
  <link rel="stylesheet" href="css/style_comprobante.css" />
</head>

<body>
  <div class="contenido_comprobante">
    <div class="form1">
      <div class="logo">
        <a href="index.php"><img src="imagenes/logo.png" alt="" /></a>
      </div>
      <div class="confirmacion_pedido">
        <div class="check"><img src="imagenes/check.png" /></div>
        <div class="cod_pedido">
          <h3>Pedido REL123</h3>
        </div>
        <div class="agradecimiento">
          <h1>Gracias <?php echo $_SESSION['nombre'] . "!" ?></h1>
        </div>
      </div>
      <div class="desc_confirma_pedido">
        <div class="descrip_pedido">
          <div class="titulo">
            <h3>Tu pedido está confirmado</h3>
          </div>
          <div class="descrip">
            <p>
              <?php echo $info ?>
            </p>
          </div>
        </div>
        <div class="informacion_cliente">
          <div class="titulo">
            <h3>Informacion del cliente</h3>
          </div>
          <div class="left">
            <div class="info">
              <h4>Informacion de contacto</h4>
              <p><?php echo $_SESSION['correo'] ?></p>
            </div>
            <div class="info">
              <h4>Dirección de envío</h4>
              <ul>
                <li><?php echo $_SESSION['nombre'] ?></li>
                <li><?php echo $telefono ?></li>
                <li><?php echo $direccion ?></li>
                <li><?php echo $codigo_postal ?></li>
                <li><?php echo $region ?></li>
                <li><?php echo $pais ?></li>
              </ul>
            </div>
          </div>
          <div class="right">
            <div class="info2">
              <h4>Método de pago</h4>
              <p><?php echo $metodopago ?></p>
            </div>
            <div class="info2">
              <h4>Método de envío</h4>
              <p>Envío regular - 1 a 3 dias hábiles</p>
            </div>
          </div>
        </div>
      </div>
      <div class="botones">
        <div class="btnayuda">
          <p>
            ¿Necesitas ayuda?<a href="contacto.php">Ponte en contacto con nosotros</a>
          </p>
        </div>
        <div class="btnseguir">
          <a href="form_comprobante.php">Seguir comprando</a>
        </div>
      </div>
      <div class="pie">
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
</body>

</html>