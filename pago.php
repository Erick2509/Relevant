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
            <div class="correo"><?php echo $_SESSION['direccion'] . "," . $_SESSION['ciudad'] . "," . $_SESSION['codigo_postal'] . "," . $_SESSION['region'] . "," . $_SESSION['pais'] ?></div>
            <div class="d_cambiar">
              <a href="Informacion.php">Cambiar</a>
            </div>
          </div>
          <!--Informacion de Metodo envio-->
          <div class="informacion">
            <div class="texto">Método</div>
            <div class="correo"><?php echo $_SESSION['Denvio'] ?> </div>
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
  <script src="js/pago.js"></script>
</body>

</html>