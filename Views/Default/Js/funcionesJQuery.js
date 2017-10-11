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

function crearRol(){
	$("#Registrar").validate({
		rules: {
			"descripcion": {
				required: true,
				//name: true	
			}
		},

		messages: {
			descripcion: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba la descripción</font></td></center>",
			}
		}
	})
	$("#descripcion").focus();
}

function editar_Rol(){
	$("#Actualizar").validate({
		rules: {
			"descripcion": {
				required: true,
				//name: true	
			}
		},

		messages: {
			descripcion: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba la descripción</font></td></center>",
			}
		}
	})
	$("#descripcion").focus();
}

function crearPais(){
	$("#Registrar").validate({
		rules: {
			"iso": {
				required: true,
				//name: true	
			},
			"descripcion": {
				required: true,
				//name: true	
			}
		},

		messages: {
			iso: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba el iso</font></td></center>",
			},
			descripcion: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba la descripción</font></td></center>",
			}
		}
	})
	$("#iso").focus();
}

function editar_Pais(){
	$("#Actualizar").validate({
		rules: {
			"iso": {
				required: true,
				//name: true	
			},
			"descripcion": {
				required: true,
				//name: true	
			}
		},

		messages: {
			iso: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba el Iso</font></td></center>",
			},
			descripcion: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba la descripción</font></td></center>",
			}
		}
	})
	$("#iso").focus();
}

function crearCiudad(){
	$("#Registrar").validate({
		rules: {
			"descripcion": {
				required: true,
				//name: true	
			},
			"pais": {
				required: true,
				//name: true	
			}
		},

		messages: {
			iso: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba la descripción</font></td></center>",
			},
			pais: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba el país</font></td></center>",
			}
		}
	})
	$("#descripcion").focus();
}

function editar_Ciudad(){
	$("#Actualizar").validate({
		rules: {
			"descripcion": {
				required: true,
				//name: true	
			},
			"pais": {
				required: true,
				//name: true	
			}
		},

		messages: {
			descripcion: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba la descripción</font></td></center>",
			},
			pais: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba el país</font></td></center>",
			}
		}
	})
	$("#descripcion").focus();
}

function crearInstituto(){
	$("#Registrar").validate({
		rules: {
			"descripcion": {
				required: true,
				//name: true	
			},
			"ciudad": {
				required: true,
				//name: true	
			},
			"direccion": {
				required: true,
				//name: true	
			},
			"barrio": {
				required: true,
				//name: true	
			},
			"telefono": {
				required: true,
				//name: true	
			}
		},

		messages: {
			descripcion: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba la descripción</font></td></center>",
			},
			ciudad: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba la ciudad</font></td></center>",
			},
			direccion: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba la direccion</font></td></center>",
			},
			barrio: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba el barrio</font></td></center>",
			},
			telefono: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba el teléfono</font></td></center>",
			}
		}
	})
	$("#descripcion").focus();
}


function editar_Instituto(){
	$("#Actualizar").validate({
		rules: {
			"descripcion": {
				required: true,
				//name: true	
			},
			"ciudad": {
				required: true,
				//name: true	
			},
			"direccion": {
				required: true,
				//name: true	
			},
			"barrio": {
				required: true,
				//name: true	
			},
			"telefono": {
				required: true,
				//name: true	
			}
		},

		messages: {
			descripcion: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba la descripción</font></td></center>",
			},
			ciudad: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba la ciudad</font></td></center>",
			},
			direccion: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba la direccion</font></td></center>",
			},
			barrio: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba el barrio</font></td></center>",
			},
			telefono: {
				required: "<center><td colspan='2'><font color='red'>Porfavor, escriba el teléfono</font></td></center>",
			}
		}
	})
	$("#descripcion").focus();
}