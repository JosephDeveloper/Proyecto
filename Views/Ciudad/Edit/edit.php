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
							Datos del País
						</div>
						<form class="form-horizontal" id="Actualizar" name="Actualizar" method="POST">
							<div class="panel-body panel-body-datos col-sm-12">
					            <div class="form-group">
									<div class="col-sm-12">
										<input type="text" name="id_pais" id="id_pais" placeholder="ID *" class="form-control" value="<?php echo $value["id_pais"]; ?>" disabled></input>
                                    </div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input type="text" name="iso" id="iso" placeholder="Iso *" class="form-control" value="<?php echo $value["iso"]; ?>"></input>
                                    </div>
								</div> 
					            <div class="form-group">
									<div class="col-sm-12">
										<input type="text" name="descripcion" id="descripcion" placeholder="Descripción *" class="form-control" value="<?php echo $value["des_pais"]; ?>"></input>
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
	$(document).ready(editar_Pais);

	$(function(){
		$('#editar').click(function(){			
			var iso = $('form[name=Actualizar] input[name=iso]')[0].value;
			var descripcion = $('form[name=Actualizar] input[name=descripcion]')[0].value;
			var id_pais = document.Actualizar.id_pais.value;

			if (iso == "" || descripcion == "") {
				//alert("Campos Vacios");
			}else{
				$.ajax({
					type: 'POST',
					url: '<?php echo URL;?>Pais/edit/editDatos',
					data: {iso: iso, descripcion: descripcion, id_pais: id_pais},
					success: function(response){
						//alert(response);
						if (response == 1) {
							alert("Pais actualizado con exito");
							document.location = '<?php echo URL;?>';
						} else {
							alert("Error");
						}
					}
				});
				return false; //Evitar submit del formulario
			}
			
		});
	});
</script>