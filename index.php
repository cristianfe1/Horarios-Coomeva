<?php
require_once('bdd.php');


$sql = "SELECT id, title, start, end, color, resp, anota FROM events ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Horario Soporte Aplicativo (UTI)</title>

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
	#calendar {
		max-width: 800px;
	}
	.col-centered{
		float: none;
		margin: 0 auto;
	}
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
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
                <a class="navbar-brand" href="/Horarios/descarga/Horario_GS.xlsx" download="Horario_GS">Descargar Excel</a>
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
                <h1>Horario Soporte Aplicativo (UTI)</h1>
                <p class="lead">Puede programar sus fechas dando clic en el calendario o seleccionando un rango especifico <br>
                (No oprimir la tecla ENTER para separa lineas cuando se esten efectuando cambios a los horarios)</p>
                <table border="1" align="center" bgcolor=dddddd>
				<tr>
		    	<td colspan="4" align="center" bgcolor="#31bc86"><font color="#FFFFFF"><strong>Tipos de Horarios</strong></font></td>
		</tr>
		<tr bgcolor="#31bc86">
		    <td><font color="#FFFFFF"><strong>Horario</strong></font></td>
		    <td align="center"><font color="#FFFFFF"><strong>Lunes a Viernes</strong></font></td>
		    <td align="center"><font color="#FFFFFF"><strong>Sabado</strong></font></td>
		</tr>
		<tr bgcolor="#0071c5">
		    <td><font color="#FFFFFF">Horario 1 </font></td>
		    <td align="center"><font color="#FFFFFF"> 07:30 a 12:20 - 14:00 a 18:00 </font></td>
		    <td align="center"><font color="#FFFFFF">- </font></td>
		</tr>
		<tr bgcolor="#FF0000">
		    <td><font color="#FFFFFF">Horario 2 </font></td>
		    <td align="center"><font color="#FFFFFF">07:00 a 11:50 - 14:00 a 18:00</font></td>
		    <td align="center"><font color="#FFFFFF">-</font></td>
		</tr>
		<tr bgcolor="#008000">
		    <td><font color="#FFFFFF">Horario 3 </font></td>
		    <td align="center"><font color="#FFFFFF">10:30 a 14:00 - 15:30 a 19:30</font></td>
		    <td align="center"><font color="#FFFFFF">09:00 a 12:30 - 13:30 a 15:30</font></td>
		</tr>
		<tr bgcolor="#FFD700">
		    <td><font color="#FFFFFF">Horario 4 </font></td>
		    <td align="center"><font color="#FFFFFF">10:30 a 14:00 - 15:30 a 19:30</font></td>
		    <td align="center"><font color="#FFFFFF">07:00 a 11:30 - 12:30 a 13:30</font></td>
		</tr>
		</table>
		<br>
                <div id="calendar" class="col-centered">
                </div>

            </div>


			
        </div>
        <!-- /.row -->
        
		
		<!-- Modal -->
		<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="addEvent.php">
			
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Añadir evento</h4>
			  </div>
			  <div class="modal-body">
				
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Descripción</label>
					<div class="col-sm-10">
					  <!--<input type="text" name="title" class="form-control" id="title" placeholder="Descripción">-->
					  <!-- Andres Agrego Esto-->
					  <textarea name="title" class="form-control" id="title" placeholder="Descripción" rows="10"></textarea>
                                        </div>
				  </div>
                                  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Responsable</label>
					<div class="col-sm-10">
					  <input type="text" name="resp" class="form-control" id="resp" placeholder="Responsable">
                                        </div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Color</label>
					<div class="col-sm-10">
					  <select name="color" class="form-control" id="color">
						  <option value="">Elija un color</option>
						  <option style="color:#0071c5;" value="#0071c5">&#9724; Azul rey</option>
						  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
						  <option style="color:#008000;" value="#008000">&#9724; Verde</option>						  
						  <option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
						  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Naranja</option>
						  <option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
						  <option style="color:#000;" value="#000">&#9724; Negro</option>
						  
						</select>
					</div>
				  </div>
				  
				  <div class="form-group">
					<label for="start" class="col-sm-2 control-label">Fecha de inicio</label>
					<div class="col-sm-10">
					  <input type="text" name="start" class="form-control" id="start" >
					</div>
				  </div>
				  <div class="form-group">
					<label for="end" class="col-sm-2 control-label">Fecha de finalización</label>
					<div class="col-sm-10">
					  <input type="text" name="end" class="form-control" id="end" >
					</div>
				  </div>
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Guardar Cambios</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>
		
		
		
		<!-- Modal -->
		<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="editEventTitle.php">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Editar evento</h4>
			  </div>
			  <div class="modal-body">
				
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Descripción</label>
					<div class="col-sm-10">
					  <!--<input type="text" name="title" class="form-control" id="title" placeholder="Descripción">-->
					  <!-- Andres Agrego Esto-->
					  <textarea name="title" class="form-control" id="title" placeholder="Descripción" rows="10"></textarea>
					</div>
				  </div>
                                    <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Responsable</label>
					<div class="col-sm-10">
					  <input type="text" name="resp" class="form-control" id="resp" placeholder="Responsable">
					</div>
                                    </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Color</label>
					<div class="col-sm-10">
					  <select name="color" class="form-control" id="color">
						  <option value="">Elija un color</option>
						  <option style="color:#0071c5;" value="#0071c5">&#9724; Azul rey</option>
						  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
						  <option style="color:#008000;" value="#008000">&#9724; Verde</option>						  
						  <option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
						  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Naranja</option>
						  <option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
						  <option style="color:#000;" value="#000">&#9724; Negro</option>
						</select>
					</div>
				  </div>
				    <div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
						  <div class="checkbox">
							<label class="text-danger"><input type="checkbox"  name="delete"> Eliminar evento</label>
						  </div>
						</div>
					</div>

					<div class="form-group">
					<label for="title" class="col-sm-2 control-label">Anotaciones</label>
					<div class="col-sm-10">
					  <!--<input type="text" name="title" class="form-control" id="title" placeholder="Descripción">-->
					  <!-- Andres Agrego Esto-->
					  <textarea name="anota" class="form-control" id="anota" placeholder="Escriba aqui los cambios realizados al Horario.
