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
                <option value="Peru" <?php echo ($existinfo && $pais == 'Peru') ? 'selected' : ''; ?>>Peru</option>
                <option value="Chile" <?php echo ($existinfo && $pais == 'Chile') ? 'selected' : ''; ?>>Chile</option>
                <option value="Argentina" <?php echo ($existinfo && $pais == 'Argentina') ? 'selected' : ''; ?>>Argentina</option>
                <option value="Venezuela" <?php echo ($existinfo && $pais == 'Venezuela') ? 'selected' : ''; ?>>Venezuela</option>
                <option value="Uruguay" <?php echo ($existinfo && $pais == 'Uruguay') ? 'selected' : ''; ?>>Uruguay</option>
                <option value="Paraguay" <?php echo ($existinfo && $pais == 'Paraguay') ? 'selected' : ''; ?>>Paraguay</option>
                <option value="Colombia" <?php echo ($existinfo && $pais == 'Colombia') ? 'selected' : ''; ?>>Colombia</option>
                <option value="Ecuador" <?php echo ($existinfo && $pais == 'Ecuador') ? 'selected' : ''; ?>>Ecuador</option>
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
              <input type="text" name="direccion" placeholder="Direccion" id="direccion" value="<?php echo $existinfo ? $direccion : ''; ?>" <?php echo (usuarioLogeado()) ? 'readonly' : ''; ?> />
            </div>
            <div class="Referencia">
              <input type="text" name="referencia" placeholder="Referencia" id="referencia" value="<?php echo $existinfo ? $referencia : ''; ?>" <?php echo (usuarioLogeado()) ? 'readonly' : ''; ?> />
            </div>
            <div class="C_C">
              <div class="Codigo">
                <input type="number" name="codigo_postal" placeholder="Codigo postal" id="codigoPos" value="<?php echo $existinfo ? $codigo_postal : ''; ?>" <?php echo (usuarioLogeado()) ? 'readonly' : ''; ?> />
              </div>
              <div class="Ciudad">
                <input type="text" name="ciudad" placeholder="Ciudad" id="ciudad" value="<?php echo $existinfo ? $ciudad : ''; ?>" <?php echo (usuarioLogeado()) ? 'readonly' : ''; ?> />
              </div>
            </div>
            <div class="Pais">
              <select name="Provincia" <?php echo (usuarioLogeado()) ? 'disabled' : ''; ?>>
                <option>Region/Departamento </option>
                <option value="Amazonas" <?php echo ($existinfo && $region == 'Amazonas') ? 'selected' : ''; ?>>Amazonas</option>
                <option value="Ancash" <?php echo ($existinfo && $region == 'Ancash') ? 'selected' : ''; ?>>Ancash</option>
                <option value="Apurimac" <?php echo ($existinfo && $region == 'Apurimac') ? 'selected' : ''; ?>>Apurimac</option>
                <option value="Arequipa" <?php echo ($existinfo && $region == 'Arequipa') ? 'selected' : ''; ?>>Arequipa</option>
                <option value="Ayacucho" <?php echo ($existinfo && $region == 'Ayacucho') ? 'selected' : ''; ?>>Ayacucho</option>
                <option value="Cajamarca" <?php echo ($existinfo && $region == 'Cajamarca') ? 'selected' : ''; ?>>Cajamarca</option>
                <option value="Callao" <?php echo ($existinfo && $region == 'Callao') ? 'selected' : ''; ?>>Callao</option>
                <option value="Lima" <?php echo ($existinfo && $region == 'Lima') ? 'selected' : ''; ?>>Lima</option>
                <option value="Madre de Dios" <?php echo ($existinfo && $region == 'Madre de Dios') ? 'selected' : ''; ?>>Madre de Dios</option>
              </select>
            </div>

            <div class="Telefono">
              <input type="number" name="telefono" placeholder="Teléfono" id="telefono" value="<?php echo $existinfo ? $telefono : ''; ?>" <?php echo (usuarioLogeado()) ? 'readonly' : ''; ?> />
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
  <script src="js/informacion.js"></script>
</body>

</html>