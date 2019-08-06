<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<script type="text/javascript" src="jqueryy.js"></script>
<script type="text/javascript">
 Miform.btnUpdate.addEventListener("click", function () { 
 if (!confirm("Desea Limpiar el Formulario?"))
  event.preventDefault();
});
 </script>

<head>
	<title>Home</title>
<link rel="stylesheet" href="css/Home.css"/>
<script language="javascript" src="js/VLogin.js"></script>
</head>
<body>
<?php
  require_once "./php/Connexion.php";
  $Id = $_REQUEST['Id'];
  $Sentecia="SELECT * FROM aptitudfisica2 WHERE Id_Registro= '$Id'";
  $resultado= $Conexion->query($Sentecia) or die (mysqli_error($Conexion));
  $fila=$resultado->fetch_assoc();
 ?>

<br/><br/>
<center><fieldset align="center">
<form id="Miform" name="Miform" action="MAptitupFisica2.php" method="POST" enctype="multipart/form-data">
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

<center><p><h2> Modificar Prueba de Aptitud Fisica 2</h2></p></center>
<div>
	<button type="submit" id="Update" name="btnUpdate" value="Update">Actualizar</button>
</div>

<p><h5>MEDIDAS ANTROPOMETRICAS</h5></p>
<table><tr>
<div id="Clear">
<td width="50%" height="500" style="background-color:lightgray;">
<input type="hidden" name="Id"  value="<?php echo $fila['Id_Registro']; ?>"/>

<br>

