<style type="text/css">
    .cabecera{
        text-align: center;
    }
</style>

<div class="panel-group col-sm-12">
    <div class="panel panel-primary" style="background-color: #EAE9E9;">
        <div class="panel-heading">
            Lista de Estudiantes
        </div>
        <div class="panel-body">
          <div class="form-group"> 
            <div class="table-responsive">
                <table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Documento</th>
                            <?php foreach ($array1 as $key => $value_1) { ?>
                                <th class="cabecera"><?php echo $value_1["des_actividad"]; ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($array as $key => $value)
                    { 
                    ?>
                        <tr>
                            <td><?php echo $value["id_estudi"]; ?></td>
                            <td><?php echo $value["nom_estudi"] . " " . $value["ape_estudi"]; ?></td>
                            <td><?php echo $value["doc_estudi"]; ?></td>
                            <!-- <a href="<?php echo URL.'Notas/Principal/materia'?>">Calificar</a> -->                                
                    <?php
                        foreach ($array1 as $key => $value_1)
                        {
                            $cont = 0;
                            $act = 0;
                            foreach ($array2 as $key => $value_2)
                            {
                                if ($value_2["id_actividad"] == $value_1["id_actividad"]){
                                    $cont++;
                                    if ($cont == 1)
                                    {
                                        $act++;
                                    ?>
                                        <td align="center">
                                            <input type="text" name="actividad" id="actividad" class="form-control" size="1" codigo="<?php echo $value_2["id_actividad"]; ?>" value="<?php echo ($value['id_actividad'] == $value_2['id_actividad']) ? $value['nota'] : '0'; ?>"></input>
                                    <?php 
                                    } else 
                                    { ?>
                                            <input type="text" name="actividad" id="actividad" class="form-control" size="1" codigo="<?php echo $value_2["id_actividad"]; ?>" value="<?php echo ($value['id_actividad'] == $value_2['id_actividad']) ? $value['nota'] : '0'; ?>"></input>
                                    <?php 
                                    }
                                }
                            }
                            echo "</td>";
                        }
                    ?>
                        </tr>
                    <?php
                    }
                    ?>
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