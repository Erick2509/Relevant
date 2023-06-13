<?php include 'cabecera.php'; ?>
<title>Recuperar cuenta - RELEVANT</title>
<link rel="stylesheet" href="css/style_recuperar_contraseña.css" />
<!--CONTENIDO-->

<!---- Entorno-->
<div class="recuperar">
  <div class="texto">
    <h2>¿Olvidaste tu contraseña?</h2>
  </div>
  <form action="form_procesar_recuperar.php" method="post" onsubmit="confirmacion()">
    <p>
      <input name="correo" type="email" placeholder="*Correo Electronico" />
    </p>
    <p>
      <input type="submit" value="Restablecer" />
    </p>
  </form>
  <a href="index.php">
    <h2>Volver</h2>
  </a>
</div>

<script src="js/recupera_contraseña.js"></script>

<?php include 'pie.php'; ?>