<div class="row">
    <form class="form-horizontal" id="Asignar" name="Asignar" method="POST">
        <div class="panel-body panel-body-datos col-sm-12">
            <div class="mensaje text-center">
                                
            </div>
            <div class="form-group col-sm-12">
                <label class="col-sm-2 control-label">Materia: </label>
                <div class="col-sm-8">
                    <input type="text" name="id_materia" id="id_materia" placeholder="ID Materia *" class="form-control"></input>
                </div>
                <div class="col-sm-2">                    
                    <a href="#" class="btn btn-primary" role="button" id="selec_materia">Buscar</a>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <label class="col-sm-2 control-label">Persona: </label>
                <div class="col-sm-8">
                    <input type="text" name="id_persona" id="id_persona" placeholder="ID Persona *" class="form-control"></input>
                </div>
                <div class="col-sm-2">                    
                    <a href="#" class="btn btn-primary" role="button" id="selec_persona"">Buscar</a>
                </div>
            </div>
            <div class="panel-body">
                <div class="col-sm-4 col-xs"></div>
                <button class="btn btn-success col-sm-4 col-xs-12" type="submit" id="asignar" name="asignar">Asignar</button>
            </div>
        </div>
    </form>
</div>

<div id="seleccionar_materia" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">Lista de Materias</h4>
            </div>
            <div class="modal-body">
                <div class="form-group"> 
                    <div class="table-responsive">
                        <table id="tabla_persona" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Descripción</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>  
                            <?php foreach ($array1 as $key => $value_1){ ?>
                                    <tr>
                                        <td><?php echo $value_1["id_materia"]; ?></td>
                                        <td><?php echo $value_1["des_materia"]; ?></td>
                                        <td>
                                            <a href="#" codigo_materia="<?php echo $value_1["id_materia"]; ?>" value="select" id="select" name="select" class="select_materia">Seleccionar</a>
                                        </td>
                                    </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div id="seleccionar_persona" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">Lista de Personas</h4>
            </div>
            <div class="modal-body">
                <div class="form-group"> 
                    <div class="table-responsive">
                        <table id="tabla_persona" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Documento</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>  
                            <?php foreach ($array as $key => $value){ ?>
                                    <tr>
                                        <td><?php echo $value["id_persona"]; ?></td>
                                        <td><?php echo $value["nom_persona"] ." ". $value["nom1_persona"] ." ". $value["ape_persona"] ." ". $value["ape1_persona"]; ?></td>
                                        <td><?php echo $value["doc_persona"]; ?></td>
                                        <td>
                                            <a href="#" codigo_persona="<?php echo $value["id_persona"]; ?>" value="select" id="select" name="select" class="select_persona">Seleccionar</a>
                                        </td>
                                    </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#selec_materia').click(function(){
        $('#seleccionar_materia').modal('show');
    });

    $('#selec_persona').click(function(){
        $('#seleccionar_persona').modal('show');
    });

    $(document).on('click', '.select_materia', function(){
        id_materia = $(this).attr("codigo_materia");
        $('#id_materia').val(id_materia);
        $('#seleccionar_materia').modal('hide');
    });

    $(document).on('click', '.select_persona', function(){
        id_persona = $(this).attr("codigo_persona");
        $('#id_persona').val(id_persona);
        $('#seleccionar_persona').modal('hide');
    });

    //ASIGNAR

    $("#contenido").on("click","button#asignar",function(){        
        var id_materia = document.Asignar.id_materia.value;
        var id_persona = document.Asignar.id_persona.value;

        if (id_persona == "" || id_materia == "") {
        }else{
            $.ajax({
                type: 'POST',
                url: '<?php echo URL;?>Materia/create/asignarDatos',
                data: {id_persona: id_persona, id_materia: id_materia},
                success: function(response){
                    //alert(response);
                    if (response == 0) {
                        var texto = "<strong>N</strong>o existe materia con dicho id.";
                        var color = "#f23030";
                        
                        $(".mensaje").html(texto).css({"color": color});
                        $(".mensaje").fadeOut(2500, function(){
                            $(this).html("");
                            $(this).fadeIn(2500);
                        });                        
                    } else if (response == 2){
                        var texto = "<strong>N</strong>o existe persona con dicho id.";
                        var color = "#f23030";
                        
                        $(".mensaje").html(texto).css({"color": color});
                        $(".mensaje").fadeOut(2500, function(){
                            $(this).html("");
                            $(this).fadeIn(2500);
                        });
                    } else if(response == 1){
                        var texto = "<strong>M</strong>ateria asignada con exito.";
                        var color = "#379911";
                        
                        $(".mensaje").html(texto).css({"color": color});
                        $(".mensaje").fadeOut(2500, function(){
                            $(this).html("");
                            $(this).fadeIn(2500);
                        });

                        setInterval(function(){
                            location.reload();
                        },800);
                    }
                }
            });
            return false; //Evitar submit del formulario 
        }           
    });


    var table = $('#tabla_persona.table').DataTable({
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

