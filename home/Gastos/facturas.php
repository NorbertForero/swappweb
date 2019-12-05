<!DOCTYPE HTML>
<html>
	<head>
		<title>gastos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/css/menu.css"/>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	</head>
	<body class="is-preload" background="images/avatar.png">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							<div>
							<span class="flecha"> <h1> <img src="images/flecha.png" alt="" width="30px" height="30px" /> Facturas</h1>
							</span>
						</div>
						</header>
						<br>

						  <form>
							<div class="form-group">
							  <label for="banco">Número de Factura</label>
							  <input type="texto" class="form-control" id="banco" 
									 aria-describedby="Ingresa tu Factura" placeholder="Ingresa tu Factura">
							</div>
	
							  <div class="form-group">
								<label for="valor">Valor</label>
								<input type="int" class="form-control" id="valor" 
									   aria-describedby="Ingresa el valor" placeholder="$">
							  </div>
							  <div class="form-group">
								<label for="Descripcion">Descripción o nota</label>
								<input type="texto" class="form-control" id="Descripcion" 
									   aria-describedby="Ingresa la Descripción" placeholder="Ingresa la Descripción">
							  </div>
							  <div class="form-group">
								<label for="fecha">Fecha de pago de factura</label>
								<input type="date" class="form-control" id="fecha" 
									   aria-describedby="dd/mm/aaaa" placeholder="dd/mm/aaaa">
							  </div>

							  <div class="form-group row">
								<div class="col-sm-2">Tipo de gasto</div>
								<div class="col-sm-10">
								  <div class="form-check">
								<label class="form-check-label">
								  <input class="form-check-input" type="radio" id="robot_yes" name="Variable" /><label for="robot_yes">Variable</label>
									<input class="form-check-input" type="radio" id="robot_no" name="Fijo" /><label for="robot_no">Fijo</label>
								</label>
						  </form>
							</div>
							</div>
					 
						<div>
						 	 <a class="buttonFormulario" href="../Gastos/home_gastos.php"> Guardar</a>
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