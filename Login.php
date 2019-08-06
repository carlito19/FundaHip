<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<head>
<title>Login</title>
<link rel="styleSheet" href="css/Login.css"/>
<script src="js/Validaciones.js"></script>
</head>
<body>
<br/><br/>
<br/><br/>
<br/><br/>
<center>
<fieldset>
<br/><br/>
<form name="form1" action="" method="POST" onsubmit="return validateForm(this)">
<legend>Usuarios Registrados</legend>
<div align="center">
<img src="Fundah" width="300" height="150" align="center">
</div>

<br/><br/>
<label for="Usuario">Cedula:</label>
<input type="text" name="Usuario" required placeholder="Su Usuario es" onfocus="restaurar()"/>
<br/><br/>
<label for="contrasena">Contraseña:</label>
<input type="Password" name="Contrasena" required placeholder="Su contraseña es" onfocus="restaurar()"/>
<br/><br/><br/>

<!--Aqui los Bontones-->
<div align="center">
<input type="submit" name="btnEntrar" value="Entrar"/>
<input type="reset"  value="Borrar"/>
</div>
<br/><br/>
</form>
<?php
require_once "./php/Connexion.php";
if (isset($_POST['btnEntrar']))
{
$Usuario= $_POST['Usuario'];
$Contrasena= $_POST['Contrasena'];

$Query = "SELECT * FROM login WHERE Usuario= '$Usuario' and Contrasena='$Contrasena'";
$result = mysqli_query($Conexion, $Query);

$filas=mysqli_num_rows($result);
if($filas>0)
{
    header("Location:Home.php");
}else{
    echo "Usuario O contraseña son Incorrectos";
}
mysqli_free_result($result);
mysqli_close($Conexion);

}
?>
</fieldset>
<br/><br/>
</center>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
</body>
</html>
