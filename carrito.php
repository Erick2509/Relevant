<?php include 'cabecera.php'; ?>
<?php
function usuarioLogeado()
{
  // Verifica si la variable de sesión existe y tiene un valor válido
  if (isset($_SESSION['nombre']) && !empty($_SESSION['nombre'])) {
    // El usuario está logeado
    return true;
  } else {
    // El usuario no está logeado
    return false;
  }
}
?>
<title>RelevantCarritodeCompra</title>
<link rel="stylesheet" href="css/style_carrito.css" />
<!--CONTENIDO-->
<div class="carrito">
  <div class="c_carrito">
    <div class="titulo_general">
      <h2>CARRITO DE COMPRAS</h2>
    </div>
    <div class="titulos">
      <div class="titu_produc">PRODUCTOS</div>
      <div class="titu">DESCRIPCION</div>
      <div class="titu">PRECIO</div>
      <div class="titu">CANTIDAD</div>
      <div class="titu">TOTAL</div>
    </div>
    <hr />

    <div class="producto_general">
      <?php if (isset($_SESSION['nombre']) && isset($_SESSION['apellido'])) : ?>
        <?php

        include './bd/conexion.php';

        $consulta_carrito = "SELECT * FROM carrito where id_usuario='" . $_SESSION['id'] . "'";
        $resultado_carrito = mysqli_query($conexion, $consulta_carrito);
        $consulta_carritoTotal = "SELECT SUM(total) AS total_suma FROM carrito WHERE id_usuario = '" . $_SESSION['id'] . "'";
        $resultado_carritoTotal = mysqli_query($conexion, $consulta_carritoTotal);
        while ($resultado_fila = mysqli_fetch_array($resultado_carritoTotal)) {
          $Subtotal = $resultado_fila['total_suma'];
        }

        $i = 0;
        while ($carrito_fila = mysqli_fetch_array($resultado_carrito)) {
          $i++;
        ?>
          <div class="cont_producto">
            <?php $i; ?>
            <div class="producto">
              <img src="<?php echo $carrito_fila['imagen'] ?>" alt="" />
            </div>
            <div class="descrip">
              <p><?php echo $carrito_fila['descripcion'] ?></p>
            </div>
            <div class="precio">
              <span><?php echo $carrito_fila['precio'] ?></span>
            </div>
            <div class="cantidad">
              <div class="btn_cantidad">
                <span><?php echo $carrito_fila['cantidad'] ?></span>
              </div>
              <a href="eliminar_producto.php?idproducto=<?php echo $carrito_fila['id_carrito'] ?>" class="btn_quitar">Quitar</a>
            </div>
            <div class="total">
              <span><?php echo $carrito_fila['total'] ?></span>
            </div>
          </div>
        <?php } ?>
      <?php else : ?>
      <?php endif; ?>
      <!--SUBTOTAL-->
      <div class="sub_titulos">
        <a href="carrito.php">ACTUALIZAR CARRITO</a>
        <span>|</span>
        <a href="catalogo.php" class="continuar_compra">Continuar la compra</a>
      </div>
      <hr />
      <div class="subtotal">
        <span class="sub">Subtotal</span>
        <span class="monto">S/. <?php echo (usuarioLogeado()) ? $Subtotal : ''; ?></span>
      </div>

      <hr />
      <div class="btn">
        <a href="form_procesar_carrito.php">FINALIZAR PEDIDO</a>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="js/carrito.js"></script>
<?php include 'pie.php'; ?>