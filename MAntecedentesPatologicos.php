<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<head>
	<title>Patologícos</title>
<link rel="stylesheet" href="css/Home.css"/>
<script language="javascript" src="js/VLogin.js"></script>
</head>
<body>
<?php
  require_once "./php/Connexion.php"; 
  $Id = $_REQUEST['Id'];
  $Sentecia="SELECT * FROM antecedentespatologicos WHERE Id_Registro= '$Id'";
  $resultado= $Conexion->query($Sentecia) or die (mysqli_error($Conexion));
  $fila=$resultado->fetch_assoc();
 ?>
<br/><br/>
<center><fieldset align="center">
<form name="form" action="MAntecedentesPatologicos.php" method="POST" onsubmit="">
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
</table><hr/>

<p><h2>Modificar Antecedentes Personales Patologicos</h2></p>
<div>
	<button type="submit" name="btnUpdate" value="Update">Actualiar</button>
</div><br/>

<table><tr>
<td width="30%" height="500" style="background-color:lightgray;">
<input type="hidden" name="Id"  value="<?php echo $fila['Id_Registro']; ?>"/>
<center><p>PATOLOGICOS</p></center>

<input type="text" id="Id_Paciente" name="Id_Paciente" value="<?php echo $fila['Id_Paciente']; ?>" placeholder=" Id_Paciente"/><br/>
<br/>

<label>Alergico:</label>
<input type="radio" id="Alergico" name="Alergico" <?php if($fila['Alergico']=='Si') echo "checked"; ?> value="Si" />Si
<input type="radio" id="Alergico" name="Alergico" <?php if($fila['Alergico']=='No') echo "checked"; ?> value="No"/>No<br> 
<label>Alergico A:</label>
<input type="text" id="AlergicoA" name="AlergicoA" value="<?php echo $fila['AlergicoA']; ?>" required placeholder="  Alergico A?"/>
<br/><br/>
    
<label>INFECCIOSAS:</label><br>

Sarampión:
<input type="radio" id="Sarampion" name="Sarampion" <?php if($fila['Sarampion']=='Si') echo "checked"; ?> value="Si" />Si
<input type="radio" id="Sarampion" name="Sarampion" <?php if($fila['Sarampion']=='No') echo "checked"; ?> value="No"/>No /

Rubiola:
<input type="radio" id="Rubiola" name="Rubiola" <?php if($fila['Rubiola']=='Si') echo "checked"; ?> value="Si" />Si
<input type="radio" id="Rubiola" name="Rubiola" <?php if($fila['Rubiola']=='No') echo "checked"; ?> value="No"/>No <br/>


Varicela:
<input type="radio" id="Varicela" name="Varicela" <?php if($fila['Varicela']=='Si') echo "checked"; ?> value="Si" />Si
<input type="radio" id="Varicela" name="Varicela" <?php if($fila['Varicela']=='No') echo "checked"; ?> value="No"/>No /

Escarlatina:
<input type="radio" id="Escarlatina" name="Escarlatina" <?php if($fila['Escarlatina']=='Si') echo "checked"; ?> value="Si" />Si
<input type="radio" id="Escarlatina" name="Escarlatina" <?php if($fila['Escarlatina']=='No') echo "checked"; ?> value="No"/>No <br/>

Hepatitis:
<input type="radio" id="Hepatitis" name="Hepatitis" <?php if($fila['Hepatitis']=='Si') echo "checked"; ?> value="Si" />Si
<input type="radio" id="Hepatitis" name="Hepatitis" <?php if($fila['Hepatitis']=='No') echo "checked"; ?> value="No"/>No /

Parotiditis:
<input type="radio" id="Parotiditis" name="Parotiditis" <?php if($fila['Parotiditis']=='Si') echo "checked"; ?> value="Si" />Si
<input type="radio" id="Parotiditis" name="Parotiditis" <?php if($fila['Parotiditis']=='No') echo "checked"; ?> value="No"/>No <br/>

