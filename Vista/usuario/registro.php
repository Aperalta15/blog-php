<div class="row">
  <div class="col-md-2">

  </div>
  <div class="col-md-5">
    <h2>Resgistro</h2>
    <form action="?controlador=usuario&accion=regUsuario" method="POST" id="regUsuario">
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp" placeholder="Nombre" required>
      </div>
      <div class="form-group">
        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" name="apellido" id="apellido" aria-describedby="emailHelp" placeholder="Apellido" required>
      </div>
      <div class="form-group">
        <label for="correo">Correo</label>
        <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelp" placeholder="Ingresar correo" required>
      </div>
      <div class="form-group">
        <label for="contraseña">Contraseña</label>
        <input type="password" class="form-control" name="password" id="contraseña" placeholder="Password" required>
      </div>
      <!-- <input type="hidden" name="opcion" value="1"> -->
      <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
  </div>
  <div class="col-md-4">

  </div>
</div>
