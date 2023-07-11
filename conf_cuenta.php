<?php include 'cabecera.php'; ?>

<?php
include './bd/conexion.php';
$consula_cliente = "SELECT * FROM usuarios WHERE id_usuario=" . $_SESSION['id'];
$resultado_usuario = mysqli_query($conexion, $consula_cliente);
while ($usuario_fila = mysqli_fetch_array($resultado_usuario)) {
  $nombre = $usuario_fila['nombre'];
  $apellido = $usuario_fila['apellido'];
  $numdocu = $usuario_fila['numdocu'];
  $contraseña = $usuario_fila['contraseña'];
  $correo = $usuario_fila['correo'];
  $nacimiento = $usuario_fila['nacimiento'];
}

?>


<title>RelevantCuenta</title>
<link rel="stylesheet" href="css/style_conf_cuenta.css" />
<!--CONTENIDO-->
<div class="contenedor">
  <div class="contenedor2">
    <div class="tg_confi">
      <div class="titu_conf">
        <h3>Configuración</h3>
      </div>
      <div class="btnCerrarSesion">
        <a href="controlador_cerrar_sesion.php">Cerrar Sesion</a>
      </div>
    </div>
    <hr />
    <div class="t_confi">
      <div class="dt_confi">
        <ul>
          <li>
            <a href="#" class="select">Detalles de la cuenta</a>
          </li>
          <li>
            <a href="conf_direccionenvio.php">Direcciones de entrega</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="c_detallescuenta">
      <form action="form_procesar_conf_cuenta.php" method="POST">

        <div class="detalle">
          <h3>Detalles de la cuenta</h3>
          <div class="form_cuenta">
            <input type="text" name="nombre" placeholder="*Nombre" value="<?php echo $nombre ?>" /><br />
            <input type="text" name="apellidos" placeholder="*Apellido" value="<?php echo $apellido ?>" /><br />
            <select name="Tipo_documento" id="">
              <option>DNI</option>
              <option>Pasaporte</option>
            </select><br />
            <input type="text" name="documento" placeholder="*Número de documento" value="<?php echo $numdocu ?>" /><br />
            <input type="text" name="contrasena" placeholder="*Contraseña" value="<?php echo $contraseña ?>" /><br />
            <input type="email" name="correo" placeholder="*Correo electrónico" value="<?php echo $correo ?>" /><br />
            <input type="date" name="nacimiento" placeholder="*Fecha de nacimiento" value="<?php echo $nacimiento ?>" /><br />
          </div>
        </div>
        <div class="dc_botones">
          <div class="btn1">
            <a href="eliminar_usuario.php">Desactivar</a>
          </div>
          <div class="btn2">
            <button type="submit"><a href="#">Guardar</a></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="js/conf_cuenta.js"></script>
<?php include 'pie.php'; ?>