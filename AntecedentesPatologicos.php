<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<head>
	<title>Patologícos</title>
<link rel="stylesheet" href="css/Home.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script language="javascript" src="js/VLogin.js"></script>
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

<div class="container-fluid">

<div>
	<button type="submit" name="btnRegistrar" value="Registrar">Registrar</button>
</div ><br/>

    <input type="text" id="Id_Paciente" name="Id_Paciente" required placeholder="  Id_Paciente"/>
    <br/><br/>
 
 <div class="row">
 
 <div class="col-sm-6">
 <label>Alergico:</label>
    <input type="radio" id="Alergico" name="Alergico" value="Si" />Si
    <input type="radio" id="Alergico" name="Alergico" value="No"/>No<br>
    <label>Alergico A:</label>
    <input type="text" id="AlergicoA" name="AlergicoA" required placeholder="  Alergico A?"/>
    <br/><br/>
 
 </div>
   
    <div class="sm-6">

    <label>INFECCIOSAS:</label><br>

Sarampión:
<select name="cmbSarampion">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>

Rubiola:
<select name="cmbRubiola">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>
<br/><br/>


Varicela:
<select name="cmbVaricela">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>

Escarlatina:
<select name="cmbEscarlatina">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>
<br/><br/>

Hepatitis:
<select name="cmbHepatitis">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>

Parotiditis:
<select name="cmbParotiditis">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>
<br/><br/>

</div>

</div>


Otra Enfermedad:<br>
<input type="text" id="OtraEnferm" name="OtraEnferm" required placeholder="Otra Enfermedad" />
<br/><br/>

     Cirugia Previa:
    <input type="radio" id="Cirugia" name="Cirugia" value="Si"/>Si
    <input type="radio" id="Cirugia" name="Cirugia" value="No"/>No<br>
	<label>Cirugia Previa:</label><br>
    <input type="text" id="CirugiaZon" name="CirugiaZon" required placeholder="  Cirugia Previa?"/>
    <br/><br/>
    
    Problemas Visuales:
    <input type="radio" id="Probvisual" name="Probvisual" value="Si"/>Si
    <input type="radio" id="Probvisual" name="Probvisual" value="No"/>No<br>
	<label>Cual Problema Visual:</label><br>
    <input type="text" id="Probvisualzon" name="Probvisualzon" required placeholder="  Problemas Visuales?"/>
    <br/><br/>
    
    <label>PROBLEMAS EN OIDOS, NARIZONGARGANTA:</label><br>
    <input type="radio" id="ProbOido" name="ProbOido" value="Si"/>Si
    <input type="radio" id="ProbOido" name="ProbOido" value="No"/>No<br>
	<label>Cuál Problema de Oido:</label><br>
    <input type="text" id="ProbOidozon" name="ProbOidozon" requiered placeholder="  Problemas de Oidos?"/>
	<br/><br/>
    
PROBLEMAS GASTROINSTESTINALES:
<br>
Reflujo:
<select name="cmbReflujo">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>

Gastritis:
<select name="cmbGastritis">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>
<br/><br/>

Colitis:
<select name="cmbColitis">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>

Diarrea Frecuentes:
<select name="cmbDiarrea">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>
<br/><br/>

Estreñimiento:
<select name="cmbEstrenimiento">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>
<br/><br/>

Otra Enfermedad Gastro:<br>
<input type="text" id="OtraEnfGast" name="OtraEnfGast" required placeholder="Otra Enfermedad Gastro" />
<br/><br/>



<td width="30%" height="500" align="center" style="background-color:lightgray;">

PROBLEMAS CARDIOCOS<br>

Desmayos sin Causa Aparantes:
<select name="cmbDesmayos">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>
<br/><br/>

Soplos:
<select name="cmbSoplos">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>

Taquicardias:
<select name="cmbTaquicardias">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>
<br/><br/>

Hipertension:
<select name="cmbHipertension">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>
<br/><br/>


Otra Enfermedad Cardio:
<br>
<input type="text" id="OtraEnfCardio" name="OtraEnfCardio" required  placeholder="Otra Enfermedad Cardio" />
<br/><br/>


PROBLEMAS PULMONARES
<br>
Bronquitis:
<select name="cmbBronquitis">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>
<br/><br/>

Asmabronquial:
<select name="cmbAsmabronquial">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>
<br/><br/>

Hiperactividad:
<select name="cmbHiperactividad">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>
<br/><br/>

Bronquial:
<select name="cmbBronquial">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>
<br/><br/>

Otra Enfermedad Bronquial:
<br>
<input type="text" name="OtraEnfBronquial" required placeholder="Otra Enfermedad Bronquial" />
<br/><br/>

PROBLEMAS VIAS URINARIAS
<br/>

Riñon:
<select name="cmbRinon">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>

Ureteres:
<select name="cmbUreteres">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>
<br/><br/>

Vejiga:
<select name="cmbVejiga">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>

Uretra:
<select name="cmbUretra">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>
<br/><br/>

Genitales:
<select name="cmbGenitales">
<option value="0">Selecciones</option>
        <option value="No">No</option>
        <option value="Si">Si</option>
</select>
<br/><br/>

