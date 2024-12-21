<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Database\Eloquent\Model;
class UsuariosController extends Controller
{
    public function crear()
    {
        $Usuarios=usuarios::all();  
        return view('CRUD.crear', compact('Usuarios'))->with('usuarios', $Usuarios);

    }

    public function update(Request $request, usuarios $Usuario)
    {
        $request->validate([
            'Apodo' => 'required|string|max:100',
            'Contrasenha' => 'required|string|max:100',
        ]);
    
        $Usuario->update($request->all());
    
        return redirect()->back()->with('success2', 'Actualización completada');
    }

    public function destroy(usuarios $usuario)
    {
        
        $usuario->delete();
    
        
        return redirect()->back()->with('success3', 'Usuario elimando ');
    }


    
    

    public function store(Request $request){
        $request->validate([
            'Apodo'=>'required|string|max:100',
            'Contrasenha'=>'required|string|max:100',
        ]);
        $Usuario = new Usuarios();
        $Usuario->Apodo = $request->Apodo; 
        $Usuario->Contrasenha = $request->Contrasenha; 

        $Usuario ->save();

        return redirect()->back()->with('success', 'Datos ingresados correctamente');
    }

}
