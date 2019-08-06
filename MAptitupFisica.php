<!DOCTYPE html>
<html lang="Es">
<meta charset="utf-8"/>
<meta name="viewport" content="Width=device-width"/>
<head>
	<title>Aptitud Fisica</title>
<link rel="stylesheet" href="css/Home.css"/>
<script language="javascript" src="js/VLogin.js"></script>
</head>
<body>

<?php
  require_once "./php/Connexion.php"; 
  $Id = $_REQUEST['Id'];
  $Sentecia="SELECT * FROM aptitudfisica WHERE Id_Registro= '$Id'";
  $resultado= $Conexion->query($Sentecia) or die (mysqli_error($Conexion));
  $fila=$resultado->fetch_assoc();
 ?>
<br/><br/>
<center><fieldset align="center">
<form name="Myform" action="MAptitupFisica.php" method="POST" onsubmit="">
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

<center><p><h2>Modificar Prueba de Aptitud Fisica</h></p></center>
<div>
	<button type="submit" name="btnUpdate" value="Update">Actualizar</button>
</div>

<p><h5>MODIFICAR MEDIDAS ANTROPOMETRICAS</h5></p>
<table><tr>
<div id="Clear">
<td width="50%" height="500" style="background-color:lightgray;">
<input type="hidden" name="Id"  value="<?php echo $fila['Id_Registro']; ?>"/>

<br>
    <label>DETERMINACION DEL PESO DESEABLE /IDEAL:</label><br>

    <label>Id Paciente:</label>
    <input type="text" id="Id_Paciente" name="Id_Paciente" value="<?php echo $fila['Id_Paciente']; ?>" required placeholder=" Id_Paciente"/><br>
         
    <label>Estatura:</label>
    <input type="text" id="Estatura" name="Estatura" value="<?php echo $fila['Estatura']; ?>" required placeholder=" Estatura"/><br>
   
    <label>Pulgadas:</label>
    <input type="text" id="Pulgada" name="Pulgada" value="<?php echo $fila['Pulgada']; ?>" required placeholder=" Pulgada"/>CM<br>
   
    <label>Peso:</label>
    <input type="text" id="Peso" name="Peso" value="<?php echo $fila['Peso']; ?>" required placeholder=" Peso"/><br>
    
    <label>Libras:</label>
    <input type="text" id="Libras" name="Libras" value="<?php echo $fila['Libras']; ?>" required placeholder=" Libras"/>KG.<br>
    <br/>

    <label>CIRCUMFERENCIA DE LA MUNECA:</label><br>
    <label>Muñeca:</label>
    <input type="text" id="Muneca" name="CirMuneca" value="<?php echo $fila['CirMuneca']; ?>" required placeholder=" Circunferencia Muneca"/><br>
    
    <label>Pulgada:</label>
    <input type="text" id="Pulgada" name="CirPulgada" value="<?php echo $fila['CirPulgada']; ?>" required placeholder=" Circunferencia Pulgada"/>CM.<br>
    
    <label>Tipo de Figura:</label>
    <input type="text" id="TipoFigura" name="CirTipoFigura" value="<?php echo $fila['CirTipoFigura']; ?>" required placeholder="Tipo Figura"/><br>

    <label>Peso Ideal:</label>
    <input type="text" id="PesoIdeall" name="CirPesolb" value="<?php echo $fila['CirPesolb']; ?>" required placeholder=" Peso Ideal libra"/>LBR.<br>
    <input type="text" id="PesoIdealK" name="CirPesoKg" value="<?php echo $fila['CirPesoKg']; ?>" required placeholder=" Peso Ideal kil"/>KG.<br>
    <br/>

    <label>EVALUACION CARDIOVASCULAR:</label><br>
    <label>Frecuencia Cardiaca en Reposo(Latidos/Minuto):</label><br/>
    <label>Sentado:</label>
    <input type="text" id="Sentado" name="Sentado" value="<?php echo $fila['Sentado']; ?>" required placeholder=" Sentado"/>Latidos/Min.<br>
    <label>De Pie:</label>
    <input type="text" id="Depie" name="Depie" value="<?php echo $fila['Depie']; ?>" required placeholder=" De Pie"/>Latidos/Min.<br>
    <label>Clasificacion:</label>
    <input type="text" id="ClasifCardio" name="ClasifCardio" value="<?php echo $fila['ClasifCardio']; ?>" required placeholder=" Clasificacion"/><br/>
    <br/>

    <label>Presion Arterial(MM, Hg, PP, 25-48):</label><br/>
    <label>Sistólica:</label>
    <input type="text" id="Sistolica" name="Sistolica" value="<?php echo $fila['Sistolica']; ?>" required placeholder=" Sistolica"/>MM Hg.<br>
     <label>Clasificacion:</label>
    <input type="text" id="ClasifSistolica" name="ClasifSistolica" value="<?php echo $fila['ClasifSistolica']; ?>" required placeholder=" Clasificacion"/><br>
    <br/>

    <label>Diastólica:</label>
    <input type="text" id="Diatolica" name="Diatolica" value="<?php echo $fila['Diatolica']; ?>" required placeholder=" Diastolica"/>MM Hg.<br>
    <label>Clasificacion:</label>
    <input type="text" id="ClasifDiatolica" name="ClasifDiatolica" value="<?php echo $fila['ClasifDiatolica']; ?>" required placeholder=" Clasificacion"/><br>
    <br/>

    <label>Presion del Pulso:</label>
    <input type="text" id="Presionpuls" name="Presionpuls" value="<?php echo $fila['Presionpuls']; ?>" required placeholder=" Presion del Pulso"/>MM Hg.<br>
    <br/>

  <td width="100%" height="500" align="center" style="background-color:lightgray;">
  <br/>
  <label>EVALUACION DE LA ADIPOSIDAD CORPORAL(Pliegues Cutaneos):</label>
    <br/><br/>

    <label>VARONES:</label>
    <br/>

    <label>Pecho:</label>
    <input type="text" id="VarPecho" name="VarPecho" value="<?php echo $fila['VarPecho']; ?>" required placeholder=" Pecho"/>MM<br>
   
    <label>Abdomen:</label>
    <input type="text" id="VarAbdomen" name="VarAbdomen" value="<?php echo $fila['VarAbdomen']; ?>" required placeholder=" Abdomen"/>MM<br>
    
    <label>Muslo:</label>
    <input type="text" id="VarMuslo" name="VarMuslo" value="<?php echo $fila['VarMuslo']; ?>" required placeholder=" Muslo"/>MM<br>
    
    <label>Total:</label>
    <input type="text" id="VarTotal" name="VarTotal" value="<?php echo $fila['VarTotal']; ?>" required placeholder=" Total"/>MM<br>
    <br/><br/>
   
    <label>MUJERES:</label>
    <br/>
    
    <label>Triceps:</label>
    <input type="text" id="MujTriceps" name="MujTriceps" value="<?php echo $fila['MujTriceps']; ?>" required placeholder=" Triceps"/>MM<br>
    
      <label>Muslo:</label>
    <input type="text" id="MujMuslo" name="MujMuslo" value="<?php echo $fila['MujMuslo']; ?>" required placeholder=" Muslo"/>MM<br>
    
    <label>Cresta Iliaca:</label>
    <input type="text" id="MujCrestalliaca" name="MujCrestalliaca" value="<?php echo $fila['MujCrestalliaca']; ?>" required placeholder=" Cresta Iliaca"/>MM<br>

    <label>Total:</label>
    <input type="text" id="MujTotal" name="MujTotal" value="<?php echo $fila['MujTotal']; ?>" required placeholder=" Total"/>MM<br>
    <br/>

    <label>Porcenteje de grasa:</label><br/>
    <input type="text" id="Porcentejegrasa" name="PorcGrasa" value="<?php echo $fila['PorcGrasa']; ?>" required placeholder=" Porcenteje de grasa"/><br>
    <label>Clasificacion:</label><br/>
    <input type="text" id="Clasificaciongrasa" name="Clasificacionlb" value="<?php echo $fila['Clasificacionlb']; ?>" required placeholder=" Clasificacion grasa"/>LBR<br>
    <br/>

    <label>Peso grasa (MCG):</label><br/>
    <input type="text" id="PGrasalb" name="PGrasalb" value="<?php echo $fila['PGrasalb']; ?>" required placeholder=" Peso Grasa LIB"/>LBR<br>
    <input type="text" id="PGrasaKg" name="PGrasaKg" value="<?php echo $fila['PGrasaKg']; ?>" required placeholder=" Peso Grasa KG" />KG<br>
    <br/>

    <label>Peso Liso (MCA):</label><br/>
    <input type="text" id="PLisolb" name="PLisolb" value="<?php echo $fila['PLisolb']; ?>" required placeholder=" Peso Liso"/>LBR<br>
    <input type="text" id="PLisoKg" name="PLisoKg" value="<?php echo $fila['PLisoKg']; ?>" required placeholder=" Peso Liso KG" />KG<br>
    <br/>

    <label>Indice de Masa Corporal:</label><br/>
    <input type="text" id="MasaCorporal" name="MasaCorporal" value="<?php echo $fila['MasaCorporal']; ?>" required placeholder=" Masa Corporal"/><br>
    <label>Clasificacion:</label><br/>
    <input type="text" id="ClasifMasaCorp" name="ClasifMasaCorp" value="<?php echo $fila['ClasifMasaCorp']; ?>" required placeholder=" Clasificacion Masa"/>LBR<br>
    <br/>
    </div>
