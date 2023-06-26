<?php include 'cabecera.php'; ?>

<title>Crear cuenta - RELEVANT</title>
<link rel="stylesheet" href="css/style_crea_cuenta.css" />
<!--CONTENIDO-->
<div class="crearcuenta">
  <h2>Crear Cuenta</h2>
</div>
<div class="correo">
  <form action="form_procesar_crea_cuenta.php" method="POST">
    <p>
      <input name="correo" type="email" placeholder="*Correo Electrónico" />
    </p>
    <p>
      <input name="contrasena" type="password" placeholder="*Contraseña" />
    </p>
    <p>
      <input name="nombre" type="text" placeholder="*Nombre" />
    </p>
    <p>
      <input name="apellidos" type="text" placeholder="*Apellidos" />
    </p>
    <p>
      <label>*Tipo de Documento</label>
      <select name="opciones">
        <option>DNI</option>
        <option>Carnet de Extranjería</option>
      </select>
    </p>
    <p>
      <input name="documento" type="number" placeholder="*Número de Documento" />
    </p>
    <p>
      <label>Fecha de nacimiento</label>
      <input name="nacimiento" type="date" placeholder="*Fecha de nacimiento" />
    </p>
    <div class="datos">
      <p>
        <label> <input type="radio" name="sexo" value="Masculino" />Masculino </label>
        <br />
        <label> <input type="radio" name="sexo" value="Femenino" /> Femenino </label>
      </p>
    </div>
    <p>
      <input type="checkbox" name="terminos" /> He leído y aceptado la
      Política de privacidad y los Términos y condiciones del uso del sitio
      web
    </p>
    <div class="únete">
      <p>
        <button type="submit">ÚNETE</button>
        <a href="index.php">Volver</a>
      </p>
    </div>
  </form>
</div>

<script src="js/crea_cuenta.js"></script>

<?php include 'pie.php'; ?>