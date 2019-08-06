<?php

    $Id_Paciente = $_POST['Id_Paciente'];
    $Fecha = $_POST['Fecha'];
    $Categoria = $_POST['Categoria'];
    $Nombres = $_POST['Nombres'];
    $ApellidoP = $_POST['ApellidoP'];
    $ApellidoM = $_POST['ApellidoM'];
    $Apodo = $_POST['Apodo'];
    $Edad = $_POST['Edad'];
    $NomPadre = $_POST['NomPadre'];
    $NomMadre = $_POST['NomMadre'];
    $Telefono = $_POST['Telefono'];
    $Celular = $_POST['Celular'];
    $CellPadre = $_POST['CellPadre'];
    $CellMadre = $_POST['CellMadre'];
    $EstadoCivil = $_POST['EstadoCivil'];
    $Hijos = $_POST['Hijos'];
    $CantHijos = $_POST['CantHijos'];
    $Trabaja = $_POST['Trabaja'];
    $TrabajaDond = $_POST['TrabajaDond'];
    $Estuida = $_POST['Estudia'];
    $NivelEstudio = $_POST['NivelEstudio'];

    require_once 'Conexion.php';

    $Query= "INSERT INTO hcmddb (Id_Paciente, Fecha, Categoria, Nombres, ApellidoP,
                                 ApellidoM, Apodo, Edad, NomPadre, NomMadre, Telefono,
                                 Celular, CellPadre, CellMadre, EstadoCivil, Hijos, CantHijos,
                                 Trabaja, TrabajaDond, Estudia, NivelEstudio)

                         VALUES ('$Id_Paciente','$Fecha','$Categoria','$Nombres','$ApellidoP',
                                 '$ApellidoM','$Apodo','$Edad','$NomPadre','$NomMadre','$Telefono',
                                 '$Celular','$CellPadre','$CellMadre','$EstadoCivil','$Hijos','$CantHijos',
                                 '$Trabaja','$TrabajaDond','$Estuida','$NivelEstudio')";

    $Conexion->query($Query) or die ("Error al ingresar los datos".mysqli_error($Conexion));

?>

<script type="text/javascript">
	alert("Producto Ingresado Exitosamante!!");
	window.location.href='Home.php';
</script>

