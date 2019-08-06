<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<head>
	<title>Home</title>
<link rel="stylesheet" href="css/Home.css"/>
<script language="javascript" src="js/VLogin.js"></script>
</head>
<body>
	<br/><br/>
	<center><fieldset align="center">
<form name="form" action="Patologicos2.php" method="POST" onsubmit="">
<center><legend>Fundahip</legend></center> 
<hr>

<table height="500%">
	<td width="0%" >
	<script type="text/javascript">
	//<![CDATA[
	function makeArray() {
	for (i = 0; i<makeArray.arguments.length; i++)
	this[i + 1] = makeArray.arguments[i];}
	var months = new makeArray('ENE','FEB','MAR','ABRIL','MAYO',
	'JUN','JUL','AGOST','SEPT','OCT','NOV','DIC');
	var date = new Date();
	var month = date.getMonth() + 1;
	var day = date.getDate();
	var yy = date.getYear();
	var year = (yy < 1000) ? yy + 1900 : yy;
	document.write(  "" + months[month] + "//" + day + "//" + year);
	</script>
	<script type="text/javascript">
	function startTime(){
	today=new Date();
	h=today.getHours();
	m=today.getMinutes();
	s=today.getSeconds();
	m=checkTime(m);
	s=checkTime(s);
	document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
	t=setTimeout('startTime()',500);}
	function checkTime(i)
	{if (i<10) {i="0" + i;}return i;}
	window.onload=function(){startTime();}
</script>
<div id="reloj" style="font-size:20px;"></div>

<td width="100%" align="left">
	<div id="menuWrapper">
	<div class="menu">
	<ul>
	<li><a href="Home.php">INICIO</a>
	<ul>
	<li><a href="ConsultaGeneral.php">Consulta General</a>
    <li><a href="CHistoriaClinica.php">Historia Clinica</a>
    <li><a href="CHistoriaClinica2.php">Historia Clinica 2</a>
	<li><a href="CAntecedentesNoPatologicos.php">Anteced No Patologícos</a>
	<li><a href="CAntecedentesPatologicos.php">Antecedent. Patologícos</a>
	<li><a href="CAntecedentesPatologicos2.php">Antecedent. Patologícos 2</a>
	<li><a href="CAntecedentesDeportivos.php">Antecedentes Deportivos</a>
	<li><a href="CExploracionFisica.php">Exploracion Fisica</a>
	<li><a href="CAptitupFisica.php">Aptitud Fisica</a>
	<li><a href="CAptitupFisica2.php">Aptitud Fisica 2</a>
	</li>
	</ul>
	</li>
	<li><a href="#">HISTORIA CLINICA</a>
	<ul>
	<li><a href="HistoriaClinica.php">Historia Clinica</a></li>
	<li><a href="HistoriaClinica2.php">Historia Clinica 2</a></li>
	</ul>
	</li>
	<li><a href="#">ANTECEDENTES</a>
	<ul>
	<li><a href="AntecedentesNoPatologicos.php">Personales No Patologicos</a></li>
	<li><a href="AntecedentesPatologicos.php">Personales Patologicos</a></li>
	<li><a href="AntecedentesPatologicos2.php">Personales Patologicos 2</a></li>
	<li><a href="AntecedentesDeportivos.php">Personales Deportivos</a></li>
	</ul>
	</li>
	<li><a href="#">EXPLORACIONES</a>
	<ul>
	<li><a href="ExploracionFisica.php">Exploracion Fisica</a></li>
	</ul>
	</li>
	<li><a href="#">PRUEBA DE</a>
	<ul>
	<li><a href="AptitupFisica.php">Aptitud Fisica</a></li>
	<li><a href="AptitupFisica2.php">Aptitud Fisica 2</a></li>
 	</ul>
	<li><a href="Index.php">LOGOUT</a></li>
	<ul>
	</ul>
	</li>
	</ul>
</td>
</table><hr/>

