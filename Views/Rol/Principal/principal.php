<div class="panel-group col-sm-12">
    <div class="pull-right" style="padding-top: 4px;">
        <a href="<?php echo URL."Rol/Create/create"; ?>" class="btn" role="button"><span class="glyphicon glyphicon-plus"></span> Nuevo</a>
    </div>
    <div class="panel panel-primary" style="background-color: #EAE9E9;">
        <div class="panel-heading">
            Roles
        </div>
        <div class="panel-body">
          <div class="form-group"> 
            <div class="table-responsive">
                <table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Rol - Descipción</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>  
                    <?php foreach ($array as $key => $value){ ?>
                            <tr>
                                <td><?php echo $value["des_rol"]; ?></td>
                                <td>
                                	<a href="<?php echo URL.'Rol/Edit/edit/'. $value["id_rol"] ?>" class="glyphicon glyphicon-pencil"></a>
                                </td>
                                <td>
                                	<a href="<?php echo URL.'Rol/Details/details/'. $value["id_rol"] ?>" class="glyphicon glyphicon-eye-open"></a>
                                </td>
                                <td>
                                	<a href="<?php echo URL.'Rol/Delete/delete/'. $value["id_rol"] ?>" class="glyphicon glyphicon-remove"></a>
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

<script>
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