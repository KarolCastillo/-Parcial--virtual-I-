<?php

namespace App\Http\Controllers;
use App\Models\categoria;
use Illuminate\Http\Request;

class categoriacontroller extends Controller
{
    //LISTADO DE LAS CATEGORIAS DISPONIBLES
    public function listado(){
        $data['categoria']=categoria::paginate(50);
        return view('Categoria.listacat',$data);
    }

    //FORMULARIO PARA CREAR NUEVO CATEGORIA
    public function catform(){
        return view('Categoria.catform');
    }

    //GUARDAR NUEVA CATEGORIA
    public function save(Request $request){
        $validator=$this->validate($request,[
            'id_categoria'=>'required',
            'descripcion'=>'required',

        ]);
        $userdata = request()->except('_token');
        categoria::insert($userdata);
        return back() ->with('categoriaguardado', 'Categoria guardado con exito');
    }

    //ELIMINAR CATEGORIA
    public function delete($id_categoria){
        categoria::destroy($id_categoria);
        return back() ->with('categoriaeliminado', 'Categoria eliminado con exito');
    }


}