<p><h2>Antecedentes Personales Patologicos 2</h2></p>
<div>
	<button type="submit" name="btnRegistrar" value="Registrar">Registrar</button>
</div><br/>

<table><tr>
<td width="50%" height="500" style="background-color:lightgray;">
<center><p>PATOLOGICOS</p></center>

<input type="text" id="Id_Paciente" name="Id_Paciente" required placeholder=" Id_Paciente"/><br/>
<br/>

<label>LESIONES MUSCULARES:</label><br>
	<label>Contracturas:</label>
	<input type="radio" id="Contracturas" name="Contracturas" value="Si"/>Si
	<input type="radio" id="Contracturas" name="Contracturas" value="No"/>No<br>
	<label>Region Afectada:</label><br>
	<input type="text" name="Regionafect" required placeholder=" Region Afectada"/><br/>
	<br/>

	<label>DESGARRO MUSCULAR:</label><br>
	<input type="radio" id="Desmuscular" name="Desmuscular" value="Si"/>Si
	<input type="radio" id="Desmuscular" name="Desmuscular" value="No"/>No<br>
	<label>Region Afectada:</label><br>
	<input type="text" name="Regionmusc" required placeholder="  RegionDesgarre"/><br/>
	<br/>

<label>RUPTURA MUSCULAR:</label><br>
	<input type="radio" id="RupturaMusc" name="RupturaMusc" value="Si"/>Si
	<input type="radio" id="RupturaMusc" name="RupturaMusc" value="No"/>No<br>
	<label>Region Afectada:</label><br>
	<input type="text" name="RegionRupt" required placeholder=" RegionRuptura"/><br/>
	<br/>

<label>FRACTURAS:</label>
    <input type="radio" id="Fractura" name="Fractura" value="Si"/>Si
	<input type="radio" id="Fractura" name="Fractura" value="No"/>No<br>
    <label>Edad:</label><br>
	<input type="text" id="Edad" name="Edad" required placeholder=" Edad"/><br>
    <label>Area Afectada:</label><br>
	<input type="text" id="AreaAfectada" name="AreaAfectadaRup" required  placeholder=" Area Afectada"/><br>
    <label>Tratamiento:</label><br>
    <input type="text" id="Tratamiento" name="TratamientoRup" required  placeholder=" Tratamiento"/><br/>
	<br/>
	
	<label>LUXACIONES:</label>
    <input type="radio" id="Luxaciones" name="Luxaciones" value="Si"/>Si
    <input type="radio" id="Luxaciones" name="Luxaciones" value="No"/>No<br>
    <label>Edad:</label><br>
    <input type="text" id="LuxacionesvEdad" name="EdadLux" required placeholder=" Edad"/><br>
    <label>Area Afectada:</label><br>
    <input type="text" id="Luxaciones" name="AreaAfectada" required  placeholder=" Area Afectada"/><br>
    <label>Tratamiento:</label><br>
    <input type="text" id="Tratamiento" name="Tratamiento" required  placeholder=" Tratamiento"/><br/>
	<br/>
	
	ESGUINCES:<br>
Hombro:
<select name="cmbHombro">
<option value="0">Selecciones</option>
        <option value="Derecho">Derecho</option>
        <option value="Izquierdo">Izquierdo</option>
        <option value="Ninguno">Ninguno</option>
</select>

Codo:
<select name="cmbCodo">
<option value="0">Selecciones</option>
        <option value="Derecho">Derecho</option>
        <option value="Izquierdo">Izquierdo</option>
        <option value="Ninguno">Ninguno</option>
</select><br/><br/>

Muñeca:
<select name="cmbMuneca">
<option value="0">Selecciones</option>
        <option value="Derecha">Derecha</option>
        <option value="Izquierda">Izquierda</option>
        <option value="Ninguna">Ninguna</option>
</select><br/><br/>


<td width="30%" height="500" align="center" style="background-color:lightgray;">

