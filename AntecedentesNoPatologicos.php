<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<head>
	<title>No Patologícos</title>
<link rel="stylesheet" href="css/Home.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script language="javascript" src=""></script>
</head>
<body>

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

<br/>
<center><h3>Antecedesntes No Patologicos</h3></center>
<br>
<div class="container-fluid"  style="background-color: #307E7E; padding:40px; border-radius:10px;">

<div class="row">

   <div class="col-sm-4">

	<label>VACUNAS:</label>
	<br/><BR/>
	Id_Paciente:
	<input type="text" id="Id_Paciente" name="Id_Paciente" required placeholder="  Id_Paciente" class="form-control"/>
	</div>
	</div>

<br>
<br>
<div class="row">



<div class="col-sm-3">
<label>Esquema Completo:</label><br>
	<input type="radio" id="EsquemaCompleto" name="EsquemaCompleto" value="Si"/>Si
	<input type="radio" id="EsquemaCompleto" name="EsquemaCompleto" value="No"/>No<br>
	<br/>

</div>

<div class="col-sm-3">
<label>Faltan:</label><br>
	<input type="radio" id="Faltan" name="Faltan" value="Si"/>Si
	<input type="radio" id="Faltan" name="Faltan" value="No"/>No<br>
</div>
	
	<div class="col-sm">
	<label>Cual Falta:</label><br>
	<input type="text" id="CualFalta" name="CualFalta" required placeholder=" Cual Falta" class="form-control"/>
	</div>

<div class="col-sm">
	<label>Tiene Mascotas:</label>
	<input type="radio" id="Mascotas" name="Mascotas" value="Si" class=""/>Si
	<input type="radio" id="Mascotas" name="Mascotas" value="No"/>No<br>
	<input type="text" id="TipoMascota" name="TipoMascota" class="form-control" required placeholder=" Tipo de Mascota"/><br/>
	<br/>
	</div>

	</div>

	<button type="submit" name="btnRegistrar" value="Registrar">Registrar</button>


	</div>
<?php
///REGISTAR DATOS
require_once './php/Connexion.php';
if(isset($_POST['btnRegistrar']))
{
    $EsquemaCompleto = $_POST['EsquemaCompleto'];
    $Faltan = $_POST['Faltan'];
	$CualFalta = $_POST['CualFalta'];
	$Mascotas = $_POST['Mascotas'];
	$TIpoMascota = $_POST['TipoMascota'];

	///INSERT
	$Registrar = "INSERT INTO antecedentesnopatologicos
							 (EsquemaCompleto, Faltan, CualFalta, Mascotas, TipoMascota)
					 
					  VALUES ('$EsquemaCompleto','$Faltan','$CualFalta','$Mascotas','$TIpoMascota')";
	$Ejecutar = $Conexion->query($Registrar) or die ("Error al Insertar los datos ".mysqli_error($Conexion));
	if ($Ejecutar)
	{
		echo "<script>alert('Registro Insertados Correctamente!')</script>";
	}
}
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>;