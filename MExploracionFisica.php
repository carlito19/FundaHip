<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<head>
	<title>Exploración Fisica</title>
<link rel="stylesheet" href="css/Home.css"/>
<script language="javascript" src="js/VLogin.js"></script>
</head>
<body>
<?php
  require_once "./php/Connexion.php"; 
  $Id = $_REQUEST['Id'];
  $Sentecia="SELECT * FROM exploracionfisica WHERE Id_Registro= '$Id'";
  $resultado= $Conexion->query($Sentecia) or die (mysqli_error($Conexion));
  $fila=$resultado->fetch_assoc();
 ?>

<br/><br/>
<center><fieldset align="center">
<form name="form" action="MExploracionFisica.php" method="POST" onsubmit="">
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

<p><h2>Modificar Exploración Fisica</h2></p>
<div>
	<button type="submit" name="btnUpdate" value="Actualizar">Actualizar</button>
</div><br/>

<table><tr>
<td width="70%" height="500" style="background-color:lightgray;">
<input type="hidden" name="Id"  value="<?php echo $fila['Id_Registro']; ?>"/>
<br/>

	<label>Id Paciente:</label>
    <input type="text" id="Id_Paciente" name="Id_Paciente" value="<?php echo $fila['Id_Paciente']; ?>" required placeholder=" Id_Pacienteso"/>
    <br/> <br/>

    <label>Peso:</label>
    <input type="text" id="Peso" name="Peso" value="<?php echo $fila['Peso']; ?>" required placeholder=" Peso"/>KG.</input><br>
    <br/>

    <label>Talla:</label>
    <input type="text" id="Talla" name="Talla" value="<?php echo $fila['Talla']; ?>" required placeholder=" Talla"/>CM.</input><br>
    <br/>

    <label>Frecuencia Cardiaca:</label><br/>
    <input type="text" id="FrecuenciaCardiaca" name="FrecuenciaCardiaca" value="<?php echo $fila['FrecuenciaCardiaca']; ?>"  required placeholder=" Frecuencia Cardiaca"/>LPM.</input><br>
    <br/>

    <label>TA:</label>
    <input type="text" id="TA" name="TA" value="<?php echo $fila['TA']; ?>" required placeholder=" TA"/>MMHG.</input><br>
    <br/>

    <label>OJOS REFLEJOS PUPILARES:</label>
	<br/><br/>

    <label>Vision O.D:</label>
    <input type="text" id="VisionOD" name="VisionOD" value="<?php echo $fila['VisionOD']; ?>" required placeholder=" Vision OD"/><br>
    <label>OJ:</label>
    <input type="text" id="VisionOJ" name="VisionOJ" value="<?php echo $fila['VisionOJ']; ?>" required placeholder=" Vision OJ"/><br>
    <br/>

    <label>DIENTES:</label><br>
    <label>Ausentes:</label>
    <input type="text" id="Ausentes" name="DientesAusentes" value="<?php echo $fila['DientesAusentes']; ?>" required placeholder=" Ausentes"/><br>
    <label>Caries:</label>
    <input type="text" id="Caries" name="DientesCaries" value="<?php echo $fila['DientesCaries']; ?>" required placeholder=" Caries"/><br>
    <br/>
	
    <label>AREA CARDIACAS:</label><br/>
    <label>Sopos:</label>
    <input type="text" id="Sopos" name="SoposCardiaca" value="<?php echo $fila['SoposCardiaca']; ?>" required placeholder=" Sopos"/><br>
    <label>Tipo y Localizacion:</label><br>
    <input type="text" id="TipLocalicacion" name="TipoLocalizacion" value="<?php echo $fila['TipoLocalizacion']; ?>" placeholder=" Tipo y Localicacion"/><br>
    <br/>

    <label>AREA PULMONAR:</label><br>
    <input type="text" id="AreaPulmonar" name="AreaPulmonal" value="<?php echo $fila['AreaPulmonal']; ?>" required placeholder=" Area Pulmonar"/><br>
    <br/>

   <td width="700%" height="500" align="center" style="background-color:lightgray;">
   <label>ABDOMEN:</label><br>
    <input type="text" id="Abdomen" name="Abdomen" value="<?php echo $fila['Abdomen']; ?>" required placeholder=" Abdomen"/><br>
    <br/>

   <label>MIEMBROS INFERIORES:</label><BR/>
    <input type="text" id="MiembroInferiores" name="MiembroInferiores" value="<?php echo $fila['MiembroInferiores']; ?>"  required placeholder=" Miembros Inferiores"/><br>
    <br/>

   <label>OBSERVACIONES:</label><br/>
    <textarea id="Observaciones" name="Observaciones" required placeholder="Describe yourself here..."><?php echo $fila['Observaciones']; ?></textarea>
    <br/><br/>

   <label>ELECTROCARDIOGRAMA:</label><br/>
    <textarea id="ElectroCardiograma" name="ElectroCardiograma" required placeholder="Describe yourself here..."><?php echo $fila['ElectroCardiograma']; ?></textarea>
    <br/><br/>

    <label>ECOCARDIOGRAMA:</label><br/>
    <textarea id="Ecocardiograma" name="Ecocardiograma" required placeholder="Describe yourself here..."><?php echo $fila['Ecocardiograma']; ?></textarea>
    <br/><br/>

    <label>EXPIROMETRIA:</label><br/>
    <textarea id="Expirometria" name="Expirometria" required placeholder="Describe yourself here..."><?php echo $fila['Expirometria']; ?></textarea>
    <br/><br/>

    <label>ANALISIS DE LABORATORIO:</label><br/>
    <textarea id="AnalisisLaboratorio" name="AnalisisLaboratorio" required placeholder="Describe yourself here..."><?php echo $fila['MiembroInferiores']; ?></textarea>
    <br/><br/>
</table>
</form>
</fieldset></center>
<?php
require_once './php/Connexion.php';
if (isset($_POST['btnUpdate']))
{
	$Id_Paciente = $_POST['Id_Paciente'];
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

	///UPDATE
    $Query = "UPDATE exploracionfisica SET
				Id_Paciente = '$Id_Paciente',
	            Peso = '$Peso',
                Talla = '$Talla',
                FrecuenciaCardiaca = '$FrecuenciaCardiaca',
                TA = '$TA',
			    VisionOD = '$VisionOD',
                VisionOJ = '$VisionOJ',
                DientesAusentes = '$DientesAusentes',
                DientesCaries = '$DientesCaries',
				SoposCardiaca = '$SoposCardiaca',
                TipoLocalizacion = '$TipoLocalizacion',
                AreaPulmonal = '$AreaPulmonal',
				Abdomen = '$Abdomen',
                MiembroInferiores = '$MiembroInferiores',
                Observaciones = '$Observaciones',
				ElectroCardiograma = '$ElectroCardiograma',
                Ecocardiograma = '$Ecocardiograma',
                Expirometria = '$Expirometria',
				AnalisisLaboratorio = '$AnalisisLaboratorio'

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