<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<head>
	<title>Historia Clinica</title>
<link rel="stylesheet" href="css/Home.css"/>
<script language="javascript" src="js/VLogin.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

<form name="form" action="HistoriaClinica.php" method="POST">


<nav class="navbar navbar">
	<img src="img/fundah.ico" width="60px"  style="margin-right:50px;">


	<li><a href="Home1.php" style="color:white;">INICIO</a></li>

	<li class="nav-item dropdown dmenu">
	<a href="Home1.php" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">CONSULTAS GENERALES </a>
  
	<div class="dropdown-menu sm-menu" style="background-color:rgb(73, 190, 170); ">
	<a href="ConsultaGeneral.php">Consulta General</a> <br>
	<a href="CHistoriaClinica.php">Historia Clinica</a> <br>
	<a href="CHistoriaClinica2.php">Historia Clinica 2</a> <br>
	<a href="CAntecedentesNoPatologicos.php">Anteced. No Patologícos</a> <br>
	<a href="CAntecedentesPatologicos2.php">Anteced. Patologícos 2</a>  <br>
	<a href="CAntecedentesDeportivos.php">Anteced. Deportivos</a>  <br>
	<a href="CExploracionFisica.php">Exploracion Fisica</a> <br>
	<a href="CAptitupFisica.php">Aptitud Fisica</a> <br>
	<a href="CAptitupFisica2.php">Aptitud Fisica 2</a> <br>

      </div>
	</li>

	<li class="nav-item dropdown dmenu"> 
	<a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" >HISTORIA CLINICA</a>

	<div class="dropdown-menu sm-menu" style="background-color:rgb(73, 190, 170)">
	<a href="HistoriaClinica.php">Historia Clinica</a> <br>
	<a href="HistoriaClinica2.php">Historia Clinica 2</a>
	</div>
	</li>


	<li class="nav-item dropdown dmenu">
	<a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">ANTECEDENTES PERSONALES</a>

	<div class="dropdown-menu sm-menu" style="background-color:rgb(73, 190, 170)">
	<a href="AntecedentesNoPatologicos.php">Personales No Patologicos</a> <br>
	<a href="AntecedentesPatologicos.php">Personales Patologicos</a> <br>
	<a href="AntecedentesPatologicos2.php">Personales Patologicos 2</a> <br>
	<a href="AntecedentesDeportivos.php">Personales Deportivos</a> <br>
	</div>
	</li>


	<li class="nav-item dropdown dmenu"> 
	<a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">EXPLORACIONES</a>
	<div class="dropdown-menu sm-menu" style="background-color:rgb(73, 190, 170)">
    <a href="ExploracionFisica.php">Exploracion Fisica</a>
	</div>
	</li>

	<li class="nav-item dropdown dmenu">
	<a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="#">PRUEBA DE</a>
		<div class="dropdown-menu sm-menu" style="background-color:rgb(73, 190, 170)">
        <a href="AptitupFisica.php">Aptitud Fisica</a> <br>
        <a href="AptitupFisica2.php">Aptitud Fisica 2</a> <br>
		</div>
		
	<li><a href="Index.php" style="color:white;">LOGOUT</a></li>


	</nav>

	<br>
<center><h3>Historia Clinica</h3></center>
<br>

	<div class="container-fluid" style="background-color: #307E7E; padding:40px; border-radius:10px;">

	<div class="row">

	<div class="col-sm">
	<label>Cedula:</label>
	<input type="text" id="Id_Paciente" name="Id_Paciente" required class="form-control"/>
	</div>

	<div class="col-sm">
	<label>Fecha:</label>
	<input type="date" id="Fecha" name="Fecha" required class="form-control"/>
	</div>

	<div class="col-sm">
	<label>Categoria:</label>
	<input type="text" id="Categoria" name="Categoria" required placeholder=" Categoria del Deporte" class="form-control"/>
	</div>

	<div class="col-sm">
	<label>Nombres:</label>
	<input type="text" id="Nombres" name="Nombres" required placeholder=" Nombres" class="form-control"/>
	</div>

	<div class="col-sm">
	<label>Paterno:</label>
	<input type="text" id="ApellidoP" name="ApellidoP" required placeholder=" Apellido Paterno" class="form-control"/>
	</div>

    </div>

	<br>

	<div class="row">
	
	<div class="col-sm">
	<label> Materno:</label>
	<input type="text" id="ApellidoM" name="ApellidoM" required placeholder=" Apellido Materno" class="form-control"/>
	</div>

	<div class="col-sm">
	<label>Apodo:</label>
	<input type="text" id="Apodo" name="Apodo" required placeholder=" Apodo" class="form-control"/>
	</div>



	 <div class="col-sm">
	<label>Edad:</label>
	<input type="text" id="Edad" name="Edad" required placeholder=" Edad" class="form-control"/>
	</div>

	<div class="col-sm">
	<label>Nombre del Padre:</label>
	<input type="text" id="NomPadre" name="NomPadre" required placeholder=" Nombre del Padre" class="form-control"/>
	</div>

	<div class="col-sm">
	<label>Nombre de la Madre:</label>
	<input type="text" id="NomMadre" name="NomMadre" required placeholder=" Nombre de la Madre" class="form-control"/>
	</div>

