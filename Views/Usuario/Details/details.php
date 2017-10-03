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
				Detalles
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
											Primer Nombre: <input type="text" name="name" id="name" placeholder="Primer nombre *" class="form-control" value="<?php echo $value["nom_persona"]; ?>" disabled></input>                                        
	                                    </div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											Segundo Nombre: <input type="text" name="name_2" id="name_2" placeholder="Segundo nombre" class="form-control" value="<?php echo $value["nom1_persona"]; ?>" disabled></input>
	                                    </div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											Primer Apellido: <input type="text" name="lastName" id="lastName" placeholder="Primer apellido *" class="form-control" value="<?php echo $value["ape_persona"]; ?>" disabled></input>
	                                    </div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											Segundo Apellido: <input type="text" name="lastName_2" id="lastName_2" placeholder="Segundo apellido" class="form-control" value="<?php echo $value["ape1_persona"]; ?>" disabled></input>
	                                    </div>
									</div>								
									<div class="form-group">
										<div class="col-sm-12">
											Documento: <input type="text" name="documento" id="documento" placeholder="Documento de identidad *" class="form-control" value="<?php echo $value["doc_persona"]; ?>" disabled></input>
	                                    </div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											Genero: 
											<center>												
												<?php
						                        if ($value['gen_persona'] == "Masculino")
						                        {
						                            echo '<label class="radio-inline"><input type="radio" name="genero" id="genero" value="Masculino" checked disabled>Masculino</label>
						                            	<label class="radio-inline"><input type="radio" name="genero" id="genero" value="Femenino" disabled>Femenino</label>';
						                        }
						                        else
						                        {
						                            echo '<label class="radio-inline"><input type="radio" name="genero" id="genero" value="Masculino" disabled>Masculino</label>
						                            	<label class="radio-inline"><input type="radio" name="genero" id="genero" value="Femenino" checked disabled>Femenino</label>';
						                        }
						                        ?>
											</center>
	                                    </div>
									</div>	
									<div class="form-group">
										<div class="col-sm-12">
											Estado: 
											<select class="form-control" name="estado" id="estado" placeholder="Estado civil *">
								                <option value="soltero" <?php if($value["est_persona"] == "soltero") echo 'selected="selected"'; ?>  disabled>Soltero</option>
								                <option value="casado" <?php if($value["est_persona"] == "casado") echo 'selected="selected"'; ?> disabled>Casado</option>
								            </select>
	                                    </div>
									</div>	
								</div>
						        <div class="panel-body panel-body-datos col-sm-6">
						            <div class="form-group">
										<div class="col-sm-12">
											Dirección: <input type="text" name="direccion" id="direccion" placeholder="Dirección *" class="form-control" value="<?php echo $value["dir_persona"]; ?>" disabled></input>
	                                    </div>
									</div>
						            <div class="form-group">
										<div class="col-sm-12">
											Telefono: <input type="number" name="telefono" id="telefono" placeholder="Telefono *" class="form-control" value="<?php echo $value["tel_persona"]; ?>" disabled></input>
	                                    </div>
									</div> 
									<div class="form-group">
										<div class="col-sm-12">
							            	Celular: <input type="number" name="celular" id="celular" placeholder="Celular *" class="form-control" value="<?php echo $value["cel_persona"]; ?>" disabled></input>							
	                                    </div>
									</div>  
							        <div class="form-group">
										<div class="col-sm-12">
							            	Email: <input type="email" name="email" id="email" placeholder="Correo electronico *" class="form-control" value="<?php echo $value["email_persona"]; ?>" disabled></input>
	                                    </div>
									</div>
									<div class="form-group">
										<div class="col-sm-9">
							            	Contraseña: <input type="password" name="pass" id="pass" placeholder="Contraseña *" class="form-control" value="<?php echo $value["pass_persona"]; ?>" disabled></input>
	                                    </div>
	                                    <div class="col-sm-3">
	                                    	<input type="checkbox" onchange="document.getElementById('pass').type = this.checked ? 'text' : 'password'"> Mostrar
	                                    </div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											Instituto: 
											<select class="form-control" name="instituto" id="instituto" placeholder="Instituto">
							                	<option value="1" <?php if($value["id_instituto"] == "1") echo 'selected="selected"'; ?>  disabled>FCECEP</option>                
							            	</select>
	                                    </div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											Rol: 
							            	<select class="form-control" name="rol" id="rol" placeholder="Rol">
							                	<option value="1" <?php if($value["id_rol"] == "1") echo 'selected="selected"'; ?>  disabled>ADMINISTRADOR</option>                
							            	</select>
	                                    </div>
									</div>									
								</div>
								<a href="<?php echo URL.'User/Edit/edit/'. $value["id_persona"] ?>" class="glyphicon glyphicon-pencil"></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php } ?>