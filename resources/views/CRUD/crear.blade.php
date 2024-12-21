@extends('Layouts.app')
@section('content')
<div class="container mt-4">
    <div class="row">

        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Añadir información</h5><br>
                    <form method="POST" action="{{ route('CRUD.resivir') }}">
                        @csrf
                        <div class="form-group">
                            <label for="Apodo">Apodo:</label>
                            <input class="form-control" type="text" name="Apodo" required>
                        </div><br>
                        <div class="form-group">
                            <label for="Contrasenha">Contraseña:</label>
                            <input class="form-control" type="password
                            " name="Contrasenha" required>
                        </div><br>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>

                @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
            </div>
        </div>


        
        <div class="col-md-8">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Apodo</th>
                        <th>Contraseña</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->id }}</td>
                            <td>{{ $usuario->Apodo }}</td>
                            <td>{{ $usuario->contrasenha }}</td>
                            <td>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal{{ $usuario->id }}">Actualizar</button>

                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarModal{{ $usuario->id }}">Eliminar</button>
                            @include('CRUD.eliminar') 
                            @include('CRUD.actualizar')  
                           
                              
                        </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if(session('success2'))
                <div class="alert alert-success" role="alert">
                    {{ session('success2') }}
                </div>
            @endif  
            @if(session('success3'))
                <div class="alert alert-success" role="alert">
                     {{ session('success3') }}
                 </div>
            @endif
              
        </div>
    </div>
</div>




@endsection




