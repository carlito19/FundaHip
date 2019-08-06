<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<head>
	<title>Antecedentes Patologicos 2</title>
<link rel="stylesheet" href="css/Home.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<nav class="navbar">
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
<br>
<center><h3>Antecedentes Patologicos 2</h3></center>
<br>

<table class="table  table-hover table-striped table-bordered">
<tr>
    <th style="background-color:black; color:white">Id </th>               <th style="background-color:black; color:white">Id Paciente</th>
	<th style="background-color:black; color:white">Contracturas</th>      <th style="background-color:black; color:white"> Region Afectada</th>
	<th style="background-color:black; color:white">Desgarre Muscular</th> <th style="background-color:black; color:white"> Region Desgarre </th>
	<th style="background-color:black; color:white">Ruptura Muscular</th>  <th style="background-color:black; color:white"> Region Ruptura</th> 
	<th style="background-color:black; color:white">Fractura </th>         <th style="background-color:black; color:white"> Edad </th>
	<th style="background-color:black; color:white">Area Afectada Ruptur</th> <th style="background-color:black; color:white"> Tratamiento Ruptura</th>
	<th style="background-color:black; color:white">Luxaciones</th>        <th style="background-color:black; color:white">  EdadLux </th> 
	<th style="background-color:black; color:white">Area Afectada</th>     <th style="background-color:black; color:white">  Tratamiento </th>
	<th style="background-color:black; color:white">Hombro</th>            <th style="background-color:black; color:white"> Codo</th> 
	
	<th style="background-color:black; color:white"> Muneca                      </th> <th style="background-color:black; color:white">DedosMano </th>
    <th style="background-color:black; color:white"> CualDedo                    </th> <th style="background-color:black; color:white">Rodilla </th>
    <th style="background-color:black; color:white"> Tobillo                     </th> <th style="background-color:black; color:white">Pie </th>
    <th style="background-color:black; color:white"> Tratamiento Pie             </th> <th style="background-color:black; color:white">Pie Plano </th>
    <th style="background-color:black; color:white"> Tratamiento Pie Plano       </th> <th style="background-color:black; color:white">Tratamiento Desde Pie Plano </th>
    <th style="background-color:black; color:white"> Problemas Columna Vertebral </th> <th style="background-color:black; color:white">Especificar Problemas </th>
    <th style="background-color:black; color:white"> Conmociones Cerebrales>     </th> <th style="background-color:black; color:white">Tiempo Reposo Problemas Cerebrales </th>
    <th style="background-color:black; color:white"> Tatuajes                   </th> <th style="background-color:black; color:white">Region Tatuaje </th>
    <th style="background-color:black; color:white"> Alguna Enfermedad           </th>

</tr>

      <?php
        include "./php/Connexion.php";
        $sentecia="SELECT * FROM antecedentespatologicos2";
        $resultado= $Conexion->query($sentecia) or die (mysqli_error($Conexion));
        while($fila=$resultado->fetch_assoc())
        {?>
					<tr>
						<td><?php echo $fila['Id_Registro']; ?></td>
						<td><?php echo $fila['Id_Paciente']; ?></td>
						<td><?php echo $fila['Contracturas']; ?></td>
						<td><?php echo $fila['Regionafect']; ?></td>
						<td><?php echo $fila['Desmuscular']; ?></td>
						<td><?php echo $fila['Regionmusc']; ?></td>
						<td><?php echo $fila['RupturaMusc']; ?></td>
						<td><?php echo $fila['RegionRupt']; ?></td>
						<td><?php echo $fila['Fractura']; ?></td>
						<td><?php echo $fila['Edad']; ?></td>
						<td><?php echo $fila['AreaAfectadaRup']; ?></td>
						<td><?php echo $fila['TratamientoRup']; ?></td>
						<td><?php echo $fila['Luxaciones']; ?></td>
						<td><?php echo $fila['EdadLux']; ?></td>
						<td><?php echo $fila['AreaAfectada']; ?></td>
						<td><?php echo $fila['Tratamiento']; ?></td>
						<td><?php echo $fila['Hombro']; ?></td>
						<td><?php echo $fila['Codo']; ?></td>
						<td><?php echo $fila['Muneca']; ?></td>
						<td><?php echo $fila['DedosMano']; ?></td>
						<td><?php echo $fila['CualDedo']; ?></td>
						<td><?php echo $fila['Rodilla']; ?></td>
						<td><?php echo $fila['Tobillo']; ?></td>
						<td><?php echo $fila['Pie']; ?></td>
						<td><?php echo $fila['TratamientoPie']; ?></td>
						<td><?php echo $fila['PiePlano']; ?></td>
						<td><?php echo $fila['TratamientoPiePla']; ?></td>
						<td><?php echo $fila['TratamientoDesdPie']; ?></td>
						<td><?php echo $fila['PColumnavertebral']; ?></td>
						<td><?php echo $fila['EspecificarProb']; ?></td>
						<td><?php echo $fila['ConmocionesCereb']; ?></td>
						<td><?php echo $fila['TiempoReposoPrCer']; ?></td>
						<td><?php echo $fila['Tatuajes']; ?></td>
						<td><?php echo $fila['RegionTatuaje']; ?></td>
						<td><?php echo $fila['AlgunaEfermedad']; ?></td>
						<td><a href="MAntecedentesPatologicos2.php?Id=<?php echo $fila['Id_Registro']; ?>">Editar</a></td>
						<td><input type="checkbox" name="Eliminar[]" value="<?php echo $fila['Id_Registro'] ?>"/>Eliminar</td>
					
						

					</tr>
					<?php
        }
      ?>
<tr>
</tr>
<?php
        include "./php/Connexion.php";
        $sentecia="SELECT * FROM antecedentespatologicos2";
        $resultado= $Conexion->query($sentecia) or die (mysqli_error($Conexion));
        while($fila=$resultado->fetch_assoc())
        {?>
					<tr>
</tr>
					<?php
			}
			?>
			<?php
//Sentencia para ELIMINAR
require_once "./php/Connexion.php";
if(isset($_POST['btnDelete']))
{
	if (empty($_POST['Eliminar']))
	{
		echo "<script>alert('Debe de Seleccionar un registro! Es decir, un CHECKBOX []')</script>";
	}
	else{
		foreach ($_POST['Eliminar'] as $Id_Borrar)
		{
			$Borrar = $Conexion->query("DELETE FROM antecedentespatologicos2 WHERE Id_Registro = '$Id_Borrar'");
			if ($Borrar)
			{
				echo "<script>alert('Registro Eliminado Correctamente!')</script>";
			}
		}
	}
}
    ?>
</table>

<div>
	<button type="submit" name="btnDelete" value="Eliminar" class="btn btn-danger">Eliminar</button>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>