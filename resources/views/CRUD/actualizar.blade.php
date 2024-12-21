<div class="modal fade" id="modal{{ $usuario->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ route('CRUD.update', $usuario) }}">
         @csrf
         @method('PUT')
         <div class="form-group">
             <label for="Apodo">Apodo:</label>
              <input class="form-control" type="text" name="Apodo" value="{{ $usuario->Apodo}}" required>
              
              </div><br>
            <div class="form-group">
              <label for="Contrasenha">Contraseña:</label>
             <input class="form-control" type="text" value="{{ $usuario->contrasenha }}" name="Contrasenha" required>
            </div><br>
             <button type="submit" class="btn btn-primary">Actualizar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </form>
      </div>
    
 
  </div>
</div>