<style type="text/css">
	.panel-body-registarse {
      	background-color: #EAE9E9!important;
    }
    .panel-body-datos {
    	background-color: #FFF!important;
    }
</style>

<div class="container" style="padding-top: 2%;">
	<div class="panel-group">
		<div class="panel-primary">
			<div class="panel-heading text-center" style="font-size: 25px;">
				Crear
			</div>
			<div class="panel-body panel-body-registarse">
				<div class="panel-group col-sm-12">
					<div class="panel-primary">
						<div class="panel-heading">
							Datos del País
						</div>
						<form class="form-horizontal" id="Registrar" name="Registrar" method="POST">
							<div class="panel-body panel-body-datos col-sm-12">
							    <div class="form-group">
									<div class="col-sm-12">
										<input type="text" name="iso" id="iso" placeholder="Iso *" class="form-control"></input>
                                    </div>
								</div>
							    <div class="form-group">
									<div class="col-sm-12">
										<input type="text" name="descripcion" id="descripcion" placeholder="Descripción *" class="form-control"></input>
                                    </div>
								</div>
								<div class="panel-body">
									<div class="col-sm-4 col-xs"></div>
									<button class="btn btn-primary col-sm-4 col-xs-12" type="submit" id="crear">Crear</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(crearPais);

	$(function(){
		$('#crear').click(function(){
			var iso = $('form[name=Registrar] input[name=iso]')[0].value;
			var descripcion = $('form[name=Registrar] input[name=descripcion]')[0].value;

			if (iso == "" || descripcion == "") {
				alert("Campos Vacios");
			}else{
				$.ajax({
					type: 'POST',
					url: '<?php echo URL;?>Pais/create/createDatos',
					data: {iso: iso, descripcion: descripcion},
					success: function(response){
						//alert(response);
						if (response == 1) {
							alert("Pais registrado con exito");
							document.location = '<?php echo URL;?>';
						} else {
							alert("Ya existe el país");
						}
					}
				});
				return false; //Evitar submit del formulario
			}
		});
	});
</script>