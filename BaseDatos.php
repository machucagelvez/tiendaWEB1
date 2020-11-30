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
    }

?>