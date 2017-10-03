<div class="panel-group col-sm-12">
    <div class="panel-primary" style="background-color: #EAE9E9">
        <div class="panel-heading">
            Usuarios
        </div>
        <div class="panel-body">
          <div class="form-group"> 
            <div class="table-responsive">
              <table class="table table-striped" id="tabla">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Documento</th>
                    <th>Genero</th>
                    <th>Estado</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Celular</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>  
                    <?php 
                        foreach ($array as $key => $value) {
                            ?>
                                <tr>
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