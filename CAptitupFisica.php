<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<head>
	<title>Consulta Aptitud Fisica 2</title>
<link rel="stylesheet" href="css/Home.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script language="javascript" src="js/VLogin.js"></script>
</head>
<body>



<form name="form" action="" method="POST" onsubmit="">

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
	<a href="HistoriaClinica.php">Historia Clinica </a> <br>
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
<center><h3>Aptitud Fisica</h3></center>
<br>
<table class="table table-hover table-bordered">
<tr>
    <th bgcolor="black"><font color="white">Id</font></th> <th bgcolor="black"><font color="white">Id_Paciente</font></th>
	<th bgcolor="black"><font color="white">Estatura</font></th> <th bgcolor="black"><font color="white">Pulgada</font></th>
	<th bgcolor="black"><font color="white">Peso</font></th> <th bgcolor="black"><font color="white">Libras</font></th>
	<th bgcolor="black"><font color="white">Circumfrencia Muneca</font></th> <th bgcolor="black"><font color="white">Pulgada</font></th>
	<th bgcolor="black"><font color="white">Tipo Figura</font></th> <th bgcolor="black"><font color="white">Peso Ideal lb</font></th>
	<th bgcolor="black"><font color="white">Peso Ideal Kg</font></th> <th bgcolor="black"><font color="white">Sentado</font></th>
	<th bgcolor="black"><font color="white">Depie</font></th> <th bgcolor="black"><font color="white">Clasificion Latidos</font></th>
	<th bgcolor="black"><font color="white">Sistolica</font></th> <th bgcolor="black"><font color="white">Clasificacion Sistolica</font></th>
	<th bgcolor="black"><font color="white">Diatolica</font></th> 	<th bgcolor="black"><font color="white">Clasificacion Diatolica</font></th>  
    <th bgcolor="black"><font color="white">Presion del Pulso</font></th><th bgcolor="black"><font color="white">Varones Pecho</font></th>
    <th bgcolor="black"><font color="white">Varonres Abdomen</font></th><th bgcolor="black"><font color="white">Varones Muslo</font></th>
    <th bgcolor="black"><font color="white">Varones Total</font></th><th bgcolor="black"><font color="white">Mujeres Triceps</font></th> 
    <th bgcolor="black"><font color="white">Mujeres Muslo</font></th><th bgcolor="black"><font color="white">Mujeres Cresta lliaca</font></th>
    <th bgcolor="black"><font color="white">Mujeres Total</font></th><th bgcolor="black"><font color="white">Porciento Grasa</font></th>
    <th bgcolor="black"><font color="white">Clasificacion</font></th><th bgcolor="black"><font color="white">Peso Grasa lb</font></th>
    <th bgcolor="black"><font color="white">Peso Grasa Kg</font></th><th bgcolor="black"><font color="white">Peso Liso lb</font></th>
    <th bgcolor="black"><font color="white">Peso Liso Kg</font></th><th bgcolor="black"><font color="white">Masa Corporal</font></th>
    <th bgcolor="black"><font color="white">Clasificacion Masa Corporal</font></th>

</tr>

      <?php
        include "./php/Connexion.php";
        $sentecia="SELECT * FROM aptitudfisica";
        $resultado= $Conexion->query($sentecia) or die (mysqli_error($Conexion));
        while($fila=$resultado->fetch_assoc())
        {?>
					<tr>
						<td><?php echo $fila['Id_Registro']; ?></td>
						<td><?php echo $fila['Id_Paciente']; ?></td>
						<td><?php echo $fila['Estatura']; ?></td>
						<td><?php echo $fila['Pulgada']; ?></td>
						<td><?php echo $fila['Peso']; ?></td>
						<td><?php echo $fila['Libras']; ?></td>
						<td><?php echo $fila['CirMuneca']; ?></td>
						<td><?php echo $fila['CirPulgada']; ?></td>
						<td><?php echo $fila['CirTipoFigura']; ?></td>
						<td><?php echo $fila['CirPesolb']; ?></td>
						<td><?php echo $fila['CirPesoKg']; ?></td>
						<td><?php echo $fila['Sentado']; ?></td>
						<td><?php echo $fila['Depie']; ?></td>
						<td><?php echo $fila['ClasifCardio']; ?></td>
						<td><?php echo $fila['Sistolica']; ?></td>
						<td><?php echo $fila['ClasifSistolica']; ?></td>
						<td><?php echo $fila['Diatolica']; ?></td>
						<td><?php echo $fila['ClasifDiatolica']; ?></td>
						<td><?php echo $fila['Presionpuls']; ?></td>
						<td><?php echo $fila['VarPecho']; ?></td>
						<td><?php echo $fila['VarAbdomen']; ?></td>
						<td><?php echo $fila['VarMuslo']; ?></td>
						<td><?php echo $fila['VarTotal']; ?></td>
						<td><?php echo $fila['MujTriceps']; ?></td>
						<td><?php echo $fila['MujMuslo']; ?></td>
						<td><?php echo $fila['MujCrestalliaca']; ?></td>
						<td><?php echo $fila['MujTotal']; ?></td>
						<td><?php echo $fila['PorcGrasa']; ?></td>
						<td><?php echo $fila['Clasificacionlb']; ?></td>
						<td><?php echo $fila['PGrasalb']; ?></td>
						<td><?php echo $fila['PGrasaKg']; ?></td>
						<td><?php echo $fila['PLisolb']; ?></td>
						<td><?php echo $fila['PLisoKg']; ?></td>
						<td><?php echo $fila['MasaCorporal']; ?></td>
						<td><?php echo $fila['ClasifMasaCorp']; ?></td>
						<td><a href="MAptitupFisica.php?Id=<?php echo $fila['Id_Registro']; ?>">Editar</a></td>
						<td><input type="checkbox" name="Eliminar[]" value="<?php echo $fila['Id_Registro'] ?>"/>Eliminar</td>
				
						
					</tr>
					<?php
        }
      ?>
<tr>
</tr>
<?php
        include "./php/Connexion.php";
        $sentecia="SELECT * FROM aptitudfisica";
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
			$Borrar = $Conexion->query("DELETE FROM aptitudfisica WHERE Id_Registro = '$Id_Borrar'");
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>