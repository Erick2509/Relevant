<?php
session_start();
function usuarioLogeado()
{
  // Verifica si la variable de sesión existe y tiene un valor válido
  if (isset($_SESSION['nombre']) && !empty($_SESSION['nombre'])) {
    // El usuario está logeado
    return true;
  } else {
    // El usuario no está logeado
    return false;
  }
}

?>

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
        <div class="migas"><a href="#">Carrito</a></div>
        <div class="signo">&#62;</div>
        <div class="migas_select">Información</div>
        <div class="signo">&#62;</div>
        <div class="migas"><a href="#">Envíos</a></div>
        <div class="signo">&#62;</div>
        <div class="migas"><a href="#">Pago</a></div>
      </nav>
      <div class="Formulario">
        <div class="Contenido01">
          <div class="Info">
            <h3>Informacion del contacto</h3>
          </div>
          <?php if (usuarioLogeado()) : ?>

          <?php else : ?>
            <div class="Pregunta">
              <h6>
                ¿Ya tienes tu Cuenta?
                <a href="ini_sesion.php">Iniciar Sesión</a>
              </h6>
            </div>
          <?php endif; ?>
          <div class="Correo">
            <input name="correo" type="email" placeholder="Correo electronico" id="correo" value="<?php echo (usuarioLogeado()) ? $_SESSION['correo'] : ''; ?>" <?php echo (usuarioLogeado()) ? 'readonly' : ''; ?> />
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
            <select name="Pais" <?php echo (usuarioLogeado()) ? 'disabled' : ''; ?>>
              <option>Pais/Region</option>
              <option value="Peru" <?php echo ($_SESSION['pais'] == 'Peru') ? 'selected' : ''; ?>>Peru</option>
              <option value="Chile" <?php echo ($_SESSION['pais'] == 'Chile') ? 'selected' : ''; ?>>Chile</option>
              <option value="Argentina" <?php echo ($_SESSION['pais'] == 'Argentina') ? 'selected' : ''; ?>>Argentina</option>
              <option value="Venezuela" <?php echo ($_SESSION['pais'] == 'Venezuela') ? 'selected' : ''; ?>>Venezuela</option>
              <option value="Uruguay" <?php echo ($_SESSION['pais'] == 'Uruguay') ? 'selected' : ''; ?>>Uruguay</option>
              <option value="Paraguay" <?php echo ($_SESSION['pais'] == 'Paraguay') ? 'selected' : ''; ?>>Paraguay</option>
              <option value="Colombia" <?php echo ($_SESSION['pais'] == 'Colombia') ? 'selected' : ''; ?>>Colombia</option>
              <option value="Ecuador" <?php echo ($_SESSION['pais'] == 'Ecuador') ? 'selected' : ''; ?>>Ecuador</option>
            </select>
          </div>
          <div class="N_A">
            <div class="Nombres">
              <input type="text" name="nombres" placeholder="Nombre" id="nombres" value="<?php echo (usuarioLogeado()) ? $_SESSION['nombre'] : ''; ?>" <?php echo (usuarioLogeado()) ? 'readonly' : ''; ?> />
            </div>
            <div class="Apellidos">
              <input type="text" name="apellidos" placeholder="Apellidos" id="apellido" value="<?php echo (usuarioLogeado()) ? $_SESSION['apellido'] : ''; ?>" <?php echo (usuarioLogeado()) ? 'readonly' : ''; ?> />
            </div>
          </div>
          <div class="Identidad">
            <input type="number" name="identidad" placeholder="DNI,CE,RUC" inputmode="numeric" id="dni" value="<?php echo (usuarioLogeado()) ? $_SESSION['numdocu'] : ''; ?>" <?php echo (usuarioLogeado()) ? 'readonly' : ''; ?> />
          </div>
          <div class="Direccion">
            <input type="text" name="direccion" placeholder="Direccion" id="direccion" value="<?php echo $_SESSION['direccion']; ?>" <?php echo (usuarioLogeado()) ? 'readonly' : ''; ?> />
          </div>
          <div class="Referencia">
            <input type="text" name="referencia" placeholder="Referencia" id="referencia" value="<?php echo $_SESSION['referencia']; ?>" <?php echo (usuarioLogeado()) ? 'readonly' : ''; ?> />
          </div>
          <div class="C_C">
            <div class="Codigo">
              <input type="number" name="codigo_postal" placeholder="Codigo postal" id="codigoPos" value="<?php echo $_SESSION['codigo_postal']; ?>" <?php echo (usuarioLogeado()) ? 'readonly' : ''; ?> />
            </div>
            <div class="Ciudad">
              <input type="text" name="ciudad" placeholder="Ciudad" id="ciudad" value="<?php echo $_SESSION['ciudad']; ?>" <?php echo (usuarioLogeado()) ? 'readonly' : ''; ?> />
            </div>
          </div>
          <div class="Pais">
            <select name="Provincia" <?php echo (usuarioLogeado()) ? 'disabled' : ''; ?>>
              <option>Region/Departamento </option>
              <option value="Amazonas" <?php echo ($_SESSION['region'] == 'Amazonas') ? 'selected' : ''; ?>>Amazonas</option>
              <option value="Ancash" <?php echo ($_SESSION['region'] == 'Ancash') ? 'selected' : ''; ?>>Ancash</option>
              <option value="Apurimac" <?php echo ($_SESSION['region'] == 'Apurimac') ? 'selected' : ''; ?>>Apurimac</option>
              <option value="Arequipa" <?php echo ($_SESSION['region'] == 'Arequipa') ? 'selected' : ''; ?>>Arequipa</option>
              <option value="Ayacucho" <?php echo ($_SESSION['region'] == 'Ayacucho') ? 'selected' : ''; ?>>Ayacucho</option>
              <option value="Cajamarca" <?php echo ($_SESSION['region'] == 'Cajamarca') ? 'selected' : ''; ?>>Cajamarca</option>
              <option value="Callao" <?php echo ($_SESSION['region'] == 'Callao') ? 'selected' : ''; ?>>Callao</option>
              <option value="Lima" <?php echo ($_SESSION['region'] == 'Lima') ? 'selected' : ''; ?>>Lima</option>
              <option value="Madre de Dios" <?php echo ($_SESSION['region'] == 'Madre de Dios') ? 'selected' : ''; ?>>Madre de Dios</option>
            </select>
          </div>

          <div class="Telefono">
            <input type="number" name="telefono" placeholder="Teléfono" id="telefono" value="<?php echo $_SESSION['telefono']; ?>" <?php echo (usuarioLogeado()) ? 'readonly' : ''; ?> />
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
              <p>S/. <?php echo (usuarioLogeado()) ? number_format($totalG, 2) : '00.00' ?></p>
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
              <p>S/. <?php echo (usuarioLogeado()) ? number_format($totalG, 2) : '00.00' ?></p>
            </div>
          </div>
        </div>
      <?php } else { ?>
        <p style="min-height: 40vh;">NO HAY PRODUCTOS EN EL CARRITO</p>
      <?php } ?>
    </div>
  </div>
  <script src="js/informacion.js"></script>
</body>

</html>