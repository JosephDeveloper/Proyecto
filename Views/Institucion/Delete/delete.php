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
				Eliminar
			</div>
			<div class="panel-body panel-body-editar">
				<div class="panel-group col-sm-12">
					<div class="panel-primary">
						<div class="panel-heading">
							Datos del Instituto
						</div>
						<form class="form-horizontal" id="Delete" name="Delete" method="POST">
							<div class="panel-body panel-body-datos col-sm-12">
					            <div class="form-group">
									<div class="col-sm-12">
										ID: <input type="text" name="id_instituto" id="id_instituto" placeholder="ID *" class="form-control" value="<?php echo $value["id_instituto"]; ?>" disabled></input>
                                    </div>
								</div>
					            <div class="form-group">
									<div class="col-sm-12">
										Nombre: <input type="text" name="descripcion" id="descripcion" placeholder="Nombre *" class="form-control" value="<?php echo $value["nom_instituto"]; ?>" disabled></input>
                                    </div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										Ciudad: <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad *" class="form-control" value="<?php echo $value["id_ciudad"]; ?>" disabled></input>
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
										Teléfono: <input type="text" name="telefono" id="telefono" placeholder="Teléfono *" class="form-control" value="<?php echo $value["tel_instituto"]; ?>" disabled></input>
                                    </div>
								</div>
								<div class="panel-body">
									<div class="col-sm-4 col-xs"></div>
									<button class="btn btn-primary col-sm-4 col-xs-12" type="submit" id="delete">Eliminar</button>		
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
	$(function(){
		$('#delete').click(function(){			
			var id_instituto = $('form[name=Delete] input[name=id_instituto]')[0].value;
			//var id_instituto = document.Delete.id_instituto.value;

			if (id_instituto == "") {
				//alert("Campos Vacios");
			}else{
				$.ajax({
					type: 'POST',
					url: '<?php echo URL;?>Institucion/Delete/deleteDatos',
					data: {id_instituto: id_instituto},
					success: function(response){						
						if (response == 1) {
							alert("Institucion eliminada con exito");
							document.location = '<?php echo URL."Home/Principal/principal";?>';
						} else {
							alert(response);
							//alert("El email ya esta registrado");
						}
					}
				});
				return false; //Evitar submit del formulario
			}
			
		});
	});
</script>