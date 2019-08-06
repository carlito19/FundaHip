<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<head>
	<title>Exploración Fisica</title>
<link rel="stylesheet" href="css/Home.css"/>
<link rel="stylesheet" href="css/Home.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script language="javascript" src="js/VLogin.js"></script>
</head>
<body>

<form name="form" action="ExploracionFisica.php" method="POST" onsubmit="">

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

	<div class="container-fluid"  style="background-color: #307E7E; padding:40px; border-radius:10px;">
	
<div class="row">
<div class="col-md-3">
<label>Id_Paciente:</label> 
<input type="text" id="Id_Paciente" name="Id_Paciente" required placeholder=" Id_Paciente" class="form-control"/>
</div>
</div>

<br>

<div class="row">
<div class="col-md-3">
<label>Peso:</label>
    <input type="text" id="Peso" name="Peso" required placeholder=" Peso" class="form-control"/>KG.<br>
</div>

<div class="col-md-3">
<label>Talla:</label>
    <input type="text" id="Talla" name="Talla" required placeholder=" Talla" class="form-control" style="inl"/>CM.<br>
</div>

<div class="col-md-3">
<label>Frecuencia Cardiaca:</label><br/>
    <input type="text" id="FrecuenciaCardiaca" name="FrecuenciaCardiaca" required placeholder=" Frecuencia Cardiaca" class="form-control"/>LPM.<br>
</div>

<div class="col-md-3">
<label>TA:</label>
    <input type="text" id="TA" name="TA" required placeholder=" TA" class="form-control"/>MMHG.</input><br>
</div>

</div>
<br/>
<label>OJOS REFLEJOS PUPILARES:</label>
<br>
<br>

<div class="row">
<div class="col-md-3">

<label>Vision O.D:</label>
    <input type="text" id="VisionOD" name="VisionOD" required placeholder=" Vision OD" class="form-control"/>
	</div>

	<div class="col-md-3">
	
	<label>OJ:</label>
    <input type="text" id="VisionOJ" name="VisionOJ" required placeholder=" Vision OJ" class="form-control"/>

	</div>
  
  <div class="col-md-3">
  <label>Vision O.D:</label>
    <input type="text" id="VisionOD" name="VisionOD" required placeholder=" Vision OD" class="form-control"/>
  </div>

  <div class="col-md-3">
  <label>OJ:</label>
    <input type="text" id="VisionOJ" name="VisionOJ" required placeholder=" Vision OJ" class="form-control"/>

  </div>

</div>

 
<br>

  
    <label>DIENTES:</label>
	
	<br>
	<br>
	<div class="row">
	
	<div class="col-md-3">
	
	<label>Ausentes:</label>
    <input type="text" id="Ausentes" name="DientesAusentes" required placeholder=" Ausentes" class="form-control"/>
	</div>
	
	<div class="col-md-3">
	<label>Caries:</label>
    <input type="text" id="Caries" name="DientesCaries" required placeholder=" Caries" class="form-control"/>
	</div>
	</div>
   
    <br/>
	<label>AREA CARDIACAS:</label><br/>
	<div class="row">
		
		<div class="col-md-3">
		<label>Sopos:</label>
        <input type="text" id="Sopos" name="SoposCardiaca" required placeholder=" Sopos" class="form-control"/><br>
		</div>

		<div class="col-md-3">
		
		<label>Tipo y Localizacion:</label><br>
    <input type="text" id="TipLocalicacion" name="TipoLocalizacion" placeholder=" Tipo y Localicacion" class="form-control"/>
		</div>

	<div class="col-md-3">
	
    <label>AREA PULMONAR:</label><br>
    <input type="text" id="AreaPulmonar" name="AreaPulmonal" required placeholder=" Area Pulmonar" class="form-control"/>
	
	</div>
  
  <div class="col-md-3">
  <label>ABDOMEN:</label><br>
    <input type="text" id="Abdomen" name="Abdomen" required placeholder=" Abdomen" class="form-control"/>
  </div>
	</div>
    
 
	<div class="row">
	
		<div class="col-md-3">
		<label>MIEMBROS INFERIORES:</label><BR/>
    	<input type="text" class="form-control " id="MiembroInferiores" name="MiembroInferiores" required placeholder=" Miembros Inferiores"/>
		</div>

		<div class="col-md-3">
		<label>OBSERVACIONES:</label><br/>
    <textarea name="Observaciones" required placeholder="Describe yourself here..." class="form-control form-control-lg"></textarea>
		</div>

		<div class="col-md-3">

<label>ELECTROCARDIOGRAMA:</label><br/>
    <textarea class="form-control form-control-lg" name="ElectroCardiograma" required placeholder="Describe yourself here..."></textarea>
</div>

<div class="col-md-3">

	<label>ECOCARDIOGRAMA:</label><br/>
    <textarea class= "form-control form-control-lg" name="Ecocardiograma" required placeholder="Describe yourself here..."></textarea>
</div>
	</div>

<div class="row">



<div class="col-md-3">

<label>EXPIROMETRIA:</label><br/>
    <textarea class="form-control form-control-lg" name="Expirometria" required placeholder="Describe yourself here..."></textarea>
</div>

<div class="col-md-3">

<label>ANALISIS DE LABORATORIO:</label><br/>
    <textarea class="form-control form-control-lg" name="AnalisisLaboratorio" required placeholder="Describe yourself here..."></textarea>
</div>
</div>

<br>

<div>
	<button type="submit" name="btnRegistrar" value="Registrar" class="btn btn-success">Registrar</button>
</div>

	</div>
</form>

<?php
require_once './php/Connexion.php';
if (isset($_POST['btnRegistrar']))
{
	$Peso = $_POST['Peso'];
	$Talla = $_POST['Talla'];
	$FrecuenciaCardiaca = $_POST['FrecuenciaCardiaca'];
	$TA = $_POST['TA'];
	$VisionOD = $_POST['VisionOD'];
	$VisionOJ = $_POST['VisionOJ'];
	$DientesAusentes = $_POST['DientesAusentes'];
	$DientesCaries = $_POST['DientesCaries'];
	$SoposCardiaca = $_POST['SoposCardiaca'];
	$TipoLocalizacion = $_POST['TipoLocalizacion'];
	$AreaPulmonal = $_POST['AreaPulmonal'];
	$Abdomen = $_POST['Abdomen'];
	$MiembroInferiores = $_POST['MiembroInferiores'];
	$Observaciones = $_POST['Observaciones'];
	$ElectroCardiograma = $_POST['ElectroCardiograma'];
	$Ecocardiograma = $_POST['Ecocardiograma'];
	$Expirometria = $_POST['Expirometria'];
	$AnalisisLaboratorio = $_POST['AnalisisLaboratorio'];

	///INSERT
	$Registrar = "INSERT INTO exploracionfisica (Peso, Talla, FrecuenciaCardiaca, TA,
									 			 VisionOD, VisionOJ, DientesAusentes, DientesCaries,
												 SoposCardiaca, TipoLocalizacion, AreaPulmonal,
												 Abdomen, MiembroInferiores, Observaciones, 
												 ElectroCardiograma, Ecocardiograma, Expirometria, 
												 AnalisisLaboratorio)

							            VALUES ('$Peso','$Talla','$FrecuenciaCardiaca','$TA','$VisionOD',
										        '$VisionOJ','$DientesAusentes','$DientesCaries','$SoposCardiaca',
												'$TipoLocalizacion','$AreaPulmonal','$Abdomen',
												'$MiembroInferiores','$Observaciones','$ElectroCardiograma',
												'$Ecocardiograma','$Expirometria','$AnalisisLaboratorio')";

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