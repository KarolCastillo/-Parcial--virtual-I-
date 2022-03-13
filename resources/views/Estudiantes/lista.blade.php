@extends('diseños.base')
@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <h2 class="text-center mb-5"> LISTADO DE ALUMNOS INSCRITOS </h2>

            <table class="table table-bordered table-strpied text-center">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">FOTO</th>
                    <th scope="col">CARNE</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">ALIAS</th>
                    <th scope="col">CORREO</th>
                    <th scope="col">FECHA NAC.</th>
                    <th scope="col">TELEFONO</th>
                    <th scope="col">CATEGORIA</th>

                    <th scope="col">OPCIONES</th>
                </tr>
                </thead>

                <tbody>
                    @foreach($alumnos as $alumno)
                    <tr>

                        <td>
                            <img src="storage/{{$alumno->foto}}" width="60%">

                        </td>
                        <td class=" border px-4 py-2">{{$alumno->carne}}</td>
                        <td class=" border px-4 py-2">{{$alumno->nombre}}</td>
                        <td class=" border px-4 py-2">{{$alumno->alias}}</td>
                        <td class=" border px-4 py-2">{{$alumno->correo}}</td>
                        <td class=" border px-4 py-2">{{$alumno->fecha_nacimiento}}</td>
                        <td class=" border px-4 py-2">{{$alumno->telefono}}</td>
                        <td class=" border px-4 py-2">{{$alumno->descripcion}}</td>

                        <td class=" border px-4 py-2">
                            <div class="btn-group flex justify-center rounded-lg text-lg">
                            <a href="{{ route('modificar',$alumno->carne)}}" class=" mr-2 btn btn-primary">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('delete',$alumno->carne)}}" method="POST">
                                  @csrf @method('DELETE')
                            <button type="submit" onclick="return confirm('Eliminar registro de estudiante');" class=" btn btn-danger" >
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
            {{$alumnos->links()}}

        </div>
    </div>
</div>
@endsection