<label>EVALUACION CAPACIDAD AEROBICA:</label>
<br/><br/>
    Id_Paciente:
    <input type="text" id="Id_Paciente" name="Id_Paciente" value="<?php echo $fila['Id_Paciente']; ?>" required placeholder=" Id_Paciente"/><br>
    <br/>

    <label>Pulso 15Seg:</label>
    <input type="text" id="Pulso" name="Pulso" value="<?php echo $fila['Pulso']; ?>" required placeholder=" Pulso"/><br>
    <br/>

    <label>Latidos FCrecup:</label>
    <input type="text" id="LatidosFCrecup" name="Latidos" value="<?php echo $fila['Latidos']; ?>" required placeholder=" Latidos FCrecup"/>Latidos/Min<br>
    <br/>

    <label>VO max Estimado:</label>
    <input type="text" id="VoEstimado" name="VomaxEstimado" value="<?php echo $fila['VomaxEstimado']; ?>" required placeholder=" VoEstimado"/>Ml/Kg-min 2<br>
    <br/>

    <label>PRUEBA POTENCIA ANAEROBICA:</label><br/>
    <label>P 30seg:</label>
		<input type="text" id="Pe" name="PeUno" value="<?php echo $fila['PeUno']; ?>" required placeholder=" Pe"/>.
		<br>

    <label>P 30seg:</label>
		<input type="text" id="Pee" name="PeDos" value="<?php echo $fila['PeDos']; ?>" required placeholder=" Pee"/>
		<br>
    
    <label>P 30seg:</label>
		<input type="text" id="Pe" name="PeTres" value="<?php echo $fila['PeTres']; ?>" required placeholder=" Pe"/>.
		<br>
   
    <label>P 30seg:</label>
    <input type="text" id="Pee" name="PeCuatro" value="<?php echo $fila['PeCuatro']; ?>" required placeholder=" Pee"/><br>
    <br/>

    <label>EXPLORACION DE LA FORTALEZA MUZCULAR:</label><br/>
    <br/>
    <label>Dinanómetro de La Mano:</label><br/>
    <label>Cotege() la Mano dominante:</label><br/>
    <br/>
    <label>Derecha:</label>KG
    <input type="text" name="DerKG" value="<?php echo $fila['DerKG']; ?>" required placeholder=" Mano"/>KG<br>
    <label>Clasificacion:</label>
    <input type="text" name="ClasificacionDer" value="<?php echo $fila['ClasificacionDer']; ?>" required placeholder=" Clasificacion"/><br>
    <br/>
    <label>Izquierda:</label>KG
    <input type="text" id="IzqKG" name="IzqKG" value="<?php echo $fila['IzqKG']; ?>" required placeholder=" Flexión Troncal"/>KG<br>
    <label>Clasificacion:</label>
    <input type="text" name="ClasificacionIzq" value="<?php echo $fila['ClasificacionIzq']; ?>" required placeholder=" Claisificaicón"/>
    <br/><br/>  

    <label>Dinanómetro de Piernas y Espalda:</label><br/>
    <label>Cotege() la Pierna dominante:</label><br/>
    <br/>
    <label>Flexión de Piernas:</label>
    <input type="text" id="FlexiónPiernas" name="FlexionPiernas" value="<?php echo $fila['FlexionPiernas']; ?>" required placeholder=" Flexion pierna"/>KG<br>
    <label>Clasificacion:</label>
    <input type="text" id="FlexiónPiernasCla" name="ClasificacionPier" value="<?php echo $fila['ClasificacionPier']; ?>" required placeholder=" Clasificacion"/><br>
    <br/>
    <label>Flexión Troncal:</label>
    <input type="text" id="FlexiónTroncal" name="FlexionTrunc" value="<?php echo $fila['FlexionTrunc']; ?>" required placeholder=" Flexión Troncal"/>KG<br>
    <label>Clasificacion:</label>
    <input type="text" id="FlexiónTroncalCla" name="ClasificacionTrunc" value="<?php echo $fila['ClasificacionTrunc']; ?>" placeholder=" Claisificaicón"/>
    <br/><br/>  

		
		<td width="100%" height="500" align="center" style="background-color:lightgray;">
 
    <label>EVALUACION DE LA FORTALEZ Y RELATIVA MEDIANE DINANOMETRIA:</label><br/>
    <br/> 
    <label>Foltaleza Total:</label>
    <input type="text" name="FortalezaTot" value="<?php echo $fila['FortalezaTot']; ?>" required placeholder=" FoltalezaTotal"/>KG<br>
    <label>Clasificacion:</label>
    <input type="text" name="Clasificacionfort" value="<?php echo $fila['Clasificacionfort']; ?>" required placeholder=" Clasificacion"/><br>
    <br/>
    <label>Fortaleza Relativa:</label>
    <input type="text" name="FortalezaRelat" value="<?php echo $fila['FortalezaRelat']; ?>" required placeholder="Fortaleza Relativa"/>KG<br>
    <label>Clasificacion:</label>
    <input type="text" name="ClasificacionRelat" value="<?php echo $fila['ClasificacionRelat']; ?>" requiered placeholder=" Claisificaicón"/>
     <br/><br/>  

     <label>Lagartijas en 1 Min:</label>
    <input type="text" name="Lagartijas" value="<?php echo $fila['Lagartijas']; ?>" required placeholder=" Lagartijas"/>REPS<br>
    <label>Clasificacion:</label>
    <input type="text" name="ClasificacionLag" value="<?php echo $fila['ClasificacionLag']; ?>" required placeholder=" Clasificacion"/><br>
    <br/>
    <label>Abdominales en 1 Min:</label>
    <input type="text" id="Abdominales" name="Abdominales" value="<?php echo $fila['Abdominales']; ?>" required placeholder="Abdominales"/>REPS<br>
    <label>Clasificacion:</label>
    <input type="text" id="ClasificacionAbd" name="ClasificacionAbd" value="<?php echo $fila['ClasificacionAbd']; ?>" name="ClasificacionAbd" required placeholder=" Claisificaicón"/>
    <br/><br/>    

    <label>EVALUACION DE LA FLEXIBILIDAD:</label><br/>
    <br/>
    <label>Flexión Troncal:</label>
    <input type="text" name="FlexionTronc" value="<?php echo $fila['FlexionTronc']; ?>" required placeholder=" Foltaleza TroncalFle"/>PULG<br>
    <label>Clasificacion:</label>
    <input type="text" name="ClasificacionTroncal" value="<?php echo $fila['ClasificacionTroncal']; ?>" required placeholder=" Clasificacion"/><br>
    <br/>
    <label>Indice de Masa Corporal:</label>
    <input type="text" id="MasaCorporal" name="MasaCorporal" value="<?php echo $fila['MasaCorporal']; ?>" required placeholder="Masa Corporal"/>KG<br>
    <label>Clasificacion:</label>
    <input type="text" id="MasaCorporalCla" name="ClasificacionMasa" value="<?php echo $fila['ClasificacionMasa']; ?>" required placeholder=" Claisificaicón"/><br>
    <label>Sentado y Estirar:</label>
    <input type="text" id="SentadoEstirar" name="SentadoEstirado" value="<?php echo $fila['SentadoEstirado']; ?>" required placeholder=" Sentado Estirar"/>CM
	<br/><br/>
    
    <label for="Imagenes"></label>
	<input type="file" id="archivo" name="archivo" multiple="">
