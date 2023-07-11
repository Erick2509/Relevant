<?php session_start() ?>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Relevant</title>
  <link rel="stylesheet" href="css/style_index.css" />
</head>

<body>
  <div class="cabecera" id="cabe">
    <div class="c_cabecera">
      <div class="logo">
        <img src="imagenes/logo.png" alt="" />
        <h2>Relevant</h2>
      </div>
      <div class="menu">
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="catalogo.php">Tienda</a></li>
          <li><a href="nosotros.php">Nosotros</a></li>
          <li><a href="contacto.php">Contacto</a></li>
        </ul>
      </div>
      <div class="menu_logo">
        <div class="btn_iniciar">
          <?php if (isset($_SESSION['nombre']) && isset($_SESSION['apellido'])) : ?>
            <a href="conf_cuenta.php"><img src="imagenes/logo_usuario.png" alt="" /></a>
            <span class="nombre_usuario">
              <?php
              if (isset($_SESSION['nombre']) && isset($_SESSION['apellido'])) {
                echo $_SESSION['nombre'];
              } else {
                echo "";
              }
              ?>
            </span>
          <?php else : ?>
            <a href="ini_sesion.php"><img src="imagenes/logo_usuario.png" alt="" /></a>
          <?php endif; ?>
        </div>
        <div class="btncarrito">
          <a href="carrito.php"><img src="imagenes/bolsa.png" alt="" /></a>
          <?php if (isset($_SESSION['nombre']) && isset($_SESSION['apellido'])) : ?>
            <span class="cantidadCarrito"><?php
                                          echo (empty($_SESSION['CARRITO']) ? 0 : count($_SESSION['CARRITO']));
                                          ?></span>
          <?php else : ?>
          <?php endif; ?>
        </div>


      </div>
    </div>
  </div>
  <div class="cabecera2" id="cabe2">
    <div class="barra">
      <span onclick=" openNav() ">&#9776;</span>
    </div>
    <div id="myNav" class="overlay">
      <a href="" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content">
        <a href="index.php">Inicio</a>
        <a href="catalogo.php">Tienda</a>
        <a href="nosotros.php">Nosotros</a>
        <a href="contacto.php">Contacto</a>
        <br />
        <hr />
        <a href="ini_sesion.php">Cuenta</a>
      </div>
    </div>
    <div class="logo">
      <img src="imagenes/logo.png" alt="" />
    </div>
    <div class="menu_logo">
      <a href=""><img src="imagenes/logo_usuario.png" alt="" /></a>
      <a href="carrito.php"><img src="imagenes/bolsa.png" alt="" /></a>
    </div>
  </div>