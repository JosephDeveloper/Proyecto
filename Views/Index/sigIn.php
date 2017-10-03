<style type="text/css">
	.panel-body-registarse {
      	background-color: #EAE9E9!important;
    }
    .panel-body-datos {
    	background-color: #FFF!important;
    }
</style>

<div class="container" style="padding-top: 2%;">
	<div class="panel-group">
		<div class="panel-primary">
			<div class="panel-heading text-center" style="font-size: 25px;">
				Registrarse
			</div>
			<div class="panel-body panel-body-registarse">
				<div class="panel-group col-sm-12">
					<div class="panel-primary">
						<div class="panel-heading">
							Datos de Usuario
						</div>
						<form class="form-horizontal" id="Registrar" name="Registrar" method="POST">
							<div class="panel-body panel-body-datos col-sm-12">
								<div class="panel-body panel-body-datos col-sm-6">
									<div class="form-group">
										<div class="col-sm-12">
											<input type="text" name="name" id="name" placeholder="Primer nombre *" class="form-control"></input>                                        
	                                    </div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<input type="text" name="name_2" id="name_2" placeholder="Segundo nombre" class="form-control"></input>
	                                    </div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<input type="text" name="lastName" id="lastName" placeholder="Primer apellido *" class="form-control"></input>
	                                    </div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<input type="text" name="lastName_2" id="lastName_2" placeholder="Segundo apellido" class="form-control"></input>
	                                    </div>
									</div>								
									<div class="form-group">
										<div class="col-sm-12">
											<input type="text" name="documento" id="documento" placeholder="Documento de identidad *" class="form-control"></input>
	                                    </div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<center>
												<label class="radio-inline"><input type="radio" name="genero" id="genero" checked value="Masculino">Masculino</label>
												<label class="radio-inline"><input type="radio" name="genero" id="genero" value="Femenino">Femenino</label>
											</center>
	                                    </div>
									</div>	
									<div class="form-group">
										<div class="col-sm-12">
											<select class="form-control" name="estado" id="estado" placeholder="Estado civil *">
								                <option value="soltero">Soltero</option>
								                <option value="casado">Casado</option>
								            </select>
	                                    </div>
									</div>	
								</div>
						        <div class="panel-body panel-body-datos col-sm-6">
						            <div class="form-group">
										<div class="col-sm-12">
											<input type="text" name="direccion" id="direccion" placeholder="Dirección *" class="form-control"></input>
	                                    </div>
									</div>
						            <div class="form-group">
										<div class="col-sm-12">
											<input type="number" name="telefono" id="telefono" placeholder="Telefono *" class="form-control"></input>
	                                    </div>
									</div> 
									<div class="form-group">
										<div class="col-sm-12">
							            	<input type="number" name="celular" id="celular" placeholder="Celular *" class="form-control"></input>							
	                                    </div>
									</div>  
							        <div class="form-group">
										<div class="col-sm-12">
							            	<input type="email" name="email" id="email" placeholder="Correo electronico *" class="form-control"></input>
	                                    </div>
									</div>
									<div class="form-group">
										<div class="col-sm-9">
							            	<input type="password" name="pass" id="pass" placeholder="Contraseña *" class="form-control"></input>						            		
	                                    </div>
	                                    <div class="col-sm-3">
	                                    	<input type="checkbox" onchange="document.getElementById('pass').type = this.checked ? 'text' : 'password'"> Mostrar
	                                    </div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<select class="form-control" name="instituto" id="instituto" placeholder="Instituto">
							                	<option value="1">FCECEP</option>                
							            	</select>
	                                    </div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
							            	<select class="form-control" name="rol" id="rol" placeholder="Instituto">
							                	<option value="1">ADMINISTRADOR</option>                
							            	</select>
	                                    </div>
									</div>  
								</div>
								<div class="panel-body">
									<div class="col-sm-4 col-xs"></div>
									<button class="btn btn-primary col-sm-4 col-xs-12" type="submit" id="signin">Registrar</button>										
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(sigIn);

	$(function(){
		$('#signin').click(function(){			
			var name = $('form[name=Registrar] input[name=name]')[0].value;
			var name_2 = $('form[name=Registrar] input[name=name_2]')[0].value;
			var lastName = $('form[name=Registrar] input[name=lastName]')[0].value;
			var lastName_2 = $('form[name=Registrar] input[name=lastName_2]')[0].value;
			var documento = $('form[name=Registrar] input[name=documento]')[0].value;
			var genero = $('form[name=Registrar] input[name=genero]')[0].value;
			var estado = $('form[name=Registrar] select[name=estado]')[0].value;
			var direccion = $('form[name=Registrar] input[name=direccion]')[0].value;
			var telefono = $('form[name=Registrar] input[name=telefono]')[0].value;
			var celular = $('form[name=Registrar] input[name=celular]')[0].value;
			var email = $('form[name=Registrar] input[name=email]')[0].value;
			var pass = $('form[name=Registrar] input[name=pass]')[0].value;
			var instituto = $('form[name=Registrar] select[name=instituto]')[0].value;
			var rol = $('form[name=Registrar] select[name=rol]')[0].value;

			if (name == "" || lastName == "" || documento == "" || direccion == "" || telefono == "" || celular == "" || email == "" || pass == "" || instituto == "0" || rol == "0") {
				//alert("Campos Vacios");
			}else{
				$.ajax({
					type: 'POST',
					url: '<?php echo URL;?>user/sigIn',
					data: {name: name, name_2: name_2, lastName: lastName, lastName_2: lastName_2, documento: documento, genero: genero, estado: estado, direccion: direccion, telefono: telefono, celular: celular, email: email,  pass: pass, instituto: instituto, rol: rol},
					success: function(response){
						//alert(response);
						if (response == 1) {
							alert("Usuario registrado con exito");
							document.location = '<?php echo URL;?>';
						} else {
							alert("El email ya esta registrado");
						}
					}
				});
				return false; //Evitar submit del formulario
			}
		});
	});
</script>