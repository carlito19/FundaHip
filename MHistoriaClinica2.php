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
 $Sentecia="SELECT * FROM hclinicamedicodeportivo2 WHERE Id_Registro= '$Id'";
 $resultado= $Conexion->query($Sentecia) or die (mysqli_error($Conexion));
 $fila=$resultado->fetch_assoc();
 ?>

<br/><br/>
<center><fieldset align="center">
<form name="form" action="MHistoriaClinica2.php" method="POST">
<center><legend>Fundahip</legend></center> 
<hr>

<table height="500%">
	<td width="0%">
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

<p><h2>Modificar Historia Clinica Medico-Deportiva 2</h2></p>
<p><h4>Favor de llenar los siguientes datos marcando el recuadro correspondiente y 
       especificar en caso pobible antecedentes heredo-familiares.</h4></p>

<div>
	<button type="submit" name="btnUpdate" value="Update">Actualizar</button>
</div><br/>

<table>
<td width="40%" height="500" align="center" style="background-color:lightgray;">
<input type="hidden" name="Id" value="<?php echo $fila['Id_Registro']; ?>"/>

	<p><h4>Favor de selecionar las enfermedades correspondiente y 
			 especificar en caso pobible antecedentes heredo-familiares.</h4></p>
			 <b>De su Familia o conocido quién con:</b><br/>
	<br/>
Id_Paciente:
<input type="text" id="Id_Paciente" name="Id_Paciente" value="<?php echo $fila['Id_Paciente']; ?>"required placeholder="  Id_Paciente"/>
<br/><br/>

Diabetes:
<input type="text" id="Diabetes" name="Diabetes" value="<?php echo $fila['Diabetes']; ?>"required placeholder="  Diabetes"/>
<br/>
Quién con Diabetes:
<input type="text" id="DiaQuien" name="DiaQuien" value="<?php echo $fila['DiaQuien']; ?>"required placeholder="  Quién"/>
<br/><br/>

Hipertencion (Presion Alta):
<input type="text" id="Hipertencion" name="Hipertencion" value="<?php echo $fila['Hipertencion']; ?>"required placeholder="  Hipertencion"/>
<br/>
Quién con Hipertencion:
<input type="text" id="HipQuien" name="HipQuien" value="<?php echo $fila['HipQuien']; ?>" required placeholder="  Quién"/>
<br/><br/>


Obesidad:
<input type="text" id="Obesidad" name="Obesidad" value="<?php echo $fila['Obesidad']; ?>" required placeholder="  Obesidad"/>
<br/>
Quién con Obesidad:
<input type="text" id="OBsQuien" name="OBsQuien" value="<?php echo $fila['OBsQuien']; ?>" required placeholder="  Quién"/>
<br/><br/>

Infarto:
<input type="text" id="Infarto" name="Infarto" value="<?php echo $fila['Infarto']; ?>" required placeholder="  Infarto"/>
<br/>
Quién con Infarto:
<input type="text" id="InfQuien" name="InfQuien" value="<?php echo $fila['InfQuien']; ?>" required placeholder="  Quién"/>
<br/><br/>

Muerte Subita:
<input type="text" id="MuerteSubita" name="MuerteSubita" value="<?php echo $fila['MuerteSubita']; ?>" required placeholder="  Muerte Subita"/>
<br/>
Quién Muerte Subita:
<input type="text" id="MusQuien" name="MusQuien" value="<?php echo $fila['MusQuien']; ?>" required placeholder="  Quién"/>
<br/><br/>

Epilepsia:
<input type="text" id="Epilepsia" name="Epilepsia" value="<?php echo $fila['Epilepsia']; ?>" required placeholder="  Epilepsia"/>
<br/>
Quién con Epilepsia:
<input type="text" id="EpilQuien" name="EpilQuien" value="<?php echo $fila['EpilQuien']; ?>" required placeholder="  Quién"/>
<br/><br/>

Cancer:
<input type="text" id="Cancer" name="Cancer" value="<?php echo $fila['Cancer']; ?>" required placeholder="  Cancer"/>
<br/>
<label>Quién con Cancer:</label>
<input type="text" id="CancQuien" name="CancQuien" value="<?php echo $fila['CancQuien']; ?>" required placeholder="  Quién"/>
<br/><br/>

Pulmonales:
<input type="text" id="Pulmonales" name="Pulmonales" value="<?php echo $fila['Pulmonales']; ?>" required placeholder="  Pulmonales"/>
<br/>
Quién con Pulmonales:
<input type="text" id="PulQuien" name="PulQuien" value="<?php echo $fila['PulQuien']; ?>" required placeholder="  Quién"/>
<br/><br/>

OTRA/CUAL?:
<input type="text" id="OTRACUAL" name="OTRACUAL" value="<?php echo $fila['OTRACUAL']; ?>" required placeholder="  OTRACUAL"/>
<br/>
Quién:
<input type="text" id="OtraQuien" name="OtraQuien" value="<?php echo $fila['OtraQuien']; ?>" required placeholder="  Quién"/>
<br/><br/>
</table>
</form>
</fieldset></center>

<?php
require_once './php/Connexion.php';
if (isset($_POST['btnUpdate']))
{
	$Id_Paciente = $_POST['Id_Paciente'];
    $Diabetes = $_POST['Diabetes'];
    $DiaQuien = $_POST['DiaQuien'];
    $Hipertencion = $_POST['Hipertencion'];
    $HipQuien = $_POST['HipQuien'];
    $Obesidad = $_POST['Obesidad'];
    $OBsQuien = $_POST['OBsQuien'];
    $Infarto = $_POST['Infarto'];
    $InfQuien = $_POST['InfQuien'];
    $MuerteSubita = $_POST['MuerteSubita'];
    $MusQuien = $_POST['MusQuien'];
    $Epilepsia = $_POST['Epilepsia'];
    $EpilQuien = $_POST['EpilQuien'];
    $Cancer = $_POST['Cancer'];
    $CancQuien = $_POST['CancQuien'];
    $Pulmonales = $_POST['Pulmonales'];
    $PulQuien = $_POST['PulQuien'];
    $OTRACUAL = $_POST['OTRACUAL'];
    $OtraQuien = $_POST['OtraQuien'];

   	$Query = "UPDATE hclinicamedicodeportivo2 SET 
	Id_Paciente = '$Id_Paciente',
    Diabetes = '$Diabetes', 
	DiaQuien = '$DiaQuien', 
	Hipertencion = '$Hipertencion', 
	HipQuien = '$HipQuien',
    Obesidad = '$Obesidad', 
	OBsQuien = '$OBsQuien', 
	Infarto = '$Infarto', 
	InfQuien = '$InfQuien', 
	MuerteSubita = '$MuerteSubita',
    MusQuien = '$MusQuien', 
	Epilepsia = '$Epilepsia', 
	EpilQuien = '$EpilQuien', 
	Cancer = ' $Cancer', 
	CancQuien = '$CancQuien',
    Pulmonales = '$Pulmonales', 
	PulQuien = '$PulQuien', 
	OTRACUAL = '$OTRACUAL', 
	OtraQuien = '$OtraQuien'


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