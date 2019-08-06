<?php
require_once 'Conexion.php';
$Conexion = new DBConexion();
$Conexion->Conectar();

if(isset($_POST['Guardar']))
{
    $EsquemaCompleto = $_POST['EsquemaCompleto'];
   /* $Faltan = $_POST['Faltan'];
    $CualFalta = $_POST['CualFalta'];
    $Mascota = $_POST['Mascota'];
    $TIpoMascota = $_POST['TIpoMascota'];*/



   $Conexion->RegistrarDatos("INSERT INTO apnpdb (EsquemaCompleto)

                         VALUES ('$EsquemaCompleto')");

    if (mysqli_query($Conexion, $Query))
    {
        echo "Registros Guardados";
    }
    else
    {
        echo "Error:" .$Query. "<br>".mysqli_error($Conexion);
    }

    $Conexion->Desconexion();
/*$Conexion->query($Query) or die ("Error al ingresar los datos".mysqli_error($Conexion));

    mysql_close($Conexion);
    echo "Datos ingresados Correctamente";
    //window.location.href='Home.php';*/
}
?>

<!--<script type="text/javascript">
	alert("Producto Ingresado Exitosamante!!");
	window.location.href='Datos.php';
</script>

