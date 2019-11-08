<!DOCTYPE HTML>
<html>
<?php
    require 'DB.php';
    
    $message = '';

    if (!empty($_POST['nombres']) && !empty($_POST['apellidos']) && !empty($_POST['email']) && !empty($_POST['password'])){
        $sql = "INSERT INTO users (nombres, apellidos, email, password) VALUES (:nombres, :apellidos,:email, :password)";
		$stmt = $conn->prepare($sql);
		$stmt-> bindParam (':nombres',$_POST['nombres']);
		$stmt-> bindParam (':apellidos',$_POST['apellidos']);
        $stmt-> bindParam (':email',$_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt-> bindParam (':password', $password);

        if ($stmt->execute()){
            $message = 'Successfully created new user!!';
        } else {
            $message = 'Sorry, an error has ocurred!!';
        }
    }
?>
	<head>
		<title>Swapp</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						
						<header>
							<span class="avatar"><img src="images/user.png" alt="" /></span>
							<h1>Registro</h1>
						</header>
						
						
						<h3>Bienvenido, por favor ingresa tus </h3>
						<h3>datos para registrar tu cuenta</h3>
						<form method="post" action="Register.php">
							<div class="fields">
								<div class="field">
									<input type="text" name="nombres" id="name" placeholder="Nombres" />
								</div>
								<div class="field">
									<input type="text" name="apellidos" id="name" placeholder="Apellidos" />
								</div>
								<div class="field">
									<input type="text" name="email" id="name" placeholder="Correo" />
								</div>
								<div class="field">
									<input type="password" name="password" id="email" placeholder="Contraseña" />
								</div>
							</div>
							<div>
								<ul class="actions special">
									<li><input href="/SW/login.php" type="submit"  value="Siguiente"><a href="login.php" class="button">Siguiente</a></li>	
									<li><a href="login.php" class="button">Atras</a></li>
								</ul>
							</div>
													
						</form>
					</section>
			</div>

		<!-- Scripts -->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>

	</body>
</html>


<!--
	LINEA 45
								<div class="field">
									<select name="department" id="department">
										<option value="">Department</option>
										<option value="sales">Sales</option>
										<option value="tech">Tech Support</option>
										<option value="null">/dev/null</option>
									</select>
								</div>
								<div class="field">
									<textarea name="message" id="message" placeholder="Message" rows="4"></textarea>
								</div>
								<div class="field">
									<input type="checkbox" id="human" name="human" /><label for="human">I'm a human</label>
								</div>
								<div class="field">
									<label>But are you a robot?</label>
									<input type="radio" id="robot_yes" name="robot" /><label for="robot_yes">Yes</label>
									<input type="radio" id="robot_no" name="robot" /><label for="robot_no">No</label>
								</div>
							-->