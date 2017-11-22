<div class="panel-group col-sm-12">
    <div class="pull-right" style="padding-top: 4px;">
        <a href="#" class="btn" role="button" data-toggle="modal" data-target="#anadir_subActividad"><span class="glyphicon glyphicon-plus"></span> Nuevo</a>
    </div>
    <div class="panel panel-primary" style="background-color: #EAE9E9;">
        <div class="panel-heading">
            SubActividad
        </div>
        <div class="panel-body">
            <div class="mensaje_1 text-center">

            </div>
          <div class="form-group">
            <div class="table-responsive">
                <table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Descipción</th>
                            <th>Fecha</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($array as $key => $value) {?>
                            <tr>
                                <td><?php echo $value["des_subActividad"]; ?></td>
                                <td><?php echo $value["fec_actividad"]; ?></td>
                                <td>
                                    <a href="#" descripcion="<?php echo $value["des_subActividad"]; ?>" codigo="<?php echo $value["id_subActividad"]; ?>" id="delete" name="delete" class="glyphicon glyphicon-remove"></a>
                                </td>
                            </tr>
                    <?php }?>
                    </tbody>
                </table>
            </div>
          </div>
        </div>
    </div>
</div>

<div id="anadir_subActividad" class="modal fade">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">SubActividad</h4>
            </div>
            <div class="modal-body">
                <form method="post" class="form-horizontal" id="Registrar" name="Registrar">
                    <label>Descripción *</label>
                        <input type="text" name="descripcion" id="descripcion" class="form-control" autofocus/>
                    <br>
                    <label>Fecha *</label>
                        <input type="date" name="fecha" id="fecha" class="form-control">
                    <div class="panel-body">
                        <div class="col-sm-4 col-xs"></div>
                        <input type="submit" name="crear" id="crear" value="Crear" class="btn btn-success col-sm-4 col-xs-12" />
                    </div>
                </form>
                <div class="mensaje text-center">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){
        $("#anadir_subActividad").on('hidden.bs.modal', function () {
            $('#crear').val("Crear");
            $('#descripcion').val(null);
            $('#fecha').val(null);
        });

        $('#crear').click(function(){
            $(document).ready(crearsubActividad);
            var descripcion = $('form[name=Registrar] input[name=descripcion]')[0].value;
            var fecha = $('form[name=Registrar] input[name=fecha]')[0].value;
            var id_actividad = <?php echo $array1; ?>;
            var id_materia = <?php echo $array2; ?>;

            if (descripcion == "" || fecha == "") {

            }else{
                $.ajax({
                    type: 'POST',
                    url: '<?php echo URL; ?>Evaluacion/create/configurar',
                    data: {descripcion: descripcion, fecha: fecha, id_actividad: id_actividad, id_materia: id_materia},
                    success: function(response){
                        //alert(response);
                        if (response == 1) {
                            var texto = "<strong>S</strong>ubActividad registrada con exito.";
                            var color = "#379911";

                            $(".mensaje").html(texto).css({"color": color});
                            $(".mensaje").fadeOut(2500, function(){
                                $(this).html("");
                                $(this).fadeIn(2500);
                            });
                            setInterval(function(){
                                location.reload();
                            },2500);
                        } else {
                            var texto = "<strong>L</strong>a SubActividad ya existe.";
                            var color = "#f23030";

                            $(".mensaje").html(texto).css({"color": color});
                            $(".mensaje").fadeOut(2500, function(){
                                $(this).html("");
                                $(this).fadeIn(2500);
                            });
                        }
                    }
                });
                return false; //Evitar submit del formulario
            }
        });

        $(document).on('click', '#delete', function(){
            id_subActividad = $(this).attr("codigo");
            var descripcion = $(this).attr("descripcion");
            var opcion = confirm("¿Realmente desea eliminar la subactividad: " + descripcion + "?");
            if (opcion == true) {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo URL; ?>Evaluacion/Delete/deleteDatos',
                    data: {id_subActividad: id_subActividad},
                    success: function(response){
                        if (response == 1) {
                            var texto = "<strong>S</strong>ubActividad eliminada con exito.";
                            var color = "#379911";

                            $(".mensaje_1").html(texto).css({"color": color});
                            $(".mensaje_1").fadeOut(600, function(){
                                $(this).html("");
                                $(this).fadeIn(600);
                            });

                            setInterval(function(){
                                location.reload();
                            },800);
                        } else {
                            var texto = "<strong>E</strong>rror";
                            var color = "#f23030";

                            $(".mensaje_1").html(texto).css({"color": color});
                            $(".mensaje_1").fadeOut(4000, function(){
                                $(this).html("");
                                $(this).fadeIn(3000);
                            });
                        }
                    }
                });
                return false; //Evitar submit del formulario
            }
        });
    });

    $(document).ready(function(){
        $("#tabla").DataTable({
            "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    });
</script>