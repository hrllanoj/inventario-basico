<?php
	ob_start();
	session_start();
	include('inc/header.php');
	$loginError = '';
//session_start();
//$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
//if(!empty($sessData['status']['msg'])){
//    $statusMsg = $sessData['status']['msg'];
//    $statusMsgType = $sessData['status']['type'];
//    unset($_SESSION['sessData']['status']);
//}
?>
<?php include('inc/container.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">
	<style>
		html,
		body,
		body>.container {
			height: 95%;
			width: 100%;
		}

		body>.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}

		#title {
			text-shadow: 2px 2px 5px #000;
		}
	</style>
</head>
<body>
	<div class="col-lg-4 col-md-5 col-sm-10 col-xs-12">
		<div class="card rounded-0 shadow">
			<div class="card-header">
				<div class="card-title h3 text-center mb-0 fw-bold">Registro de Usuario</div>
			</div>
			<div class="card-body">
				<div class="container-fluid">
					<form method="post" action="userAccount.php">
						<div class="form-group">
							<?php if ($loginError) { ?>
								<div class="alert alert-danger rounded-0 py-1"><?php echo $loginError; ?></div>
							<?php } ?>
						</div>
						<div class="mb-3">
							<label for="first_name" class="control-label">Nombres:</label>
							<input type="text" class="form-control rounded-0" placeholder="Nombres" autofocus="" required="">
						</div>
						<div class="mb-3">
							<label for="last_name" class="control-label">Apellidos:</label>
							<input type="text" class="form-control rounded-0" placeholder="Apellidos" required="">
						</div>
						<div class="mb-3">
							<label for="phone" class="control-label">Número Telefónico:</label>
							<input type="text" class="form-control rounded-0" placeholder="Número Telefónico" required="">
						</div>
						<div class="mb-3">
							<label for="email" class="control-label">Correo:</label>
							<input name="email" id="email" type="email" class="form-control rounded-0" placeholder="Dirección de Correo" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" required>
						</div>
						<div class="mb-3">
							<label for="password" class="control-label">Contraseña:</label>
							<input type="password" class="form-control rounded-0" id="password" name="password" placeholder="Contraseña" required>
						</div>
						<div class="mb-3">
							<label for="password" class="control-label">Confirmar Contraseña:</label>
							<input type="password" class="form-control rounded-0" id="password" name="confirm_password" placeholder="Confirmar Contraseña" required>
						</div>
						<div class="d-grid">
							<button type="submit" name="login" class="btn btn-primary rounded-0">Crear Cuenta</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>