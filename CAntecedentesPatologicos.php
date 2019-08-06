<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<head>
	<title>Antecedentes Patologicos</title>
<link rel="stylesheet" href="css/Home.css"/>
<script language="javascript" src="js/VLogin.js"></script>
</head>
<body>
	<br/><br/>
<center><fieldset align="center">
<form name="form" action="CAntecedentesPatologicos.php" method="POST" onsubmit="">
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
</table>

<legend>ANTECEDENTES PATOLOGICOS</legend><br/>
<div>
	<button type="submit" name="btnDelete" value="Eliminar">Eliminar</button>
</div><br/>
<table border width="40%">

<tr>
    <th bgcolor="black"><font color="white">Id</font></th> <th bgcolor="black"><font color="white">Id Paciente</font></th>
		<th bgcolor="black"><font color="white">Alergico</font></th> <th bgcolor="black"><font color="white">Alergico A?</font></th>
		<th bgcolor="black"><font color="white">Sarampion</font></th> <th bgcolor="black"><font color="white">Rubiola</font></th>
		<th bgcolor="black"><font color="white">Varicela</font></th> <th bgcolor="black"><font color="white">Escarlatina</font></th>
		<th bgcolor="black"><font color="white">Hepatitis</font></th> <th bgcolor="black"><font color="white">Parotiditis</font></th>
		<th bgcolor="black"><font color="white">Otra Enfermedad</font></th> <th bgcolor="black"><font color="white">Cirugia</font></th> 
		<th bgcolor="black"><font color="white">Cirugia zona</font></th> <th bgcolor="black"><font color="white">Problema visual</font></th>
		<th bgcolor="black"><font color="white">Probblema Visual Zona</font></th> <th bgcolor="black"><font color="white">Problema Oido</font></th>
		<th bgcolor="black"><font color="white">Problema Oido zona</font></th> <th bgcolor="black"><font color="white">Reflujo</font></th> 
		<th bgcolor="black"><font color="white">Gastritis</font></th> <th bgcolor="black"><font color="white">Colitis</font></th>
		<th bgcolor="black"><font color="white">Diarrea</font></th> 
	
</tr>

      <?php
        include "./php/Connexion.php";
        $sentecia="SELECT * FROM antecedentespatologicos";
        $resultado= $Conexion->query($sentecia) or die (mysqli_error($Conexion));
        while($fila=$resultado->fetch_assoc())
				{?>
					<tr>
						<td><?php echo $fila['Id_Registro']; ?></td>
						<td><?php echo $fila['Id_Paciente']; ?></td>
						<td><?php echo $fila['Alergico']; ?></td>
						<td><?php echo $fila['AlergicoA']; ?></td>
						<td><?php echo $fila['Sarampion']; ?></td>
						<td><?php echo $fila['Rubiola']; ?></td>
						<td><?php echo $fila['Varicela']; ?></td>
						<td><?php echo $fila['Escarlatina']; ?></td>
						<td><?php echo $fila['Hepatitis']; ?></td>
						<td><?php echo $fila['Parotiditis']; ?></td>
						<td><?php echo $fila['OtraEnferm']; ?></td>
						<td><?php echo $fila['Cirugia']; ?></td>
						<td><?php echo $fila['CirugiaZon']; ?></td>
						<td><?php echo $fila['Probvisual']; ?></td>
						<td><?php echo $fila['Probvisualzon']; ?></td>
						<td><?php echo $fila['ProbOido']; ?></td>
						<td><?php echo $fila['ProbOidozon']; ?></td>
						<td><?php echo $fila['Reflujo']; ?></td>
						<td><?php echo $fila['Gastritis']; ?></td>
						<td><?php echo $fila['Colitis']; ?></td>
						<td><?php echo $fila['Diarrea']; ?></td>
						
					</tr>
					<?php
        }
      ?>