Otra Enfermedad:<br>
<input type="text" id="OtraEnferm" name="OtraEnferm" value="<?php echo $fila['OtraEnferm']; ?>" required placeholder="Otra Enfermedad" />
<br/><br/>

     Cirugia Previa:
    <input type="radio" id="Cirugia" name="Cirugia" <?php if($fila['Cirugia']=='Si') echo "checked"; ?>  value="Si"/>Si
    <input type="radio" id="Cirugia" name="Cirugia" <?php if($fila['Cirugia']=='No') echo "checked"; ?> vvvvvvvv value="No"/>No<br>
	<label>Cirugia Previa:</label><br>
    <input type="text" id="CirugiaZon" name="CirugiaZon" value="<?php echo $fila['CirugiaZon']; ?>" required placeholder="  Cirugia Previa?"/>
    <br/><br/>
    
    Problemas Visuales:
    <input type="radio" id="Probvisual" name="Probvisual" <?php if($fila['Probvisual']=='Si') echo "checked"; ?>  value="Si"/>Si
    <input type="radio" id="Probvisual" name="Probvisual" <?php if($fila['Probvisual']=='No') echo "checked"; ?>  value="No"/>No<br>
	<label>Cual Problema Visual:</label><br>
    <input type="text" id="Probvisualzon" name="Probvisualzon" value="<?php echo $fila['Probvisualzon']; ?>" requiredplaceholder="  Problemas Visuales?"/>
    <br/><br/>
    
    <label>PROBLEMAS EN OIDOS, NARIZONGARGANTA:</label><br>
    <input type="radio" id="ProbOido" name="ProbOido" <?php if($fila['ProbOido']=='Si') echo "checked"; ?>  value="Si"/>Si
    <input type="radio" id="ProbOido" name="ProbOido" <?php if($fila['ProbOido']=='No') echo "checked"; ?>  value="No"/>No<br>
	<label>Cuál Problema de Oido:</label><br>
    <input type="text" id="ProbOidozon" name="ProbOidozon" value="<?php echo $fila['ProbOidozon']; ?>" requiered placeholder="  Problemas de Oidos?"/>
	<br/><br/>
    
PROBLEMAS GASTROINSTESTINALES:
<br>
Reflujo:
<input type="radio" id="Reflujo" name="Reflujo" <?php if($fila['Reflujo']=='Si') echo "checked"; ?>  value="Si" />Si
<input type="radio" id="Reflujo" name="Reflujo" <?php if($fila['Reflujo']=='No') echo "checked"; ?>  value="No"/>No /

Gastritis:
<input type="radio" id="Gastritis" name="Gastritis" <?php if($fila['Gastritis']=='Si') echo "checked"; ?>  value="Si" />Si
<input type="radio" id="Gastritis" name="Gastritis" <?php if($fila['Gastritis']=='No') echo "checked"; ?>  value="No"/>No <br/>

Colitis:
<input type="radio" id="Colitis" name="Colitis" <?php if($fila['Colitis']=='Si') echo "checked"; ?>  value="Si" />Si
<input type="radio" id="Colitis" name="Colitis" <?php if($fila['Colitis']=='No') echo "checked"; ?>  value="No"/>No /

Diarrea Frecuentes:
<input type="radio" id="Diarrea" name="Diarrea" <?php if($fila['Diarrea']=='Si') echo "checked"; ?>  value="Si" />Si
<input type="radio" id="Diarrea" name="Diarrea" <?php if($fila['Diarrea']=='No') echo "checked"; ?>  value="No"/>No <br/>

Estreñimiento:
<input type="radio" id="Estrenimiento" name="Estrenimiento" <?php if($fila['Estrenimiento']=='Si') echo "checked"; ?>  value="Si" />Si
<input type="radio" id="Estrenimiento" name="Estrenimiento" <?php if($fila['Estrenimiento']=='No') echo "checked"; ?>  value="No"/>No <br/>

Otra Enfermedad Gastro:<br>
<input type="text" id="OtraEnfGast" name="OtraEnfGast" value="<?php echo $fila['OtraEnfGast']; ?>" required placeholder="Otra Enfermedad Gastro" />
<br/><br/>



<td width="30%" height="500" align="center" style="background-color:lightgray;">

PROBLEMAS CARDIOCOS<br>

Desmayos sin Causa Aparantes:
<input type="radio" id="Desmayos" name="Desmayos" <?php if($fila['Desmayos']=='Si') echo "checked"; ?>  value="Si" />Si
<input type="radio" id="Desmayos" name="Desmayos" <?php if($fila['Desmayos']=='No') echo "checked"; ?>  value="No"/>No <br/> 

Soplos:
<input type="radio" id="Soplos" name="Soplos" <?php if($fila['Soplos']=='Si') echo "checked"; ?>  value="Si" />Si
<input type="radio" id="Soplos" name="Soplos" <?php if($fila['Soplos']=='No') echo "checked"; ?>  value="No"/>No /

Taquicardias:
<input type="radio" id="Taquicardias" name="Taquicardias" <?php if($fila['Taquicardias']=='Si') echo "checked"; ?>  value="Si" />Si
<input type="radio" id="Taquicardias" name="Taquicardias" <?php if($fila['Taquicardias']=='No') echo "checked"; ?>  value="No"/>No <br/> 


Hipertensión:
<input type="radio" id="Hipertension" name="Hipertension" <?php if($fila['Hipertension']=='Si') echo "checked"; ?>  value="Si" />Si
<input type="radio" id="Hipertension" name="Hipertension" <?php if($fila['Hipertension']=='No') echo "checked"; ?>  value="No"/>No <br/> 


