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
							Datos del Instituto
						</div>
						<form class="form-horizontal" id="Actualizar" name="Actualizar" method="POST">
							<div class="panel-body panel-body-datos col-sm-12">
					            <div class="form-group">
									<div class="col-sm-12">
										<input type="text" name="instituto" id="instituto" placeholder="ID *" class="form-control" value="<?php echo $value["id_instituto"]; ?>" disabled></input>
                                    </div>
								</div>
					            <div class="form-group">
									<div class="col-sm-12">
										<input type="text" name="descripcion" id="descripcion" placeholder="Descripción *" class="form-control" value="<?php echo $value["nom_instituto"]; ?>"></input>
                                    </div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<select class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad *">
						            		<?php foreach ($array1 as $key => $value_1): ?>
					                			<option value="<?php echo $value_1["id_ciudad"]; ?>" <?php if($value["id_ciudad"] == $value_1["id_ciudad"]) echo 'selected="selected"'; ?>><?php echo $value_1["des_ciudad"]; ?></option>
						            		<?php endforeach ?>
						            	</select>
                                    </div>
								</div> 
								<div class="form-group">
									<div class="col-sm-12">
										<input type="text" name="direccion" id="direccion" placeholder="Dirección *" class="form-control" value="<?php echo $value["dir_instituto"]; ?>"></input>
                                    </div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input type="text" name="barrio" id="barrio" placeholder="Barrio *" class="form-control" value="<?php echo $value["barrio_instituto"]; ?>"></input>
                                    </div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input type="text" name="telefono" id="telefono" placeholder="Teléfono *" class="form-control" value="<?php echo $value["tel_instituto"]; ?>"></input>
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
	$(document).ready(editar_Instituto);

	$(function(){
		$('#editar').click(function(){			
			var instituto = document.Actualizar.instituto.value;
			var descripcion = $('form[name=Actualizar] input[name=descripcion]')[0].value;
			var ciudad = document.Actualizar.ciudad.value;
			var direccion = $('form[name=Actualizar] input[name=direccion]')[0].value;
			var barrio = $('form[name=Actualizar] input[name=barrio]')[0].value;
			var telefono = $('form[name=Actualizar] input[name=telefono]')[0].value;

			if (instituto == "" || descripcion == "" || ciudad == "" || direccion == "" || barrio == "" || telefono == "") {
				//alert("Campos Vacios");
			}else{
				$.ajax({
					type: 'POST',
					url: '<?php echo URL;?>Institucion/edit/editDatos',
					data: {instituto: instituto, descripcion: descripcion, ciudad: ciudad, direccion: direccion, barrio: barrio , telefono: telefono},
					success: function(response){
						//alert(response);
						if (response == 1) {
							alert("Institución actualizada con exito");
							document.location = '<?php echo URL;?>';
						} else {
							//alert(response);
							alert("Error");
						}
					}
				});
				return false; //Evitar submit del formulario
			}
			
		});
	});
</script>