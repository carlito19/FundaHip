<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<head>
	<title>Consulta General</title>
<link rel="stylesheet" href="css/Home.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script language="javascript" src="js/VLogin.js"></script>
</head>
<body>
	
<nav class="navbar navbar">
	<img src="img/fundah.ico" width="60px"  style="margin-right:50px;">


	<li><a href="Home1.php" style="color:white;">INICIO</a></li>

	<li class="nav-item dropdown dmenu">
	<a href="Home1.php" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">CONSULTAS GENERALES </a>
  
	<div class="dropdown-menu sm-menu" style="background-color:rgb(73, 190, 170); ">
	<a href="ConsultaGeneral.php" data-toggle="modal" data-target="#exampleModalCenter">Consulta General</a> <br>
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


</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
  Buscar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header titulo" style="background:rgb(73, 190, 170);">
        <h5 class="modal-title" id="exampleModalLongTitle">Buscar Paciente por Cedula</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <input type="text" id="txtBuscar" name="Id_Paciente" placeholder="Digite el Codigo a Buscar" class="form-control"/> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		 <button type="submit" id="Buscar" name="btnBuscar" value="Buscar" class="btn btn-success">Buscar</button>
      </div>
    </div>
  </div>
</div>

<br/><br/>

<?php
if(isset($_POST['btnBuscar']))
{
    if(empty($_POST["Id_Paciente"]))
    {
        echo "Digite un Id_Paciente por favor";
    }
    else{
   require_once './php/Connexion.php';
   $Id_Paciente = $_POST['Id_Paciente'];
   mysqli_select_db($Conexion, $BDServer) 
   or die ("Error al Consultar los Registros");
   $Sql = mysqli_query($Conexion, "SELECT * FROM hclinicamedicodeportivo
									  inner join hclinicamedicodeportivo2
   									  inner join antecedentesnopatologicos
								      inner join antecedentespatologicos
									  inner join antecedentespatologicos2
									  inner join antecedentesdeportivos
									  inner join exploracionfisica
									  inner join aptitudfisica
										   where hclinicamedicodeportivo.Id_Paciente= '$Id_Paciente' LIMIT 1");
	//echo "<table border='1'>";'");
	//echo "<table border='1'>";
   while ($fila = mysqli_fetch_array($Sql))
   {
	  echo "<tr>";
	  echo "HISTORIA MEDICO CLINICO DEPORTIVO";
	  echo "<table border='1'>";
	 // echo "<hr>";
	  echo "<td>".$fila['Id_Paciente']."</td>";
      echo "<td>".$fila['Fecha']."</td>";
	  echo "<td>".$fila['Categoria']."</td>";
	  echo "<td>".$fila['Nombres']."</td>";
	  echo "<td>".$fila['ApellidoP']."</td>";
	  echo "<td>".$fila['ApellidoM']."</td>";
	  echo "<td>".$fila['Apodo']."</td>";
	  echo "<td>".$fila['Edad']."</td>";
	  echo "<td>".$fila['NomPadre']."</td>";
	  echo "<td>".$fila['NomMadre']."</td>";
	  echo "<td>".$fila['Telefono']."</td>";
	  echo "<td>".$fila['Celular']."</td>";
	  echo "<td>".$fila['CellPadre']."</td>";
	  echo "<td>".$fila['CellMadre']."</td>";
	  echo "<td>".$fila['EstadoCivil']."</td>";
	  echo "<td>".$fila['Hijos']."</td>";
	  echo "<td>".$fila['CantHijos']."</td>";
	  echo "<td>".$fila['Trabaja']."</td>";
	  echo "<td>".$fila['LugarTrabajo']."</td>";
	  echo "<td>".$fila['Estudia']."</td>";
	  echo "<td>".$fila['NivelEstudio']."</td>"; 
	  echo "</table>";
	  echo "</tr>";
	  echo "<br/>";


	  echo "<tr>";
	  echo "HISTORIA MEDICO CLINICO DEPORTIVO 2";
	  echo "<table border='1'>";
	 // echo "<hr>";
	  echo "<td>".$fila['Id_Paciente']."</td>";
      echo "<td>".$fila['Fecha']."</td>";
	  echo "<td>".$fila['Categoria']."</td>";
	  echo "<td>".$fila['Nombres']."</td>";
	  echo "<td>".$fila['ApellidoP']."</td>";
	  echo "<td>".$fila['ApellidoM']."</td>";
	  echo "<td>".$fila['Apodo']."</td>";
	  echo "<td>".$fila['Edad']."</td>";
	  echo "<td>".$fila['NomPadre']."</td>";
	  echo "<td>".$fila['NomMadre']."</td>";
	  echo "<td>".$fila['Telefono']."</td>";
	  echo "<td>".$fila['Celular']."</td>";
	  echo "<td>".$fila['CellPadre']."</td>";
	  echo "<td>".$fila['CellMadre']."</td>";
	  echo "<td>".$fila['EstadoCivil']."</td>";
	  echo "<td>".$fila['Hijos']."</td>";
	  echo "<td>".$fila['CantHijos']."</td>";
	  echo "<td>".$fila['Trabaja']."</td>";
	  echo "<td>".$fila['LugarTrabajo']."</td>";
	  echo "<td>".$fila['Estudia']."</td>";
	  echo "<td>".$fila['NivelEstudio']."</td>"; 
	  echo "</table>";
	  echo "</tr>";
	  echo "<br/>";

   }
}

}
//echo "</table>";
?>
<br/><br/><br/><br/>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
