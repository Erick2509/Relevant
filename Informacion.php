<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Informacion</title>
  <link rel="stylesheet" href="css/style_informacion.css" />
</head>

<body>
  <div class="Vista">
    <div class="Izquierda">
      <div class="Logo">
        <a href="#"><img src="imagenes/logo.png" alt="" /></a>
      </div>
      <nav class="migas_pan">
        <ol>
          <li class="migas"><a href="">Carrito</a></li>
          <li class="signo">&#62;</li>
          <li class="migas_select">Información</li>
          <li class="signo">&#62;</li>
          <li class="migas"><a href="">Envíos</a></li>
          <li class="signo">&#62;</li>
          <li class="migas"><a href="">Pago</a></li>
        </ol>
      </nav>
      <div class="Formulario">
        <form action="form_informacion.php" method="POST">
          <div class="Contenido01">
            <div class="Info">
              <h3>Informacion del contacto</h3>
            </div>
            <div class="Pregunta">
              <h6>
                ¿Ya tienes tu Cuenta?
                <a href="ini_sesion.php">Iniciar Sesión</a>
              </h6>
            </div>
            <div class="Correo">
              <input name="correo" type="email" placeholder="Correo electronico" id="correo" />
            </div>
            <div class="Enviar">
              <input type="checkbox" />Enviarme novedades y ofertas por correo
              electrónico
            </div>
          </div>
          <div class="Form">
            <div class="Direccion">
              <h3>Dirección de domicilio / Nombre de la tienda</h3>
            </div>
            <div class="Pais">
              <select name="Pais">
                <option>Pais/Region</option>
                <option>Peru</option>
                <option>Chile</option>
                <option>Argentina</option>
                <option>Venezuela</option>
                <option>Uruguay</option>
                <option>Paraguay</option>
                <option>Colombia</option>
                <option>Ecuador</option>
              </select>
            </div>
            <div class="N_A">
              <div class="Nombres">
                <input type="text" name="nombres" placeholder="Nombre" id="nombres" />
              </div>
              <div class="Apellidos">
                <input type="text" name="apellidos" placeholder="Apellidos" id="apellido" />
              </div>
            </div>
            <div class="Identidad">
              <input type="number" name="identidad" placeholder="DNI,CE,RUC" inputmode="numeric" id="dni" />
            </div>
            <div class="Direccion">
              <input type="text" name="direccion" placeholder="Direccion" id="direccion" />
            </div>
            <div class="Referencia">
              <input type="text" name="referencia" placeholder="Referencia" id="referencia" />
            </div>
            <div class="C_C">
              <div class="Codigo">
                <input type="number" name="codigo_postal" placeholder="Codigo postal" id="codigoPos" />
              </div>
              <div class="Ciudad">
                <input type="text" name="ciudad" placeholder="Ciudad" id="ciudad" />
              </div>
            </div>
            <div class="Pais">
              <select name="Provincia">
                <option>Region/Departamento</option>
                <option>Amazonas</option>
                <option>Ancash</option>
                <option>Apurimac</option>
                <option>Arequipa</option>
                <option>Ayacucho</option>
                <option>Cajamarca</option>
                <option>Callao</option>
                <option>Lima</option>
                <option>Madre de Dios</option>
              </select>
            </div>
            <div class="Telefono">
              <input type="number" name="telefono" placeholder="Teléfono" id="telefono" />
            </div>
            <div class="Enviar">
              <input type="checkbox" />Guardar mi información y consultar
              rápidamente la proxima vez
            </div>
          </div>

          <div class="botones">
            <div class="carrito">
              <a href="carrito.php"> &#60; Volver al carrito</a>
            </div>
            <div class="envios">
              <a href="Envio.php"><input type="submit" value="Continuar con Envíos" /></a>
            </div>
          </div>
        </form>
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
            <p>En proceso</p>
          </div>
        </div>
        <hr />
        <div class="cont_monto">
          <div class="text">
            <p>Total</p>
          </div>
          <div class="precio">
            <p>S/ 89.90</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/informacion.js"></script>
</body>

</html>