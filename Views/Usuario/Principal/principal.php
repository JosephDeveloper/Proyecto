<div class="panel-group col-sm-12">
    <div class="pull-right" style="padding-top: 4px;">
        <a href="<?php echo URL."User/Create/create"; ?>" class="btn" role="button"><span class="glyphicon glyphicon-plus"></span> Nuevo</a>
    </div>
    <div class="panel-primary" style="background-color: #EAE9E9">
        <div class="panel-heading">
            Usuarios
        </div>
        <div class="panel-body">
          <div class="form-group"> 
            <div class="table-responsive">
                <table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Documento</th>
                            <th>Genero</th>
                            <th>Estado</th>
                            <th>Dirección</th>
                            <th>Telefono</th>
                            <th>Celular</th>
                            <th>Email</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>  
                    <?php foreach ($array as $key => $value){ ?>
                            <tr>
                                <td><?php echo $value["id_persona"]; ?></td>
                                <td><?php echo $value["nom_persona"] . " " . $value["nom1_persona"]; ?></td>
                                <td><?php echo $value["ape_persona"] . " " . $value["ape1_persona"]; ?></td>
                                <td><?php echo $value["doc_persona"]; ?></td>
                                <td><?php echo $value["gen_persona"]; ?></td>
                                <td><?php echo $value["est_persona"]; ?></td>
                                <td><?php echo $value["dir_persona"]; ?></td>
                                <td><?php echo $value["tel_persona"]; ?></td>
                                <td><?php echo $value["cel_persona"]; ?></td>
                                <td><?php echo $value["email_persona"]; ?></td>
                                <td>
                                	<a href="<?php echo URL.'User/Edit/edit/'. $value["id_persona"] ?>" class="glyphicon glyphicon-pencil"></a>
                                </td>
                                <td>
                                	<a href="<?php echo URL.'User/Details/details/'. $value["id_persona"] ?>" class="glyphicon glyphicon-eye-open"></a>
                                </td>
                                <td>
                                	<a href="<?php echo URL.'User/Delete/delete/'. $value["id_persona"] ?>" class="glyphicon glyphicon-remove"></a>
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
            dom: 'Bfrtip',
            buttons: [
                'copy',
                {
                    extend: 'csvHtml5',
                    title: 'Reporte Personas',
                    exportOptions: {
                        columns: [1, 2, 6, 7, 8, 9]
                    }
                },
                {
                    extend: 'excel',
                    title: 'Reporte Personas',
                    exportOptions: {
                        columns: [1, 2, 6, 7, 8, 9]
                    }
                },
                {
                    extend: 'pdfHtml5',
                    title: 'Reporte Personas',
                    exportOptions: {
                        columns: [1, 2, 6, 7, 8, 9]
                    }
                },
                {
                    extend: 'print',
                    title: 'Reporte Personas',
                    exportOptions: {
                        columns: [1, 2, 6, 7, 8, 9]
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