<?php require_once('../app/views/inc/header.php')?>
    <div class="container">
    <form action="<?php echo ROUTE_URL?>/index/update/<?php echo $parameters['usuario']->idusuario?>" method = "post">
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="nombre" class="form-control"  placeholder="Ingrese el nombre" value="<?php echo $parameters['usuario']->nombre?>" required>
                </div>
             </div>

             <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="apellido" class="form-control"  placeholder="Ingrese el apellido" value="<?php echo $parameters['usuario']->apellido?>" required>
                </div>
             </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="edad" class="form-control"  placeholder="Ingrese la edad" value="<?php echo $parameters['usuario']->edad?>" required>
                </div>
             </div>

             <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="correo" class="form-control"  placeholder="Ingrese el correo" value="<?php echo $parameters['usuario']->correo?>" required>
                </div>
             </div>
        </div>

        ...
      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>

      <div class="alert alert-primary">
        <p><b>Modificado por ultima vez:</b> <?php echo $parameters['usuario']->fecha?></p>
      </div>
    </div>


<?php require_once('../app/views/inc/footer.php')?>