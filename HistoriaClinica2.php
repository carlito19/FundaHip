<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<head>
	<title>Home</title>
<link rel="stylesheet" href="css/Home.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script language="javascript" src="js/VLogin.js"></script>
</head>
<body>

<nav class="navbar">
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

	<center><h3>Historia Clinica 2</h3></center>

<br/>

<div class="container-fluid" style="background-color: #307E7E; padding:40px; border-radius:10px;">
<div class="row">

    <div class="col-sm-3">
	<label> Id_Paciente:</label>
    <input type="text" id="Id_Paciente" name="Id_Paciente" required placeholder="  Id_Paciente" class="form-control"/>
    </div>
	</div>
	<br>


	<div class="row">

	<div class="col-sm">
 <label>Diabetes</label> <br>
 <select name="cmbDiabetes" class="form-control">
 <option value="0">Selecciones</option>
        <option value="AbueloPadre">Abuelo Padre</option>
        <option value="AbuelaPadre">Abuela Padre</option>
        <option value="AbueloMadre">Abuelo Madre</option>
	 <option value="AbuelaMadre">Abuela Madre</option>
	 <option value="Padre">Padre</option>
	 <option value="Madre">Madre</option>
	 <option value="Hermanos">Hermanos</option>
	 <option value="Tios">Tios</option>
        <option value="Otros">Otros</option>
        <option value="Nadie">Nadie</option>
</select>
	</div>

<div class="col-sm">
<label> Diabetes:</label> <br>
<input type="text" id="DiaQuien" name="DiaQuien" required placeholder="Quién" class="form-control"/>
</div>

<div class="col-sm">

<label> Hipertencion:</label> <br>
<select name="cmbHipertencion" class="form-control">
<option value="0">Selecciones</option>
        <option value="AbueloPadre">Abuelo Padre</option>
        <option value="AbuelaPadre">Abuela Padre</option>
        <option value="AbueloMadre">Abuelo Madre</option>
	 <option value="AbuelaMadre">Abuela Madre</option>
	 <option value="Padre">Padre</option>
	 <option value="Madre">Madre</option>
	 <option value="Hermanos">Hermanos</option>
	 <option value="Tios">Tios</option>
        <option value="Otros">Otros</option>
        <option value="Nadie">Nadie</option>
</select>

</div>



<div class="col-sm">
<label> Hipertencion quien </label> <br>
<input type="text" id="HipQuien" name="HipQuien" required placeholder="Quién" class="form-control"/>
</div>
</div>

<br>

<div class="row">

<div class="col-sm">
<label> Obesidad: </label> <br>
<select name="cmbObesidad" class="form-control">
<option value="0">Selecciones</option>
        <option value="AbueloPadre">Abuelo Padre</option>
        <option value="AbuelaPadre">Abuela Padre</option>
        <option value="AbueloMadre">Abuelo Madre</option>
	 <option value="AbuelaMadre">Abuela Madre</option>
	 <option value="Padre">Padre</option>
	 <option value="Madre">Madre</option>
	 <option value="Hermanos">Hermanos</option>
	 <option value="Tios">Tios</option>
        <option value="Otros">Otros</option>
        <option value="Nadie">Nadie</option>
</select>
</div>


<div class="col-sm">
<label> Quién con Obesidad </label> <br>
<input type="text" id="OBsQuien" name="OBsQuien" required placeholder="  Quién" class="form-control"/>
</div>


<div class="col-sm">
<label> Infarto: </label> <br>
<select name="cmbInfarto" class="form-control">
<option value="0">Selecciones</option>
        <option value="AbueloPadre">Abuelo Padre</option>
        <option value="AbuelaPadre">Abuela Padre</option>
        <option value="AbueloMadre">Abuelo Madre</option>
	 <option value="AbuelaMadre">Abuela Madre</option>
	 <option value="Padre">Padre</option>
	 <option value="Madre">Madre</option>
	 <option value="Hermanos">Hermanos</option>
	 <option value="Tios">Tios</option>
        <option value="Otros">Otros</option>
        <option value="Nadie">Nadie</option>
</select>
</div>


<div class="col-sm">
<label> Quién con Infarto:</label> <br>
<input type="text" id="InfQuien" name="InfQuien" required placeholder="  Quién" class="form-control"/>
</div>
</div>

<br>

<div class="row">
<div class="col-sm">
<label> Muerte Subita:</label> <br> 
<select name="cmbMuerteSubita" class="form-control">
<option value="0">Selecciones</option>
        <option value="AbueloPadre">Abuelo Padre</option>
        <option value="AbuelaPadre">Abuela Padre</option>
        <option value="AbueloMadre">Abuelo Madre</option>
	 <option value="AbuelaMadre">Abuela Madre</option>
	 <option value="Padre">Padre</option>
	 <option value="Madre">Madre</option>
	 <option value="Hermanos">Hermanos</option>
	 <option value="Tios">Tios</option>
        <option value="Otros">Otros</option>
        <option value="Nadie">Nadie</option>
</select>

</div>

<div class="col-sm">
<label>Quién Muerte Subita: </label> 
<input type="text" id="MusQuien" name="MusQuien" required placeholder="  Quién" class="form-control"/>
</div>


<div class="col-sm">
<label> Epilepsia: </label> <br>
<select name="cmbEpilepsia" class="form-control">
<option value="0">Selecciones</option>
        <option value="AbueloPadre">Abuelo Padre</option>
        <option value="AbuelaPadre">Abuela Padre</option>
        <option value="AbueloMadre">Abuelo Madre</option>
	 <option value="AbuelaMadre">Abuela Madre</option>
	 <option value="Padre">Padre</option>
	 <option value="Madre">Madre</option>
	 <option value="Hermanos">Hermanos</option>
	 <option value="Tios">Tios</option>
        <option value="Otros">Otros</option>
        <option value="Nadie">Nadie</option>
