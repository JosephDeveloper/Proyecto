<style type="text/css">
	.panel-body-editar {
      	background-color: #EAE9E9!important;
    }
    .panel-body-datos {
    	background-color: #FFF!important;
    }
</style>

<?php foreach ($array as $key => $value) { ?>

<div class="container" style="padding-top: 2%;">
	<div class="panel-group">
		<div class="panel-primary">
			<div class="panel-heading text-center" style="font-size: 25px;">
				Editar
			</div>
			<div class="panel-body panel-body-editar">
				<div class="panel-group col-sm-12">
					<div class="panel-primary">
						<div class="panel-heading">
							Datos de Usuario
						</div>
						<form class="form-horizontal" id="Actualizar" name="Actualizar" method="POST">
							<div class="panel-body panel-body-datos col-sm-12">
								<div class="panel-body panel-body-datos col-sm-6">
									<div class="form-group">
										<div class="col-sm-12">
											<input type="text" name="name" id="name" placeholder="Primer nombre *" class="form-control" value="<?php echo $value["nom_persona"]; ?>"></input>                                        
	                                    </div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<input type="text" name="name_2" id="name_2" placeholder="Segundo nombre" class="form-control" value="<?php echo $value["nom1_persona"]; ?>"></input>
	                                    </div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<input type="text" name="lastName" id="lastName" placeholder="Primer apellido *" class="form-control" value="<?php echo $value["ape_persona"]; ?>"></input>
	                                    </div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<input type="text" name="lastName_2" id="lastName_2" placeholder="Segundo apellido" class="form-control" value="<?php echo $value["ape1_persona"]; ?>"></input>
	                                    </div>
									</div>								
									<div class="form-group">
										<div class="col-sm-12">
											<input type="text" name="documento" id="documento" placeholder="Documento de identidad *" class="form-control" value="<?php echo $value["doc_persona"]; ?>"></input>
	                                    </div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<center>
												<?php
						                        if ($value['gen_persona'] == "Masculino")
						                        {
						                            echo '<label class="radio-inline"><input type="radio" name="genero" id="genero" value="Masculino" checked>Masculino</label>
						                            	<label class="radio-inline"><input type="radio" name="genero" id="genero" value="Femenino">Femenino</label>';
						                        }
						                        else
						                        {
						                            echo '<label class="radio-inline"><input type="radio" name="genero" id="genero" value="Masculino">Masculino</label>
						                            	<label class="radio-inline"><input type="radio" name="genero" id="genero" value="Femenino" checked>Femenino</label>';
						                        }
						                        ?>
											</center>
	                                    </div>
									</div>	
									<div class="form-group">
										<div class="col-sm-12">
											<select class="form-control" name="estado" id="estado" placeholder="Estado civil *">
								                <option value="soltero" <?php if($value["est_persona"] == "soltero") echo 'selected="selected"'; ?> >Soltero</option>
								                <option value="casado" <?php if($value["est_persona"] == "casado") echo 'selected="selected"'; ?>>Casado</option>
								            </select>
	                                    </div>
									</div>	
								</div>
						        <div class="panel-body panel-body-datos col-sm-6">
						            <div class="form-group">
										<div class="col-sm-12">
											<input type="text" name="direccion" id="direccion" placeholder="Dirección *" class="form-control" value="<?php echo $value["dir_persona"]; ?>"></input>
	                                    </div>
									</div>
						            <div class="form-group">
										<div class="col-sm-12">
											<input type="number" name="telefono" id="telefono" placeholder="Telefono *" class="form-control" value="<?php echo $value["tel_persona"]; ?>"></input>
	                                    </div>
									</div> 
									<div class="form-group">
										<div class="col-sm-12">
							            	<input type="number" name="celular" id="celular" placeholder="Celular *" class="form-control" value="<?php echo $value["cel_persona"]; ?>"></input>							
	                                    </div>
									</div>  
							        <div class="form-group">
										<div class="col-sm-12">
							            	<input type="email" name="email" id="email" placeholder="Correo electronico *" class="form-control" value="<?php echo $value["email_persona"]; ?>"></input>
	                                    </div>
									</div>
									<div class="form-group">
										<div class="col-sm-9">
							            	<input type="password" name="pass" id="pass" placeholder="Contraseña *" class="form-control" value="<?php echo $value["pass_persona"]; ?>"></input>
	                                    </div>
	                                    <div class="col-sm-3">
	                                    	<input type="checkbox" onchange="document.getElementById('pass').type = this.checked ? 'text' : 'password'"> Mostrar
	                                    </div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<select class="form-control" name="instituto" id="instituto" placeholder="Instituto">
							                	<option value="1" <?php if($value["id_instituto"] == "1") echo 'selected="selected"'; ?> >FCECEP</option>                
							            	</select>
	                                    </div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
							            	<select class="form-control" name="rol" id="rol" placeholder="Instituto">
							            		<?php foreach ($array1 as $key => $value_1): ?>
						                			<option value="<?php echo $value_1["id_rol"]; ?>" <?php if($value["id_rol"] == $value_1["id_rol"]) echo 'selected="selected"'; ?>><?php echo $value_1["des_rol"]; ?></option>
							            		<?php endforeach ?>
							            	</select>
	                                    </div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
							            	<input type="hidden" name="id_persona" id="id_persona" class="form-control" value="<?php echo $value["id_persona"]; ?>"></input>
	                                    </div>
									</div>
								</div>
								<div class="panel-body">
									<div class="col-sm-4 col-xs"></div>
									<button class="btn btn-primary col-sm-4 col-xs-12" type="submit" id="editar">Editar</button>										
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php } ?>

<script>
	$(document).ready(editar_Persona);

	$(function(){
		$('#editar').click(function(){			
			var name = $('form[name=Actualizar] input[name=name]')[0].value;
			var name_2 = $('form[name=Actualizar] input[name=name_2]')[0].value;
			var lastName = $('form[name=Actualizar] input[name=lastName]')[0].value;
			var lastName_2 = $('form[name=Actualizar] input[name=lastName_2]')[0].value;
			var documento = $('form[name=Actualizar] input[name=documento]')[0].value;
			var genero = $('form[name=Actualizar] input[name=genero]')[0].value;
			var estado = $('form[name=Actualizar] select[name=estado]')[0].value;
			var direccion = $('form[name=Actualizar] input[name=direccion]')[0].value;
			var telefono = $('form[name=Actualizar] input[name=telefono]')[0].value;
			var celular = $('form[name=Actualizar] input[name=celular]')[0].value;
			var email = $('form[name=Actualizar] input[name=email]')[0].value;
			var pass = $('form[name=Actualizar] input[name=pass]')[0].value;
			var instituto = $('form[name=Actualizar] select[name=instituto]')[0].value;
			var rol = $('form[name=Actualizar] select[name=rol]')[0].value;
			var id_persona = document.Actualizar.id_persona.value;

			if (name == "" || lastName == "" || documento == "" || direccion == "" || telefono == "" || celular == "" || email == "" || pass == "" || instituto == "0" || rol == "0") {
				//alert("Campos Vacios");
			}else{
				$.ajax({
					type: 'POST',
					url: '<?php echo URL;?>User/edit/editDatos',
					data: {name: name, name_2: name_2, lastName: lastName, lastName_2: lastName_2, documento: documento, genero: genero, estado: estado, direccion: direccion, telefono: telefono, celular: celular, email: email,  pass: pass, instituto: instituto, rol: rol, id_persona: id_persona},
					success: function(response){
						//alert(response);
						if (response == 1) {
							alert("Usuario actualizado con exito");
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