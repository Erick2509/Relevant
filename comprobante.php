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

$consultainfopago = "SELECT * FROM metodos_pagos WHERE tipo_pago= '" . $_SESSION['Mpago'] . "'";
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
              <p><?php echo $_SESSION['Mpago'] ?></p>
            </div>
            <div class="info2">
              <h4>Método de envío</h4>
              <p><?php echo $_SESSION['Denvio'] ?></p>
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
              <p><?php echo 'S/. ' . $_SESSION['Tenvio'] ?></p>
            </div>
          </div>
          <hr />
          <div class="cont_monto">
            <div class="text">
              <p>Total</p>
            </div>
            <div class="precio">
              <p>S/. <?php echo number_format($totalG + $_SESSION['Tenvio'], 2) ?></p>
            </div>
          </div>
        </div>
      <?php } else { ?>
        <p style="min-height: 40vh;">NO HAY PRODUCTOS EN EL CARRITO</p>
      <?php } ?>
    </div>
  </div>
</body>

</html>