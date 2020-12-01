<?php
    include("BaseDatos.php");

    if (isset($_POST["botonEditar"])) {
        $id = $_GET["id"];
        $nombre = $_POST["editarNombre"];
        $marca = $_POST["editarMarca"];
        $precio = $_POST["editarPrecio"];
        $imagen = $_POST["editarImagen"];
        $descripcion = $_POST["editarDescripcion"];
        $transaccion = new BaseDatos();
        $consultaSQL = "UPDATE producto SET nombre='$nombre', marca='$marca', precio=$precio, imagen='$imagen', descripcion='$descripcion' WHERE idProducto='$id'";
        $transaccion->agregarProducto($consultaSQL);
        header("location:edicion.php");
    }

?>