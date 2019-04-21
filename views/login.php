<?=require_once 'config\parameters.php'?>

<head>
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Login Candidatas UES</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="<?=base_url?>assets/css/bootstrap.css" rel="stylesheet" />
    <link href="<?=base_url?>assets\css\loginCSS.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url?>assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
</head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    
<head>
	<title>My Awesome Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>

<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="<?=base_url?>assets\img\logo-candidatas.jpeg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="<?=base_url?>alumno/login" method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="CURP" class="form-control input_user" value="" placeholder="CURP" required>
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="text" name="expediente" class="form-control input_pass" value="" placeholder="Expediente" required>
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Recuerdame</label>
							</div>
						</div>
					
				</div>
				<div class="d-flex justify-content-center mt-3 login_container">
					<button type="submit" name="button" class="btn login_btn">Iniciar Session</button>
				</div>
				</form>
				<div class="mt-4">
					<?php if($contraCorrecta = false):?>
						<h3>Curp o expediente incorrecto</h3>
					<?php endif;?>
					<div class="d-flex justify-content-center links">
						¿No tienes cuenta? <a href="#" class="ml-2">Registrarse</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="<?=base_url?>candidata/index">-volver a inicio</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
