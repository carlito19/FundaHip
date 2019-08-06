<?php
include 'Conexion.php';
if(isset($_POST['Insert'])){

$Id_Paciente = $_POST['Id_Paciente'];
$Fecha = $_POST['Fecha'];
$Categoria = $_POST['Categoria'];
$Nombres = $_POST['Nombres'];
$ApellidoP = $_POST['ApellidoP'];
$ApellidoM = $_POST['ApellidoM'];
$Apodo = $_POST['Apodo'];
$Edad = $_POST['Edad'];
$NombrePad = $_POST['NombrePad'];
$NombreMad = $_POST['NombreMad'];
$Telefono = $_POST['Telefono'];
$Celular = $_POST['Celular'];
$CellPad = $_POST['CellPad'];
$CellMad = $_POST['CellMad'];
$EstCivil = $_POST['EstadoCivil'];
$Hijos = $_POST['Hijos'];
$CantHijos = $_POST['CantHijos'];
$Trabaja = $_POST['Trabaja'];
$TrabajaDond = $_POST['TrabajaDond'];
$Estuida = $_POST['Estudia'];
$EstudiaDond = $_POST['NivelEstudia'];

$Insert = "INSERT INTO hclinicomedicodeportivo (Id_Paciente, Fecha, Categoria, Nombres, ApellidoP, ApellidoM, Apodo, Edad, NombrePad, 
                               NombreMad, Telefono, Celular, CellPad, CellMad, EstadoCivil, Hijos, CantHijos, 
                               Trabaja, Trabaja, TrabajaDond, Estudia, NivelEstudio) 

                VALUES ('$Id_Paciente','$Fecha','$Categoria','$Nombres','$ApellidoP','$ApellidoM','$Apodo','$Edad','$NombrePad',
                        '$NombreMad','$Telefono','$Celular','$CellPad','$CellMad','$EstCivil','$Hijos','$CantHijos',
                          '$Trabaja','$TrabajaDond','$Estuida','$EstudiaDond')";


$conexion->query($Insert) or die ("Error al Ingresar las datos" .mysqli_error($Conexion));

mysql_close($Conexion);
echo "Datos ingresados Correctamente";

/*<script type="text/javascript">
    alert("Datos Insertados Correctamente!");
    windows.locale.href="Insert.php";
</script>*/
}


          
/*$resultado = mysql_query ($conexion, $Insert)
or die("Error al Insertar Datos");
$Insert->excute();




?>