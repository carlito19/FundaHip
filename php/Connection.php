<?php
$HostServer = "localhost";
$UserServer = "root";
$PassServer =  "";
$DBServer = "fundahip";

$tabla_db2 = "apnpdb";

try
{
    $Conexion = new PDO('msql:host=' .$HostServer. ';dbname='.$DBServer, $UserServer, $PassServer);
    $Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Conexión realizada Satisfactoriamente";
}
catch(PDOException $e)
{
    echo "La conexión ha fallado: " . $e->getMessage();
}
$Conexion = null;

?>