<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<head>
	<title>Modificar Historia Clinica</title>
<link rel="stylesheet" href="css/Home.css"/>
<script language="javascript" src="js/VLogin.js"></script>
</head>
<body>

<?php
  require_once "./php/Connexion.php"; 
  $Id = $_REQUEST['Id'];
  $Sentecia="SELECT * FROM hclinicamedicodeportivo WHERE Id_Registro= '$Id'";
  $resultado= $Conexion->query($Sentecia) or die (mysqli_error($Conexion));
  $fila=$resultado->fetch_assoc();
 ?>

<br/><br/>
<center><fieldset align="center">
<form name="form" action="MHistoriaClinica.php" method="POST">
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
	<li><a href="CAntecedentesPatologicos.php">Anteced Patologícos</a>
	<li><a href="CAntecedentesPatologicos2.php">Anteced Patologícos 2</a>
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
	</li>
	</ul>
</td>

</table><hr/>
<p><h2>Modificar Historia Clinica Medico-Deportiva</h2></p>

<div>
      <button type="submit" name="btnUpdate" value="Update">Actualizar</button> 
</div><br/>
<div>

</div><br/>
<table><tr>
<td width="30%" height="500" style="background-color:lightgray;">
	<input type="hidden" name="Id"  value="<?php echo $fila['Id_Registro']; ?>"/>
	<br>
	<label>Id_Paciente:</label><br>
	<input type="text" id="Id_Paciente" name="Id_Paciente" value="<?php echo $fila['Id_Paciente']; ?>" required placeholder="DIgite ID del Paciente" /><br/>
	<br/>

	<label>Fecha:</label><br>
	<input type="date" id="Fecha" name="Fecha" value="<?php echo $fila['Fecha']; ?>" required /><br/>
	<br/>
	
	<label>Categoria:</label><br>
	<input type="text" id="Categoria" name="Categoria" value="<?php echo $fila['Categoria']; ?>" required placeholder=" Categoria del Deporte" /><br/>
	<br/>
	
	<label>Nombres:</label><br>
	<input type="text" id="Nombres" name="Nombres"  value="<?php echo $fila['Nombres']; ?>" required placeholder=" Nombres"/><br/>
	<br/>

	<label>Apellido Paterno:</label><br>
	<input type="text" id="ApellidoP" name="ApellidoP" value="<?php echo $fila['ApellidoP']; ?>" required placeholder=" Apellido Paterno" /><br/>
	<br/>
	
	<label>Apellido Materno:</label><br>
	<input type="text" id="ApellidoM" name="ApellidoM" value="<?php echo $fila['ApellidoM']; ?>" required placeholder=" Apellido Materno" /><br/>
	<br/>
	<label>Apodo:</label><br>
	<input type="text" id="Apodo" name="Apodo" required value="<?php echo $fila['Apodo']; ?>" placeholder=" Apodo" /><br/>
	<br/>
	<label>Edad:</label><br>
	<input type="text" id="Edad" name="Edad" value="<?php echo $fila['Edad']; ?>" required placeholder=" Edad" /><br/>
	<br/>
	<label>Nombre del Padre:</label><br>
	<input type="text" id="NomPadre" name="NomPadre"value="<?php echo $fila['NomPadre']; ?>" required placeholder=" Nombre del Padre" /><br/>
	<br/>
	<label>Nombre de la Madre:</label><br>
	<input type="text" id="NomMadre" name="NomMadre" value="<?php echo $fila['NomMadre']; ?>" required placeholder=" Nombre de la Madre" /><br/>
	<br/>

	<td width="30%" height="500" align="center" style="background-color:lightgray;">

	  <label>Telefono:</label><br>
		<input type="text" id="Telefono" name="Telefono" value="<?php echo $fila['Telefono']; ?>" required placeholder=" Numero de Telefono" /><br/>
		<br/>

		<label>Celular:</label><br>
		<input type="text" id="Celular" name="Celular" value="<?php echo $fila['Celular']; ?>" required placeholder=" Numero de Celular" /><br/>
		<br/>

		<label>Cel. de Padre:</label><br>
		<input type="text" id="CellPadre" name="CellPadre" value="<?php echo $fila['CellPadre']; ?>"  required placeholder=" Celular del Padre" /><br/>
		<br/>

		<label>Cel. de la Madre:</label><br>
		<input type="text" id="CellMadre" name="CellMadre" value="<?php echo $fila['CellMadre']; ?>" required placeholder=" Celular de la Madre" /><br/>
		<br/>

        <label>Estado Civil:</label><br>
        <input type="radio" name="EstadoCivil" <?php if($fila["EstadoCivil"]==='Casado') echo "checked"; ?> value="Casado"/> Casado (@)
        <input type="radio" name="EstadoCivil" <?php if($fila["EstadoCivil"]==='Soltero') echo "checked"; ?> value="Soltero"/>Soltero (@)<br/>
        
		<br/><hr>
		<label>Hijos:</label><br>
		<input type="radio" id="Hijos" name="Hijos" <?php if($fila['Hijos']==='Si') echo "checked"; ?> value="Si" />Si
		<input type="radio" id="Hijos" name="Hijos" <?php if($fila['Hijos']==='No') echo "checked"; ?> value="No" />No<br>
		<input type="text" id="CantHijos" name="CantHijos"  value="<?php echo $fila['CantHijos']; ?>" required  placeholder="Cantidad de Hijos"/><br/>
		<br/>

	<label>Trabaja:</label><br>
		<input type="radio" id="Trabaja" name="Trabaja" <?php if($fila['Trabaja']==='Si') echo "checked"; ?> value="Si" />Si
		<input type="radio" id="Trabaja" name="Trabaja" <?php if($fila['Trabaja']==='No') echo "checked"; ?> value="No" />No<br>
		<input type="text" id="LugarTrabajo" name="LugarTrabajo" value="<?php echo $fila['LugarTrabajo']; ?>" required  placeholder="Donde trabaja" /><br/>
		<br/>

		<label>Estudia:</label><br>
		<input type="radio" id="Estudia" name="Estudia" <?php if($fila['Estudia']==='Si') echo "checked"; ?> value="Si" />Si
		<input type="radio" id="Estudia" name="Estudia"  <?php if($fila['Estudia']==='No') echo "checked"; ?> value="No" />No<br>
		<input type="text" id="NivelEstudio" name="NivelEstudio" value="<?php echo $fila['NivelEstudio']; ?>" required  placeholder="Grado" /><br/>
