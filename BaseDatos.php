<?php

    class BaseDatos{
        public $usuarioBD = "root";
        public $passwordBD = "";

        public function __contruct(){}

        public function conexion(){
            $infoConexionBD = "mysql:host=localhost;dbname=lamachuca";

            try {
                $conexionBD = new PDO($infoConexionBD, $this->usuarioBD, $this->passwordBD);
                //echo "conectado";
                return $conexionBD;
                
            } catch (PDOException $error) {
                echo $error->getMessage();
            }
        }

        public function agregarProducto($consultaSQL){
            $conexionBD = $this->conexion();
            $consultaAgregarProducto = $conexionBD->prepare($consultaSQL);
            $resultado = $consultaAgregarProducto->execute();
            if ($resultado) {
                echo "Agregado";
            }else {
                echo "Error agregando";
            }

        }

        public function buscarProducto($consultaSQL){
            $conexionBD = $this->conexion();
            $consultaBuscarProducto = $conexionBD->prepare($consultaSQL);
            $consultaBuscarProducto->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $consultaBuscarProducto->execute();
            return $consultaBuscarProducto->fetchAll();

        }

        public function eliminarProducto($consultaSQL){
            $conexionBD = $this->conexion();
            $consultaEliminarProducto = $conexionBD->prepare($consultaSQL);
            $resultado = $consultaEliminarProducto->execute();
            if ($resultado) {
                echo "Producto eliminado";
            }else {
                echo "Error eliminando";
            }
        }

        public function actualizarProducto($consultaSQL){
            $conexionBD = $this->conexion();
            $consultaActualizarProducto = $conexionBD->prepare($consultaSQL);
            $resultado = $consultaActualizarProducto->execute();
            if ($resultado) {
                echo "Producto actualizado";
            }else {
                echo "Error actualizando";
            }
        }
    }

?>