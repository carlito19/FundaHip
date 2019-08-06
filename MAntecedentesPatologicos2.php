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
<?php
  require_once "./php/Connexion.php"; 
  $Id = $_REQUEST['Id'];
  $Sentecia="SELECT * FROM antecedentespatologicos2 WHERE Id_Registro= '$Id'";
  $resultado= $Conexion->query($Sentecia) or die (mysqli_error($Conexion));
  $fila=$resultado->fetch_assoc();
 ?>
<br/><br/>
<center><fieldset align="center">
<form name="form" action="MAntecedentesPatologicos2.php" method="POST" onsubmit="">
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

<p><h2>Modificar Antecedentes Personales Patologicos 2</h2></p>
<div>
	<button type="submit" name="btnUpdate" value="Actualizar">Actualizar</button>
</div><br/>

<table><tr>
<td width="50%" height="500" style="background-color:lightgray;">
<input type="hidden" name="Id"  value="<?php echo $fila['Id_Registro']; ?>"/>
<center><p>PATOLOGICOS</p></center>

<label>LESIONES MUSCULARES:</label><br>

	<input type="text" id="Id_Paciente"name="Id_Paciente" value="<?php echo $fila['Id_Paciente']; ?>"required placeholder=" Id_Paciente"/><br/>
	<br/>

	<label>Contracturas:</label>
	<input type="radio" id="Contracturas" name="Contracturas" <?php if($fila['Contracturas']=='Si') echo "checked"; ?> value="Si" />Si
	<input type="radio" id="Contracturas" name="Contracturas" <?php if($fila['Contracturas']=='No') echo "checked"; ?> value="No" />No<br>
	<label>Region Afectada:</label><br>
	<input type="text" id="Regionafect"name="Regionafect" value="<?php echo $fila['Regionafect']; ?>"required placeholder=" Region Afectada"/><br/>
	<br/>

	<label>DESGARRO MUSCULAR:</label><br>
	<input type="radio" id="Desmuscular" name="Desmuscular" <?php if($fila['Desmuscular']=='Si') echo "checked"; ?> value="Si" />Si
	<input type="radio" id="Desmuscular" name="Desmuscular" <?php if($fila['Desmuscular']=='No') echo "checked"; ?> value="No" />No<br>
	<label>Region Afectada:</label><br>
	<input type="text" id="Regionmusc" name="Regionmusc" value="<?php echo $fila['Regionmusc']; ?>" required placeholder="  RegionDesgarre"/><br/>
	<br/>

<label>RUPTURA MUSCULAR:</label><br>
	<input type="radio" id="RupturaMusc" name="RupturaMusc" <?php if($fila['RupturaMusc']=='Si') echo "checked"; ?> value="Si" />Si
	<input type="radio" id="RupturaMusc" name="RupturaMusc" <?php if($fila['RupturaMusc']=='No') echo "checked"; ?> value="No" />No<br>
	<label>Region Afectada:</label><br>
	<input type="text" id="RegionRupt" name="RegionRupt" value="<?php echo $fila['RegionRupt']; ?>" required placeholder=" RegionRuptura"/><br/>
	<br/>

<label>FRACTURAS:</label>
    <input type="radio" id="Fractura" name="Fractura" <?php if($fila['Fractura']==='Si') echo "checked"; ?> value="Si"/>Si
	<input type="radio" id="Fractura" name="Fractura" <?php if($fila['Fractura']==='No') echo "checked"; ?> value="No"/>No<br>
    <label>Edad:</label><br>
	<input type="text" id="Edad" name="Edad" value="<?php echo $fila['Edad']; ?>"  required placeholder=" Edad"/><br>
    <label>Area Afectada:</label><br>
	<input type="text" id="AreaAfectada" name="AreaAfectadaRup" value="<?php echo $fila['AreaAfectadaRup']; ?>" required  placeholder=" Area Afectada"/><br>
    <label>Tratamiento:</label><br>
    <input type="text" id="Tratamiento" name="TratamientoRup" value="<?php echo $fila['TratamientoRup']; ?>" required  placeholder=" Tratamiento"/><br/>
	<br/>
	
	<label>LUXACIONES:</label>
    <input type="radio" id="Luxaciones" name="Luxaciones" <?php if($fila['Luxaciones']==='Si') echo "checked"; ?> value="Si"/>Si
    <input type="radio" id="Luxaciones" name="Luxaciones" <?php if($fila['Luxaciones']==='No') echo "checked"; ?> value="No"/>No<br>
    <label>Edad:</label><br>
    <input type="text" id="LuxacionesvEdad" name="EdadLux"  value="<?php echo $fila['EdadLux']; ?>" required placeholder=" Edad"/><br>
    <label>Area Afectada:</label><br>
    <input type="text" id="Luxaciones" name="AreaAfectada"  value="<?php echo $fila['AreaAfectada']; ?>" required  placeholder=" Area Afectada"/><br>
    <label>Tratamiento:</label><br>
    <input type="text" id="Tratamiento" name="Tratamiento"  value="<?php echo $fila['Tratamiento']; ?>" required  placeholder=" Tratamiento"/><br/>
	<br/>
	
	ESGUINCES:<br>
