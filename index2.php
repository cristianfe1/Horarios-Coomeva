<!DOCTYPE html>
<html>

<head>
	<meta charset='UTF-8'>
	
	<title>Planta Gestion de Servicios</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
</head>

<body>
	<div class="container">

		<br>			
		<h1><center>Planta Gestion de Servicios</center></h1>
		<br>




		<header>
		<nav class="codrops-demos">
					<a href="index.php" title="Horaios GS">HORARIOS</a>
					<a class="current-demo" href="index2.php" title="Planta GS">PLANTA GS</a>
					<a href="descarga/Planta Personal Gestión Clientes.xlsx" download="Planta GS">DESCARGA</a>					
		</nav>	
		</header>

		<div class="component">

		<?php
		// Conectando, seleccionando la base de datos
		$link = mysql_connect('10.11.43.56', 'root', 'chango')
    	or die('conexion fallida: ' . mysql_error());
		mysql_select_db('horarios') or die('No se pudo seleccionar la base de datos');

		$query = 'SELECT * FROM planta';
		$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
		
		?>	

		<table>
		<thead>
			<th>Categoria</th>
			<th>Cedula</th>
			<th>Nombre</th>
			<th>Cargo</th>
			<th>Telefono</th>
			<th>Extencion</th>
			<th>Celular</th>
			<th>Regional</th>
			<th>Ciudad</th>
			<th>Oficina</th>
			<th>Direccion</th>

		</thead>
		<tbody>


		<?php
		while ($line = mysql_fetch_array($result)) {
		?>

		<tr>
			<td><?php echo $line[0];  ?></td>
			<td><?php echo $line[1];  ?></td>
			<td><?php echo $line[2];  ?></td>
			<td><?php echo $line[3];  ?></td>
			<td><?php echo $line[4];  ?></td>
			<td><?php echo $line[5];  ?></td>
			<td><?php echo $line[6];  ?></td>
			<td><?php echo $line[7];  ?></td>
			<td><?php echo $line[8];  ?></td>
			<td><?php echo $line[9];  ?></td>
			<td><?php echo $line[10];  ?></td>
			
		</tr>

		<?php
		}
		?>

		</tbody>		
	
		</table>

	</div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
	<script src="js/jquery.stickyheader.js"></script>

		
</body>

</html>