(NO INGRESAR ENTER PARA SEPARAR PARRAFOS)" rows="10"></textarea>
                    </div>
				  </div>

				  <input type="hidden" name="id" class="form-control" id="id">
				
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Guardar Cambios</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- FullCalendar -->
	<script src='js/moment.min.js'></script>
	<script src='js/fullcalendar.min.js'></script>
	<script src="lang/es.js"></script>
	
	
	<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				lang: 'es',
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			//defaultDate: '2016-01-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				
				$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd').modal('show');
			},
			eventRender: function(event, element) {
				element.bind('click', function() {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
                    $('#ModalEdit #resp').val(event.resp);
					$('#ModalEdit #color').val(event.color);
					$('#ModalEdit #anota').val(event.anota);
					$('#ModalEdit').modal('show');
				});
			},
			eventDrop: function(event, delta, revertFunc) { // si changement de position

				edit(event);

			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

				edit(event);

			},
			events: [
			<?php foreach($events as $event): 
			
				$start = explode(" ", $event['start']);
				$end = explode(" ", $event['end']);
				if($start[1] == '00:00:00'){
					$start = $start[0];
				}else{
					$start = $event['start'];
				}
				if($end[1] == '00:00:00'){
					$end = $end[0];
				}else{
					$end = $event['end'];
				}
			?>
				{
					id: '<?php echo $event['id']; ?>',
					title: '<?php echo $event['title']; ?>',
					start: '<?php echo $start; ?>',
					end: '<?php echo $end; ?>',
                    resp: '<?php echo $event['resp']; ?>',
					color: '<?php echo $event['color']; ?>',
					anota: '<?php echo $event['anota']; ?>',

				},
			<?php endforeach; ?>
			]
		});
		
		function edit(event){
			start = event.start.format('YYYY-MM-DD HH:mm:ss');
			if(event.end){
				end = event.end.format('YYYY-MM-DD HH:mm:ss');
			}else{
				end = start;
			}
			
			id =  event.id;
			
			Event = [];
			Event[0] = id;
			Event[1] = start;
			Event[2] = end;
            Event[3] = resp;
            Event[4] = anota;
			
			$.ajax({
			 url: 'editEventDate.php',
			 type: "POST",
			 data: {Event:Event},
			 success: function(rep) {
					if(rep == 'OK'){
						alert('Saved');
					}else{
						alert('Could not be saved. try again.'); 
					}
				}
			});
		}
		
	});

</script>

</body>

</html>
