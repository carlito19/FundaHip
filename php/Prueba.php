<?php
require_once "Conexion.php";

$DB = new DBConexion();

if ($DB->Conectar())
{
    $DB->prueba();
    $DB->Desconexion();
}

?>