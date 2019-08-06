<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<head>
	<title>Consulta Aptitud Fisica</title>
<link rel="stylesheet" href="css/Home.css"/>
<script language="javascript" src="js/VLogin.js"></script>
</head>
<body>


<form name="form" action="CAptitupFisica2.php" method="POST" enctype="multipart/form-data">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">




<nav class="navbar navbar-default">
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
<center><h3 style="color:">Aptitud Fisica 2</h3></center> 
<br>




<table class="table table-hover table-bordered">
<tr>
	<th bgcolor="black"><font color="white">Id</font></th> <th bgcolor="black"><font color="white">Id_Paciente</font></th>
	<th bgcolor="black"><font color="white">Pulso</font></th> <th bgcolor="black"><font color="white">Latidos</font></th>
	<th bgcolor="black"><font color="white">VO max</font></th> <th bgcolor="black"><font color="white">PeUno</font></th>
	<th bgcolor="black"><font color="white">PeDos</font></th> <th bgcolor="black"><font color="white">PeTres</font></th>
	<th bgcolor="black"><font color="white">PeCuatro</font></th> <th bgcolor="black"><font color="white">Derecha KG</font></th>
	<th bgcolor="black"><font color="white">Clasificacion Derecha</font></th> <th bgcolor="black"><font color="white">Izquierda KG</font></th> 
	<th bgcolor="black"><font color="white">Clasificacion Izquierda</font></th> <th bgcolor="black"><font color="white">Flexion Piernas</font></th> 
	<th bgcolor="black"><font color="white">Clasificacion Piernas</font></th> <th bgcolor="black"><font color="white">Flexion Truncal</font></th>
	<th bgcolor="black"><font color="white">Clasificacion Truncal</font></th> <th bgcolor="black"><font color="white">Fortaleza Total</font></th>
	 <th bgcolor="black"><font color="white">Clasificacion Fortaleza</font></th> <th bgcolor="black"><font color="white">Fortaleza Relativa</font></th>
	 <th bgcolor="black"><font color="white">Clasificacion Relativa</font></th> <th bgcolor="black"><font color="white">Lagartijas</font></th>
	 <th bgcolor="black"><font color="white">Clasificacion Lagartijas</font></th> <th bgcolor="black"><font color="white">Abdomiinales</font></th>
	 <th bgcolor="black"><font color="white">Clasificacion Abdomiinales</font></th> <th bgcolor="black"><font color="white">Flexion Troncal</font></th>
	 <th bgcolor="black"><font color="white">Clasificacion Flexion</font></th> <th bgcolor="black"><font color="white">Masa Corporal</font></th>
	 <th bgcolor="black"><font color="white">Clasificacion Masa</font></th> <th bgcolor="black"><font color="white">Sentado Estirado</font></th>
	 <th bgcolor="black"><font color="white">Imagenes</font></th>
</tr>

      <?php
        include "./php/Connexion.php";
        $sentecia="SELECT * FROM aptitudfisica2";
        $resultado= $Conexion->query($sentecia) or die (mysqli_error($Conexion));
        while($fila=$resultado->fetch_assoc())
        {?>
					<tr>
						<td><?php echo $fila['Id_Registro']; ?></td>
						<td><?php echo $fila['Id_Paciente']; ?></td>
						<td><?php echo $fila['Pulso']; ?></td>
						<td><?php echo $fila['Latidos']; ?></td>
						<td><?php echo $fila['VomaxEstimado']; ?></td>
						<td><?php echo $fila['PeUno']; ?></td>
						<td><?php echo $fila['PeDos']; ?></td>
						<td><?php echo $fila['PeTres']; ?></td>
						<td><?php echo $fila['PeCuatro']; ?></td>
						<td><?php echo $fila['DerKG']; ?></td>
						<td><?php echo $fila['ClasificacionDer']; ?></td>
						<td><?php echo $fila['IzqKG']; ?></td>
						<td><?php echo $fila['ClasificacionIzq']; ?></td>
						<td><?php echo $fila['FlexionPiernas']; ?></td>
						<td><?php echo $fila['ClasificacionPier']; ?></td>
						<td><?php echo $fila['FlexionTrunc']; ?></td>
						<td><?php echo $fila['ClasificacionTrunc']; ?></td>
						<td><?php echo $fila['FortalezaTot']; ?></td>
						<td><?php echo $fila['Clasificacionfort']; ?></td>
						<td><?php echo $fila['FortalezaRelat']; ?></td>
						<td><?php echo $fila['ClasificacionRelat']; ?></td>
						<td><?php echo $fila['Lagartijas']; ?></td>
						<td><?php echo $fila['ClasificacionLag']; ?></td>
						<td><?php echo $fila['Abdominales']; ?></td>
						<td><?php echo $fila['ClasificacionAbd']; ?></td>
						<td><?php echo $fila['FlexionTronc']; ?></td>
						<td><?php echo $fila['ClasificacionTroncal']; ?></td>
						<td><?php echo $fila['MasaCorporal']; ?></td>
						<td><?php echo $fila['ClasificacionMasa']; ?></td>
						<td><?php echo $fila['SentadoEstirado']; ?></td>
						<td><img src="image/<?php echo $fila['Imagenes']; ?>" height="40px" width="40px" style=""></td>
						<td><a href="MAptitupFisica2.php?Id=<?php echo $fila['Id_Registro']; ?>" class="btn btn-warning">Editar</a></td>
						<td><input type="checkbox" name="Eliminar[]" value="<?php echo $fila['Id_Registro'] ?>"/>Eliminar</td>
					
					</tr>
					<?php
        }
      ?>
<tr>
	
</tr>
<?php
        include "./php/Connexion.php";
        $sentecia="SELECT * FROM aptitudfisica2";
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
			$Borrar = $Conexion->query("DELETE FROM aptitudfisica2 WHERE Id_Registro = '$Id_Borrar'");
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
	<button type="submit" name="btnDelete" value="Update" class="btn btn-danger">Eliminar</button>
</div> 
</form>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>