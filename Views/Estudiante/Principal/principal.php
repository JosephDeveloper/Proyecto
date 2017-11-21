<style>
    .panel-estudiante {
        background-color: #e0e0e0!important;
    }
</style>

<div class="panel-group col-sm-12">
    <div class="panel panel-primary" style="background-color: #EAE9E9;">
        <div class="panel-heading text-center">
            Estudiante
        </div>
        <div class="panel-body">
            <div class="mensaje_1 text-center">
                                
            </div>
            <div class="row">         
                <div class="panel-group col-sm-12">
                    <div class="pull-right" style="padding-top: 4px;">
                        <a href="<?php echo URL."Estudiante/Create/asignar"; ?>" class="btn" id="asignar_est" role="button"><span class="glyphicon glyphicon-plus"></span> Nuevo</a>
                    </div>
                    <div class="panel-primary">
                        <div class="panel-heading">
                            Estudiantes Asignados
                        </div>
                        <div class="panel-body panel-materia">
                            <div class="form-group"> 
                                <div class="table-responsive">
                                    <table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Codigo</th>
                                                <th>Estudiante</th>
                                                <th>Materia</th>
                                                <th>Codigo</th>
                                                <th>Docente</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>  
                                        <?php if($array != null) { foreach ($array as $key => $value){ ?>
                                                <tr>
                                                    <td><?php echo $value["id_estudi"]; ?></td>
                                                    <td><?php echo $value["nom_estudi"]." ".$value["ape_estudi"]; ?></td>
                                                    <td><?php echo $value["des_materia"]; ?></td>
                                                    <td><?php echo $value["id_persona"]; ?></td>
                                                    <td><?php echo $value["nom_persona"]." ".$value["ape_persona"]; ?></td>
                                                    <td>
                                                        <a href="#" codigo="<?php echo $value["id_eva_act"]; ?>" id="delete_Asig" name="delete_Asig" class="glyphicon glyphicon-remove"></a>
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
                        <div class="panel-body panel-estudiante">
                            <div class="form-group" id="contenido">
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>

<script>
    $(function(){
        $(document).ready(Asignar_est);

        var id_materia = "";
        
        $(document).on('click', '#delete_Asig', function(){
            id_eva_act = $(this).attr("codigo");
            var opcion = confirm("¿Realmente desea eliminar la asignación n°: " + id_eva_act + "?");
            if (opcion == true) {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo URL;?>Estudiante/Delete/deleteAsignado',
                    data: {id_eva_act: id_eva_act},
                    success: function(response){                        
                        if (response == 1) {
                            var texto = "<strong>E</strong>studiante asignado eliminado con exito.";
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