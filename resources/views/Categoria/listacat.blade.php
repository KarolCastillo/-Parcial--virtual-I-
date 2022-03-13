@extends('diseños.base')
@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <h2 class="text-center mb-5"> LISTADO DE LAS CATEGORIA </h2>
            <a type="button " href="{{ url('/CREAR_cat')}}" class="btn btn-success mb-3 mt-3 mr-2 md-3 offset float-left">NUEVO </a>
            <table class="table table-bordered table-strpied text-center">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">CATEGORIA</th>
                    <th scope="col">OPCIONES</th>
                </tr>
                </thead>

                <tbody>
                    @foreach($categoria as $categorias)
                    <tr>

                        <td class=" border px-4 py-2">{{$categorias->id_categoria}}</td>
                        <td class=" border px-4 py-2">{{$categorias->descripcion}}</td>

                        <td class=" border px-4 py-2">
                            <div class="btn-group flex justify-center rounded-lg text-lg">
                            <form action="{{ route('delete_cat',$categorias->id_categoria)}}" method="POST">
                                  @csrf @method('DELETE')
                            <button type="submit" onclick="return confirm('Esta seguro de eliminar registro de grado');" class=" btn btn-danger" >
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div
            {{$categoria->links()}}

        </div>
    </div>
</div>
@endsection
