<?php
require ("Conexion.php");
$Conex = new DBConexion();
$Conex->getConexion();
//$Conex->DBConexion();

// INSERTAR
if(isset($_POST['Insert']))
{
    $Id_Paciente = $_POST['Id_Paciente'];
    $Fecha = $_POST['Fecha'];
    $Categoria = $_POST['Categoria'];


$Query = "INSERT INTO hclinicomedicodeportivo (Id_Paciente, Fecha, Categoria) 

                                       VALUES ('$Id_Paciente','$Fecha','$Categoria')";

$result = $Conex->ExecuteQuery($Query);
if($result)
{
    $RowCount = $Conex->GetCountAffectedRows();
    if($RowCount > 0)
    {
        echo "Ejecucion Correcta";
    }
    else
    {
        echo "<h2>Error en la Ejecucion</h2>";
    }
}
}
?>