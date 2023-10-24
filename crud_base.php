<?php
    class CrudBase
    {
        protected $id;
        protected $nombre;
        protected $firma;
        protected $conexion;
    
        // Constructor que recibe la conexión a la base de datos
        public function __construct($conexion)
        {
            $this->conexion = $conexion;
        }
    }
?>
