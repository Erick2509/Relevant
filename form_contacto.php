<?php include 'cabecera.php'; ?>

<title>Contácto</title>
<link rel="stylesheet" href="css/style_formConta.css" />
    <!--CONTENIDO-->
    <div class="c_contacto">
      <div class="contenido">
        <h3>CONTÁCTANOS RELEVANT</h3>
        <form action="form_procesar_contacto.php" method="post">
          <p><input type="email" name="correo" placeholder="*Ingresa tu Correo" /></p>
          <p>
            <input
              class="text"
              type="text" name="opinion"
              placeholder="*Escribe aquí tu opinión"
            />
          </p>
          <p class="btn">
            <a href="index.php"><button type="submit">ENVIAR</button></a>
          </p>
        </form>
      </div>
    </div>
    
    <script src="js/form_contacto.js"></script>

    <?php include 'pie.php'; ?>