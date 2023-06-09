<?php include 'cabecera.php'; ?>

<title>Catálogo</title>
<link rel="stylesheet" href="css/style_catalogo.css" />

<!--CONTENIDO-->
<div class="titulo">
  <h1>CATÁLOGO</h1>
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
        <a href="catalogo_puma.php"><img src="imagenes/puma.png" alt="" /></a>
      </li>
    </ul>
  </div>
</div>

<div class="catalogo" id="product-list">
  <div class="ropa">
    <div class="obj">
      <a href="Vista.php?id=<?php echo $id = 1; ?>"><img src="imagenes/short.jpg" alt="" /></a>
    </div>
    <a href="Vista.php?id=<?php echo $id = 1; ?>" class="conttxt">
      <h3 class="nombre">Short de compresion para hombre S/Negro</h3>
      <div class="precio">
        <h4>S/. 89.90 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href="Vista.php?id=<?php echo $id = 2; ?>"><img src="imagenes/img_adidas/buzo1.webp" alt="" /></a>
    </div>
    <a href="Vista.php?id=<?php echo $id = 2; ?>" class="conttxt">
      <h3 class="nombre">Adidas - Buzo Negro para Hombres</h3>
      <div class="precio">
        <h4>S/. 99.90 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_adidas/buzo2.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Polera negra para Hombre</h3>
      <div class="precio">
        <h4>S/. 90.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_adidas/buzo3.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Pantalon para Hombres</h3>
      <div class="precio">
        <h4>S/. 60.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_adidas/m_1.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas-Conjunto deportivo - mujer</h3>
      <div class="precio">
        <h4>S/. 70.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_adidas/m_buzo1.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Buzo celeste para mujer</h3>
      <div class="precio">
        <h4>S/. 50.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_adidas/m_buzo2.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Pantalon deportivo - Mujer</h3>
      <div class="precio">
        <h4>S/. 30.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_adidas/m_casaca.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Casaca Negra para Mujer</h3>
      <div class="precio">
        <h4>S/. 90.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_adidas/m_polo1.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Polo blanco para Mujer</h3>
      <div class="precio">
        <h4>S/. 40.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_adidas/m_polo2.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Polo negro para Mujer</h3>
      <div class="precio">
        <h4>S/. 40.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_adidas/m_polo3.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Polo negro adidas para Mujer</h3>
      <div class="precio">
        <h4>S/. 40.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_adidas/m_zapa1.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Zapatilla deportiva blanca</h3>
      <div class="precio">
        <h4>S/. 240.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_adidas/m_zapa2.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Zapatillas chimpunes Fútbol</h3>
      <div class="precio">
        <h4>S/. 279.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_adidas/m_zapa3.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Zapatillas Runing Training</h3>
      <div class="precio">
        <h4>S/. 141.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_adidas/m_zapa4.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Zapatillas Runing Training</h3>
      <div class="precio">
        <h4>S/. 159.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_adidas/polo1.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Camiseta-oficial-selección-peruana</h3>
      <div class="precio">
        <h4>S/. 299.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_adidas/polo2.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Polo adidas negra Hombre</h3>
      <div class="precio">
        <h4>S/. 199.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_adidas/polo3.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Polo adidas blanca Hombre</h3>
      <div class="precio">
        <h4>S/. 199.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_adidas/zapa1.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Zapatillas Runing negra-Mujer</h3>
      <div class="precio">
        <h4>S/. 299.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_adidas/zapa2.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Zapatillas Deportiva Runing</h3>
      <div class="precio">
        <h4>S/. 159.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_adidas/zapa3.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Zapatillas Chimpunes</h3>
      <div class="precio">
        <h4>S/. 399.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_adidas/zapa4.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas-Zapatillas Deportivas - Mujer</h3>
      <div class="precio">
        <h4>S/. 299.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_adidas/zapa5.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas-Chimpunes-Negra - Hombre</h3>
      <div class="precio">
        <h4>S/. 499.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_hombre/polo1.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Nike-Camiseta Alianza Lima - Hombre</h3>
      <div class="precio">
        <h4>S/. 90.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_hombre/polo2.jpg" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Nike - Golden State Warriors - Hombre</h3>
      <div class="precio">
        <h4>S/. 110.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_hombre/polo3.jpg" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Nike - Dri-FIT Fleece - Hombre</h3>
      <div class="precio">
        <h4>S/. 100.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_hombre/polo4.jpg" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Nike Sportswear Windrunner - Hombre</h3>
      <div class="precio">
        <h4>S/. 180.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_hombre/polo5.jpg" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Nike Sportswear Windrunner - Hombre</h3>
      <div class="precio">
        <h4>S/. 150.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_hombre/short1.jpg" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Nike Sportswear Club - Hombre</h3>
      <div class="precio">
        <h4>S/. 160.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_hombre/zapa1.jpg" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Nike - Zapatilla - Air - Max 90 - Hombre</h3>
      <div class="precio">
        <h4>S/. 200.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_hombre/pant1.jpg" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Nike Sportswear Tech Fleece - Hombre</h3>
      <div class="precio">
        <h4>S/. 190.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_hombre/zapa2.jpg" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Nike - Jordan Nu Retro 1 Low - Hombre</h3>
      <div class="precio">
        <h4>S/. 250.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_hombre/polo6.jpg" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Polo - Jordan Jumpman - Hombre</h3>
      <div class="precio">
        <h4>S/. 150.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_hombre/polo7.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Polo - bagde of sport basic - Hombre</h3>
      <div class="precio">
        <h4>S/. 140.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_hombre/polo8.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Polo - bagde of sport - Hombre</h3>
      <div class="precio">
        <h4>S/. 85.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_hombre/short2.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Shorts de tenis club - Hombre</h3>
      <div class="precio">
        <h4>S/. 175.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_hombre/pant2.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Pantalón de entrenamiento</h3>
      <div class="precio">
        <h4>S/. 130.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_hombre/zapa3.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Zapatillas adizero boston 11</h3>
      <div class="precio">
        <h4>S/. 350.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_hombre/zapa4.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Zapatillas Smash 3.0 - Hombre</h3>
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
      <h3 class="nombre">Zapatillas Anzarun Lite - Hombre</h3>
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
      <h3 class="nombre">Puma - Zapatillas Anzarun - Hombre</h3>
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
      <h3 class="nombre">Puma - Zapatillas Graviton - Mujer</h3>
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
      <h3 class="nombre">Puma - Zapatillas X-Ray 2 Square</h3>
      <div class="precio">
        <h4>S/. 499.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_mujer/polo1.jpg" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Nike Dri-FIT Academy - Mujer</h3>
      <div class="precio">
        <h4>S/. 90.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_mujer/zapa1.jpg" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Nike Blazer Low Platform - Mujer</h3>
      <div class="precio">
        <h4>S/. 310.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_mujer/zapa2.jpg" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Nike Air Force 1 '07 LV8 - Hombre</h3>
      <div class="precio">
        <h4>S/. 400.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_mujer/zapa3.jpg" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Nike - Zapatilla Air Max Dawn - Mujer</h3>
      <div class="precio">
        <h4>S/. 380.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_mujer/zapa4.jpg" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Nike - Zapatilla Air Huarache - Mujer</h3>
      <div class="precio">
        <h4>S/. 450.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_mujer/short1.jpg" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Nike Tempo Icon Clash - Mujer</h3>
      <div class="precio">
        <h4>S/. 160.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_mujer/zapa5.jpg" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Nike Dri-FIT Tempo Clash - Mujer</h3>
      <div class="precio">
        <h4>S/. 200.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_mujer/zapa6.jpg" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Nike Zapatilla SuperRep Go 3 - Mujer</h3>
      <div class="precio">
        <h4>S/. 390.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_mujer/short2.jpg" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Nike Short Air Max 270 - Mujer</h3>
      <div class="precio">
        <h4>S/. 250.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_mujer/zapa7.jpg" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Nike Zapatila - Flex Essential 2-in-1</h3>
      <div class="precio">
        <h4>S/. 350.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_mujer/polo2.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Nike Polo - Fontanka Waffle - Mujer</h3>
      <div class="precio">
        <h4>S/. 140.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_mujer/polo3.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Polo essentials linear - Mujer</h3>
      <div class="precio">
        <h4>S/. 85.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_mujer/pant1.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Polo aeroready Sport3 - Mujer</h3>
      <div class="precio">
        <h4>S/. 175.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_mujer/polo4.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Pantalón essential 3 tiras - Mujer</h3>
      <div class="precio">
        <h4>S/. 130.00 PEN</h4>
      </div>
    </a>
  </div>
  <div class="ropa">
    <div class="obj">
      <a href=""><img src="imagenes/img_mujer/polo5.webp" alt="" /></a>
    </div>
    <a href="" class="conttxt">
      <h3 class="nombre">Adidas - Polo badge of sport - Mujer</h3>
      <div class="precio">
        <h4>S/. 350.00 PEN</h4>
      </div>
    </a>
  </div>
</div>
<script src="js/catalogo.js"></script>

<?php include 'pie.php'; ?>