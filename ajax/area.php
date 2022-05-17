<?php
require_once "../modelos/Area.php";
$area = new Area();
$idarea = isset($_POST["idarea"])? limpiarCadena($_POST["idarea"]):"";
$nombre = isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";

?>