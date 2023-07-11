<?php
include 'bd/conexion.php';
$idp = $_GET['id'];
$consulta_producto = "SELECT * FROM productos WHERE id_producto='$idp'";
$resultado_producto = mysqli_query($conexion, $consulta_producto);

while ($producto_fila = mysqli_fetch_array($resultado_producto)) {
  $descripcion = $producto_fila['descripcion'];
  $codigo_producto = $producto_fila['codigo_producto'];
  $precio = $producto_fila['precio'];
  $precio_lista = $producto_fila['precio_lista'];
  $imagen = $producto_fila['imagen'];
  $imagen2 = $producto_fila['imagen2'];
  $imagen3 = $producto_fila['imagen3'];
}


?>


<?php include 'cabecera.php'; ?>

<title>RelevantCarritodeCompra</title>
<link rel="stylesheet" href="css/style_vista.css" />
<!--CONTENIDO-->
<div class="contenedor">
  <div class="contenedor1">
    <div class="Izquierda">
      <div class="imagen01"><img src="<?php echo $imagen ?>" onclick="cambiarImagen(this)" /></div>
      <div class="imagen02"><img src="<?php echo $imagen2 ?>" onclick="cambiarImagen(this)" /></div>
      <div class="imagen03"><img src="<?php echo $imagen3 ?>" onclick="cambiarImagen(this)" /></div>
    </div>
    <div class="central">
      <div class="producto"><img src="<?php echo $imagen ?>" id="imagenProducto" /></div>
      <div class="circulos">
        <div class="dot" src="imagenes/circulo (1).png" onclick="cambiarImagenCirculo(this, 1)"></div>
        <div class="dot" src="imagenes/circulo.png" onclick="cambiarImagenCirculo(this, 2)"></div>
        <div class="dot" src="imagenes/circulo.png" onclick="cambiarImagenCirculo(this, 3)"></div>
      </div>
    </div>
    <div class="Derecha">
      <div class="Titulo">
        <h2><?php echo $descripcion ?></h2>
      </div>
      <div class="Marca">
        <h4><?php echo $codigo_producto ?></h4>
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
              <h3>S/. <?php echo $precio_lista ?></h3>
            </div>
          </div>
        </div>
      </div>
      <form action="form_procesar_vista.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $idp ?>">
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
<script src="js/vista.js"></script>
<?php include 'pie.php'; ?>