Otra Enfermedad Genital:<br>
<input type="text" id="OtraEnfGenital" name="OtraEnfGenital" required placeholder="Otra Enfermedad Genital" />
<br/><br/>

    <label>DIABETES:</label>
    <input type="radio" id="Diabetes" name="Diabetes" value="Si"/>Si
    <input type="radio" id="Diabetes" name="Diabetes" value="No"/>No<br>
	<label>Desde Cuando:</label><br>
    <input type="text" id="DiabeteDesde" name="DiabeteDesde" required placeholder=" Des Cuando?"/><br>
    <label>Tratamiento Actual de la Diabetes:</label><br>
    <input type="text" id="TratamientoDia" name="TratamientoDia" required placeholder=" Tratamiento Actual"/>
    <br/><br/>


</div>

<?php

//REGISTRAR DATOS
require_once "./php/Connexion.php";
if(isset($_POST['btnRegistrar']))
{
    $Alergico = $_POST['Alergico'];
    $AlergicoA = $_POST['AlergicoA'];
    $Sarampion = $_POST['cmbSarampion'];
    $Rubiola = $_POST['cmbRubiola'];
    $Varicela = $_POST['cmbVaricela'];
    $Escarlatina = $_POST['cmbEscarlatina'];
    $Hepatitis = $_POST['cmbHepatitis'];
    $Parotiditis = $_POST['cmbParotiditis'];
    $OtraEnferm = $_POST['OtraEnferm'];
    $Cirugia = $_POST['Cirugia'];
    $CirugiaZon = $_POST['CirugiaZon'];
    $Probvisual = $_POST['Probvisual'];
    $Probvisualzon = $_POST['Probvisualzon'];
    $ProbOido = $_POST['ProbOido'];
    $ProbOidozon = $_POST['ProbOidozon'];
    $Reflujo = $_POST['cmbReflujo'];
    $Gastritis = $_POST['cmbGastritis'];
    $Colitis = $_POST['cmbColitis'];
    $Diarrea = $_POST['cmbDiarrea'];
    $Estrenimiento = $_POST['cmbEstrenimiento'];
    $OtraEnfGast = $_POST['OtraEnfGast'];
    $Desmayos = $_POST['cmbDesmayos'];
    $Soplos = $_POST['cmbSoplos'];
    $Taquicardias = $_POST['cmbTaquicardias'];
    $Hipertension = $_POST['cmbHipertension'];
    $OtraEnfCardio = $_POST['OtraEnfCardio'];
    $Bronquitis = $_POST['cmbBronquitis'];
    $Asmabronquial = $_POST['cmbAsmabronquial'];
    $Hiperactividad = $_POST['cmbHiperactividad'];
    $Bronquial = $_POST['cmbBronquial'];
    $OtraEnfBronquial = $_POST['OtraEnfBronquial'];
    $Rinon = $_POST['cmbRinon'];
    $Ureteres = $_POST['cmbUreteres'];
    $Vejiga = $_POST['cmbVejiga'];
    $Uretra = $_POST['cmbUretra'];
    $Genitales = $_POST['cmbGenitales'];
    $OtraEnfGenital = $_POST['OtraEnfGenital'];
    $Diabetes = $_POST['Diabetes'];
    $DiabeteDesde = $_POST['DiabeteDesde'];
    $TratamientoDia = $_POST['TratamientoDia'];
   
    $Registrar = "INSERT INTO antecedentespatologicos (Alergico, AlergicoA, 
                              Sarampion, Rubiola, Varicela, Escarlatina, Hepatitis, 
                              Parotiditis, OtraEnferm, Cirugia, CirugiaZon, 
                              Probvisual, Probvisualzon, ProbOido, ProbOidozon, 
                              Reflujo, Gastritis, Colitis, Diarrea, Estrenimiento, OtraEnfGast, 
                              Desmayos, Soplos, Taquicardias, Hipertension, OtraEnfCardio, 
                              Bronquitis, Asmabronquial, Hiperactividad, Bronquial, OtraEnfBronquial	, 
                              Rinon, Ureteres, Vejiga, Uretra, Genitales, OtraEnfGenital, Diabetes, 
                              DiabeteDesde, TratamientoDia)

                      VALUES ('$_POST[Alergico]','$_POST[AlergicoA]',
                              '$_POST[cmbSarampion]','$_POST[cmbRubiola]',
                              '$_POST[cmbVaricela]','$_POST[cmbEscarlatina]',
                              '$_POST[cmbHepatitis]','$_POST[cmbParotiditis]',
                              '$_POST[OtraEnferm]','$_POST[Cirugia]',
                              '$_POST[CirugiaZon]','$_POST[Probvisual]',
                              '$_POST[Probvisualzon]','$_POST[ProbOido]',
                              '$_POST[ProbOidozon]','$_POST[cmbReflujo]',
                              '$_POST[cmbGastritis]','$_POST[cmbColitis]',
                              '$_POST[cmbDiarrea]','$_POST[cmbEstrenimiento]',
                              '$_POST[OtraEnfGast]','$_POST[cmbDesmayos]',
                              '$_POST[cmbSoplos]','$_POST[cmbTaquicardias]',
                              '$_POST[cmbHipertension]','$_POST[OtraEnfCardio]',
                              '$_POST[cmbBronquitis]','$_POST[cmbAsmabronquial]',
                              '$_POST[cmbHiperactividad]','$_POST[cmbBronquial]',
                              '$_POST[OtraEnfBronquial]','$_POST[cmbRinon]',
                              '$_POST[cmbUreteres]','$_POST[cmbVejiga]',
                              '$_POST[cmbUretra]','$_POST[cmbGenitales]',
                              '$_POST[OtraEnfGenital]','$_POST[Diabetes]',
                              '$_POST[DiabeteDesde]','$_POST[TratamientoDia]')";

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