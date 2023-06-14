<?php include 'cabecera.php'; ?>
</div>

<title>Iniciar Sesión - RELEVANT</title>
<link rel="stylesheet" href="css/style_ini.css" />
<!--CONTENIDO-->
<div class="crear_cuenta" id="crear_cuenta">
  <h1>Ingresar</h1>
  <form class="contenedor" id="loginForm" action="form_procesar_inisesion.php" method="POST">
    <p>
      <input name="correo" type="email" placeholder="*Correo Electronico" id="correo" />
    </p>
    <p>
      <input name="contrasena" type="password" placeholder="*Contrasena" id="contraseña" />
    </p>

    <div class="ini_crear">
      <h3><a href="recuperar_contraseña.php">¿Olvido su contraseña?</a></h3>
      <div class="iniciar_sesion">
        <a href="index.php"><input type="submit" value="Iniciar Sesion" onclick="return EnviarFormulario()" /></a>
      </div>
      <div class="error" id="error"></div>
      <h3 class="btncreacu"><a href="crea_cuenta.php">Crear Cuenta</a></h3>
    </div>
  </form>
</div>


<script src="js/iniciar sesion.js"></script>

<?php include 'pie.php'; ?>