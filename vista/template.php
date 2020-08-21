<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>MEDIKROM SISTEMA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="vista/css/styles.css">
	<script src="vista/js/jquery-3.4.1.min.js"></script>
</head>
<body>	
	<main>		
		<?php
		$modulos = new Enlaces();
		$modulos -> enlacesController();			
		?>			
	</main>	
	<script src="vista/js/script.js"></script>
	<script src="vista/js/gestorbitacoras.js"></script>
</body>
</html>