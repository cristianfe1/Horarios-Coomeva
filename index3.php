<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Horario UTI (Soporte Aplicativo)</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- FullCalendar -->
    <link href='css/fullcalendar.css' rel='stylesheet' />


    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
                </style>                                                        
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and medía queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a  class="dropdown-toggle" data-toggle="dropdown" href="#"><strong>HORARIOS </strong><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="/Horarios/index.php">HORARIO SA</a></li>
                    <li><a href="/Horarios/index0.php">HORARIO AP</a></li>
                  </ul>
                </li>
                </ul>
                <a class="navbar-brand" href="/Horarios/index2.php">PLANTA GS</a>
                <a class="navbar-brand" href="/Horarios/descarga/Manual del Usuario.pdf" download="Manual Usuario">Descargar PDF</a>
                <a class="navbar-brand" href="/Horarios/index3.php">INSTRUCCIONES</a>
            </li>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Instruccion para el Uso del Horario</h1>
                <p class="lead">Este manuel fue creado para utilizar de manera apropiada la herramienta de horarios en la UTI.
                <br>
                </p>
                <p align="justify" class="lead">1.El calendario contiene una serie de botones que nos permite interactuar con el dependiendo la necesidad, entre estos botones encontramos:
                <br>
                Flechas: Nos permiten elegir el mes, semana, día anterior o siguiente para poder conocer los horarios anteriores y los que siguen.
                <br>
                Hoy: Un boton que nos permite movernos al mes, semana o día en el que nos encontramos actualmente.
                <br>
                Fecha: Nos muestra mes, semana o día del en que nos encontremos.
                <br>
                Variantes: Dependiendo de la opción nos permite ver el calendario por mes, semana o día.
                <br>
                </p>

                <?php
                print "<center><img src=\horarios\imagenes\indice.jpg></center>"
                ?>

                <p align="justify" class="lead">2.Cada horario es representado por un color para no generar confusiones con otros horarios, estos colores no deberan ser cambiados y deberan ser utilizados cada que vez que se quiera crear un nuevo evento con el mismo horario.
                </p>

                <?php
                print "<center><img src=\horarios\imagenes\colores.jpg></center>"
                ?>
                <br>

                <p align="justify" class="lead">3.En la creacion de un evento se debe tener en cuenta los siguientes parametros.
                <br>
            	Descripción: Lo que va aparecer en la linea de evento, este campo se debe llenar con la informacion del evento que se esta creando.
            	<br>
            	Responsable: La persona encargada o que se ve directamente relacionada con este evento.
            	<br>
            	Color: El color que se e va a dar a el evento.
            	<br>
            	Fecha inicio: La fecha y hora en la que se da comienzo al evento.
            	<br>
            	Fecha finalización: La fecha y la hora en la que se da final al evento.
            	</p>
            	<br>

            	<?php
            	print "<center><img src=\horarios\imagenes\crear.jpg></center>"
            	?>
            	<br>

                <p align="justify" class="lead">4.Se pueden generar cambios en los horarios ya creados, dando doble clic en el horario que desea cambiar,
                    aparecera la ventana de editar evento, la cual nos permite generar cambios directamente en la base de datos desde la aplicacion.
                    Los parametros a modificar son los siguientes:
                <br>
                Descripción: Lo que va aparecer en la linea de evento, este campo se debe llenar con la informacion del evento que se esta creando.
                <br>
                Responsable: La persona encargada o que se ve directamente relacionada con este evento.
                <br>     
                Color: El color que se e va a dar a el evento.
                <br>
                Eliminar Evento: Un boton que nos permite eliminar el elemento que estamos editando.
                <br>
                Anotaciones: Un espacio utilizado para informar de los cambios ejercidos al horario, cambio de turno, inasistencia, cancelacion o informar al jefe de algun acontecimiento relacionado con el horario.
                </p>
                <br>

                <?php
                print "<center><img src=\horarios\imagenes\modificar.jpg></center>"
                ?>
                <br>
                <p align="justify" class="lead">5.En el calendario se puede encontrar los días festivos de cada mes en color negro, estos eventos no deben ser eliminados ni modificados, solo se debera crear anotaciones si ocurre algun acontecimiento en dicho día.
                </p>
                <br>

                <?php
                print "<center><img src=\horarios\imagenes\mod_festivo.jpg></center>"
                ?>

            </div>
        </div>


        <!-- jQuery Version 1.11.1 -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        
        <!-- FullCalendar -->
        <script src='js/moment.min.js'></script>
        <script src='js/fullcalendar.min.js'></script>
        <script src="lang/es.js"></script>
        



    </div>
</div>
</nav>
</body>
</html>



                