<label>Hombro:</label><br>
<input type="text" id="Hombro" name="Hombro" value="<?php echo $fila['Hombro']; ?>" required  placeholder=" Hombro"/><br/>
<br/>

<label>Codo:</label><br>
<input type="text" id="Codo" name="Codo" value="<?php echo $fila['Codo']; ?>" required  placeholder=" Codo"/><br/>
<br/>

<label>Muneca:</label><br>
<input type="text" id="Muneca" name="Muneca" value="<?php echo $fila['Muneca']; ?>" required  placeholder=" Muñeca"/><br/>
<br/>


<td width="30%" height="500" align="center" style="background-color:lightgray;">

<label>DedosMano:</label><br>
<input type="text" id="DedosMano" name="DedosMano" value="<?php echo $fila['DedosMano']; ?>" required  placeholder=" Dedos de la Mano"/><br/>
<br/>
<input type="text" id="CualDedo" name="CualDedo" value="<?php echo $fila['CualDedo']; ?>" required  placeholder=" Cual Dedo?"/>
<br/><br/>

<label>Rodillas:</label><br>
<input type="text" id="Rodilla" name="Rodilla" value="<?php echo $fila['Rodilla']; ?>" required  placeholder=" Rodillas"/><br/>
<br/>

<label>Tobillo:</label><br>
<input type="text" id="Tobillo" name="Tobillo" value="<?php echo $fila['Tobillo']; ?>" required  placeholder=" Tobillo"/><br/>
<br/>

<label>Pie:</label><br>
<input type="text" id="Pie" name="Pie" value="<?php echo $fila['Pie']; ?>" required  placeholder=" Pie"/><br/>
<br/>

Tratamiento Pie:<br>
<input type="text" id="TratamientoPie" name="TratamientoPie" value="<?php echo $fila['TratamientoPie']; ?>"  required  placeholder="Tratamiento Pie?"/><br>
<br/><br/>

<label>Pie:</label><br>
<input type="text" id="PiePlano" name="PiePlano" value="<?php echo $fila['PiePlano']; ?>" required  placeholder=" Pie"/><br/>
<br/>

Tratamiento Pie:<br>
<input type="text" id="TratamientoPiePla" name="TratamientoPiePla" value="<?php echo $fila['TratamientoPiePla']; ?>" required  placeholder="Tratamiento Pie?"/><br>
Tratamiento desde:<br>
<input type="text" id="TratamientoDesdPie" name="TratamientoDesdPie" value="<?php echo $fila['TratamientoDesdPie']; ?>" required  placeholder="Tratamiento desde Cuando?"/><br>
<br/><br/>

     PROBLEMAS DE COLUMNA VERTIBRAL<br>
    <input type="radio" id="PColumna" name="PColumnavertebral" <?php if($fila['PColumnavertebral']==='Si') echo "checked"; ?> value="Si"/>Si
    <input type="radio" id="PColumna" name="PColumnavertebral" <?php if($fila['PColumnavertebral']==='No') echo "checked"; ?> value="No"/>No<br>
    <label>Especificar:</label><br>
    <input type="text" id="EspeProblema" name="EspecificarProb" value="<?php echo $fila['EspecificarProb']; ?>" required placeholder=" Especificar Problema?"/>
    <br/><br/>
    
    <label>Conmociones Cerebrales:</label><br>
    <input type="radio" id="ConmosionesCereb" name="ConmocionesCereb" <?php if($fila['ConmocionesCereb']==='Si') echo "checked"; ?> value="Si"/>Si
    <input type="radio" id="ConmosionesCereb" name="ConmocionesCereb" <?php if($fila['ConmocionesCereb']==='No') echo "checked"; ?> value="No"/>No<br>
    <label>Tiempo de Roposo Previo:</label><br>
    <input type="text" id="TiempoReposo" name="TiempoReposoPrCer" value="<?php echo $fila['TiempoReposoPrCer']; ?>" required  placeholder=" Tiempo en Reposo Problema?"/>
    <br/><br/>
  
    <label>Tatuajes:</label>
    <input type="radio" id="Tatuajes" name="Tatuajes" <?php if($fila['Tatuajes']==='Si') echo "checked"; ?> value="Si"/>Si
    <input type="radio" id="Tatuajes" name="Tatuajes" <?php if($fila['Tatuajes']=='No') echo "checked"; ?> value="No"/>No<br>
    <label>Region del Tatuaje:</label><br>
    <input type="text" id="RegionTatuaje" name="RegionTatuaje" value="<?php echo $fila['RegionTatuaje']; ?>" required placeholder=" Region Tatuajes"/>
    <br/><br/>

    <label>Datos que agragar sobre alguna otra Enfermedad, Lesiones o tratamiento Actual:</label><br>
    <textarea size="100" name="AlgunaEfermedad" placeholder="Describe yourself here..."><?php echo $fila['AlgunaEfermedad']; ?></textarea>
    <br/><br/>

