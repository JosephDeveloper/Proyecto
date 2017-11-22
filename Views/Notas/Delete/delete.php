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
							Datos del Rol
						</div>
						<form class="form-horizontal" id="Delete" name="Delete" method="POST">
							<div class="panel-body panel-body-datos col-sm-12">
					            <div class="form-group">
									<div class="col-sm-12">
										ID: <input type="text" name="id_rol" id="id_rol" placeholder="ID *" class="form-control" value="<?php echo $value["id_rol"]; ?>" disabled></input>
                                    </div>
								</div>
					            <div class="form-group">
									<div class="col-sm-12">
										Descripción: <input type="text" name="descripcion" id="descripcion" placeholder="Telefono *" class="form-control" value="<?php echo $value["des_rol"]; ?>" disabled></input>
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
			var id_rol = $('form[name=Delete] input[name=id_rol]')[0].value;
			//var id_rol = document.Delete.id_rol.value;

			if (id_rol == "") {
				//alert("Campos Vacios");
			}else{
				$.ajax({
					type: 'POST',
					url: '<?php echo URL;?>Rol/Delete/deleteDatos',
					data: {id_rol: id_rol},
					success: function(response){						
						if (response == 1) {
							alert("Rol eliminado con exito");
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