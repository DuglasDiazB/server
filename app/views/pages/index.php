<?php require_once('../app/views/inc/header.php') ?>

<div class="card card-stats mb-4 mb-lg-0">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0">LISTA DE USUARIOS</h5>
                
            </div>
            <div class="col-auto">
              <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                  <i class="fas fa-chart-bar"></i>
              </div>
            </div>
        </div>
        <br>
       <!-- tabla -->



<div class="table-responsive">
    <table class="table align-items-center">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Edad</th>
            <th scope="col">Correo</th>
            <th scope="col">Opciones</th>
            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($parameters['usuarios'] as $key => $usuario):?>
        <tr>
            <td><?php echo $usuario->idusuario ?></td>
            <td><?php echo $usuario->nombre ?></td>
            <td><?php echo $usuario->edad?></td>
            <td><?php echo $usuario->correo?></td>
            <td>
                <a href="<?php echo ROUTE_URL?>/index/update/<?php echo $usuario->idusuario ?>">Editar</a>
                <a href="<?php echo ROUTE_URL?>/index/delete/<?php echo $usuario->idusuario ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevo">
  Nuevo Usuario
</button>







    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="nuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form action="<?php echo ROUTE_URL?>/index/guardar" method = "post">
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="nombre" class="form-control"  placeholder="Ingrese el nombre" required>
                </div>
             </div>

             <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="apellido" class="form-control"  placeholder="Ingrese el apellido" required>
                </div>
             </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="edad" class="form-control"  placeholder="Ingrese la edad" required>
                </div>
             </div>

             <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="correo" class="form-control"  placeholder="Ingrese el correo" required>
                </div>
             </div>
        </div>

        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>



    </div>
  </div>
</div>

<?php require_once('../app/views/inc/footer.php') ?>