</table>
</form>
</fieldset></center>
<?php
require_once "./php/Connexion.php";
if (isset($_POST['btnUpdate']))
{
	$Id_Paciente = $_POST['Id_Paciente'];
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
    $Hombro = $_POST['Hombro'];
    $Codo = $_POST['Codo'];
	$Muneca = $_POST['Muneca'];
	$DedosMano = $_POST['DedosMano'];
	$CualDedo = $_POST['CualDedo'];
    $Rodilla = $_POST['Rodilla'];
	$Tobillo = $_POST['Tobillo'];
	$Pie = $_POST['Pie'];
	$TratamientoPie = $_POST['TratamientoPie'];
    $PiePlano = $_POST['PiePlano'];
    $TratamientoPiePla = $_POST['TratamientoPiePla'];
    $TratamientoDesdPie = $_POST['TratamientoDesdPie'];
    $PColumnavertebral = $_POST['PColumnavertebral'];
    $EspecificarProb = $_POST['EspecificarProb'];
    $ConmocionesCereb = $_POST['ConmocionesCereb'];
	$TiempoReposoPrCer = $_POST['TiempoReposoPrCer'];
	$Tatuajes = $_POST['Tatuajes'];
	$RegionTatuaje = $_POST['RegionTatuaje'];
	$AlgunaEfermedad = $_POST['AlgunaEfermedad'];

    ///UPDATE Datos
    $Query = "UPDATE antecedentespatologicos2 SET
	Id_Paciente = '$Id_Paciente',
    Contracturas = '$Contracturas',
    Regionafect = '$Regionafect',
    Desmuscular = '$Desmuscular',
	Regionmusc = '$Regionmusc',
    RupturaMusc = '$RupturaMusc',
    RegionRupt = '$RegionRupt',
    Fractura = '$Fractura',
    Edad = '$Edad',
    AreaAfectadaRup = '$AreaAfectadaRup',
	TratamientoRup = '$TratamientoRup',
    Luxaciones = '$Luxaciones',
    EdadLux = '$EdadLux',
    AreaAfectada = '$AreaAfectada',
    Tratamiento = '$Tratamiento',
	Hombro = '$Hombro',
    Codo = '$Codo',
    Muneca = '$Muneca',
    DedosMano = '$DedosMano',
    CualDedo = '$CualDedo',
    Rodilla = '$Rodilla',
    Tobillo = '$Tobillo',
    Pie = '$Pie',
	TratamientoPie = '$TratamientoPie',
    PiePlano= '$PiePlano',
    TratamientoPiePla = '$TratamientoPiePla',
    TratamientoDesdPie = '$TratamientoDesdPie',
	PColumnavertebral = '$PColumnavertebral',
    EspecificarProb = '$EspecificarProb',
    ConmocionesCereb = '$ConmocionesCereb',
	TiempoReposoPrCer = '$TiempoReposoPrCer',
    Tatuajes = '$Tatuajes',
    RegionTatuaje = '$RegionTatuaje',
    AlgunaEfermedad = '$AlgunaEfermedad'

    WHERE Id_Registro = '$Id' ";
$Ejecutar = $Conexion->query($Query) or die ("Error al Actualizar los datos ".mysqli_error($Conexion));
if ($Ejecutar)
{
    echo "<script>alert('Registro Actualizados Correctamente!')</script>";
}
}
?>
</body>
</html>