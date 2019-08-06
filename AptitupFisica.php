<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<head>
	<title>Aptitud Fisica</title>
<link rel="stylesheet" href="css/Home.css"/>
<script language="javascript" src="js/VLogin.js"></script>
</head>
<body>

  <nav class="navbar navbar">
	<img src="img/fundah.ico" width="60px"  style="margin-right:50px;">


	<li><a href="Home1.php" style="color:white;">INICIO</a></li>

	<li class="nav-item dropdown dmenu">
	<a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">CONSULTAS GENERALES </a>
  
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



</div>


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
<div class="container-fluid">
<form name="form" action="AptitupFisica.php" method="POST" onsubmit="">

<div>
	<button type="submit" name="btnRegistrar" value="Registrar">Registrar</button>
</div><br/>

 <p><h4>MEDIDAS ANTROPOMETRICAS</h4></p>


<br>
    <label>DETERMINACION DEL PESO DESEABLE /IDEAL:</label><br>


       <div class="row">
       <div class="col-md-3">
       <label>Id Paciente:</label>
       <input class="form-control" type="text" id="Id_Paciente" name="Id_Paciente" required placeholder=" Id_Paciente"/><br>
     
       </div>
  
  <div class="col-md-2">
  <label>Estatura:</label>
    <input type="text" class="form-control" id="Estatura" name="Estatura" required placeholder=" Estatura"/><br>
   
  </div>

<div class="col-md-2">

<label>Pulgadas:</label> <br>
    <input type="text" id="Pulgada" name="Pulgada" required placeholder=" Pulgada" class="form-control"/>CM<br>
   
</div>

<div class="col-md-2">

<label>Peso:</label> <br>
    <input type="text" id="Peso" name="Peso" required placeholder=" Peso" class="form-control"/>
</div>

<div class="col-md-2">

<label>Libras:</label> <br>
    <input type="text" id="Libras" name="Libras" required placeholder=" Libras" class="form-control"/>KG.
</div>

    </div>
    <label>CIRCUMFERENCIA DE LA MUNECA:</label><br>

    <div class="row">
    
    <div class="col-md-2">
    
    <label>Muñeca:</label>
    <input type="text" id="Muneca" name="CirMuneca" required placeholder=" Circunferencia Muneca" class="form-control"/><br>
    </div>

     
    <div class="col-md-2">
      
    <label>Pulgada:</label>
    <input type="text" id="Pulgada" name="CirPulgada" required placeholder=" Circunferencia Pulgada" class="form-control"/>CM.<br>
    </div>
    
 
    <div class="col-md-3">
        
    <label>Tipo de Figura:</label>
    <input type="text" id="TipoFigura" name="CirTipoFigura" required placeholder="Tipo Figura" class="form-control"/><br>

    </div>
   
  
    <div class="col-md-2">
     
    <label >Peso Ideal en Libras:</label> 
    <input type="text" id="PesoIdeall" name="CirPesolb" required placeholder=" Peso Ideal libra" class="form-control" style="display:inline"/>LBR.
    <br/>
    </div>
     
    <div class="col-md-2">
    <label> Peso Ideal en Kilogramos</label>
    <input type="text" id="PesoIdealK" name="CirPesoKg" required placeholder=" Peso Ideal kil" class="form-control" style="display:inline"/>KG.

    </div>
    
    </div>

<br>

<label>EVALUACION CARDIOVASCULAR:</label><br>
<label>Frecuencia Cardiaca en Reposo(Latidos/Minuto):</label>


    <div class="row">
    <div class="col-md-3">
    <label>Sentado:</label>
    <input type="text" id="Sentado" name="Sentado" required placeholder=" Sentado" class="form-control"/>Latidos/Min.<br>
    </div>

    <div class="col-md-3">
    <label>De Pie:</label>
    <input type="text" id="Depie" name="Depie" required placeholder=" De Pie" class="form-control"/>Latidos/Min.<br>
    </div>
    

    <div class="col-md-3">
    <label>Clasificacion:</label>
    <input type="text" id="ClasifCardio" name="ClasifCardio" required placeholder=" Clasificacion" class="form-control"/><br/>
    </div>


