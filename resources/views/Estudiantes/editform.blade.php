@extends('diseños.base')
@section('content')
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-5 mt-5">
                <!--MENSAJE FLASH-->
                @if(session('alumnomodificado'))
                    <div class="alert alert-success">
                        {{ session('alumnomodificado') }}
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
                    <form action="{{route('edit',$alumno->carne)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header text-center text-white bg-dark">EDITAR ESTUDIANTE</div>
                        <div class="card-body">
                            <div class=" form-group col-md-12 ">
                                <label for="">No. Carne</label>
                                <input type="text" class="form-control border border-success" value="{{$alumno->carne}}" name="carne" placeholder="Inserte un nombre">
                            </div>

                            <div class=" form-group col-md-12 ">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control border border-success" value="{{$alumno->nombre}}" name="nombre" placeholder="Inserte un nombre">
                            </div>

                            <div class=" form-group col-md-12 ">
                                <label for="">Alias</label>
                                <input type="text" class="form-control border border-success" value="{{$alumno->alias}}" name="alias" placeholder="Inserte un nombre">
                            </div>

                            <div class=" form-group col-md-12 ">
                                <label for="">Correo</label>
                                <input type="text" class="form-control border border-success " value="{{$alumno->correo}}" name="correo" placeholder="Ejemplo@gmail.com">
                            </div>

                            <div class=" form-group col-md-12 ">
                                <label for="">Fecha de nacimiento</label>
                                <input type="text" class="form-control border border-success" value="{{$alumno->fecha_nacimiento}}" name="fecha_nacimiento" placeholder="Inserte un nombre">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="">Telefono</label>
                                <input type="text" class="form-control border border-success" value="{{$alumno->telefono}}" name="telefono"  placeholder="Inserte una direccion">
                            </div>

                            <div class="form-row col-md-12">

                                <div class="form-group col-md-6 font-italic">
                                    <label for="">Categoria</label>
                                    <select name="id_categoria" class="form-control border border-success">
                                        <option value="" >Seleccione Categoria...</option>
                                        @foreach( $categoria as $categorias)
                                            <option value="{{$categorias->id_categoria}}" @if($alumno->id_categoria == $categorias->id_categoria) selected @endif> {{$categorias->descripcion}}  </option>
                                        @endforeach
                                    </select>

                                </div>

                            </div>

                            <img src="{{ asset('storage').'/'. $alumno->foto}}" class="img-fluid img-thumbnail"  width="100px">
                            <div class="input-group mb-3 col-md-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01"></span>
                                </div>

                                <div class="custom-file">
                                    <input type="file" name="foto" class="custom-file-input" id="inputGroupFile01"
                                           aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Insertar foto</label>
                                </div>
                            </div>

                            <div class="row form-group justify-content-center">
                                <button type="submit" class="btn btn-success col-md-3 mt-3 mr-2 offset">EDITAR</button>
                                <a type="button " href="{{ url('/LISTADO')}}" class="btn btn-primary col-md-3 mt-3 mr-2 offset float-right">VOLVER </a>
                                <a type="button " href="{{ url('/LISTADO')}}" class="btn btn-danger col-md-3 mt-3 offset float-right">CANCELAR </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
