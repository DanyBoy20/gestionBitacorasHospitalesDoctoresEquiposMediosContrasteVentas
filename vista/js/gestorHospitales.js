$("#tipo").change(function() {
	var filtrarHospital = new FormData();
	filtrarHospital.append("filtroHospital", tipo);
	$.ajax({
		url:"vista/ajax/gestorHospitales.php",
		method: "POST",
		data: filtrarHospital,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta){
			/*$("#textoSlide ul").html(respuesta);
			swal({
				title: "¡OK!",
				text: "¡El orden se ha actualizado correctamente!",
				type: "success",
				confirmButtonText: "Cerrar",
				closeOnConfirm: false
			},
			function(isConfirm){
				if (isConfirm){
					window.location = "slide";
				}
			});*/
		}
	})
});