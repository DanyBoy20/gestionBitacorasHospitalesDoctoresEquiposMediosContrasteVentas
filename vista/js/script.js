/* ------- VALIDAR INGRESO SISTEMA ------- */
function validarIngreso(){	
	var usuarioIngreso = document.querySelector("#usuarioIngreso").value;
	var passwordIngreso = document.querySelector("#passwordIngreso").value;
	var expresion = /^[a-zA-Z0-9]*$/;
	var expresionemail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
	if(usuarioIngreso == "" || passwordIngreso == ""){
		alert("CAMPOS VACIOS");
		return false;
	}
	if(usuarioIngreso != ""){
		if(!expresionemail.test(usuarioIngreso)){
			alert("PROPORCIONE UN CORREO EN FORMATO VALIDO");
			return false;
		}
	}
	if(passwordIngreso != ""){
		if(!expresion.test(passwordIngreso)){
			alert("NO SE ACEPTAN CARACTERES ESPECIALES EN LA CONTRASEÑA");
			return false;
		}
	}
	return true;
}
/* ------- VALIDAR REGISTRO DE HOSPITALES ------- */
function validarRegistroHospital(){
	var nombreh = document.querySelector("#nombreh").value;
	var direccionh = document.querySelector("#direccionh").value;
	var ciudadh = document.querySelector("#ciudadh").value;
	var estadoh = document.querySelector("#estadoh").value;
	var areaoh = document.querySelector("#areaoh").value;
	var nombrech = document.querySelector("#nombrech").value;
	var puestoch = document.querySelector("#puestoch").value;
	var telefonoch = document.querySelector("#telefonoch").value;
	var emailch = document.querySelector("#emailch").value;
	// valido nombre hospital
	if(nombreh == "" || direccionh == "" || ciudadh == "" || estadoh == "" || areaoh == "" || nombrech = "" || puestoch = "" ||  telefonoch = "" ||  emailch == ""){
		alert("CAMPOS VACIOS");
		return false;
	}
	if(nombreh != ""){
		var caracteres = nombreh.length;
		var expresion = /^[a-zA-Z0-9. ]*$/;
		if(caracteres > 50){
			document.querySelector("label[for=nombreHospital]").innerHTML += "<br>Escriba menos de 50 caracteres";
			return false;
		}
		if(!expresion.test(nombreh)){
			document.querySelector("label[for='nombreHospital']").innerHTML += "<br>Solo letras, numeros y puntos ( . )";
			return false;
		}
	}
	// valido direccion hospital
	if(direccionh != ""){
		var caracteres = direccionh.length;
		var expresion = /^[a-zA-Z0-9. ]*$/;
		if(caracteres > 60){
			document.querySelector("label[for=direccionHospital]").innerHTML += "<br>Escriba menos de 60 caracteres";
			return false;
		}
		if(!expresion.test(direccionh)){
			document.querySelector("label[for='direccionHospital']").innerHTML += "<br>Solo letras, numeros y puntos ( . )";
			return false;
		}
	}
	// valido ciudad hospital
	if(ciudadh != ""){
		var caracteres = ciudadh.length;
		var expresion = /^[a-zA-Z0-9. ]*$/;
		if(caracteres > 35){
			document.querySelector("label[for=ciudadHospital]").innerHTML += "<br>Escriba menos de 35 caracteres";
			return false;
		}
		if(!expresion.test(ciudadh)){
			document.querySelector("label[for='ciudadHospital']").innerHTML += "<br>Solo letras, numeros y puntos ( . )";
			return false;
		}
	}
	// valido estado hospital
	if(estadoh != ""){
		var caracteres = estadoh.length;
		var expresion = /^[a-zA-Z. ]*$/;
		if(caracteres > 35){
			document.querySelector("label[for=estadoHospital]").innerHTML += "<br>Escriba menos de 35 caracteres";
			return false;
		}
		if(!expresion.test(estadoh)){
			document.querySelector("label[for='estadoHospital']").innerHTML += "<br>Solo letras y puntos ( . )";
			return false;
		}
	}
	// valido area de oportunidad hospital
	if(areaoh != ""){
		var caracteres = areaoh.length;
		var expresion = /^[a-zA-Z. ]*$/;
		if(caracteres > 20){
			document.querySelector("label[for=oportunidadHospital]").innerHTML += "<br>Escriba menos de 20 caracteres";
			return false;
		}
		if(!expresion.test(areaoh)){
			document.querySelector("label[for='oportunidadHospital']").innerHTML += "<br>Solo letras y puntos ( . )";
			return false;
		}
	}
	// valido nombre contacto hospital
	if(nombrech != ""){
		var caracteres = nombrech.length;
		var expresion = /^[a-zA-Z. ]*$/;
		if(caracteres > 35){
			document.querySelector("label[for=contactosHospital]").innerHTML += "<br>Escriba menos de 35 caracteres";
			return false;
		}
		if(!expresion.test(nombrech)){
			document.querySelector("label[for='contactosHospital']").innerHTML += "<br>Solo letras y puntos ( . )";
			return false;
		}
	}
	// valido puesto/cargo de contacto hospital
	if(puestoch != ""){
		var caracteres = puestoch.length;
		var expresion = /^[a-zA-Z. ]*$/;
		if(caracteres > 25){
			document.querySelector("label[for=puestoHospital]").innerHTML += "<br>Escriba menos de 25 caracteres";
			return false;
		}
		if(!expresion.test(puestoch)){
			document.querySelector("label[for='puestoHospital']").innerHTML += "<br>Solo letras y puntos ( . )";
			return false;
		}
	}
	// valido telefono contacto hospital
	if(telefonoch != ""){
		var caracteres = telefonoch.length;
		var expresion = /^[0-9. ]*$/;
		if(caracteres > 25){
			document.querySelector("label[for=telefonoHospital]").innerHTML += "<br>Escriba menos de 25 caracteres";
			return false;
		}
		if(!expresion.test(telefonoch)){
			document.querySelector("label[for='telefonoHospital']").innerHTML += "<br>Solo letras y puntos ( . )";
			return false;
		}
	}
	// valido correo contacto hospital
	if(emailch != ""){
		var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
		if(!expresion.test(emailch)){
			document.querySelector("label[for='emailHospital']").innerHTML += "<br>Escriba correctamente el Email.";
			return false;
		}
	}
	return true;
}
/* -- VALIDAR REGISTRO DE CONTACTOS HOSPITALES -- */
function validarRegistroContacto(){
	var nombrech = document.querySelector("#nombrechp").value;
	var puestoch = document.querySelector("#puestochp").value;
	var telefonoch = document.querySelector("#telefonochp").value;
	var emailch = document.querySelector("#emailchp").value;
	if(nombrech == "" || telefonoch == "" || emailch == ""){
		alert("CAMPOS VACIOS");
		return false;
	}
	// valido nombre contacto hospital
	if(nombrech != ""){
		var caracteres = nombrech.length;
		var expresion = /^[a-zA-Z. ]*$/;
		if(caracteres > 35){
			document.querySelector("label[for=nombrechp]").innerHTML += "<br>Escriba menos de 35 caracteres";
			return false;
		}
		if(!expresion.test(nombrech)){
			document.querySelector("label[for='nombrechp']").innerHTML += "<br>Solo letras y puntos ( . )";
			return false;
		}
	}
	// valido puesto/cargo de contacto hospital
	if(puestoch != ""){
		var caracteres = puestoch.length;
		var expresion = /^[a-zA-Z. ]*$/;
		if(caracteres > 25){
			document.querySelector("label[for=puestochp]").innerHTML += "<br>Escriba menos de 25 caracteres";
			return false;
		}
		if(!expresion.test(puestoch)){
			document.querySelector("label[for='puestochp']").innerHTML += "<br>Solo letras y puntos ( . )";
			return false;
		}
	}
	// valido telefono contacto hospital
	if(telefonoch != ""){
		var caracteres = telefonoch.length;
		var expresion = /^[0-9. ]*$/;
		if(caracteres > 25){
			document.querySelector("label[for=telefonochp]").innerHTML += "<br>Escriba menos de 25 caracteres";
			return false;
		}
		if(!expresion.test(telefonoch)){
			document.querySelector("label[for='telefonochp']").innerHTML += "<br>Solo letras y puntos ( . )";
			return false;
		}
	}
	// valido correo contacto hospital
	if(emailch != ""){
		var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
		if(!expresion.test(emailch)){
			document.querySelector("label[for='emailchp']").innerHTML += "<br>Escriba correctamente el Email.";
			return false;
		}
	}
	return true;
}
/* ------- VALIDAR REGISTRO DE INYECTORES ------- */
function validarRegistroInyector(){
	var nombreI = document.querySelector("#nombreI").value;
	var descripcionI = document.querySelector("#descripcionI").value;
	if(nombreI == "" || descripcionI == ""){
		alert("CAMPOS VACIOS");
		return false;
	}
	// valido el nombre del Inyector
	if(nombreI != ""){
		var caracteres = nombreI.length;
		var expresion = /^[a-zA-Z0-9. ]*$/;
		if(caracteres > 25){
			document.querySelector("label[for=nombreI]").innerHTML += "<br>Escriba menos de 25 caracteres";
			return false;
		}
		if(!expresion.test(nombreI)){
			document.querySelector("label[for='nombreI']").innerHTML += "<br>Solo letras y puntos ( . )";
			return false;
		}
	}
	// valido descripcion del inyector
	if(descripcionI != ""){
		var caracteres = descripcionI.length;
		var expresion = /^[a-zA-Z. ]*$/;
		if(caracteres > 25){
			document.querySelector("label[for=descripcionI]").innerHTML += "<br>Escriba menos de 25 caracteres";
			return false;
		}
		if(!expresion.test(descripcionI)){
			document.querySelector("label[for='descripcionI']").innerHTML += "<br>Solo letras y puntos ( . )";
			return false;
		}
	}
	return true;
}
/* ------- VALIDAR ASIGNACION DE INYECTORES ------- */
function validarAsignacionIntector(){
	var cantidadI = document.querySelector("#cantidadAI").value;
	var comentariosI = document.querySelector("#comentariosAI").value;
	if(cantidadI == "" || comentariosI == ""){
		alert("CAMPOS VACIOS");
		return false;
	}
	// valido cantidad
	if(cantidadI != ""){
		var caracteres = cantidadI.length;
		var expresion = /^[0-4]*$/;
		if(caracteres > 4){
			document.querySelector("label[for=cantidadAI]").innerHTML += "<br>Solo puede asignar 4 Inyectores";
			return false;
		}
		if(!expresion.test(cantidadI)){
			document.querySelector("label[for='cantidadAI']").innerHTML += "<br>Solo letras y puntos ( . )";
			return false;
		}
	}
	// valido puesto/cargo de contacto hospital
	if(comentariosI != ""){
		var caracteres = comentariosI.length;
		var expresion = /^[a-zA-Z. ]*$/;
		if(caracteres > 50){
			document.querySelector("label[for=comentariosAI]").innerHTML += "<br>Escriba menos de 50 caracteres";
			return false;
		}
		if(!expresion.test(comentariosI)){
			document.querySelector("label[for='comentariosAI']").innerHTML += "<br>Solo letras y puntos ( . )";
			return false;
		}
	}
	return true;
}
/* ------- VALIDAR INGRESO NUEVA BITACORA ------- */
function validarNuevaBitacora(){
	var informacionb = document.querySelector("#informacionNB").value;

	if(informacionb == ""){
		alert("CAMPOS VACIOS");
		return false;
	}
	// valido el campo informacion
	if(informacionb != ""){
		var caracteres = informacionb.length;
		var expresion = /^[a-zA-Z0-9. ]*$/;
		if(caracteres > 80){
			document.querySelector("label[for=informacionNB]").innerHTML += "<br>Escriba menos de 50 caracteres";
			return false;
		}
		if(!expresion.test(informacionb)){
			document.querySelector("label[for='informacionNB']").innerHTML += "<br>Solo letras y puntos ( . )";
			return false;
		}
	}
}
/* ------- VALIDAR ACTUALIZACION BITACORA ------- */
function validarSeguimientoBitacora(){
	var actualizarbt = document.querySelector("#actualizarbt").value;
	if(actualizarbt == ""){
		alert("CAMPOS VACIOS");
		return false;
	}
	// valido el campo informacion
	if(actualizarbt != ""){
		var caracteres = actualizarbt.length;
		var expresion = /^[a-zA-Z0-9. ]*$/;
		if(caracteres > 80){
			document.querySelector("label[for=actualizarbt]").innerHTML += "<br>Escriba menos de 50 caracteres";
			return false;
		}
		if(!expresion.test(actualizarbt)){
			document.querySelector("label[for='actualizarbt']").innerHTML += "<br>Solo letras y puntos ( . )";
			return false;
		}
	}
	return true;
}
/* ------- VALIDAR BUSQUEDA BITACORA ------- */
function validarBusquedaBitacora(){
	var numerob = document.querySelector("#busquedaB").value;
	if(numerob == ""){
		alert("CAMPOS VACIOS");
		return false;
	}	
	if(numerob != ""){
		var caracteres = numerob.length;
		var expresion = /^[0-9]*$/;
		if(caracteres > 2){
			document.querySelector("input[name=busquedaB]").insertBefore('<div>Numeros hasta dos digitos</div>');
			return false;
		}
		if(!expresion.test(numerob)){
			document.querySelector("input[name=busquedaB]").insertBefore('<div>Solo se ceptan numeros</div>');
			return false;
		}
	}
	return true;
}
/* ------- VALIDAR SEGUIMIENTO BITACORA ------- */
function validarSeguimientoBitacora(){
	var numerob = document.querySelector("#busquedaB").value;
	if(numerob != ""){
		var caracteres = numerob.length;
		var expresion = /^[0-9]*$/;
		if(caracteres > 2){
			document.querySelector("input[name=busquedaB]").insertBefore('<div>Numeros hasta dos digitos</div>');
			return false;
		}
		if(!expresion.test(numerob)){
			document.querySelector("input[name=busquedaB]").insertBefore('<div>Solo se ceptan numeros</div>');
			return false;
		}
	}
	return true;
}