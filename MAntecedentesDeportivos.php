<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<head>
	<title>Antecedentes Deportivos</title>
<link rel="stylesheet" href="css/Home.css"/>
<script language="javascript" src="js/VLogin.js"></script>
</head>
<body>

<?php
  require_once "./php/Connexion.php"; 
  $Id = $_REQUEST['Id'];
  $Sentecia="SELECT * FROM antecedentesdeportivos WHERE Id_Registro= '$Id'";
  $resultado= $Conexion->query($Sentecia) or die (mysqli_error($Conexion));
  $fila=$resultado->fetch_assoc();
 ?>

<br/><br/>
<center><fieldset align="center">
<form name="form" action="MAntecedentesDeportivos.php" method="POST" onsubmit="">
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

<?php
require_once "./php/Connexion.php";
?>
<p><h2> Modificar Antecedentes Deportivos</h2></p>
<div>
	<button type="submit" name="btnUpdate" value="Update">Actualizar</button>
</div><br/>
<table><tr>
<td width="50%" height="500" style="background-color:lightgray;">
<input type="hidden" name="Id"  value="<?php echo $fila['Id_Registro']; ?>"/>
	<label>DEPORTES PRACTICADOS:</label>
	<br/><br/>

	<input type="text" id="Id_Paciente" name="Id_Paciente" value="<?php echo $fila['Id_Paciente']; ?>" required placeholder=" Id_Paciente?"/>
    <br/><br/>

	<label>Futbol Americano:</label>
	<input type="radio" id="FutbolAmericano" name="FutbolAmericano" <?php if($fila['FutbolAmericano']==='Si') echo "checked"; ?> value="Si" />Si
	<input type="radio" id="FutbolAmericano" name="FutbolAmericano" <?php if($fila['FutbolAmericano']==='No') echo "checked"; ?> value="No" />No
	<br/><br/>

	<label>Basketbol:</label>
	<input type="radio" name="Basketbol" <?php if($fila['Basketbol']==='Si') echo "checked"; ?> value="Si" />Si
	<input type="radio" name="Basketbol" <?php if($fila['Basketbol']==='No') echo "checked"; ?> value="No" />No
	<br/><br/>

	<label>Futbol:</label>
	<input type="radio" name="Football" <?php if($fila['Football']==='Si') echo "checked"; ?> value="Si" />Si
	<input type="radio" name="Football" <?php if($fila['Football']==='No') echo "checked"; ?> value="No" />No
	<br/><br/>

	<label>Voleibol:</label>
	<input type="radio" name="Voleibol" <?php if($fila['Voleibol']==='Si') echo "checked"; ?> value="Si" />Si
	<input type="radio" name="Voleibol" <?php if($fila['Voleibol']==='No') echo "checked"; ?> value="No" />No
	<br/><br/>

	<label>Tae Kuwon Do:</label>
	<input type="radio" name="TaeKuwonDo" <?php if($fila['TaeKuwonDo']==='Si') echo "checked"; ?> value="Si" />Si
	<input type="radio" name="TaeKuwonDo" <?php if($fila['TaeKuwonDo']==='No') echo "checked"; ?> value="No" />No
	<br/><br/>

	<label>Karate:</label>
	<input type="radio" name="Karate" <?php if($fila['Karate']==='Si') echo "checked"; ?> value="Si" />Si
	<input type="radio" name="Karate" <?php if($fila['Karate']==='No') echo "checked"; ?> value="No" />No
	<br/><br/>

	<label>Natacion:</label>
	<input type="radio" name="Natacion" <?php if($fila['Natacion']='Si') echo "checked"; ?> value="Si" />Si
	<input type="radio" name="Natacion" <?php if($fila['Natacion']='No') echo "checked"; ?> value="No" />No
	<br/><br/>

	<label>Atletismo:</label>
	<input type="radio" name="Atletismo" <?php if($fila['Atletismo']='Si') echo "checked"; ?> value="Si" />Si
	<input type="radio" name="Atletismo" <?php if($fila['Atletismo']='No') echo "checked"; ?> value="No" />No
	<br/><br/>

    <label>Otro:</label>
	<input type="text" name="OtroDeporte" value="<?php echo $fila['OtroDeporte']; ?>"  required placeholder=" Otro Deporte"/><br>
    <br/>

    <label for="">Edad de inicio en el Deporte</label><br>
	<input type="text" name="EdadInicioDeportes" value="<?php echo $fila['EdadInicioDeportes']; ?>"  required placeholder=" Edad Deporte"/><br>
    <br/>

	<label>Suspendido por mas de 6 meses:</label><br>
    <input type="radio" name="Suspendido" <?php if($fila['Suspendido']='Si') echo "checked"; ?> value="Si" />Si
    <input type="radio" name="Suspendido" <?php if($fila['Suspendido']='No') echo "checked"; ?> value="No" />No<br>
    <input type="text" name="MotivoSuspendido" value="<?php echo $fila['MotivoSuspendido']; ?>" required placeholder=" Motivo?"/>
    <br/><br/>

    <label 
   <td width="100%" height="500" align="center" style="background-color:lightgray;">

</table>
</form>
</fieldset></center>

<?php
require_once './php/Connexion.php';
if (isset($_POST['btnUpdate']))
{
	$Id_Paciente = $_POST['Id_Paciente'];
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

///UPDATE
$Query = "UPDATE antecedentesdeportivos SET
				 Id_Paciente = '$Id_Paciente',
				 FutbolAmericano = '$FutbolAmericano',
				 Basketbol ='$Basketbol',
				 Football = '$Football',
				 Voleibol = '$Voleibol',
				 TaeKuwonDo ='$TaeKuwonDo',
				 Karate = '$Karate',
				 Natacion = '$Natacion',
				 Atletismo = '$Atletismo',
				 OtroDeporte = '$OtroDeporte',
				 EdadInicioDeportes = '$EdadInicioDeportes',
				 Suspendido ='$Suspendido',
				 MotivoSuspendido ='$MotivoSuspendido'

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