<tr>
  <th bgcolor="black"><font color="white">Estreñimiento</font></th>
    <th bgcolor="black"><font color="white">Otra Enfermedad Gastro</font></th><th bgcolor="black"><font color="white">Desmayos</font></th>
    <th bgcolor="black"><font color="white">Soplos</font></th><th bgcolor="black"><font color="white">Taquicardias</font></th>
    <th bgcolor="black"><font color="white">Hipertension</font></th><th bgcolor="black"><font color="white">Otra Enfermedad Cardio</font></th>
    <th bgcolor="black"><font color="white">Bronquitis</font></th><th bgcolor="black"><font color="white">Asmabronquial</font></th>
    <th bgcolor="black"><font color="white">Hiperactividad</font></th><th bgcolor="black"><font color="white">Bronquial</font></th>
    <th bgcolor="black"><font color="white">Otra Enfermedad Bronquial</font></th><th bgcolor="black"><font color="white">Rinon</font></th>
    <th bgcolor="black"><font color="white">Ureteres</font></th><th bgcolor="black"><font color="white">Vejiga</font></th>
    <th bgcolor="black"><font color="white">Uretra</font></th><th bgcolor="black"><font color="white">Genitales</font></th>
    <th bgcolor="black"><font color="white">Otra Enfermedad Genital</font></th><th bgcolor="black"><font color="white">Diabetes</font></th>
    <th bgcolor="black"><font color="white">Diabete Desde</font></th><th bgcolor="black"><font color="white">Tratamiento Dia</font></th>
</tr>
<?php
        include "./php/Connexion.php";
        $sentecia="SELECT * FROM antecedentespatologicos";
        $resultado= $Conexion->query($sentecia) or die (mysqli_error($Conexion));
        while($fila=$resultado->fetch_assoc())
        {?>
					<tr>
						
						<td><?php echo $fila['Estrenimiento']; ?></td>
						<td><?php echo $fila['OtraEnfGast']; ?></td>
						<td><?php echo $fila['Desmayos']; ?></td>
						<td><?php echo $fila['Soplos']; ?></td>
						<td><?php echo $fila['Taquicardias']; ?></td>
						<td><?php echo $fila['Hipertension']; ?></td>
						<td><?php echo $fila['OtraEnfCardio']; ?></td>
						<td><?php echo $fila['Bronquitis']; ?></td>
						<td><?php echo $fila['Asmabronquial']; ?></td>
						<td><?php echo $fila['Hiperactividad']; ?></td>
						<td><?php echo $fila['Bronquial']; ?></td>
						<td><?php echo $fila['OtraEnfBronquial']; ?></td>
						<td><?php echo $fila['Rinon']; ?></td>
						<td><?php echo $fila['Ureteres']; ?></td>
						<td><?php echo $fila['Vejiga']; ?></td>
						<td><?php echo $fila['Uretra']; ?></td>
						<td><?php echo $fila['Genitales']; ?></td>
						<td><?php echo $fila['OtraEnfGenital']; ?></td>
						<td><?php echo $fila['Diabetes']; ?></td>
						<td><?php echo $fila['DiabeteDesde']; ?></td>
						<td><?php echo $fila['TratamientoDia']; ?></td>
						<td><a href="MAntecedentesPatologicos.php?Id=<?php echo $fila['Id_Registro']; ?>">Editar</a></td>
						<td><input type="checkbox" name="Eliminar[]" value="<?php echo $fila['Id_Registro'] ?>"/>Eliminar</td>
					</tr>
					<?php
			}
			?>
			<?php
 //Sentencia para ELIMINAR
if(isset($_POST['btnDelete']))
{
	if (empty($_POST['Eliminar']))
	{
		echo "<script>alert('Debe de Seleccionar un registro! Es decir, un CHECKBOX []')</script>";
	}
	else{
		foreach ($_POST['Eliminar'] as $Id_Borrar)
		{
			$Borrar = $Conexion->query("DELETE FROM antecedentespatologicos WHERE Id_Registro = '$Id_Borrar'");
			if ($Borrar)
			{
				echo "<script>alert('Registro Eliminado Correctamente!')</script>";
			}
		}
	}
}
    ?>
</table>

</form>
</fieldset></center>
</body>
</html>