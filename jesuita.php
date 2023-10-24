<?php
    include 'CrudBase.php';
    include 'CrudAñadir.php';
    include 'CrudModificar.php';

    $conexion = new mysqli("localhost", "root", "", 'jesuitas');

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $firma = $_POST['firma'];
        $opcion = $_POST['opcion'];

        $crudBase = new CrudBase($conexion);

        switch ($opcion) {
            case 1:
                $crudAñadir = new CrudAñadir($conexion);
                $crudAñadir->añadir($id, $nombre, $firma);
                break;
            case 2:
                $crudModificar = new CrudModificar($conexion);
                $crudModificar->modificar($id, $nombre, $firma);
                break;
            case 3:
                $crudBorrar = new CrudBorrar($conexion);
                $crudBorrar->borrar($id);
                break;
            case 4:
                $crudListar = new crudListar($conexion);
                $crudListar->listar();
        }
    }

    $conexion->close();
?>