<div class="col-md-3">
    <label>Sistólica:</label>
    <input type="text" id="Sistolica" name="Sistolica" required placeholder=" Sistolica" class="form-control"/>MM Hg.<br>
</div>
</div>


    <br/>

     <label>Clasificacion:</label>
    <input type="text" id="ClasifSistolica" name="ClasifSistolica" required placeholder=" Clasificacion"/><br>
    <br/>

    <label>Diastólica:</label>
    <input type="text" id="Diatolica" name="Diatolica" required placeholder=" Diastolica"/>MM Hg.<br>
    <label>Clasificacion:</label>
    <input type="text" id="ClasifDiatolica" name="ClasifDiatolica" required placeholder=" Clasificacion"/><br>
    <br/>

    <label>Presion del Pulso:</label>
    <input type="text" id="Presionpuls" name="Presionpuls" required placeholder=" Presion del Pulso"/>MM Hg.<br>
    <br/>

  <label>EVALUACION DE LA ADIPOSIDAD CORPORAL(Pliegues Cutaneos):</label>
    <br/><br/>

    <label>VARONES:</label>
    <br/>

    <label>Pecho:</label>
    <input type="text" id="VarPecho" name="VarPecho" required placeholder=" Pecho"/>MM<br>
   
    <label>Abdomen:</label>
    <input type="text" id="VarAbdomen" name="VarAbdomen" required placeholder=" Abdomen"/>MM<br>
    
    <label>Muslo:</label>
    <input type="text" id="VarMuslo" name="VarMuslo" required placeholder=" Muslo"/>MM<br>
    
    <label>Total:</label>
    <input type="text" id="VarTotal" name="VarTotal" required placeholder=" Total"/>MM<br>
    <br/><br/>
   
    <label>MUJERES:</label>
    <br/>
    
    <label>Triceps:</label>
    <input type="text" id="MujTriceps" name="MujTriceps" required placeholder=" Triceps"/>MM<br>
    
      <label>Muslo:</label>
    <input type="text" id="MujMuslo" name="MujMuslo" required placeholder=" Muslo"/>MM<br>
    
    <label>Cresta Iliaca:</label>
    <input type="text" id="MujCrestalliaca" name="MujCrestalliaca" required placeholder=" Cresta Iliaca"/>MM<br>

    <label>Total:</label>
    <input type="text" id="MujTotal" name="MujTotal" required placeholder=" Total"/>MM<br>
    <br/>

    <label>Porcenteje de grasa:</label><br/>
    <input type="text" id="Porcentejegrasa" name="PorcGrasa" required placeholder=" Porcenteje de grasa"/><br>
    <label>Clasificacion:</label><br/>
    <input type="text" id="Clasificaciongrasa" name="Clasificacionlb" required placeholder=" Clasificacion grasa"/>LBR<br>
    <br/>

    <label>Peso grasa (MCG):</label><br/>
    <input type="text" id="PGrasalb" name="PGrasalb" required placeholder=" Peso Grasa LIB"/>LBR<br>
    <input type="text" id="PGrasaKg" name="PGrasaKg" required placeholder=" Peso Grasa KG" />KG<br>
    <br/>

    <label>Peso Liso (MCA):</label><br/>
    <input type="text" id="PLisolb" name="PLisolb" required placeholder=" Peso Liso"/>LBR<br>
    <input type="text" id="PLisoKg" name="PLisoKg" required placeholder=" Peso Liso KG" />KG<br>
    <br/>

    <label>Indice de Masa Corporal:</label><br/>
    <input type="text" id="MasaCorporal" name="MasaCorporal" required placeholder=" Masa Corporal"/><br>
    <label>Clasificacion:</label><br/>
    <input type="text" id="ClasifMasaCorp" name="ClasifMasaCorp" required placeholder=" Clasificacion Masa"/>LBR<br>
    <br/>

