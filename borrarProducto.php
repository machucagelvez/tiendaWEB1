<?php
    include("BaseDatos.php");

    $id = $_GET["id"];
    $transaccion = new BaseDatos();
    $consultaSQL = "DELETE FROM producto WHERE idProducto='$id'";
    $transaccion->modificarProducto($consultaSQL, "eliminar");
    header("location:edicion.php");

?>