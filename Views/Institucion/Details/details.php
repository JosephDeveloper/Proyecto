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
							Datos del Instituto
						</div>
						<form class="form-horizontal" id="Actualizar" name="Actualizar" method="POST">
							<div class="panel-body panel-body-datos col-sm-12">
					            <div class="form-group">
									<div class="col-sm-12">
										ID: <input type="text" name="instituto" id="instituto" placeholder="ID *" class="form-control" value="<?php echo $value["id_instituto"]; ?>" disabled></input>
                                    </div>
								</div>
					            <div class="form-group">
									<div class="col-sm-12">
										Nombre: <input type="text" name="descripcion" id="descripcion" placeholder="Descripción *" class="form-control" value="<?php echo $value["nom_instituto"]; ?>" disabled></input>
                                    </div>
								</div> 						
								<div class="form-group">
									<div class="col-sm-12">
										Ciudad: <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad *" class="form-control" value="<?php echo $value["des_ciudad"]; ?>" disabled></input>
                                    </div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										Dirección: <input type="text" name="direccion" id="direccion" placeholder="Dirección *" class="form-control" value="<?php echo $value["dir_instituto"]; ?>" disabled></input>
                                    </div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										Barrio: <input type="text" name="barrio" id="barrio" placeholder="Barrio *" class="form-control" value="<?php echo $value["barrio_instituto"]; ?>" disabled></input>
                                    </div>
								</div> 
								<div class="form-group">
									<div class="col-sm-12">
										Teléfono: <input type="text" name="telefono" id="telefono" placeholder="Barrio *" class="form-control" value="<?php echo $value["tel_instituto"]; ?>" disabled></input>
                                    </div>
								</div> 
								<a href="<?php echo URL.'Institucion/Edit/edit/'. $value["id_instituto"] ?>" class="glyphicon glyphicon-pencil"></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php } ?>