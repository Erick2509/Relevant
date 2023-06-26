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
            <div class="correo">correo@gmail</div>
            <div class="d_cambiar">
              <a href="Informacion.php">Cambiar</a>
            </div>
          </div>
          <!--Informacion de Enviar a-->
          <div class="informacion">
            <div class="texto">Enviar a</div>
            <div class="correo">jiron junin 345, lima02002,Lima,Perú</div>
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
          <div class="titulo">
            <h3>Pago</h3>
            <h4>Todas las transacciones son seguras y están encriptadas</h4>
          </div>
          <div class="metodos_pago">
            <div class="cont">
              <button class="acordion active" value="Depósito Bancario">Depósito Bancario</button>
              <div class="panel">
                <p>
                  Puedes realizar tus pagos realizando un depósito bancario a
                  nombre de RELEVANT en nuestras cuentas de: BCP: Cuenta
                  Corriente Soles: 000-0000000-0-00
                </p>
              </div>
            </div>
            <div class="cont">
              <button class="acordion" value="Yape/Plin">Yape/Plin</button>
              <div class="panel">
                <p>
                  Puedes realizar tus pagos realizando un depósito bancario a
                  nombre de RELEVANT en nuestras cuentas de: BCP: Cuenta
                  Corriente Soles: 000-0000000-0-00
                </p>
              </div>
            </div>
            <div class="cont">
              <button class="acordion" value="Paypal">Paypal</button>
              <div class="panel">
                <p>
                  Puedes realizar tus pagos realizando un depósito bancario a
                  nombre de RELEVANT en nuestras cuentas de: BCP: Cuenta
                  Corriente Soles: 000-0000000-0-00
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Contenido de botones-->
      <div class="botones">
        <div class="btnenvios">
          <a href="Envio.php">&#60; Volver a envíos</a>
        </div>
        <div class="btn_cpago">
          <a href="comprobante.php">Finalizar el pedido</a>
        </div>
      </div>
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
      <div class="tproductos">
        <div class="contimg">
          <img src="imagenes/short.jpg" alt="" />
        </div>
        <div class="context">
          <p>Short deportivo de compresion para hombre</p>
          <p>S/Negro</p>
        </div>
        <div class="contprecio">
          <p>S/ 89.90</p>
        </div>
      </div>
      <div class="montos">
        <hr />
        <div class="cont_monto">
          <div class="text">
            <p>Subtotal</p>
          </div>
          <div class="precio">
            <p>S/ 89.90</p>
          </div>
        </div>
        <div class="cont_monto">
          <div class="text">
            <p>Envíos</p>
          </div>
          <div class="precio">
            <p>S/ 39.90</p>
          </div>
        </div>
        <hr />
        <div class="cont_monto">
          <div class="text">
            <p>Total</p>
          </div>
          <div class="precio">
            <p>S/ 129.80</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/pago.js"></script>
</body>

</html>