</div>
<br>


          <div class="row">

		  <div class="col-sm">
<label>Telefono:</label>
	<input type="text" id="Telefono" name="Telefono" required placeholder=" Numero de Telefono" class="form-control"/>
</div>

		  <div class="col-sm">
		<label>Celular:</label>
		<input type="text" id="Celular" name="Celular" required placeholder=" Numero de Celular" class="form-control"/>

</div>

		  <div class="col-sm">
		  <label>Cel. de Padre:</label>
		<input type="text" id="CellPadre" name="CellPadre" required placeholder=" Celular del Padre" class="form-control"/>
		  </div>

		  <div class="col-sm">
		  <label>Cel. de la Madre:</label>
		<input type="text" id="CellMadre" name="CellMadre" required placeholder=" Celular de la Madre" class="form-control"/>
		  </div>

		  <div class="col-sm">
		  <label>Estado Civil:</label> <br>
		<input type="radio" id="EstadoCivil" name="EstadoCivil" value="Casado" />Casado (@)
		<input type="radio" id="EstadoCivil" name="EstadoCivil" value="Soltero"/>Soltero (@)
		  </div>
		  </div>
<br>


 <div class="row">
 <div class="col-sm">
		  <label>Hijos:</label>
		<input type="radio" id="Hijos" name="Hijos" required  value="Si"/>Si
		<input type="radio" id="Hijos" name="Hijos" value="No"/>No
		<input type="text" id="CantHijos" name="CantHijos" required  placeholder="  Cantidad de Hijos" class="form-control"/>
		  </div>

  <div class="col-sm">
		  <label>Trabaja:</label>
		<input type="radio" id="Trabaja" name="Trabaja" required  value="Si"/>Si
		<input type="radio" id="Trabaja" name="Trabaja" value="No"/>No
		<input type="text" id="TrabajaDond" name="TrabajaDond" required  placeholder="  Donde trabaja" class="form-control"/>
		  </div>

	 	  <div class="col-sm">
		  <label>Estudia:</label>
		<input type="radio" id="Estudia" name="Estudia" required  value="Si"/>Si
		<input type="radio" id="Estudia" name="Estudia" value="No"/>No
		<input type="text" id="NivelEstudio" name="NivelEstudio" required  placeholder="  Grado" class="form-control"/>
		</div>

		<div class="col-sm">
		<button type="submit" name="btnRegistrar" value="Registrar" class="btn btn-primary">Registrar</button>
		</div>


</div>

		  </div>

		
</form>


<?php
//REGISTRAR DATOS
require_once './php/Connexion.php';

if (isset($_POST['btnRegistrar']))
{
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

	  $Registrar = "INSERT INTO hclinicamedicodeportivo (Id_Paciente, Fecha, Categoria, Nombres, ApellidoP,
                              ApellidoM, Apodo, Edad, NomPadre, NomMadre, Telefono,
                              Celular, CellPadre, CellMadre, EstadoCivil, Hijos, CantHijos,
                              Trabaja, TrabajaDond, Estudia, NivelEstudio)

                         VALUES ('$Id_Paciente','$Fecha','$Categoria','$Nombres','$ApellidoP',
                                 '$ApellidoM','$Apodo','$Edad','$NomPadre','$NomMadre','$Telefono',
                                 '$Celular','$CellPadre','$CellMadre','$EstadoCivil','$Hijos',
								 								 '$CantHijos','$Trabaja','$TrabajaDond','$Estuida','$NivelEstudio')";

	$Insertado = $Conexion->query($Registrar) or die ("Error al ingresar los datos".mysqli_error($Conexion));
	if ($Insertado)
	{
		echo "<script>alert('Registro Insertado Correctamente!')</script>";
	}
}
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>