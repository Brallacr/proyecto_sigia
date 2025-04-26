<?php 

//Conexión = LO QUE DEBE DE HABER ACA ES UN CONTROLADOR.
include_once 'app/config/conn.php';

//Crear un objeto.
$conn = new Conection();

$conn->getConnect();

//TODO: 
/**
 * Estudiar como funciona los enrutadores o el frontController para solo usar index.php como enrutador de todas las vistas.
 * 
 */

?>
