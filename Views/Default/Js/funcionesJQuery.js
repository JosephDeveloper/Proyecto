function login(){
	$("#Session").validate({
		rules: {
			"email": {
				required: true,
				email: true		
			},
			"password": {
				required: true,
				minlength: 6
			}
		},

		messages: {
			email: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba su email</font></td></center>",
			},
			password: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba su password</font></td></center>",
			}
		}
	})
	$("#email").focus();
}

function crearPersona(){
	$("#Registrar").validate({
		rules: {
			"name": {
				required: true,
				//name: true	
			},
			"lastName": {
				required: true,
				//lastName: true		
			},
			"documento": {
				required: true,
				//documento: true
			},			
			"direccion": {
				required: true,
				//direccion: true
			},
			"telefono": {
				required: true,
				//telefono: true
			},
			"celular": {
				required: true,
				//celular: true
			},
			"email": {
				required: true,
				email: true		
			},
			"pass": {
				required: true,
				minlength: 6
			}
		},

		messages: {
			name: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba su nombre</font></td></center>",
			},
			lastName: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba su apellido</font></td></center>",
			},
			documento: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba su documento</font></td></center>",
			},
			direccion: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba su direccion</font></td></center>",
			},
			telefono: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba su telefono</font></td></center>",
			},
			celular: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba su celular</font></td></center>",
			},
			email: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba su email</font></td></center>",
			},
			pass: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba su password</font></td></center>",
			}
		}
	})
	$("#name").focus();
}

function editar_Persona(){
	$("#Actualizar").validate({
		rules: {
			"name": {
				required: true,
				//name: true	
			},
			"lastName": {
				required: true,
				//lastName: true		
			},
			"documento": {
				required: true,
				//documento: true
			},			
			"direccion": {
				required: true,
				//direccion: true
			},
			"telefono": {
				required: true,
				//telefono: true
			},
			"celular": {
				required: true,
				//celular: true
			},
			"email": {
				required: true,
				email: true		
			},
			"pass": {
				required: true,
				minlength: 6
			}
		},

		messages: {
			name: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba su nombre</font></td></center>",
			},
			lastName: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba su apellido</font></td></center>",
			},
			documento: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba su documento</font></td></center>",
			},
			direccion: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba su direccion</font></td></center>",
			},
			telefono: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba su telefono</font></td></center>",
			},
			celular: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba su celular</font></td></center>",
			},
			email: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba su email</font></td></center>",
			},
			pass: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba su password</font></td></center>",
			}
		}
	})
	$("#name").focus();
}