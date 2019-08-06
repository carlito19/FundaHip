<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<head>
	<title>Datos</title>
<link rel="stylesheet" href="css/Home.css"/>
<script language="javascript" src="js/VLogin.js"></script>
</head>
<body>
	<br/><br/>
	<center><fieldset align="center">
<form name="form" action="" method="POST" onsubmit="">
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
	<li><a href="Datos.php">Consultar</a></li>
	</ul>
	</li>
	<li><a href="#">HISTORIA CLINICA</a>
	<ul>
	<li><a href="HistoriaClinica.php">Historia Clinica</a></li>
	</ul>
	</li>
	<li><a href="#">ANTECEDENTES PERSONALES</a>
	<ul>
	<li><a href="NoPatologicos.php">No Patologicos</a></li>
	<li><a href="Patologicos.php">Patologicos</a></li>
	<li><a href="Deportivos.php">Deportivos</a></li>
	</ul>
	</li>
	<li><a href="#">EXPLORACIONES</a>
	<ul>
	<li><a href="ExploracionFisica.php">Exploracion Fisica</a></li>
	</ul>
	</li>
	<li><a href="#">PRUEBA DE APTITUDES FISICAS</a>
	<ul>
	<li><a href="AptitupFisica.php">Aptitud Fisica</a></li>
 	</ul>
	</li>
	</ul>
</td>

</table><hr/>
<?php
require_once "Conexion.php";
?>

<font color="white" face="comics" size="6"/>
<br>
<marquee direction="right" behavior="alternate" bgcolor="brown">Datos en la Base de Datos</marquee>
<br>
<div>
<a href="HistoriaClinica.php"><button type="button">Nuevo Registro</button></a>
<input type="submit" id="btn_Eliminar" name="btn_Eliminar" value="Eliminar"/>Eliminar
<input type="text" name="text"/>

</div>
<!--<table border="1" bgcolor="#000000" > 
  
	<td>Id</td> 
    <td>Id_Paciente</td> 
    <td>Fecha</td> 
	<td>Categoria</td> 
	<td>Nombres</td> 
    <td>Apellido Padre</td> 
    <td>Apellido Madre</td> 
	<td>Apodo</td> 
    <td>Edad</td> 
    <td>Nombre Padre</td> 
	<td>Nombre Madre</td>
	<td>Telfono</td>
    <td>Celular</td> 
    <td>CellPadre</td> 
	<td>CellMadre</td> 
	<td>EstadoCivil</td> 
    <td>Hijos</td> 
    <td>Cantidad Hijos</td> 
	<td>Trabaja</td> 
    <td>Trabaja Donde</td> 
    <td>Estudia</td> 
	<td>Nivel Estudio</td>-->

      <?php
		$conexion = new mysqli("localhost","root","","fundahip");
		$sentecia="SELECT * FROM hclinicamedicodeportiva";
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
        while($fila=$resultado->fetch_assoc())
        {?>

		<!--<tr>
		<td><?php echo $fila['Id_Registro']; ?></td>
		<td><?php echo $fila['Id_Paciente']; ?></td>
		<td><?php echo $fila['Fecha']; ?></td>
		<td><?php echo $fila['Categoria']; ?></td>
		<td><?php echo $fila['Nombres']; ?></td>
		<td><?php echo $fila['ApellidoP']; ?></td>
		<td><?php echo $fila['ApellidoM']; ?></td>
		<td><?php echo $fila['Apodo']; ?></td>
		<td><?php echo $fila['Edad']; ?></td>
		<td><?php echo $fila['NomPadre']; ?></td>
		<td><?php echo $fila['NomMadre']; ?></td>
		<td><?php echo $fila['Telefono']; ?></td>
		<td><?php echo $fila['Celular']; ?></td>
		<td><?php echo $fila['CellPadre']; ?></td>
		<td><?php echo $fila['CellMadre']; ?></td>
		<td><?php echo $fila['EstadoCivil']; ?></td>
		<td><?php echo $fila['Hijos']; ?></td>
		<td><?php echo $fila['CantHijos']; ?></td>
		<td><?php echo $fila['Trabaja']; ?></td>
		<td><?php echo $fila['TrabajaDond']; ?></td>
		<td><?php echo $fila['Estudia']; ?></td>
		<td><?php echo $fila['NivelEstudio']; ?></td>
		<td><input type='checkbox' name='marcados[]' id='marcados[]' value=" .$Nombres->getNombres()."></td>
		<td>

		<?php





			/*echo "<tr>";
            echo "<td>"; echo $fila['Id_Registro']; echo "</td>";
            echo "<td>"; echo $fila['Id_Paciente']; echo "</td>";
            echo "<td>"; echo $fila['Fecha']; echo "</td>";
			echo "<td>"; echo $fila['Categoria']; echo "</td>";
			echo "<td>"; echo $fila['Nombres']; echo "</td>";
			echo "<td>"; echo $fila['ApellidoP']; echo "</td>";
			echo "<td>"; echo $fila['ApellidoM']; echo "</td>";
			echo "<td>"; echo $fila['Apodo']; echo "</td>";
			echo "<td>"; echo $fila['Edad']; echo "</td>";
			echo "<td>"; echo $fila['NomPadre']; echo "</td>";
			echo "<td>"; echo $fila['NomMadre']; echo "</td>";
			echo "<td>"; echo $fila['Telefono']; echo "</td>";
			echo "<td>"; echo $fila['Celular']; echo "</td>";
			echo "<td>"; echo $fila['CellPadre']; echo "</td>";
			echo "<td>"; echo $fila['CellMadre']; echo "</td>";
			echo "<td>"; echo $fila['EstadoCivil']; echo "</td>";
			echo "<td>"; echo $fila['Hijos']; echo "</td>";
			echo "<td>"; echo $fila['CantHijos']; echo "</td>";
			echo "<td>"; echo $fila['Trabaja']; echo "</td>";
			echo "<td>"; echo $fila['TrabajaDond']; echo "</td>";
			echo "<td>"; echo $fila['Estudia']; echo "</td>";
			echo "<td>"; echo $fila['NivelEstudio']; echo "</td>";
      	    echo "<td><a href='HistoriaClinica.php?Id_Registro=".$fila['Id_Registro']."'> <button type='button'>Modificar</button> </a></td>";
			echo "<td><input type="submit" value="Eliminar" onclick = "consultaeli();"></td>";
		    
			  echo "</tr> <br/>";*/
        }
      ?>

<?php
//add these methods
/*function query($query_string){
    return mysqli_query($this->connection, $query_string);
  }*/
//Si pulsamos el botón "Eliminar cabañas"...
if(isset($_POST['btn_Eliminar'])){
if(empty($_POST['marcados'])){
 echo "No se ha seleccionado ningun Nombre";
}
else
{
foreach($_POST['marcados'] as $valor){
require_once "./php/Conexion.php";
$sql = mysqli("DELETE FROM hclinicamedicodeportiva WHERE Nombres='%d'", $valor);
$resultado = mysqli_query($conexion, $sql);
}
echo "<meta http-equiv=\"refresh\" content=\"0; Datos.php\">";
    }
}
?>

  	</table>
        </form>
        </fieldset></center>
        <br/><br/>
</body>
</html>
