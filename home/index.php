<!DOCTYPE HTML>
<html>

<head>
    <title>ingresos</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

    <!-- Wrapper -->  
    <div id="main-menu">

            <div class="container main-menu" id="main-menu">
                    <div class="row align-items-center justify-content-between">
                        <nav id="nav-menu-container">
                            <ul class="nav-menu">
                                <li class="menu-active"><a href="../index.php">Swapp</a></li>
                                <li><a href="../home/index.php">Home</a></li>
                                <li><a href="../home/Ingresos/home_ingresos.php">Ingresos</a></li>
                                <li><a href="../home/Gastos/home_gastos.php">Gastos</a></li>
                                <li><a href="../home/graficas/grafica.php">Estadisticas</a></li>
                        </ul>
                        <div >
                            <h3 class="titulo-menu"> Bienvenido:</h3>
                            <a title="Cerrar sesión" href="../Logout.php"><img class="img-menu" src="../home/Ingresos/images/logout.png" width="80px" alt=""></a>
                        </div>
                        </nav>
                    </div>
            </div>
<div id="wrapper">            
        <!-- Main -->
        <section id="main">
            <header>
                <div>
                    <span class="texthome"> <h1 class="texthome"> Swapp</h1>
                        <br> 
                     <p class="p">
                         Ingresa a cualquiera de las opciones y empieza a gestionar tus finanzas con seguridad y eficiencia de una forma facil y rapida.
                     </p>      
                        <div class="hero-nav-area">
                                    <p class="text-white link-nav"><img class="img-fluid" src="images/swapp.png" width="600px"></p>
                                </div>
							</span>
                </div>
            </header>
            <br>
            <form method="post" action="#">
                                    <div class="single-testimonial item d-flex flex-row">
                                            <div class="thumb">
                                                <img class="img-fluid" src="images/ahorro.png"  width="90px" alt="">
                                            </div>
                                            <div>
                                                <p>
                                                     Por medio de un formulario por categorías, podras registrar todos tus ingresos mensuales.
                                                </p>
                                                <h4 mt-30 ><a href="../home/Ingresos/home_ingresos.php"> Registrar Ingresos > </a></h4>
                                            </div>  
                                    </div>                                           
            </form>
            <br>
            <form method="post" action="#">
                    <div class="single-testimonial item d-flex flex-row">
                            <div class="thumb">
                                <img class="img-fluid" src="images/gastos.png" width="90px"  alt="">
                            </div>
                            <div>
                                <p>
                                     Por medio de un formulario por categorías, podras registrar todos tus Gastos mensuales.
                                </p>
                                <h4 mt-30 ><a href="../home/Gastos/home_gastos.php"> Registrar Gastos > </a></h4>
                            </div>  
                    </div>                                           
            </form>
            <br>
            <form method="post" action="#">
                    <div class="single-testimonial item d-flex flex-row">
                            <div class="thumb">
                                <img class="img-fluid" src="images/estadistica.png" width="90px" alt="">
                            </div>
                            <div>
                                <p>
                                     Por medio de graficas podras ver todos tus movimientos y estadisticas financieras.
                                </p>
                                <h4 mt-30 ><a href="../home/graficas/grafica.php"> Estadisticas > </a></h4>
                            </div>  
                    </div>                                           
            </form>

    </div>
</div>

    <!-- Scripts -->
    <script>
        if ('addEventListener' in window) {
            window.addEventListener('load', function() {
                document.body.className = document.body.className.replace(/\bis-preload\b/, '');
            });
            document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
        }
    </script>

</body>

</html>