</table>
</form>
</fieldset></center>
<?php
require_once './php/Connexion.php';
if(isset($_POST['btnUpdate']))
{
    $Id_Paciente = $_POST['Id_Paciente'];
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

    $Query = "UPDATE aptitudfisica SET 
    Id_Paciente = '$Id_Paciente', Estatura ='$Estatura',
    Pulgada ='$Pulgada', Peso ='$Peso', Libras ='$Libras',
    CirMuneca ='$CirMuneca', CirPulgada ='$CirPulgada', 
    CirTipoFigura = '$CirTipoFigura', CirPesolb = '$CirPesolb',
    CirPesoKg = '$CirPesoKg', Sentado = '$Sentado', Depie = '$Depie',
    ClasifCardio = '$ClasifCardio', Sistolica = '$Sistolica',
    ClasifSistolica = '$ClasifSistolica', Diatolica = '$Diatolica ',
    ClasifDiatolica = '$ClasifDiatolica', Presionpuls = '$Presionpuls',
    VarPecho = '$VarPecho', VarAbdomen = '$VarAbdomen',
    VarMuslo = '$VarMuslo', VarTotal ='$VarTotal',
    MujTriceps = '$MujTriceps', MujMuslo = '$MujMuslo',
    MujCrestalliaca = '$MujCrestalliaca', MujTotal = '$MujTotal',
    PorcGrasa = '$PorcGrasa', Clasificacionlb = '$Clasificacionlb',
    PGrasalb = '$PGrasalb', PGrasaKg = '$PGrasaKg', PLisolb = '$PLisolb',
    PLisoKg = '$PLisoKg', MasaCorporal = '$MasaCorporal',
    ClasifMasaCorp = '$ClasifMasaCorp'

WHERE Id_Registro = '$Id' ";
$Ejecutar = $Conexion->query($Query) or die ("Error al Actualizar los datos ".mysqli_error($Conexion));
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