</table>
</form>
</fieldset></center>

<?php
//ACTUALIZAR DATOS
require_once "./php/Connexion.php";
if (isset($_POST['btnUpdate']))
{
$Id_Paciente = $_POST['Id_Paciente'];
$Fecha = $_POST['Fecha'];
$Categoria = $_POST['Categoria'];
$Nombres = $_POST['Nombres'];
$ApellidoP = $_POST['ApellidoP'];
$ApellidoM = $_POST['ApellidoM'];
$Apodo = $_POST['Apodo'];
$Edad = $_POST['Edad'];
$NomPadre = $_POST['NomPadre'];
$NomMadre = $_POST['NomMadre'];
$Telefono = $_POST['Telefono'];
$Celular = $_POST['Celular'];
$CellPadre = $_POST['CellPadre'];
$CellMadre = $_POST['CellMadre'];
$EstadoCivil = $_POST['EstadoCivil'];
$Hijos = $_POST['Hijos'];
$CantHijos = $_POST['CantHijos'];
$Trabaja = $_POST['Trabaja'];
$LugarTrabajo = $_POST['LugarTrabajo'];
$Estudia = $_POST['Estudia'];
$NivelEstudio = $_POST['NivelEstudio'];

///UPDATE
$Query = "UPDATE hclinicamedicodeportivo SET 
 Id_Paciente ='$Id_Paciente',
 Fecha = '$Fecha',
 Categoria = '$Categoria',
 Nombres = '$Nombres',
 ApellidoP = '$ApellidoP',
 ApellidoM = '$ApellidoM',
 Apodo = '$Apodo',
 Edad = '$Edad',
 NomPadre = '$NomPadre',
 NomMadre = '$NomMadre',
 Telefono = '$Telefono',
 Celular = '$Celular',
 CellPadre = '$CellPadre',
 CellMadre = '$CellMadre',
 EstadoCivil = '$EstadoCivil',
 Hijos = '$Hijos',
 CantHijos = '$CantHijos',
 Trabaja = '$Trabaja',
 LugarTrabajo = '$LugarTrabajo',
 Estudia = '$Estudia',
 NivelEstudio = '$NivelEstudio'

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
