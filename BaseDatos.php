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

        public function modificarProducto($consultaSQL, $tipo){
            $conexionBD = $this->conexion();
            $consultaModificarProducto = $conexionBD->prepare($consultaSQL);
            $resultado = $consultaModificarProducto->execute();
            switch ($tipo) {
                case "agregar":
                    echo "Producto agregado";
                    break;

                case "eliminar":
                    echo "Producto eliminado";
                    break;

                case "actualizar":
                    echo "Producto actualizado";
                    break;
                
                default:
                    echo "Error al guardar o eliminar el producto";
                    break;
            }
        }

        public function buscarProducto($consultaSQL){
            $conexionBD = $this->conexion();
            $consultaBuscarProducto = $conexionBD->prepare($consultaSQL);
            $consultaBuscarProducto->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $consultaBuscarProducto->execute();
            return $consultaBuscarProducto->fetchAll();

        }
    }

?>