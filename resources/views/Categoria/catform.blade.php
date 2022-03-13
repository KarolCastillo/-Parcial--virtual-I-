@extends('diseños.base')
@section('content')
<div class="container mt-6">
    <div class="row justify-content-center">
        <div class="col-md-5 mt-5">
            <!--MENSAJE FLASH-->
            @if(session('categoriaguardado'))
                <div class="alert alert-success">
                   {{ session('categoriaguardado') }}
                </div>
            @endif

            <!--VALIDACION DE ERRORES-->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{$error}} </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card">
                <form action="{{route('save_categoria')}}" mathod="POST">
                    @csrf
                    <div class="card-header text-center text-white bg-dark">INGRESAR NUEVA CATEGORIA</div>
                        <div class="card-body">
                            <div class=" form-group col-md-12 ">
                                <label for="">ID</label>
                                <input type="text" class="form-control " name="id_categoria" placeholder="Inserte un identificador">
                            </div>

                            <div class=" form-group col-md-12 ">
                                <label for="">CATEGORIA</label>
                                <input type="text" class="form-control " name="descripcion" placeholder="Inserte una categoria">
                            </div>

                            </div>

                            <div class="row form-group justify-content-center">
                                <button type="submit" class="btn btn-success col-md-3 mt-3 mr-2 offset">GUARDAR</button>
                                <a type="button " href="{{ url('/LISTADO_cat')}}" class="btn btn-primary col-md-3 mt-3 mr-2 offset float-right">VOLVER </a>
                                <a type="button " href="{{ url('/LISTADO_cat')}}" class="btn btn-danger col-md-3 mt-3 offset float-right">CANCELAR </a>
                            </div>


                </form>

            </div>
        </div>
    </div>
</div>
@endsection
