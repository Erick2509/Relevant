<?php include 'cabecera.php'; ?>

<title>RelevantDireccion</title>
<link rel="stylesheet" href="css/style_confdireccion.css" />
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
            <a href="conf_cuenta.php"><img src="" alt="" />Detalles de la cuenta</a>
          </li>
          <li>
            <a href="#" class="select"><img src="" alt="" />Direcciones de entrega</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="c_detallescuenta">
      <form action="form_procesar_conf_direccionenvio.php" method="POST">
        <div class="detalle">
          <h3>Detalles de dirección de entrega</h3>
          <div class="form_envio">
            <input type="text" name="direccion" placeholder="*Dirección" /><br />
            <input type="text" name="referencia" placeholder="*Referencia, puntos cercanos, etc" /><br />
            <input type="number" name="codigo" placeholder="*Código postal o Distrito" /><br />
            <input type="text" name="ciudad" placeholder="*Ciudad" /><br />
            <input type="number" name="telefono" placeholder="*Teléfono" /><br />
          </div>
        </div>
        <div class="dc_botones">
          <div class="btn1">
            <a href="">Editar</a>
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