<div class="panel-group col-sm-12">
    <div class="pull-right" style="padding-top: 4px;">
        <a href="<?php echo URL."Institucion/Create/create"; ?>" class="btn" role="button"><span class="glyphicon glyphicon-plus"></span> Nuevo</a>
    </div>
    <div class="panel panel-primary" style="background-color: #EAE9E9;">
        <div class="panel-heading">
            Institución
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">                    
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Ciudad</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>  
                    <?php foreach ($array as $key => $value){ ?>
                            <tr>
                                <td><?php echo $value["nom_instituto"]; ?></td>
                                <td><?php echo $value["des_ciudad"]; ?></td>
                                <td>
                                	<a href="<?php echo URL.'Institucion/Edit/edit/'. $value["id_instituto"] ?>" class="glyphicon glyphicon-pencil"></a>
                                </td>
                                <td>
                                	<a href="<?php echo URL.'Institucion/Details/details/'. $value["id_instituto"] ?>" class="glyphicon glyphicon-eye-open"></a>
                                </td>
                                <td>
                                	<a href="<?php echo URL.'Institucion/Delete/delete/'. $value["id_instituto"] ?>" class="glyphicon glyphicon-remove"></a>
                                </td>
                            </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#tabla").DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy',
                {
                    extend: 'csvHtml5',
                    title: 'Reporte Instituciones',
                    exportOptions: {
                        columns: [0, 1]
                    }
                },
                {
                    extend: 'excel',
                    title: 'Reporte Instituciones',
                    exportOptions: {
                        columns: [0, 1]
                    }
                },
                {
                    extend: 'pdfHtml5',
                    title: 'Reporte Instituciones',
                    exportOptions: {
                        columns: [0, 1]
                    }
                },
                {
                    extend: 'print',
                    title: 'Reporte Instituciones',
                    exportOptions: {
                        columns: [0, 1]
                    }
                }
            ],
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
                },
                buttons: {
                    copy: 'Copiar',
                    copyTitle: 'Copiado al Portapapeles',
                    copyKeys: 'Appuyez sur <i>ctrl</i> ou <i>\u2318</i> + <i>C</i> pour copier les données du tableau à votre presse-papiers. <br><br>Pour annuler, cliquez sur ce message ou appuyez sur Echap.',
                    copySuccess: {
                        _: '%d lineas copiadas',
                        1: '1 linea copiada'
                    },

                    print: 'Imprimir',
                }              
            }
        });
    });
</script>