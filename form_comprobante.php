<?php
session_start();
unset($_SESSION['CARRITO']);

header('location: catalogo.php');
