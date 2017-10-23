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
            <div class="mensaje_1 text-center">
                                
            </div>
            <div class="row">
                <div class="panel-group col-sm-6">
                    <div class="pull-right" style="padding-top: 4px;">
                        <a href="#" class="btn" role="button" data-toggle="modal" data-target="#añadir_materia"><span class="glyphicon glyphicon-plus"></span> Nuevo</a>
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
                                                        <a href="#" codigo="<?php echo $value["id_materia"]; ?>" value="edit" id="edit" name="edit" class="glyphicon glyphicon-pencil edit_data"></a>
                                                    </td>
                                                    <td>
                                                        <a href="#" descripcion="<?php echo $value["des_materia"]; ?>" codigo="<?php echo $value["id_materia"]; ?>" id="delete" name="delete" class="glyphicon glyphicon-remove"></a>
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
                        <a href="<?php echo URL."Materia/Create/asignar"; ?>" class="btn" id="asignar" role="button"><span class="glyphicon glyphicon-plus"></span> Nuevo</a>
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
                                            </tr>
                                        </thead>
                                        <tbody>  
                                        <?php if($array1 != null) { foreach ($array1 as $key => $value_1){ ?>
                                                <tr>
                                                    <td><?php echo $value_1["nom_persona"]." ".$value_1["nom1_persona"]." ".$value_1["ape_persona"]." ".$value_1["ape1_persona"]; ?></td>
                                                    <td><?php echo $value_1["des_materia"]; ?></td>
                                                    <td>
                                                        <a href="#" codigo="<?php echo $value_1["id_perso_mate"]; ?>" id="delete_Asig" name="delete_Asig" class="glyphicon glyphicon-remove"></a>
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
            <div class="row">
                <div class="panel-group col-sm-12 hide" id="contenedor">
                    <div class="panel-primary">
                        <div class="panel-heading" id="titulo">
                        </div>
                        <div class="panel-body panel-materia">
                            <div class="form-group" id="contenido">
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>

<div id="añadir_materia" class="modal fade">
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
        $(document).ready(Asignar);

        var id_materia = "";

        //MATERIA

        $("#añadir_materia").on('hidden.bs.modal', function () {
            $('#crear').val("Crear");
            $('#descripcion').val(null);
        });

        $(document).on('click', '.edit_data', function(){
            id_materia = $(this).attr("codigo");
            $.ajax({
                url: "<?php echo URL.'Materia/Edit/edit/'?>"+id_materia,
                method: "POST",
                data: {id_materia, id_materia},
                dataType: "json",
                success: function(data){
                    $('#descripcion').val(data[0].des_materia);
                    $('#crear').val("Editar");
                    $('#añadir_materia').modal('show');
                }
            });
        });

        
        $('#crear').click(function(){
            $(document).ready(crearMateria);
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
                                setInterval(function(){
                                    location.reload();
                                },2500);                          
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
                                setInterval(function(){
                                    location.reload();
                                },2500);              
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


        $(document).on('click', '#delete', function(){
            id_materia = $(this).attr("codigo");
            var descripcion = $(this).attr("descripcion");
            var opcion = confirm("¿Realmente desea eliminar la materia: " + descripcion + "?");
            if (opcion == true) {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo URL;?>Materia/Delete/deleteDatos',
                    data: {id_materia: id_materia},
                    success: function(response){                        
                        if (response == 1) {
                            var texto = "<strong>M</strong>ateria eliminada con exito.";
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
                            var texto = "<strong>E</strong>rror, la materia está asignada por lo tanto no se puede eliminar.";
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


        $(document).on('click', '#delete_Asig', function(){
            id_perso_mate = $(this).attr("codigo");
            var opcion = confirm("¿Realmente desea eliminar la asignación n°: " + id_perso_mate + "?");
            if (opcion == true) {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo URL;?>Materia/Delete/deleteAsignado',
                    data: {id_perso_mate: id_perso_mate},
                    success: function(response){                        
                        if (response == 1) {
                            var texto = "<strong>Materia</strong>ateria asignada eliminada con exito.";
                            var color = "#379911";
                            
                            $(".mensaje_1").html(texto).css({"color": color});
                            $(".mensaje_1").fadeOut(600, function(){
                                $(this).html("");
                                $(this).fadeIn(600);
                            });

                            setInterval(function(){
                                location.reload();
                            },600);
                        } else {
                            var texto = "<strong>E</strong>rror.";
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

    var table = $('#tabla.table').DataTable({
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
    /*var dato = "";
    
    //para seleccionar una opcion
    $('#tabla tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
            dato = "";
            console.log(dato);
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            dato = $(this).find("td:eq(0)").text();
            console.log(dato);
        }

    });*/
</script>