Dedos Mano:
<select name="cmbDedosMano">
<option value="0">Selecciones</option>
        <option value="Derecha">Derecha</option>
        <option value="Izquierda">Izquierda</option>
        <option value="Ninguna">Ninguna</option>
</select><br>
<input type="text" id="CualDedo" name="CualDedo" required  placeholder=" Cual Dedo?"/>
<br/><br/>


Rodillas:
<select name="cmbRodilla">
<option value="0">Selecciones</option>
        <option value="Derecha">Derecha</option>
        <option value="Izquierda">Izquierda</option>
        <option value="Ninguna">Ninguna</option>
</select>

Tobillo:
<select name="cmbTobillo">
<option value="0">Selecciones</option>
        <option value="Derecho">Derecho</option>
        <option value="Izquierdo">Izquierdo</option>
        <option value="Ninguno">Ninguno</option>
</select>
<br/><br/>


Pie:
<select name="cmbPie">
<option value="0">Selecciones</option>
        <option value="Derecho">Derecho</option>
        <option value="Izquierdo">Izquierdo</option>
        <option value="Ninguno">Ninguno</option>
</select><br>
Tratamiento Pie:<br>
<input type="text" id="TratamientoPie" name="TratamientoPie" required  placeholder="Tratamiento Pie?"/><br>
<br/><br/>


Pie Plano:
<select name="cmbPiePlano">
<option value="0">Selecciones</option>
        <option value="Derecho">Derecho</option>
        <option value="Izquierdo">Izquierdo</option>
        <option value="Ninguno">Ninguno</option>
</select><br>
Tratamiento Pie:<br>
<input type="text" id="TratamientoPiePla" name="TratamientoPiePla" required  placeholder="Tratamiento Pie?"/><br>
Tratamiento desde:<br>
<input type="text" id="TratamientoDesdPie" name="TratamientoDesdPie" required  placeholder="Tratamiento desde Cuando?"/><br>
<br/><br/>

     PROBLEMAS DE COLUMNA VERTIBRAL<br>
    <input type="radio" id="PColumna" name="PColumnavertebral" value="Si"/>Si
    <input type="radio" id="PColumna" name="PColumnavertebral" value="No"/>No<br>
    <label>Especificar:</label><br>
    <input type="text" id="EspeProblema" name="EspecificarProb" required placeholder=" Especificar Problema?"/>
    <br/><br/>
    
    <label>Conmociones Cerebrales:</label><br>
    <input type="radio" id="ConmosionesCereb" name="ConmocionesCereb" value="Si"/>Si
    <input type="radio" id="ConmosionesCereb" name="ConmocionesCereb" value="No"/>No<br>
    <label>Tiempo de Roposo Previo:</label><br>
    <input type="text" id="TiempoReposo" name="TiempoReposoPrCer" required  placeholder=" Tiempo en Reposo Problema?"/>
    <br/><br/>
  
    <label>Tatuajes:</label>
    <input type="radio" id="Tatuajes" name="Tatuajes" value="Si"/>Si
    <input type="radio" id="Tatuajes" name="Tatuajes" value="No"/>No<br>
    <label>Region del Tatuaje:</label><br>
    <input type="text" id="RegionTatuaje" name="RegionTatuaje" required placeholder=" Region Tatuajes"/>
    <br/><br/>

    <label>Datos que agragar sobre alguna otra Enfermedad, Lesiones o tratamiento Actual:</label><br>
    <textarea size="60" name="AlgunaEfermedad"placeholder="Describe yourself here..."></textarea>
    <br/><br/>

