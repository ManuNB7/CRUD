<?php
    class CrudAñadir extends crud_base
    {
        /*
         * Añade un nuevo registro de jesuita a la base de datos.
         */
        public function añadir($id, $nombre, $firma)
        {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->firma = $firma;

            $sql_insert = "INSERT INTO jesuita (idJesuita, nombre, firma) VALUES ('$this->id', '$this->nombre', '$this->firma')";
            $resultado_insert = $this->conexion->query($sql_insert);

            if ($resultado_insert) {
                echo "Jesuita $this->nombre agregado.<br>";
            } else {
                // Lanzar una excepción en caso de error
                throw new Exception("Error al agregar Jesuita, ya existe ese jesuita: " . $this->conexion->error);
            }

            return "Operación Añadir realizada con éxito";
        }
    }
?>