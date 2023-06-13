<?php include 'cabecera.php'; ?>

<title>Catálogo-Puma</title>
<link rel="stylesheet" href="css/style_catalogo.css" />
<!--CONTENIDO-->
<div class="titulo">
  <h1>PUMA</h1>
</div>
<div class="barra_busqueda">
  <input type="text" id="busqueda" onkeyup="buscarProducto()" placeholder="Buscar..." />
</div>
<div class="lista_marca">
  <div class="marcas">
    <ul>
      <li>
        <a href="catalogo_adidas.php"><img src="imagenes/adidas.png" alt="" /></a>
      </li>
      <li>
        <a href="catalogo_nike..php"><img src="imagenes/nike.png" alt="" /></a>
      </li>
      <li>
        <a href="#" class="select"><img src="imagenes/puma.png" alt="" /></a>
      </li>
    </ul>
  </div>
</div>

<div class="catalogo" id="product-list">
  <!--PUMA-->
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_hombre/zapa4.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Zapatillas Smash 3.0</h3>
      <div class="precio">
        <h4>S/. 399.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_hombre/zapa5.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Zapatillas Anzarun Lite</h3>
      <div class="precio">
        <h4>S/. 299.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_hombre/zapa6.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Zapatillas Anzarun</h3>
      <div class="precio">
        <h4>S/. 250.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_hombre/zapa7.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Zapatillas Graviton</h3>
      <div class="precio">
        <h4>S/. 299.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_hombre/zapa8.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Zapatillas X-Ray 2 Square</h3>
      <div class="precio">
        <h4>S/. 499.00 PEN</h4>
      </div>
    </a>
  </div>
</div>

<script src="js/catalogo.js"></script>
<?php include 'pie.php'; ?>