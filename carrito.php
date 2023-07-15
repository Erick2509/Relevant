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
      <?php if (!empty($_SESSION['CARRITO'])) { ?>
        <?php $totalG = 0; ?>

        <?php foreach ($_SESSION['CARRITO'] as $indice => $producto) { ?>

          <div class="cont_producto">
            <div class="producto">
              <img src="<?php echo $producto['imagen'] ?>" alt="" />
            </div>
            <div class="descrip">
              <p><?php echo $producto['descripcion'] ?></p>
            </div>
            <div class="precio">
              <span><?php echo $producto['precio'] ?></span>
            </div>
            <div class="cantidad">
              <div class="btn_cantidad">
                <span><?php echo $producto['cantidad'] ?></span>
              </div>
              <a href="eliminar_producto.php?idproducto=<?php echo $producto['id'] ?>" class="btn_quitar">Quitar</a>
            </div>
            <div class="total">
              <span><?php echo number_format($producto['precio'] * $producto['cantidad'], 2) ?></span>
            </div>
          </div>

          <?php $totalG = $totalG + ($producto['precio'] * $producto['cantidad']) ?>
        <?php } ?>
        <!--SUBTOTAL-->
        <div class="sub_titulos">
          <a href="carrito.php">ACTUALIZAR CARRITO</a>
          <span>|</span>
          <a href="catalogo.php" class="continuar_compra">Continuar la compra</a>
        </div>
        <hr />
        <div class="subtotal">
          <span class="sub">Subtotal</span>
          <span class="monto">S/. <?php echo (usuarioLogeado()) ? number_format($totalG, 2) : '00.00' ?></span>
        </div>
        <hr />
        <div class="btn">
          <a href="Informacion.php">FINALIZAR PEDIDO</a>
        </div>
      <?php } else { ?>
        <p style="text-align: center; color: #FF0000;">NO HAY PRODUCTOS EN EL CARRITO</p>
      <?php } ?>
    </div>
  </div>
</div>
<script src="js/carrito.js"></script>
<?php include 'pie.php'; ?>