</form>

       
</div>
<?php
require_once './php/Connexion.php';
if(isset($_POST['btnRegistrar']))
{
    $Estatura = $_POST['Estatura'];
    $Pulgada = $_POST['Pulgada'];
    $Peso = $_POST['Peso'];
    $Libras = $_POST['Libras'];
    $CirMuneca = $_POST['CirMuneca'];
    $CirPulgada = $_POST['CirPulgada'];
    $CirTipoFigura = $_POST['CirTipoFigura'];
		$CirPesolb = $_POST['CirPesolb'];
    $CirPesoKg	 = $_POST['CirPesoKg'];
    $Sentado = $_POST['Sentado'];
    $Depie = $_POST['Depie'];
    $ClasifCardio = $_POST['ClasifCardio'];
    $Sistolica = $_POST['Sistolica'];
    $ClasifSistolica = $_POST['ClasifSistolica'];
    $Diatolica  = $_POST['Diatolica'];
    $ClasifDiatolica = $_POST['ClasifDiatolica'];
    $Presionpuls = $_POST['Presionpuls'];
    $VarPecho = $_POST['VarPecho'];
    $VarAbdomen  = $_POST['VarAbdomen'];
    $VarMuslo = $_POST['VarMuslo'];
    $VarTotal = $_POST['VarTotal'];
    $MujTriceps = $_POST['MujTriceps'];
    $MujMuslo = $_POST['MujMuslo'];
    $MujCrestalliaca = $_POST['MujCrestalliaca'];
    $MujTotal = $_POST['MujTotal'];
    $PorcGrasa = $_POST['PorcGrasa'];
    $Clasificacionlb = $_POST['Clasificacionlb'];
    $PGrasalb = $_POST['PGrasalb'];
		$PGrasaKg = $_POST['PGrasaKg'];
		$PLisolb = $_POST['PLisolb'];
		$PLisoKg  = $_POST['PLisoKg'];
		$MasaCorporal = $_POST['MasaCorporal'];
		$ClasifMasaCorp  = $_POST['ClasifMasaCorp'];

$Registrar = "INSERT INTO aptitudfisica
														 (Estatura, Pulgada, Peso, Libras, CirMuneca,
                              CirPulgada, CirTipoFigura, CirPesolb, CirPesoKg, 
                              Sentado, Depie, ClasifCardio, Sistolica, ClasifSistolica,
                              Diatolica, ClasifDiatolica, Presionpuls, VarPecho, 
                              VarAbdomen,	VarMuslo, VarTotal,	MujTriceps, MujMuslo, 
                              MujCrestalliaca, MujTotal, PorcGrasa, Clasificacionlb, 
															PGrasalb, PGrasaKg, PLisolb, PLisoKg,	MasaCorporal, 
                              ClasifMasaCorp)

                     VALUES ('$_POST[Estatura]','$_POST[Pulgada]','$_POST[Peso]',
												     '$_POST[Libras]','$_POST[CirMuneca]','$_POST[CirPulgada]',
														 '$_POST[CirTipoFigura]','$_POST[CirPesolb]','$_POST[CirPesoKg]',
														 '$_POST[Sentado]','$_POST[Depie]','$_POST[ClasifCardio]',
                             '$_POST[Sistolica]','$_POST[ClasifSistolica]','$_POST[Diatolica]',
                             '$_POST[ClasifDiatolica]','$_POST[Presionpuls]',
                             '$_POST[VarPecho]','$_POST[VarAbdomen]','$_POST[VarMuslo]',
														 '$_POST[VarTotal]','$_POST[MujTriceps]',
														 '$_POST[MujMuslo]','$_POST[MujCrestalliaca]',
														 '$_POST[MujTotal]','$_POST[PorcGrasa]',
														 '$_POST[Clasificacionlb]','$_POST[PGrasalb]',
														 '$_POST[PGrasaKg]','$_POST[PLisolb]',
														 '$_POST[PLisoKg]','$_POST[MasaCorporal]',
														 '$_POST[ClasifMasaCorp]')";

		$Conexion->query( $Registrar) or die ("Error al ingresar los datos ".mysqli_error($Conexion));
		echo "Registros Insertados Correctamente";
}
?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>