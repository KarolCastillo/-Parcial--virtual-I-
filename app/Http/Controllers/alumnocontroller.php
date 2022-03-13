<?php

namespace App\Http\Controllers;

use App\Models\alumno;
use App\Models\categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class alumnocontroller extends Controller
{
    //LISTADO DE ALUMNOS
    public function listado(){
        $alumnos = DB::table('alumno')
            ->join('categoria', 'alumno.id_categoria', '=', 'categoria.id_categoria')
            ->select('alumno.*', 'categoria.descripcion')
            ->paginate(75);


        return view('Estudiantes.lista', compact('alumnos'));
    }

    //FORMULARIO CREAR ALUMNOS
    public function estudiform(){
        $categoria = categoria::all();
        return view('Estudiantes.estudiform',compact('categoria'));
    }

    //GUARDAR NUEVO ALUMNO
    public function save(Request $request){
        $validator=$this->validate($request,[
            'carne'=>'required|unique:alumno',
            'nombre'=>'required',
            'alias'=>'required',
            'foto'=>'required',
            'correo'=>'required|email|unique:alumno',
            'fecha_nacimiento'=>'required',
            'telefono'=>'required',
            'id_categoria'=>'required',
]);

        $avatar = $request->file('foto');
        $path = $avatar->store('foto','public');
            alumno::create([
            'carne' =>$validator['carne'],
            'nombre' =>$validator['nombre'],
            'alias' =>$validator['alias'],
            'foto' =>$path,
            'correo'=>$validator['correo'],
            'fecha_nacimiento'=>$validator['fecha_nacimiento'],
            'telefono'=>$validator['telefono'],
            'id_categoria'=>$validator['id_categoria'],

        ]);

        return back()->with('alumnoguardado', 'Alumno guardado con exito');
    }

    //ELIMINAR ALUMNOS
    public function delete($carne){
        alumno::destroy($carne);
        return back() ->with('alumnoeliminado', 'Alumno eliminado con exito');
    }

    //FORMULARIO PARA EDITAR ALUMNOS
    public function modificar($carne){
        $alumno=alumno::findorfail($carne);
        $categoria = categoria::all();
        return view('Estudiantes.editform', compact('alumno', 'categoria'));

    }

    //EDITAR ALUMNOS
    public function edit(Request $request,$carne){

       $alumno = alumno::where('carne','=', $carne)->first();
       $alumno->carne = $carne;
       $alumno->nombre = $request->nombre;
       $alumno->alias = $request->alias;
       $alumno->correo = $request->correo;
       $alumno->fecha_nacimiento = $request->fecha_nacimiento;
       $alumno->telefono = $request->telefono;
       $alumno->id_categoria = $request->id_categoria;
       if($request->hasFile('foto')){
           $avatar = $request->file('foto');
           $path = $avatar->store('foto','public');
           $alumno->foto = $path;
       }
       $alumno->save();

     return back()->with('alumnomodificado', 'Alumno modificado con exito');



    }
}
