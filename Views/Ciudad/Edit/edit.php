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
							Datos de la Ciudad
						</div>
						<form class="form-horizontal" id="Actualizar" name="Actualizar" method="POST">
							<div class="panel-body panel-body-datos col-sm-12">
					            <div class="form-group">
									<div class="col-sm-12">
										<input type="text" name="id_ciudad" id="id_ciudad" placeholder="ID *" class="form-control" value="<?php echo $value["id_ciudad"]; ?>" disabled></input>
                                    </div>
								</div>
					            <div class="form-group">
									<div class="col-sm-12">
										<input type="text" name="descripcion" id="descripcion" placeholder="Descripción *" class="form-control" value="<?php echo $value["des_ciudad"]; ?>"></input>
                                    </div>
								</div> 
								<div class="form-group">
									<div class="col-sm-12">
										<select class="form-control" name="pais" id="pais" placeholder="ID País *">
						            		<?php foreach ($array1 as $key => $value_1): ?>
					                			<option value="<?php echo $value_1["id_pais"]; ?>" <?php if($value["id_pais"] == $value_1["id_pais"]) echo 'selected="selected"'; ?>><?php echo $value_1["des_pais"]; ?></option>
						            		<?php endforeach ?>
						            	</select>
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
	$(document).ready(editar_Ciudad);

	$(function(){
		$('#editar').click(function(){			
			var id_ciudad = document.Actualizar.id_ciudad.value;
			var descripcion = $('form[name=Actualizar] input[name=descripcion]')[0].value;
			var pais = document.Actualizar.pais.value;

			if (id_ciudad == "" || descripcion == "" || pais == "") {
				//alert("Campos Vacios");
			}else{
				$.ajax({
					type: 'POST',
					url: '<?php echo URL;?>Ciudad/edit/editDatos',
					data: {id_ciudad: id_ciudad, descripcion: descripcion, pais: pais},
					success: function(response){
						//alert(response);
						if (response == 1) {
							alert("Ciudad actualizada con exito");
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