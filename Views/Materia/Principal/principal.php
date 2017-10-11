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
                <div class="panel-primary">
                    <div class="panel-heading">
                        Datos de Materia
                    </div>
                    <div class="panel-body panel-materia">
                        <div class="form-group"> 
                            <div class="table-responsive">
                                <div class="pull-right box-tools">
                                    <a href="<?php echo URL."Materia/Create/create"; ?>" class="btn btn-primary btn-sm glyphicon glyphicon-plus" role="button"></a>
                                </div>
                                <table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Descripción</th>
                                            <th>&nbsp;</th>
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
                                                    <a href="<?php echo URL.'Materia/Edit/edit/'. $value["id_materia"] ?>" class="glyphicon glyphicon-pencil"></a>
                                                </td>
                                                <td>
                                                    <a href="<?php echo URL.'Materia/Details/details/'. $value["id_materia"] ?>" class="glyphicon glyphicon-eye-open"></a>
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
                <div class="panel-primary">
                    <div class="panel-heading">
                        Materias Asignadas
                    </div>
                    <div class="panel-body panel-materia">
                        <div class="form-group"> 
                            <div class="table-responsive">
                            <div class="pull-right box-tools">
                                <a href="<?php echo URL."Materia/Create/create"; ?>" class="btn btn-primary btn-sm glyphicon glyphicon-plus" role="button"></a>
                            </div>
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
                                    <?php foreach ($array1 as $key => $value_1){ ?>
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
                                    <?php } ?>
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

<script>
    $(document).ready(function(){
        $("#tabla.table").DataTable({
            "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Registros del _START_ al _END_ total _TOTAL_ registros",
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