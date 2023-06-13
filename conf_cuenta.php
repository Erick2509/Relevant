<?php include 'cabecera.php'; ?>

<title>RelevantCuenta</title>
<link rel="stylesheet" href="css/style_conf_cuenta.css" />
<!--CONTENIDO-->
<div class="contenedor">
  <div class="contenedor2">
    <div class="tg_confi">
      <h3>Configuración</h3>
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
            <input type="text" name="nombre" placeholder="*Nombre" /><br />
            <input type="text" name="apellidos" placeholder="*Apellido" /><br />
            <select name="Tipo_documento" id="">
              <option>DNI</option>
              <option>Pasaporte</option>
            </select><br />
            <input type="text" name="documento" placeholder="*Número de documento" /><br />
            <input type="text" name="contrasena" placeholder="*Contraseña" /><br />
            <input type="email" name="correo" placeholder="*Correo electrónico" /><br />
            <input type="date" name="nacimiento" placeholder="*Fecha de nacimiento" /><br />
          </div>
        </div>
        <div class="dc_botones">
          <div class="btn1">
            <a href="">Desactivar</a>
          </div>
          <div class="btn2">
            <button type="submit"><a href="index.php">Guardar</a></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="js/conf_cuenta.js"></script>
<?php include 'pie.php'; ?>