Otra Enfermedad Cardio:
<br>
<input type="text" id="OtraEnfCardio" name="OtraEnfCardio" value="<?php echo $fila['OtraEnfCardio']; ?>" required  placeholder="Otra Enfermedad Cardio" />
<br/><br/>


PROBLEMAS PULMONARES
<br>
Bronquitis:
<input type="radio" id="Bronquitis" name="Bronquitis" <?php if($fila['Bronquitis']=='Si') echo "checked"; ?>  value="Si"/>Si
<input type="radio" id="Bronquitis" name="Bronquitis" <?php if($fila['Bronquitis']=='No') echo "checked"; ?>  value="No"/>No /

Asmabronquial:
<input type="radio" id="Asmabronquial" name="Asmabronquial" <?php if($fila['Asmabronquial']=='Si') echo "checked"; ?>  value="Si"/>Si
<input type="radio" id="Asmabronquial" name="Asmabronquial" <?php if($fila['Asmabronquial']=='No') echo "checked"; ?>  value="No"/>No <br/> 

Hiperactividad:
<input type="radio" id="Hiperactividad" name="Hiperactividad" <?php if($fila['Hiperactividad']=='Si') echo "checked"; ?>  value="Si"/>Si
<input type="radio" id="Hiperactividad" name="Hiperactividad" <?php if($fila['Hiperactividad']=='No') echo "checked"; ?>  value="No"/>No /

Bronquial:
<input type="radio" id="Bronquial" name="Bronquial" <?php if($fila['Bronquial']=='Si') echo "checked"; ?> vvv value="Si"/>Si
<input type="radio" id="Bronquial" name="Bronquial" <?php if($fila['Bronquial']=='No') echo "checked"; ?>  value="No"/>No <br/> 

Otra Enfermedad Bronquial:
<br>
<input type="text" name="OtraEnfBronquial" value="<?php echo $fila['OtraEnfBronquial']; ?>" required placeholder="Otra Enfermedad Bronquial" />
<br/><br/>

PROBLEMAS VIAS URINARIAS
<br/>

Riñon:
<input type="radio" id="Rinon" name="Rinon" <?php if($fila['Rinon']=='Si') echo "checked"; ?>  value="Si"/>Si
<input type="radio" id="Rinon" name="Rinon" <?php if($fila['Rinon']=='No') echo "checked"; ?>  value="No"/>No /

Ureteres:
<input type="radio" id="Ureteres" name="Ureteres" <?php if($fila['Ureteres']=='Si') echo "checked"; ?>  value="Si"/>Si
<input type="radio" id="Ureteres" name="Ureteres" <?php if($fila['Ureteres']=='No') echo "checked"; ?>  value="No"/>No <br/> 

Vejiga:
<input type="radio" id="Vejiga" name="Vejiga" <?php if($fila['Vejiga']=='Si') echo "checked"; ?>  value="Si"/>Si
<input type="radio" id="Vejiga" name="Vejiga" <?php if($fila['Vejiga']=='No') echo "checked"; ?>  value="No"/>No /


Uretra:
<input type="radio" id="Uretra" name="Uretra" <?php if($fila['Uretra']=='Si') echo "checked"; ?>  value="Si"/>Si
<input type="radio" id="Uretra" name="Uretra" <?php if($fila['Uretra']=='No') echo "checked"; ?>  value="No"/>No <br/> 

Genitales:
<input type="radio" id="Genitales" name="Genitales" <?php if($fila['Genitales']=='Si') echo "checked"; ?>  value="Si"/>Si
<input type="radio" id="Genitales" name="Genitales" <?php if($fila['Genitales']=='No') echo "checked"; ?>  value="No"/>No <br/> 

Otra Enfermedad Genital:<br>
<input type="text" id="OtraEnfGenital" name="OtraEnfGenital" value="<?php echo $fila['OtraEnfGenital']; ?>" required placeholder="Otra Enfermedad Genital" />
<br/><br/>

    <label>DIABETES:</label>
    <input type="radio" id="Diabetes" name="Diabetes" <?php if($fila['Diabetes']=='Si') echo "checked"; ?>  value="Si"/>Si
    <input type="radio" id="Diabetes" name="Diabetes" <?php if($fila['Diabetes']=='No') echo "checked"; ?>  value="No"/>No<br>
	<label>Desde Cuando:</label><br>
    <input type="text" id="DiabeteDesde" name="DiabeteDesde" value="<?php echo $fila['DiabeteDesde']; ?>" required placeholder=" Des Cuando?"/><br>
    <label>Tratamiento Actual de la Diabetes:</label><br>
    <input type="text" id="TratamientoDia" name="TratamientoDia" value="<?php echo $fila['TratamientoDia']; ?>" required placeholder=" Tratamiento Actual"/>
    <br/><br/>

