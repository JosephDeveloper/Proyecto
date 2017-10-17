<style>
    .panel-materia {
        background-color: #e0e0e0!important;
    }
</style>

<div class="panel-group col-sm-12">
    <div class="panel panel-primary" style="background-color: #EAE9E9;">
        <div class="panel-heading text-center">
            Materia
        </div>
        <div class="panel-body">
            <div class="panel-group col-sm-6">
                <div class="pull-right" style="padding-top: 4px;">
                    <a href="<?php echo "#";//echo URL."Materia/Create/create"; ?>" class="btn" role="button" data-toggle="modal" data-target="#add_data_Modal"><span class="glyphicon glyphicon-plus"></span> Nuevo</a>
                </div>
                <div class="panel-primary">
                    <div class="panel-heading">
                        Datos de Materia
                    </div>
                    <div class="panel-body panel-materia">
                        <div class="form-group"> 
                            <div class="table-responsive">
                                <table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Descripción</th>
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>  
                                    <?php foreach ($array as $key => $value){ ?>
                                            <tr>
                                                <td><?php echo $value["id_materia"]; ?></td>
                                                <td><?php echo $value["des_materia"]; ?></td>
                                                <td>
                                                    <a href="<?php echo "#"; // echo URL.'Materia/Edit/edit/'. $value["id_materia"] ?>" id="<?php echo $value["id_materia"]; ?>" value="edit" name="edit" class="glyphicon glyphicon-pencil edit_data"></a>
                                                </td>
                                                <td>
                                                    <a href="<?php echo URL.'Materia/Delete/delete/'. $value["id_materia"] ?>" class="glyphicon glyphicon-remove"></a>
                                                </td>
                                            </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-group col-sm-6">
                <div class="pull-right" style="padding-top: 4px;">
                    <a href="<?php echo URL."Materia/Create/create"; ?>" class="btn" role="button"><span class="glyphicon glyphicon-plus"></span> Nuevo</a>
                </div>
                <div class="panel-primary">
                    <div class="panel-heading">
                        Materias Asignadas
                    </div>
                    <div class="panel-body panel-materia">
                        <div class="form-group"> 
                            <div class="table-responsive">
                                <table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Materia</th>
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>  
                                    <?php if($array1 != null) { foreach ($array1 as $key => $value_1){ ?>
                                            <tr>
                                                <td><?php echo $value_1["nom_persona"]." ".$value_1["nom1_persona"]." ".$value_1["ape_persona"]." ".$value_1["ape1_persona"]; ?></td>
                                                <td><?php echo $value_1["des_materia"]; ?></td>
                                                <td>
                                                    <a href="<?php echo URL.'Materia/Edit/edit/'. $value_1["id_perso_mate"] ?>" class="glyphicon glyphicon-pencil"></a>
                                                </td>
                                                <td>
                                                    <a href="<?php echo URL.'Materia/Details/details/'. $value_1["id_perso_mate"] ?>" class="glyphicon glyphicon-eye-open"></a>
                                                </td>
                                                <td>
                                                    <a href="<?php echo URL.'Materia/Delete/delete/'. $value_1["id_perso_mate"] ?>" class="glyphicon glyphicon-remove"></a>
                                                </td>
                                            </tr>
                                    <?php }} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="add_data_Modal" class="modal fade">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">Materia</h4>
            </div>
            <div class="modal-body">
                <form method="post" class="form-horizontal" id="Registrar" name="Registrar">
                    <label>Descripción *</label>
                        <input type="text" name="descripcion" id="descripcion" class="form-control" autofocus/>
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
        var id_materia = "";

        $(document).ready(crearMateria);


        $("#add_data_Modal").on('hidden.bs.modal', function () {
            $('#crear').val("Crear");
            $('#descripcion').val(null);
        });

        $(document).on('click', '.edit_data', function(){
            id_materia = $(this).attr("id");
            $.ajax({
                url: "<?php echo URL.'Materia/Edit/edit/'?>"+id_materia,
                method: "POST",
                data: {id_materia, id_materia},
                dataType: "json",
                success: function(data){
                    $('#descripcion').val(data[0].des_materia);
                    $('#crear').val("Editar");
                    $('#add_data_Modal').modal('show');
                }
            });
        });

        $('#crear').click(function(){
            if ($('#crear').val() == "Crear"){
                var descripcion = $('form[name=Registrar] input[name=descripcion]')[0].value;

                if (descripcion == "") {

                }else{
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo URL;?>Materia/create/createDatos',
                        data: {descripcion: descripcion},
                        success: function(response){
                            //alert(response);
                            if (response == 1) {
                                var texto = "<strong>M</strong>ateria registrada con exito.";
                                var color = "#379911";
                                
                                $(".mensaje").html(texto).css({"color": color});
                                $(".mensaje").fadeOut(2500, function(){
                                    $(this).html("");
                                    $(this).fadeIn(2500);
                                });
                                $("#add_data_Modal").fadeOut(2500, function(){
                                    location.reload();                            
                                });                            
                            } else {
                                var texto = "<strong>L</strong>a materia ya existe.";
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
            }else if ($('#crear').val() == "Editar"){
                var descripcion = $('form[name=Registrar] input[name=descripcion]')[0].value;

                if (descripcion == "") {

                }else{
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo URL;?>Materia/edit/editDatos',
                        data: {id_materia: id_materia, descripcion: descripcion},
                        success: function(response){
                            //alert(response);
                            if (response == 1) {
                                var texto = "<strong>M</strong>ateria actualizada con exito.";
                                var color = "#379911";
                                
                                $(".mensaje").html(texto).css({"color": color});
                                $(".mensaje").fadeOut(2500, function(){
                                    $(this).html("");
                                    $(this).fadeIn(2500);
                                });
                                $("#add_data_Modal").fadeOut(2500, function(){
                                    location.reload();                            
                                });                            
                            } else {
                                var texto = "<strong>L</strong>a materia ya existe.";
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
            }
            
        });
    });

    $("#tabla.table").DataTable({
        "bLengthChange": false,
        "language": {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Registro _START_ al _END_ total _TOTAL_ registros",
            "sInfoEmpty":      "Registro 0 al 0 total de 0 registros",
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
</script>