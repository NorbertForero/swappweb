<!DOCTYPE HTML>
<html>

<head>
    <title>ingresos</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/menu.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <ul id="button" class="superior y:hover activey uly liy liay ">
            <li><a href="/SW/index.php">Swapp</a></li>
            <li><a href=”#”>Inicio</a></li>
            <li><a href="ingresos_extra.html">Ingresos</a></li>
            <li><a href=”#”>Gastos</a></li>
            <li><a href=”#”>Estadisticas</a></li>
            <li><a href="/SW/Logout.php" class="button">Logout</a></li>
        </ul>

        <!-- Main -->
        <section id="main">
            <header>
                <div>
                    <span class="flecha"> <h1 class="titulohome"> Swapp</h1>
                        <p>
                              Somos la voz de la conciencia cuando quieras darte un gustico de más 
                            <br>
                            <br> 
                           <h5> Swapp es tu solución. </h5> 
                        </p>
                        <p>
                            Ingresa a cualquiera de las opciones y empieza a gestionar tus finanzas con seguridad y eficiencia de una forma facil y rapida.
                        </p>
							</span>
                </div>
            </header>
            <br>
            <form method="post" action="#">
                                    <div class="single-testimonial item d-flex flex-row">
                                            <div class="thumb">
                                                <img class="img-fluid" src="images/ingresos.png" alt="">
                                            </div>
                                            <div>
                                                <p>
                                                     Por medio de un formulario por categorías, podras registrar todos tus ingresos mensuales.
                                                </p>
                                                <h4 mt-30 ><a href="ingresos_extra.html"> Registrar Ingresos > </a></h4>
                                            </div>  
                                    </div>                                           
            </form>
            <br>
            <form method="post" action="#">
                    <div class="single-testimonial item d-flex flex-row">
                            <div class="thumb">
                                <img class="img-fluid" src="images/ingresos.png" alt="">
                            </div>
                            <div>
                                <p>
                                     Por medio de un formulario por categorías, podras registrar todos tus ingresos mensuales.
                                </p>
                                <h4 mt-30 ><a href="ingresos_extra.html"> Registrar Deudas > </a></h4>
                            </div>  
                    </div>                                           
            </form>
            <br>
            <form method="post" action="#">
                    <div class="single-testimonial item d-flex flex-row">
                            <div class="thumb">
                                <img class="img-fluid" src="images/ingresos.png" alt="">
                            </div>
                            <div>
                                <p>
                                     Por medio de un formulario por categorías, podras registrar todos tus ingresos mensuales.
                                </p>
                                <h4 mt-30 ><a href="ingresos_extra.html"> Estadisticas > </a></h4>
                            </div>  
                    </div>                                           
            </form>

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