</select>
</div>

<div class="col-sm">
<label> Quién con Epilepsia: </label> <br>
<input type="text" id="EpilQuien" name="EpilQuien" required placeholder="Quién" class="form-control"/>
</div>
</div>

<br>

<div class="row">
<div class="col-sm">
<label> Cancer: </label> <br>
<select name="cmbCancer" class="form-control">
<option value="0">Selecciones</option>
        <option value="AbueloPadre">Abuelo Padre</option>
        <option value="AbuelaPadre">Abuela Padre</option>
        <option value="AbueloMadre">Abuelo Madre</option>
	 <option value="AbuelaMadre">Abuela Madre</option>
	 <option value="Padre">Padre</option>
	 <option value="Madre">Madre</option>
	 <option value="Hermanos">Hermanos</option>
	 <option value="Tios">Tios</option>
        <option value="Otros">Otros</option>
        <option value="Nadie">Nadie</option>
</select>
</div>

<div class="col-sm">

<label>Quién con Cancer:</label> <br>
<input type="text" id="CancQuien" name="CancQuien" required placeholder="  Quién" class="form-control"/>
</div>




<div class="col-sm">

<label> Pulmonales: </label> <br>
<select name="cmbPulmonales" class="form-control">
<option value="0">Selecciones</option>
        <option value="AbueloPadre">Abuelo Padre</option>
        <option value="AbuelaPadre">Abuela Padre</option>
        <option value="AbueloMadre">Abuelo Madre</option>
	 <option value="AbuelaMadre">Abuela Madre</option>
	 <option value="Padre">Padre</option>
	 <option value="Madre">Madre</option>
	 <option value="Hermanos">Hermanos</option>
	 <option value="Tios">Tios</option>
        <option value="Otros">Otros</option>
        <option value="Nadie">Nadie</option>
</select>
</div>


<div class="col-sm">
<label> Quién con Pulmonales: </label> <br>
<input type="text" id="PulQuien" name="PulQuien" required placeholder="  Quién" class="form-control"/>
</div>

</div>

<br>

<div class="row">
<div class="col-sm-3">

<label> OTRA/CUAL?: </label> <br>
<select name="cmbOTRACUAL" class="form-control">
<option value="0">Selecciones</option>
        <option value="AbueloPadre">Abuelo Padre</option>
        <option value="AbuelaPadre">Abuela Padre</option>
        <option value="AbueloMadre">Abuelo Madre</option>
	 <option value="AbuelaMadre">Abuela Madre</option>
	 <option value="Padre">Padre</option>
	 <option value="Madre">Madre</option>
	 <option value="Hermanos">Hermanos</option>
	 <option value="Tios">Tios</option>
        <option value="Otros">Otros</option>
        <option value="Nadie">Nadie</option>
</select>
</div>

<div class="col-sm-3">
<label> Quién: </label> <br>
<input type="text" id="OtraQuien" name="OtraQuien" required placeholder="  Quién" class="form-control"/>
</div>

<div class="col-sm">
	<button type="submit" name="btnRegistrar" value="Registrar" class="btn btn-success">Registrar</button>
</div>

</div>



</form>
</div>
</div>
<?php
require_once './php/Connexion.php';
if (isset($_POST['btnRegistrar']))
{
       $Diabetes = $_POST['cmbDiabetes'];
       $DiaQuien = $_POST['DiaQuien'];
       $Hipertencion = $_POST['cmbHipertencion'];
       $HipQuien = $_POST['HipQuien'];
       $Obesidad = $_POST['cmbObesidad'];
       $OBsQuien = $_POST['OBsQuien'];
       $Infarto = $_POST['cmbInfarto'];
       $InfQuien = $_POST['InfQuien'];
       $MuerteSubita = $_POST['cmbMuerteSubita'];
       $MusQuien = $_POST['MusQuien'];
       $Epilepsia = $_POST['cmbEpilepsia'];
       $EpilQuien = $_POST['EpilQuien'];
       $Cancer = $_POST['cmbCancer'];
       $CancQuien = $_POST['CancQuien'];
       $Pulmonales = $_POST['cmbPulmonales'];
       $PulQuien = $_POST['PulQuien'];
       $OTRACUAL = $_POST['cmbOTRACUAL'];
       $OtraQuien = $_POST['OtraQuien'];


$Registrar = "INSERT INTO hclinicamedicodeportivo2
                         (Diabetes, DiaQuien, Hipertencion, HipQuien,
                          Obesidad, OBsQuien, Infarto, InfQuien, MuerteSubita,
                          MusQuien, Epilepsia, EpilQuien, Cancer, CancQuien,
                          Pulmonales, PulQuien, OTRACUAL, OtraQuien)

                     VALUE('$_POST[cmbDiabetes]','$_POST[DiaQuien]',
                           '$_POST[cmbHipertencion]','$_POST[HipQuien]',
                           '$_POST[cmbObesidad]','$_POST[OBsQuien]',
                           '$_POST[cmbInfarto]','$_POST[InfQuien]',
                           '$_POST[cmbMuerteSubita]','$_POST[MusQuien]',
                           '$_POST[cmbEpilepsia]','$_POST[EpilQuien]',
                           '$_POST[cmbCancer]','$_POST[CancQuien]',
                           '$_POST[cmbPulmonales]','$_POST[PulQuien]',
                           '$_POST[cmbOTRACUAL]','$_POST[OtraQuien]')";

$Insertado= $Conexion->query($Registrar) or die ("Error al Registrar los Datos " .mysqli_connect_error($Conexion));
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