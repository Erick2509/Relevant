<?php include 'cabecera_index.php'; ?>

    <!--CONTENIDO-->

    <div class="banner" id="banner">
      <img src="imagenes/img_inicio/banner.jpg" alt="" class="activo" />
      <img src="imagenes/img_inicio/banner2.jpg" alt="" />
      <img src="imagenes/img_inicio/banner3.jpg" alt="" />
      <img src="imagenes/img_inicio/banner4.png" alt="" />
    </div>
    <div class="banner2" id="banner2">
      <img
        src="imagenes/img_inicio/responsive/banner0.jpg"
        alt=""
        class="activo"
      />
      <img src="imagenes/img_inicio/responsive/banner1.png" alt="" />
      <img src="imagenes/img_inicio/responsive/banner2.jpg" alt="" />
      <img src="imagenes/img_inicio/responsive/banner3.jpg" alt="" />
    </div>
    <div class="txt_banner">
    <h1>TIENDA DE ROPA DEPORTIVA</h1>
    </div>
    <div class="btn_banner">
      <a href="catalogo.php">Ver catálogo</a>
    </div>
    <!--MODAL-->
    <dialog id="modal">
      <div class="modal_img">
        <div class="btn_salir">
          <span id="closebtn">X</span>
        </div>
        <img src="imagenes/img_inicio/modal.jpg" alt="" />
        <div class="txt">
          <p>
            Crea tu perfil de miembro y obtén acceso anticipado a los mejores
            lanzamientos con envíos completamente gratis, la inspiración y
            comunidad.
          </p>
        </div>
        <div class="btn_unete">
          <a href="crea_cuenta.php">Únete</a>
        </div>
      </div>
    </dialog>
    <!--CONTENIDO-->
    <div class="contenedor">
      <div class="contenido">
        <div class="cont">
          <div class="obj">
            <a href=""
              ><img class="img1" src="imagenes/img_inicio/ad1.1.webp" alt=""
            /></a>
            <a href="catalogo.php"
              ><img class="top" src="imagenes/img_inicio/adi1.png" alt=""
            /></a>
          </div>
        </div>
        <div class="cont">
          <div class="obj">
            <a href=""
              ><img class="img1" src="imagenes/img_inicio/puma1.1.jpg" alt=""
            /></a>
            <a href="catalogo.php"
              ><img class="top" src="imagenes/img_inicio/puma1.jpg" alt=""
            /></a>
          </div>
        </div>
        <div class="cont">
          <div class="obj">
            <a href=""
              ><img class="img1" src="imagenes/img_inicio/adi2.1.webp" alt=""
            /></a>
            <a href="catalogo.php"
              ><img class="top" src="imagenes/img_inicio/adi2.png" alt=""
            /></a>
          </div>
        </div>
      </div>
    </div>
    <div class="contenedor_genero">
      <div class="titulo">
        <h3>COMPRAR POR CATEGORIA</h3>
      </div>
      <div class="contenido">
        <div class="cont">
          <div class="obj">
            <img src="imagenes/img_inicio/puma_mujer.webp" alt="" />
          </div>
          <div class="titulo">
            <h3>MUJER</h3>
          </div>
          <div class="btn">
            <a href="catalogo_mujer.php">COMPRAR AHORA</a>
          </div>
        </div>
        <div class="cont">
          <div class="obj">
            <img src="imagenes/img_inicio/puma_hombre.webp" alt="" />
          </div>
          <div class="titulo">
            <h3>HOMBRE</h3>
          </div>
          <div class="btn">
            <a href="catalogo_hombre.php">COMPRA AHORA</a>
          </div>
        </div>
      </div>
    </div>

    <?php include 'pie _index.php'; ?>