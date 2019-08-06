<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<head>
	<title>Antecedentes Deportivos</title>
<link rel="stylesheet" href="css/Home.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script language="javascript" src="js/VLogin.js"></script>
</head>
<body>

<form name="form" action="AntecedentesDeportivos.php" method="POST" onsubmit="">
<nav class="navbar navbar">
	<img src="img/fundah.ico" width="60px"  style="margin-right:50px;">


	<li><a href="Home1.php" style="color:white;">INICIO</a></li>

	<li class="nav-item dropdown dmenu">
	<a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">CONSULTAS GENERALES </a>
  
	<div class="dropdown-menu sm-menu" style="background-color:rgb(73, 190, 170); ">
	<a href="ConsultaGeneral.php" data-toggle="modal" data-target="#exampleModalCenter">Consulta General</a> <br>
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



</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header titulo" style="background:rgb(73, 190, 170);">
        <h5 class="modal-title" id="exampleModalLongTitle">Buscar Paciente por Cedula</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <input type="text" id="txtBuscar" name="Id_Paciente" placeholder="Digite el Codigo a Buscar" class="form-control"/> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		 <button type="submit" id="Buscar" name="btnBuscar" value="Buscar" class="btn btn-success">Buscar</button>
      </div>
    </div>
  </div>
</div>
 
<div class="container-fluid">



<center><h2>Antecedentes Deportivos</h2></center>

	<div class="row">
	<div class="col-md-3">

	<label style="">DEPORTES PRACTICADOS:</label>
	<br/> 
	Id_Paciente:
	<input class="form-control" type="text" id="Id_Paciente" name="Id_Paciente" required placeholder=" Id_Paciente"/><br>
    <br/>
	</div>
	</div>

	<div class="row">
	<div class="col-sm-3">


	<label>Futbol Americano:</label>
	<input type="radio" id="FutbolAmericano" name="FutbolAmericano" value="Si"/>Si
	<input type="radio" id="FutbolAmericano" name="FutbolAmericano" value="No"/>No


	
	<br/><br/>
	</div>

	<div class="col-md-3">
	<label>Basketbol:</label>
	<input type="radio" id="Basketbol" name="Basketbol" value="Si"/>Si
	<input type="radio" id="Basketbol" name="Basketbol" value="No"/>No
	<br/><br/>
	</div>

	<div class="col-md-3">
	<label>Futbol:</label>
	<input type="radio" name="Football" value="Si"/>Si
	<input type="radio" name="Football" value="No"/>No
	<br/><br/>
	</div>

	<div class="col-md-3">

	<label>Voleibol:</label>
	<input type="radio" name="Voleibol" value="Si"/>Si
	<input type="radio" name="Voleibol" value="No"/>No
	<br/><br/>
	
	</div>
	</div>

	<label>Tae Kuwon Do:</label>
	<input type="radio" name="TaeKuwonDo" value="Si"/>Si
	<input type="radio" name="TaeKuwonDo" value="No"/>No
	<br/><br/>

	<label>Karate:</label>
	<input type="radio" name="Karate" value="Si"/>Si
	<input type="radio" name="Karate" value="No"/>No
	<br/><br/>

	<label>Natacion:</label>
	<input type="radio" name="Natacion" value="Si"/>Si
	<input type="radio" name="Natacion" value="No"/>No
	<br/><br/>

	<label>Atletismo:</label>
	<input type="radio" name="Atletismo" value="Si"/>Si
	<input type="radio" name="Atletismo" value="No"/>No
	<br/><br/>

    <label>Otro:</label>
	<input type="text" name="OtroDeporte" required placeholder=" Otro Deporte"/><br>
    <br/>

    <label for="">Edad de inicio en el Deporte</label><br>
	<input type="text" name="EdadInicioDeportes" required placeholder=" Edad Deporte"/><br>
    <br/>

	<label>Suspendido por mas de 6 meses:</label><br>
    <input type="radio" name="Suspendido" value="Si"/>Si
    <input type="radio" name="Suspendido" value="No"/>No<br>
    <input type="text" name="MotivoSuspendido" required placeholder=" Motivo?"/>
    <br/><br/>

    <label> 

	</div>
</form>
</fieldset>

<div>
	<button type="submit" name="btnRegistrar" value="Registrar" class="btn btn-success">Registrar</button>
</div>
<?php
require_once './php/Connexion.php';
if (isset($_POST['btnRegistrar']))
{
	$FutbolAmericano = $_POST['FutbolAmericano'];
	$Basketbol = $_POST['Basketbol'];
	$Football = $_POST['Football'];
	$Voleibol = $_POST['Voleibol'];
	$TaeKuwonDo = $_POST['TaeKuwonDo'];
	$Karate = $_POST['Karate'];
	$Natacion = $_POST['Natacion'];
	$Atletismo = $_POST['Atletismo'];
	$OtroDeporte = $_POST['OtroDeporte'];
	$EdadInicioDeportes = $_POST['EdadInicioDeportes'];
	$Suspendido = $_POST['Suspendido'];
	$MotivoSuspendido = $_POST['MotivoSuspendido'];

	///INSERT
	$Registrar = "INSERT INTO antecedentesdeportivos
							  (FutbolAmericano, Basketbol, Football, Voleibol,
							  TaeKuwonDo, Karate, Natacion, Atletismo,
							  OtroDeporte, EdadInicioDeportes, Suspendido,
							  MotivoSuspendido)

					  VALUES ('$FutbolAmericano','$Basketbol','$Football','$Voleibol',
					  		  '$TaeKuwonDo','$Karate','$Natacion','$Atletismo',
							  '$OtroDeporte','$EdadInicioDeportes','$Suspendido',
							  '$MotivoSuspendido')";

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