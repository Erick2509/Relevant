<?php include 'cabecera.php'; ?>
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
      <div class="cont_producto">
        <div class="producto">
          <img src="imagenes/short.jpg" alt="" />
        </div>
        <div class="descrip">
          <p>Short deportivo de comprensión para hombre</p>
        </div>
        <div class="precio">
          <span>S/89.90</span>
        </div>
        <div class="cantidad">
          <div class="btn_cantidad">
            <a href="#" onclick="decrementarCantidad()">-</a>
            <input id="cantidad" type="text" size="2" value="1" />
            <a href="#" onclick="incrementarCantidad()">+</a>
          </div>
          <a href="#" class="btn_quitar">Quitar</a>
        </div>
        <div class="total">
          <span>S/89.90</span>
        </div>
      </div>
      <!--SUBTOTAL-->
      <div class="sub_titulos">
        <a href="carrito.php">ACTUALIZAR CARRITO</a>
        <span>|</span>
        <a href="catalogo.php" class="continuar_compra">Continuar la compra</a>
      </div>
      <hr />
      <div class="subtotal">
        <span class="sub">Subtotal</span>
        <span class="monto">S/. 89.90 PEN</span>
      </div>
      <hr />
      <div class="btn">
        <a href="Informacion.php">FINALIZAR PEDIDO</a>
      </div>
    </div>
  </div>
</div>
<script src="js/carrito.js"></script>
<?php include 'pie.php'; ?>