</div>
</table>
</form>
</fieldset></center>
<?php
require_once './php/Connexion.php';
if(isset($_POST['btnUpdate']))
{
    $Id_Paciente = $_POST['Id_Paciente'];
    $Pulso = $_POST['Pulso'];
    $Latidos = $_POST['Latidos'];
    $VomaxEstimado = $_POST['VomaxEstimado'];
    $PeUno = $_POST['PeUno'];
    $PeDos = $_POST['PeDos'];
    $PeTres = $_POST['PeTres'];
    $PeCuatro = $_POST['PeCuatro'];
	$DerKG = $_POST['DerKG'];
    $ClasificacionDer = $_POST['ClasificacionDer'];
    $IzqKG = $_POST['IzqKG'];
    $ClasificacionIzq  = $_POST['ClasificacionIzq'];
    $FlexionPiernas = $_POST['FlexionPiernas'];
    $ClasificacionPier = $_POST['ClasificacionPier'];
    $FlexionTrunc = $_POST['FlexionTrunc'];
    $ClasificacionTrunc = $_POST['ClasificacionTrunc'];
    $FortalezaTot = $_POST['FortalezaTot'];
    $Clasificacionfort = $_POST['Clasificacionfort'];
    $FortalezaRelat = $_POST['FortalezaRelat'];
    $ClasificacionRelat = $_POST['ClasificacionRelat'];
    $Lagartijas = $_POST['Lagartijas'];
	$ClasificacionLag = $_POST['ClasificacionLag'];
	$Abdominales = $_POST['Abdominales'];
	$ClasificacionAbd  = $_POST['ClasificacionAbd'];
	$FlexionTronc = $_POST['FlexionTronc'];
	$ClasificacionTroncal  = $_POST['ClasificacionTroncal'];
	$MasaCorporal = $_POST['MasaCorporal'];
    $ClasificacionMasa = $_POST['ClasificacionMasa'];
    $SentadoEstirado = $_POST['SentadoEstirado'];
	
    ///UPDATE
    $Query = "UPDATE aptitudfisica2 SET
    Id_Paciente = '$Id_Paciente', Pulso ='$Pulso',
    Latidos='$Latidos', VomaxEstimado='$VomaxEstimado',
    PeUno='$PeUno', PeDos='$PeDos', PeTres='$PeTres',
    PeCuatro='$PeCuatro', DerKG='$DerKG',
    ClasificacionDer='$ClasificacionDer', IzqKG='$IzqKG',
	ClasificacionIzq='$ClasificacionIzq',
    FlexionPiernas='$FlexionPiernas',
    ClasificacionPier='$ClasificacionPier',
	FlexionTrunc='$FlexionTrunc',
    ClasificacionTrunc='$ClasificacionTrunc',
    FortalezaTot='$FortalezaTot',
	Clasificacionfort='$Clasificacionfort',
    FortalezaRelat='$FortalezaRelat',
    ClasificacionRelat='$ClasificacionRelat',
    Lagartijas='$Lagartijas',
    ClasificacionLag='$ClasificacionLag',
    Abdominales='$Abdominales',
    ClasificacionAbd='$ClasificacionAbd',
	FlexionTronc='$FlexionTronc',
    ClasificacionTroncal='$ClasificacionTroncal',
    MasaCorporal='$MasaCorporal',
	ClasificacionMasa='$ClasificacionMasa',
    SentadoEstirado='$SentadoEstirado'
 
WHERE Id_Registro = '$Id' ";
$Ejecutar = $Conexion->query($Query) or die ("Error al Actualizar los datos ".mysqli_error($Conexion));
foreach ($_FILES["archivo"]['tmp_name'] as $key => $tmp_name)
{
	if ($_FILES["archivo"]["name"][$key])
	{
		$filename = $_FILES["archivo"]["name"][$key];
		$source = $_FILES["archivo"]["tmp_name"][$key];

		$directorio = 'Imagenes/Fotos/';

		if(!file_exists($directorio))
		{
			mkdir($directorio, 0777) or die ("No se puede crear el Directorio");
		}

		$dir = opendir($directorio);
		$target_path = $directorio.'/'.$filename;

		if (move_uploaded_file($source, $target_path))
		{
			echo "El Archivo $filename se ha almacenado Correctamente";
		}else{
			echo "Ha ocurrido un ERROR, por favor intetelo nuevamente.<br>";
		}
		closedir($dir);
	}
}

if ($Ejecutar)
{
    echo "<script>alert('Registro Actualizados Correctamente!')</script>";
}

}
?>
<script type="text/javascript">
function Limpiar() {
var t = document.getElementById("Clear").getElementsByTagName("input");
for (var i=0; i<t.length; i++) {
    t[i].value = "";
    }
}
</script>
</body>
</html>