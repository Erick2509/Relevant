<?php include 'cabecera.php' ?>
<!--crea cuenta-->

<link rel="stylesheet" href="css/style_crea_cuenta.css">
<form action="form_procesar_crea_cuenta.php" method="POST">
  <div class="general">

    <div class="correo">

      <div class="titulo">
        <h2>Crear Cuenta</h2>
        <span style="color: red; "><?php if (isset($_GET['mensaje']) && $_GET['mensaje'] === 'existe') {
                                      echo "El correo o contraseña ya existe. Por favor, intente con otro.";
                                    } ?></span>

      </div>
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
        <input name="apellido" type="text" placeholder="*Apellidos" />
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
          <input type="radio" name="sexo" value="Masculino" /> <span>Masculino</span>
        </p>
        <p>
          <input type="radio" name="sexo" value="Femenino" /><span>Femenino</span>
        </p>
      </div>

    </div>


    <div class="Formulario">

      <div class="Form">
        <div class="Direccion">
          <h2>Dirección de Envío</h2>
        </div>
        <div class="Pais">
          <select name="pais">
            <option>País/Región</option>
            <option value="Peru">Peru</option>
            <option value="Chile">Chile</option>
            <option value="Argentina">Argentina</option>
            <option value="Venezuela">Venezuela</option>
            <option value="Uruguay">Uruguay</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Colombia">Colombia</option>
            <option value="Ecuador">Ecuador</option>
          </select>
        </div>
        <div class="Direccion">
          <input type="text" name="direccion" placeholder="Dirección" id="direccion" />
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
          <select name="region">
            <option>Región/Departamento </option>
            <option value="Amazonas">Amazonas</option>
            <option value="Ancash">Ancash</option>
            <option value="Apurimac">Apurimac</option>
            <option value="Arequipa">Arequipa</option>
            <option value="Ayacucho">Ayacucho</option>
            <option value="Cajamarca">Cajamarca</option>
            <option value="Callao">Callao</option>
            <option value="Lima">Lima</option>
            <option value="Madre de Dios">Madre de Dios</option>
          </select>
        </div>

        <div class="Telefono">
          <input type="number" name="telefono" placeholder="Teléfono" id="telefono" />
        </div>
      </div>
    </div>

  </div>
  <p class="politica">
    <input type="checkbox" name="terminos" /> He leído y aceptado la Política de privacidad y los Términos y
    condiciones del uso del sitio web
  </p>
  <div class="unete">
    <input type="submit" value="ÚNETE" />
  </div>
</form>
<script src="js/crea_cuenta.js"></script>
<?php include 'pie.php' ?>