</table>
</form>
</fieldset></center>
<?php
require_once "./php/Connexion.php";
if (isset($_POST['btnRegistrar']))
{
	$Contracturas = $_POST['Contracturas'];
	$Regionafect = $_POST['Regionafect'];
	$Desmuscular = $_POST['Desmuscular'];
	$Regionmusc = $_POST['Regionmusc'];
	$RupturaMusc = $_POST['RupturaMusc'];
	$RegionRupt = $_POST['RegionRupt'];
	$Fractura = $_POST['Fractura'];
    $Edad = $_POST['Edad'];
    $AreaAfectadaRup = $_POST['AreaAfectadaRup'];
    $TratamientoRup = $_POST['TratamientoRup'];
    $Luxaciones = $_POST['Luxaciones'];
    $EdadLux = $_POST['EdadLux'];
    $AreaAfectada = $_POST['AreaAfectada'];
    $Tratamiento = $_POST['Tratamiento'];
    $Hombro = $_POST['cmbHombro'];
    $Codo = $_POST['cmbCodo'];
	$Muneca = $_POST['cmbMuneca'];
	$DedosMano = $_POST['cmbDedosMano'];
	$CualDedo = $_POST['CualDedo'];
    $Rodilla = $_POST['cmbRodilla'];
	$Tobillo = $_POST['cmbTobillo'];
	$Pie = $_POST['cmbPie'];
	$TratamientoPie = $_POST['TratamientoPie'];
    $PiePlano = $_POST['cmbPiePlano'];
    $TratamientoPiePla = $_POST['TratamientoPiePla'];
    $TratamientoDesdPie = $_POST['TratamientoDesdPie'];
    $PColumnavertebral = $_POST['PColumnavertebral'];
    $EspecificarProb = $_POST['EspecificarProb'];
    $ConmocionesCereb = $_POST['ConmocionesCereb'];
	$TiempoReposoPrCer = $_POST['TiempoReposoPrCer'];
	$Tatuajes = $_POST['Tatuajes'];
	$RegionTatuaje = $_POST['RegionTatuaje'];
	$AlgunaEfermedad = $_POST['AlgunaEfermedad'];

	$Registrar = "INSERT INTO antecedentespatologicos2 (Contracturas, Regionafect, Desmuscular, 
							  Regionmusc, RupturaMusc, RegionRupt, Fractura, Edad, AreaAfectadaRup, 
							  TratamientoRup, Luxaciones, EdadLux, AreaAfectada, Tratamiento,
							  Hombro, Codo, Muneca, DedosMano, CualDedo, Rodilla, Tobillo, Pie, 
							  TratamientoPie, PiePlano, TratamientoPiePla, TratamientoDesdPie, 
							  PColumnavertebral, EspecificarProb, ConmocionesCereb, 
							  TiempoReposoPrCer, Tatuajes, RegionTatuaje, AlgunaEfermedad) 

					 VALUES ('$_POST[Contracturas]','$_POST[Regionafect]','$_POST[Desmuscular]',
					 		 '$_POST[Regionmusc]','$_POST[RupturaMusc]','$_POST[RegionRupt]',
							 '$_POST[Fractura]','$_POST[Edad]','$_POST[AreaAfectadaRup]',
							 '$_POST[TratamientoRup]','$_POST[Luxaciones]','$_POST[EdadLux]',
							 '$_POST[AreaAfectada]','$_POST[Tratamiento]','$_POST[cmbHombro]',
							 '$_POST[cmbCodo]','$_POST[cmbMuneca]','$_POST[cmbDedosMano]','$_POST[CualDedo]',
							 '$_POST[cmbRodilla]', '$_POST[cmbTobillo]','$_POST[cmbPie]', 
							 '$_POST[TratamientoPie]','$_POST[cmbPiePlano]','$_POST[TratamientoPiePla]',
							 '$_POST[TratamientoDesdPie]','$_POST[PColumnavertebral]',
							 '$_POST[EspecificarProb]','$_POST[ConmocionesCereb]',
							 '$_POST[TiempoReposoPrCer]','$_POST[Tatuajes]',
							 '$_POST[RegionTatuaje]','$_POST[AlgunaEfermedad]')";

$Insertado = $Conexion->query($Registrar) or die ("Error al ingresar los datos".mysqli_error($Conexion));
	if ($Insertado)
	{
		echo "<script>alert('Registro Insertado Correctamente!')</script>";
	}
}
?>
</body>
</html>