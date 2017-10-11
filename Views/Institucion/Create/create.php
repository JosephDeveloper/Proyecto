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
							Datos del Instituto
						</div>
						<form class="form-horizontal" id="Registrar" name="Registrar" method="POST">
							<div class="panel-body panel-body-datos col-sm-12">
							    <div class="form-group">
									<div class="col-sm-12">
										<input type="text" name="descripcion" id="descripcion" placeholder="Nombre *" class="form-control"></input>
                                    </div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<select class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad *">
						            		<?php foreach ($array as $key => $value){ ?>
						                		<option value="<?php echo $value["id_ciudad"]; ?>"><?php echo $value["des_ciudad"]; ?></option>    
						                	<?php } ?>            
						            	</select>
                                    </div>
								</div>  
								<div class="form-group">
									<div class="col-sm-12">
										<input type="text" name="direccion" id="direccion" placeholder="Dirección *" class="form-control"></input>
                                    </div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input type="text" name="barrio" id="barrio" placeholder="Barrio *" class="form-control"></input>
                                    </div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input type="number" name="telefono" id="telefono" placeholder="Teléfono *" class="form-control"></input>
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
	$(document).ready(crearInstituto);

	$(function(){
		$('#crear').click(function(){
			var descripcion = $('form[name=Registrar] input[name=descripcion]')[0].value;
			var ciudad = document.Registrar.ciudad.value;
			var direccion = $('form[name=Registrar] input[name=direccion]')[0].value;
			var barrio = $('form[name=Registrar] input[name=barrio]')[0].value;
			var telefono = $('form[name=Registrar] input[name=telefono]')[0].value;
			
			if (descripcion == "" || ciudad == "" || direccion == "" || barrio == "" || telefono == "") {
				alert("Campos Vacios");
			}else{
				$.ajax({
					type: 'POST',
					url: '<?php echo URL;?>Institucion/create/createDatos',
					data: {descripcion: descripcion, ciudad: ciudad, direccion: direccion, barrio: barrio, telefono: telefono},
					success: function(response){
						//alert(response);
						if (response == 1) {
							alert("Institucion registrada con exito");
							document.location = '<?php echo URL;?>';
						} else {
							alert("Ya existe la institución");
						}
					}
				});
				return false; //Evitar submit del formulario
			}
		});
	});
</script>