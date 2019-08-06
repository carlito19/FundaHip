<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<head>
	<title>Consulta Hisoria Clinica 2</title>
<link rel="stylesheet" href="css/Home.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script language="javascript" src="js/VLogin.js"></script>
</head>
<body>
<nav class="navbar navbar-expand">
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
<center><h3>Historia Clinica 2</h3></center>
<br>

<table class="table table-hover table-inverse table-bordered">
<tr>
    <th style="background-color:black; color:white"> Id </th>            <th style="background-color:black; color:white">Id Paciente</th>
	<th style="background-color:black; color:white"> Diabetes</th>       <th style="background-color:black; color:white">Diabetes Quién?</th>
    <th style="background-color:black; color:white"> Hipertencion</th>   <th style="background-color:black; color:white">Hipertención Quién?</th>
    <th style="background-color:black; color:white"> Obesidad </th>      <th style="background-color:black; color:white">Obesidad Quién?</th>
    <th style="background-color:black; color:white"> Infarto </th>       <th style="background-color:black; color:white">Infarto Quién?</th>
	<th style="background-color:black; color:white"> Muerte Subita </th> <th style="background-color:black; color:white">Muerte Subita Quién?</th>
    <th style="background-color:black; color:white"> Epilepsia </th>     <th style="background-color:black; color:white">Epilepsia Quién?</th>
    <th style="background-color:black; color:white"> Cancer </th>        <th style="background-color:black; color:white">Cancer Quién?</th>
    <th style="background-color:black; color:white"> Pulmonales </th>    <th style="background-color:black; color:white">Pulmonales Quién?</th> 
    <th style="background-color:black; color:white"> OTRACUAL </th>      <th style="background-color:black; color:white">Otra Quién?</th>

</tr>
      <?php
        include "./php/Connexion.php";
        $sentecia="SELECT * FROM hclinicamedicodeportivo2";
        $resultado= $Conexion->query($sentecia) or die (mysqli_error($Conexion));
        while($fila=$resultado->fetch_assoc())
				{?>
					<tr>
						<td><?php echo $fila['Id_Registro']; ?></td>
						<td><?php echo $fila['Id_Paciente']; ?></td>
						<td><?php echo $fila['Diabetes']; ?></td>
						<td><?php echo $fila['DiaQuien']; ?></td>
						<td><?php echo $fila['Hipertencion']; ?></td>
						<td><?php echo $fila['HipQuien']; ?></td>
						<td><?php echo $fila['Obesidad']; ?></td>
						<td><?php echo $fila['OBsQuien']; ?></td>
						<td><?php echo $fila['Infarto']; ?></td>
						<td><?php echo $fila['InfQuien']; ?></td>
						<td><?php echo $fila['MuerteSubita']; ?></td>
						<td><?php echo $fila['MusQuien']; ?></td>
						<td><?php echo $fila['Epilepsia']; ?></td>
						<td><?php echo $fila['EpilQuien']; ?></td>
						<td><?php echo $fila['Cancer']; ?></td>
						<td><?php echo $fila['CancQuien']; ?></td>
						<td><?php echo $fila['Pulmonales']; ?></td>
						<td><?php echo $fila['PulQuien']; ?></td>
						<td><?php echo $fila['OTRACUAL']; ?></td>
						<td><?php echo $fila['OtraQuien']; ?></td>
						
					</tr>
					<?php
					
        }
      ?>
<tr>
	 </tr>
 <?php
        include "./php/Connexion.php";
        $sentecia="SELECT * FROM hclinicamedicodeportivo2";
        $resultado= $Conexion->query($sentecia) or die (mysqli_error($Conexion));
				while($fila=$resultado->fetch_assoc())
				{?>
					<tr>
						<td><?php echo $fila['MuerteSubita']; ?></td>
						<td><?php echo $fila['MusQuien']; ?></td>
						<td><?php echo $fila['Epilepsia']; ?></td>
						<td><?php echo $fila['EpilQuien']; ?></td>
						<td><?php echo $fila['Cancer']; ?></td>
						<td><?php echo $fila['CancQuien']; ?></td>
						<td><?php echo $fila['Pulmonales']; ?></td>
						<td><?php echo $fila['PulQuien']; ?></td>
						<td><?php echo $fila['OTRACUAL']; ?></td>
						<td><?php echo $fila['OtraQuien']; ?></td>
						<td><a href="MHistoriaClinica2.php?Id=<?php echo $fila['Id_Registro']; ?>">Editar</a></td>
						<td><input type="checkbox" name="Eliminar[]" value="<?php echo $fila['Id_Registro'] ?>"/>Eliminar</td>
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
			$Borrar = $Conexion->query("DELETE FROM hclinicamedicodeportivo2 WHERE Id_Registro = '$Id_Borrar'");
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