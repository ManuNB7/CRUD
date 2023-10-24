<?php
    class CrudModificar extends crud_base
    {
        /*
         * Modifica un registro existente de jesuita en la base de datos.
         */
        public function modificar($id, $nombre, $firma)
        {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->firma = $firma;

            $sql_update = "UPDATE jesuita SET nombre='$this->nombre', firma='$this->firma' WHERE idJesuita='$this->id'";
            $resultado_update = $this->conexion->query($sql_update);

            if ($resultado_update) {
                echo "Jesuita modificado.<br>";
            } else {
                echo "Error al modificar Jesuita: " . mysqli_error($this->conexion) . "<br>";
            }

            return "Operación Modificar realizada con éxito";
        }
    }
?>