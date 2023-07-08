<?php
include 'bd/conexion.php';
$idp = $_GET['id'];
$consulta_producto = "SELECT * FROM productos WHERE id_producto='$idp'";
$resultado_producto = mysqli_query($conexion, $consulta_producto);

while ($producto_fila = mysqli_fetch_array($resultado_producto)) {
  $descripcion = $producto_fila['descripcion'];
  $precio = $producto_fila['precio'];
  $imagen = $producto_fila['imagen'];
}


?>


<?php include 'cabecera.php'; ?>

<title>RelevantCarritodeCompra</title>
<link rel="stylesheet" href="css/style_vista.css" />
<!--CONTENIDO-->
<div class="contenedor">
  <div class="contenedor1">
    <div class="Izquierda">
      <div class="imagen01"><img src="<?php echo $imagen ?>" /></div>
      <div class="imagen02"><img src="imagenes/prueba01.webp" /></div>
      <div class="imagen03"><img src="imagenes/prueba02.webp" /></div>
    </div>
    <div class="central">
      <div class="producto"><img src="<?php echo $imagen ?>" /></div>
      <div class="circulos">
        <img src="imagenes/circulo (1).png" />
        <img src="imagenes/circulo.png" />
        <img src="imagenes/circulo.png" />
      </div>
    </div>
    <div class="Derecha">
      <div class="Titulo">
        <h2><?php echo $descripcion ?></h2>
      </div>
      <div class="Marca">
        <h4>SANTOR SKU: 1000241861</h4>
      </div>
      <div class="P_T_C">
        <div class="Precio">
          <div class="p1">
            <div class="Precio1">
              <h3>Precio online</h3>
            </div>
            <div class="Total1">
              <h3><?php echo 'S/. ' . $precio ?></h3>
            </div>
          </div>
          <div class="p2">
            <div class="Precio2">
              <h3>Precio lista</h3>
            </div>
            <div class="Total2">
              <h3>S/. 119.90</h3>
            </div>
          </div>
        </div>
      </div>
      <form action="form_procesar_vista.php" method="POST">
        <input type="hidden" name="imagen" value="<?php echo $imagen ?>">
        <input type="hidden" name="descripcion" value="<?php echo $descripcion ?>">
        <input type="hidden" name="precio" value="<?php echo $precio ?>">
        <div class="C_A">
          <div class="Cantidades">
            <div class="btncantidad">
              <a href="#" onclick="decrementarCantidad()">-</a>
              <input id="cantidad" type="text" size="2" value="1" name="cantidad" />
              <a href="#" onclick="incrementarCantidad()">+</a>
            </div>
          </div>
        </div>
        <div class="Agregar">
          <input type="submit" value="Agregar al carrito"></input>
        </div>
      </form>
    </div>
  </div>
</div>
<!-----ANUNCIO ----->
<dialog id="registro">
  <div class="entorno">
    <div class="salir">
      <span id="closebtn">X</span>
    </div>
    <div class="titulo">
      <h2>Inicia sesion</h2>
      <div class="pregunta">
        <a href="crea_cuenta.php">
          <h6>¿No tienes una cuenta? Crea una aqui</h6>
        </a>
      </div>
    </div>
    <div class="formulario">
      <div class="Correo">
        <input name="correo" type="email" placeholder="*Correo Electrónico" />
      </div>
      <div class="Contraseña">
        <input name="contraseña" type="password" placeholder="*Contraseña" />
      </div>
      <div class="boton">
        <span id="sibtn">
          <p>Aceptar</p>
        </span>
      </div>
    </div>
  </div>
</dialog>

<script src="js/vista.js"></script>
<?php include 'pie.php'; ?>