<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>FUNDAHIP</title> 
</head>
<body>

<head>
	<title>Login Page</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel = "stylesheet" href="css/Login.css"
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>



<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Iniciar Sesion</h3>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center ">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>

    <!--
<br/><br/>
    
    <center><h1>Bienvenid@s A</h1></center>

    <center><label><h2>FUNDAHIP</h2></label></center>

    <div class="text-center">
        <div class="btn-group-lg">
            <button type="button" id="btnLogin" class="btn btn-info" data-toggle="modal" data-target="#modalCP">Log in    </button>
        </div>
    </div>
   
    <div class="modal fade" id="modalCP" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-content" role="document">

            <div class="modal-content">

                <div class="modal-body mb-0 p-0">
                    
                    
                    <div>
                        <div class="center-block">
                            <h3 style="text-align:center">
                            </h3>
                        </div>

                        <img src="fundahip.jpg" height="200" width="560">

                        <form id="Miform" method="POST">
                          
                           <label id="Usuario">Usuario:</label> 
                            <div class="form-group-sm">
                            <input class="form-control" type="text" id="Usuario"  name="Usuario" placeholder="Digite un Usuario" />
                            </div><br />

                            
                            <label for="pwd" id="Contrasena">Contraseña:</label>
                            <div class="form-group-sm">
                              <input class="form-control" type="password" id="Contrasena" name="Contrasena" placeholder="Digite una Contraseña" />
                           </div><br />


                    <div class="text-center">
                        <br />
                        <button class="btn btn-success" type="submit" id="btnLog" data-toggle="collapse" data-target="#Result" name="btnEntrar" value="Entrar">Sign in</button>
                        <button class="btn btn-danger" type="reset" id="btnLog" data-toggle="collapse" data-target="#Result" name="btnLog" value="Limpiar">Clear</button>
                    </div><br />
          
                
                  </form>
                   -->


            <php><?php
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
                    //header("Location:Home.php");
                    echo "Usuario O contraseña son Incorrectos";
                }
                mysqli_free_result($result);
                mysqli_close($Conexion);
                }
                ?></php>
                  
                </div>
                </div>
            
            </div>
        </div>
    </div>

   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/3.3/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://getbootstrap.com/docs/3.3/assets/js/ie10-viewport-bug-workaround.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>