<?php
    
    session_start();

    if (isset($_SESSION['user_id'])){
		header('Location: http://localhost/SW/home/index.php');
    }
    
    require 'DB.php';

    if (!empty($_POST['email']) && !empty($_POST['password'])){
        $records = $conn->prepare('SELECT id_usuario, email, password FROM users WHERE email=:email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results=$records->fetch(PDO::FETCH_ASSOC);

        $message = '';

        if (count($results) > 0 && password_verify($_POST['password'], $results['password'])){
            $_SESSION['user_id'] = $results['id_usuario'];
            header('Location: http://localhost/SW/home/index.php');    
        } else {
            $message = 'Sorry, invalid username or password';
        }
    }

?>


<!DOCTYPE HTML>
<!--
	Identity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
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
							<h1>Inicia Sesión</h1>
						</header>
						
						
						<h3>Bienvenido, por favor ingresa tus </h3>
						<h3>datos para acceder a tu cuenta</h3>

						<?php if (!empty($message)) : ?>
    					<p><?= $message ?></p>
    					<?php endif; ?>

						<form method="post" action="login.php">
							<div class="fields">
								<div class="field">
									<input type="text" name="email" id="name" placeholder="Correo" />
								</div>
								<div class="field">
									<input type="password" name="password" id="email" placeholder="Contraseña" />
								</div>
							<!--
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
							</div>
							<ul class="actions special">
								<li><input type="submit" href="Ingresos y Gastos/Ingresos/index.php" value="Login">
								
								
								</li>
								<a></a>
								<a href="../index.php" class="button">Atras</a>
							</ul>
							
						</form>
						
					
						<footer>
								
								<ul class="actions special">
									<h3>¿No tiene una cuenta?</h3>
									<li><a href="Register.php" class="button">Crear Cuenta</a></li>
								</ul>
						</footer>
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