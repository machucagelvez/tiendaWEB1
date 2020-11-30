<?php

    include("BaseDatos.php");

    if (isset($_POST["botonRegistrar"])) {
        $nombre = $_POST["nombre"];
        $marca = $_POST["marca"];
        $precio = $_POST["precio"];
        $imagen = $_POST["imagen"];
        $descripcion = $_POST["descripcion"];

        $transaccion = new BaseDatos();
        $consultaSQL = "INSERT INTO producto(nombre, marca, precio, imagen, descripcion) VALUES ('$nombre', '$marca', '$precio', '$imagen', '$descripcion')";
        $transaccion->agregarProducto($consultaSQL);
        header("location:edicion.php");

    }  

?>