<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<head>
	<title>No Patologícos</title>
<link rel="stylesheet" href="css/Home.css"/>
<script language="javascript" src=""></script>
</head>
<body>
<?php
  require_once "./php/Connexion.php"; 
  $Id = $_REQUEST['Id'];
  $Sentecia="SELECT * FROM antecedentesnopatologicos WHERE Id_Registro= '$Id'";
  $resultado= $Conexion->query($Sentecia) or die (mysqli_error($Conexion));
  $fila=$resultado->fetch_assoc();
 ?>

<br/><br/>
<center><fieldset align="center">
<form name="form" action="MAntecedentesNoPatologicos.php" method="POST">
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

<p><h2>Modificar Antecedentes Penales No Patologicos</h2></p>
<div>
	<button type="submit" name="btnUpdate" value="Update">Actualizar</button>
</div><br/>

<table><tr>
	<td width="100%" height="100" align="center" style="background-color:lightgray;">
	<input type="hidden" name="Id" value="<?php echo $fila['Id_Registro']; ?>"/>
<br/>
	<label>VACUNAS:</label>
	<br/><BR/>
	
	Id Paciente
	<input type="text" id="Id_Paciente" name="Id_Paciente" value="<?php echo $fila['Id_Paciente']; ?>" placeholder=" Id_Paciente"/><br/>
	<br/><br/>

	<label>Esquema Completo:</label><br>
	<input type="radio" id="EsquemaCompleto" name="EsquemaCompleto" <?php if($fila['EsquemaCompleto']==='Si') echo "checked"; ?> value="Si" />Si
	<input type="radio" id="EsquemaCompleto" name="EsquemaCompleto" <?php if($fila['EsquemaCompleto']==='No') echo "checked"; ?> value="No"/>No<br>
	<br/>
	<label>Faltan:</label><br>
	<input type="radio" id="Faltan" name="Faltan" <?php if($fila['Faltan']==='Si') echo "checked"; ?> value="Si" />Si
	<input type="radio" id="Faltan" name="Faltan" <?php if($fila['Faltan']==='No') echo "checked"; ?> value="No"/>No<br>
	<label>Cual Falta:</label><br>
	<input type="text" id="CualFalta" name="CualFalta" value="<?php echo $fila['CualFalta']; ?>" required placeholder=" Cual Falta"/><br/>
	<br/>
	<label>Tiene Mascotas:</label><br>
	<input type="radio" id="Mascotas" name="Mascotas" <?php if($fila['Mascotas']==='Si') echo "checked"; ?> value="Si" />Si
	<input type="radio" id="Mascotas" name="Mascotas" <?php if($fila['Mascotas']==='No') echo "checked"; ?> value="No"/>No<br>
	<input type="text" id="TipoMascota" name="TipoMascota" value="<?php echo $fila['TIpoMascota']; ?>" placeholder=" Tipo de Mascota"/><br/>
	<br/>
</table>
</form>
</fieldset></center>
<?php

///ACTUALIZAR DATOS
require_once './php/Conexion.php';
if(isset($_POST['btnUpdate']))
{
	$Id_Paciente = $_POST['Id_Paciente'];
	$EsquemaCompleto = $_POST['EsquemaCompleto'];
    $Faltan = $_POST['Faltan'];
	$CualFalta = $_POST['CualFalta'];
	$Mascotas = $_POST['Mascotas'];
	$TIpoMascota = $_POST['TipoMascota'];

///UPDATE
$Query = "UPDATE antecedentesnopatologicos SET
				Id_Paciente = '$Id_Paciente',
				EsquemaCompleto = '$EsquemaCompleto',
				Faltan = '$Faltan',
				CualFalta = '$CualFalta',
				Mascotas = '$Mascotas',
				TipoMascota = '$TIpoMascota'

				WHERE Id_Registro = '$Id' ";

$Ejecutar = $Conexion->query($Query) or die ("Error al Actualizar los datos ".mysqli_error($Conexion));
if ($Ejecutar)
{
	echo "<script>alert('Registro Actualizados Correctamente!')</script>";
	//header("Location: CAntecedentesNoPatologicos.php");
}
}
?>
</body>
</html>;