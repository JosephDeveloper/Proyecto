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
							Datos de la Ciudad
						</div>
						<form class="form-horizontal" id="Actualizar" name="Actualizar" method="POST">
							<div class="panel-body panel-body-datos col-sm-12">
					            <div class="form-group">
									<div class="col-sm-12">
										ID: <input type="text" name="id_ciudad" id="id_ciudad" placeholder="ID *" class="form-control" value="<?php echo $value["id_ciudad"]; ?>" disabled></input>
                                    </div>
								</div>
					            <div class="form-group">
									<div class="col-sm-12">
										Descripción: <input type="text" name="descripcion" id="descripcion" placeholder="Descripción *" class="form-control" value="<?php echo $value["des_ciudad"]; ?>" disabled></input>
                                    </div>
								</div> 						
								<div class="form-group">
									<div class="col-sm-12">
										País: <input type="text" name="pais" id="pais" placeholder="Iso *" class="form-control" value="<?php echo $value["des_pais"]; ?>" disabled></input>
                                    </div>
								</div> 	
								<a href="<?php echo URL.'Pais/Edit/edit/'. $value["id_pais"] ?>" class="glyphicon glyphicon-pencil"></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php } ?>