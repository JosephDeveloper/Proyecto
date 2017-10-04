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
							Datos del Rol
						</div>
						<form class="form-horizontal" id="Actualizar" name="Actualizar" method="POST">
							<div class="panel-body panel-body-datos col-sm-12">
					            <div class="form-group">
									<div class="col-sm-12">
										<input type="text" name="id_rol" id="id_rol" placeholder="ID *" class="form-control" value="<?php echo $value["id_rol"]; ?>" disabled></input>
                                    </div>
								</div>
					            <div class="form-group">
									<div class="col-sm-12">
										<input type="text" name="descripcion" id="descripcion" placeholder="Descripción *" class="form-control" value="<?php echo $value["des_rol"]; ?>"></input>
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
	$(document).ready(editar_Rol);

	$(function(){
		$('#editar').click(function(){			
			var descripcion = $('form[name=Actualizar] input[name=descripcion]')[0].value;
			var id_rol = document.Actualizar.id_rol.value;

			if (descripcion == "") {
				//alert("Campos Vacios");
			}else{
				$.ajax({
					type: 'POST',
					url: '<?php echo URL;?>Rol/edit/editDatos',
					data: {descripcion: descripcion, id_rol: id_rol},
					success: function(response){
						//alert(response);
						if (response == 1) {
							alert("Rol actualizado con exito");
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