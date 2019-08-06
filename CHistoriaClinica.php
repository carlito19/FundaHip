<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<head>
	<title>Consulta Hisoria Clinica</title>
<link rel="stylesheet" href="css/Home.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script language="javascript" src="js/VLogin.js"></script>
</head>
<body>
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

</div>


<br/>
<center><h3>Historia Clinica</h3></center>
<br>

<table class="table table-hover table-striped table-bordered">

<tr>
    <th style="background-color:black; color:white">Id                  </th>  <th style="background-color:black; color:white">Id_Paciente</th> 
    <th style="background-color:black; color:white">Fecha de Registro   </th>  <th style="background-color:black; color:white">Categoria</th> 
    <th style="background-color:black; color:white">Nombres             </th>  <th style="background-color:black; color:white">Apellido Paterno</th>
    <th style="background-color:black; color:white">Apellido Materno    </th>  <th style="background-color:black; color:white">Apodo</th>
    <th style="background-color:black; color:white">Edad                </th>  <th style="background-color:black; color:white">Nombre del Padre</th>
    <th style="background-color:black; color:white">Nombre de la Madre  </th>
	<th style="background-color:black; color:white">Telefono            </th> <th style="background-color:black; color:white">Celular</th>
    <th style="background-color:black; color:white">Celular del Padre   </th> <th style="background-color:black; color:white">Celular de la Madre</th>
    <th style="background-color:black; color:white">Estado Civil        </th> <th style="background-color:black; color:white">Hijos</th>
    <th style="background-color:black; color:white">Cantidad de Hijos   </th> <th style="background-color:black; color:white">Trabaja</th> 
    <th style="background-color:black; color:white">Trabaja Donde       </th> <th style="background-color:black; color:white">Estudia</th>
    <th style="background-color:black; color:white">Nivel Estudio     </th>
    
</tr> 	

      <?php
        include "./php/Connexion.php";
        $sentecia="SELECT * FROM hclinicamedicodeportivo";
        $resultado= $Conexion->query($sentecia) or die (mysqli_error($Conexion));
        while($fila=$resultado->fetch_assoc())
				{?>
					<tr>
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
						<td><?php echo $fila['LugarTrabajo']; ?></td>
						<td><?php echo $fila['Estudia']; ?></td>
						<td><?php echo $fila['NivelEstudio']; ?></td>
						<td><a href="MHistoriaClinica.php?Id=<?php echo $fila['Id_Registro']; ?>">Editar</a></td>
						<td><input type="checkbox" name="Eliminar[]" value="<?php echo $fila['Id_Registro'] ?>"/>Eliminar</td>
					</tr>
					</tr>
					<?php
        }
      ?>
<tr>
	
</tr>

<?php
        include "./php/Connexion.php";
        $sentecia="SELECT * FROM hclinicamedicodeportivo";
        $resultado= $Conexion->query($sentecia) or die (mysqli_error($Conexion));
        while($fila=$resultado->fetch_assoc())
				{?>
					
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
			$Borrar = $Conexion->query("DELETE FROM hclinicamedicodeportivo WHERE Id_Registro = '$Id_Borrar'");
			if ($Borrar)
			{
				echo "<script>alert('Registro Eliminado Correctamente!')</script>";
			}
		}
	}
}
?>
</table>
<button type="submit" name="btnDelete" value="Update" class="btn btn-danger">Eliminar</button>
</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>