</table>
</form>
</fieldset></center>
<?php

//Actualizar DATOS
require_once "./php/Connexion.php";
if(isset($_POST['btnUpdate']))
{
    $Id_Paciente = $_POST['Id_Paciente'];
    $Alergico = $_POST['Alergico'];
    $AlergicoA = $_POST['AlergicoA'];
    $Sarampion = $_POST['Sarampion'];
    $Rubiola = $_POST['Rubiola'];
    $Varicela = $_POST['Varicela'];
    $Escarlatina = $_POST['Escarlatina'];
    $Hepatitis = $_POST['Hepatitis'];
    $Parotiditis = $_POST['Parotiditis'];
    $OtraEnferm = $_POST['OtraEnferm'];
    $Cirugia = $_POST['Cirugia'];
    $CirugiaZon = $_POST['CirugiaZon'];
    $Probvisual = $_POST['Probvisual'];
    $Probvisualzon = $_POST['Probvisualzon'];
    $ProbOido = $_POST['ProbOido'];
    $ProbOidozon = $_POST['ProbOidozon'];
    $Reflujo = $_POST['Reflujo'];
    $Gastritis = $_POST['Gastritis'];
    $Colitis = $_POST['Colitis'];
    $Diarrea = $_POST['Diarrea'];
    $Estrenimiento = $_POST['Estrenimiento'];
    $OtraEnfGast = $_POST['OtraEnfGast'];
    $Desmayos = $_POST['Desmayos'];
    $Soplos = $_POST['Soplos'];
    $Taquicardias = $_POST['Taquicardias'];
    $Hipertension = $_POST['Hipertension'];
    $OtraEnfCardio = $_POST['OtraEnfCardio'];
    $Bronquitis = $_POST['Bronquitis'];
    $Asmabronquial = $_POST['Asmabronquial'];
    $Hiperactividad = $_POST['Hiperactividad'];
    $Bronquial = $_POST['Bronquial'];
    $OtraEnfBronquial = $_POST['OtraEnfBronquial'];
    $Rinon = $_POST['Rinon'];
    $Ureteres = $_POST['Ureteres'];
    $Vejiga = $_POST['Vejiga'];
    $Uretra = $_POST['Uretra'];
    $Genitales = $_POST['Genitales'];
    $OtraEnfGenital = $_POST['OtraEnfGenital'];
    $Diabetes = $_POST['Diabetes'];
    $DiabeteDesde = $_POST['DiabeteDesde'];
    $TratamientoDia = $_POST['TratamientoDia'];
   
    ///UPDATE Datos
    $Query = "UPDATE antecedentespatologicos SET
    Id_Paciente = '$Id_Paciente',
    Alergico = '$Alergico', 
    AlergicoA = '$AlergicoA', 
    Sarampion = '$Sarampion', 
    Rubiola = '$Rubiola', 
    Varicela = '$Varicela', 
    Escarlatina = '$Escarlatina', 
    Hepatitis ='$Hepatitis', 
    Parotiditis = '$Parotiditis', 
    OtraEnferm = '$OtraEnferm', 
    Cirugia = '$Cirugia', 
    CirugiaZon = '$CirugiaZon', 
    Probvisual = '$Probvisual',
    Probvisualzon = '$Probvisualzon', 
    ProbOido = '$ProbOido', 
    ProbOidozon = '$ProbOidozon', 
    Reflujo = '$Reflujo', 
    Gastritis = '$Gastritis', 
    Colitis = '$Colitis', 
    Diarrea = '$Diarrea', 
    Estrenimiento = '$Estrenimiento', 
    OtraEnfGast = '$OtraEnfGast', 
    Desmayos = '$Desmayos', 
    Soplos = '$Soplos', 
    Taquicardias = '$Taquicardias', 
    Hipertension = '$Hipertension', 
    OtraEnfCardio = '$OtraEnfCardio', 
    Bronquitis = '$Bronquitis', 
    Asmabronquial = '$Asmabronquial', 
    Hiperactividad = '$Hiperactividad', 
    Bronquial = '$Bronquial', 
    OtraEnfBronquial = '$OtraEnfBronquial', 
    Rinon = '$Rinon', 
    Ureteres = '$Ureteres', 
    Vejiga = '$Vejiga', 
    Uretra = '$Uretra', 
    Genitales = '$Genitales', 
    OtraEnfGenital = '$OtraEnfGenital', 
    Diabetes = '$Diabetes',
    DiabeteDesde = '$DiabeteDesde', 
    TratamientoDia = '$TratamientoDia'

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