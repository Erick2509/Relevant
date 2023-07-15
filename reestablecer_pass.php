<?php include 'cabecera.php';
$correo = $_GET['correo'];
?>


<link rel="stylesheet" href="css/style_reestablecer_pass.css">
<!--CONTENIDO-->
<div class="contenedor">
    <div class="recuperar">
        <h2 class="titulo">Reestablecer Contraseña</h2>
        <form action="form_reestablecer_pass.php?correo=<?php echo $correo ?>" method="POST" onsubmit="confirmacion()">
            <p><input name="contraseña" type="password" placeholder="NUEVA CONTRASEÑA"></p>
            <p><input name="confircontraseña" type="password" placeholder="CONFIRMAR CONTRASEÑA"></p>
            <input type="submit" value="REESTABLECER">
        </form>
    </div>
</div>
<?php include 'pie.php'; ?>
<script src="js/reestablecer_pass.js"></script>