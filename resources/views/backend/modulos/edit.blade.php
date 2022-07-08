@extends('backend.layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('backend/vendors/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/css/vendor.bundle.addons.css') }}">
@endsection

@section('content')

    <div class="main-panel">        
        <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h2>Modificar módulo</h2>
                        <p> * Campos obligatorios </p>
                        <br>
                        <form class="forms-sample" method="post" action="{{ route('backend.modulos.update', ['modulo' => $modulo->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @error('titol')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('descripcio')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                            @error('imatge1')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror

                            <div class="form-group">
                                <label for="exampleInputEmail3">Título *:</label>
                                <input name="titol" type="text" class="form-control @error('titol') is-invalid @enderror" id="exampleInputEmail3" placeholder="Título" value="{{ $modulo->titol }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Descripción *:</label>
                                <!-- <input id="descripcio" type="hidden" name="descripcio" value="{{ $modulo->descripcio }}"> -->
                                <textarea
                                    class="form-control @error('descripcio') is-invalid @enderror" 
                                    id="summernoteExample" 
                                    name="descripcio" 
                                >
                                    {{ $modulo->descripcio }}
                                </textarea>
                            </div>
                            
                            @if ( $modulo->categorias_id == 1)
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Categoría:</label>
                                    <select id="categorias_id" name="categorias_id" class="form-control js-example-basic-single w-100">
                                        @foreach ($categorias as $categoria)
                                            @if ( $categoria->id == 1)
                                                <option 
                                                    value="{{ $categoria->id }}"
                                                    {{ $modulo->categorias_id == $categoria->id ? 'selected' : '' }}
                                                >
                                                    {{ $categoria->titol }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            @endif

                            @if ( $modulo->categorias_id != 4 && $modulo->categorias_id != 5 )
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail3">Marca:</label>
                                        <input name="marca" type="text" class="form-control @error('marca') is-invalid @enderror" id="exampleInputEmail3" placeholder="Marca" value="{{ $modulo->marca }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail3">Modelo:</label>
                                        <input name="modelo" type="text" class="form-control @error('modelo') is-invalid @enderror" id="exampleInputEmail3" placeholder="Modelo" value="{{ $modulo->modelo }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail3">Medidas:</label>
                                        <input name="medida" type="text" class="form-control @error('medida') is-invalid @enderror" id="exampleInputEmail3" placeholder="Medida" value="{{ $modulo->medida }}">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail3">Núm. habitaciones:</label>
                                        <input name="num_hab" type="text" class="form-control @error('num_hab') is-invalid @enderror" id="exampleInputEmail3" placeholder="Núm. habitacions" value="{{ $modulo->num_hab }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail3">Núm. plazas:</label>
                                        <input name="num_plazas" type="text" class="form-control @error('num_plazas') is-invalid @enderror" id="exampleInputEmail3" placeholder="Núm. plazas" value="{{ $modulo->num_plazas }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail3">Año:</label>
                                        <input name="ano" type="text" class="form-control @error('ano') is-invalid @enderror" id="exampleInputEmail3" placeholder="Año" value="{{ $modulo->ano }}">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail3">Precio:</label>
                                        <input name="precio" type="text" class="form-control @error('precio') is-invalid @enderror" id="exampleInputEmail3" placeholder="Precio" value="{{ $modulo->precio }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail3">Orden (ej: 1):</label>
                                        <input name="ordre" type="text" class="form-control" id="exampleInputEmail3" placeholder="Orden" value="{{ $modulo->ordre }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail3">Portada:</label>
                                        <select id="portada" name="portada" class="form-control w-100">
                                            <option value="Si"
                                                {{ $modulo->portada == "Si" ? 'selected' : '' }}
                                            >
                                                Si
                                            </option>
                                            <option value="No"
                                                {{ $modulo->portada == "No" ? 'selected' : '' }}
                                            >
                                                No
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            @endif

                            <div class="row grid-margin">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 style="color:red">Subir imágenes en formato: jpg, png o gif</h4>
                                            <br>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imagen 1</label>
                                                        <input name="imatge1" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge1" type="text" class="form-control @error('imatge1') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imagen 1" value="{{ old('imatge1') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Buscar imagen 1</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-check form-check-danger" style="float:right;">
                                                        <img src='{{ asset("/storage/$modulo->imatge1") }}' alt="Módulos Naymo" with=200 height=92>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imagen 2</label>
                                                        <input name="imatge2" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge2" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 2" value="{{ old('imatge2') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Buscar imagen 2</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    @if($modulo->imatge2)   
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img2" value="1">
                                                            ¿Eliminar imagen 2?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$modulo->imatge2") }}' alt="Módulos Naymo" with=200 height=92>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imagen 3</label>
                                                        <input name="imatge3" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge3" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 3" value="{{ old('imatge3') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Buscar imagen 3</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    @if($modulo->imatge3)   
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img3" value="1">
                                                            ¿Eliminar imagen 3?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$modulo->imatge3") }}' alt="Módulos Naymo" with=200 height=92>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imagen 4</label>
                                                        <input name="imatge4" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge4" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 4" value="{{ old('imatge4') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Buscar imagen 4</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    @if($modulo->imatge4)   
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img4" value="1">
                                                            ¿Eliminar imagen 4?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$modulo->imatge4") }}' alt="Módulos Naymo" with=200 height=92>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imagen 5</label>
                                                        <input name="imatge5" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge5" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 5" value="{{ old('imatge5') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Buscar imagen 5</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    @if($modulo->imatge5)   
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img5" value="1">
                                                            ¿Eliminar imagen 5?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$modulo->imatge5") }}' alt="Módulos Naymo" with=200 height=92>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imagen 6</label>
                                                        <input name="imatge6" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge6" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 6" value="{{ old('imatge6') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Buscar imagen 6</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    @if($modulo->imatge6)   
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img6" value="1">
                                                            ¿Eliminar imagen 6?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$modulo->imatge6") }}' alt="Módulos Naymo" with=200 height=92>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imagen 7</label>
                                                        <input name="imatge7" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge7" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 7" value="{{ old('imatge7') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Buscar imagen 7</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    @if($modulo->imatge7)   
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img7" value="1">
                                                            ¿Eliminar imagen 7?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$modulo->imatge7") }}' alt="Módulos Naymo" with=200 height=92>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imagen 8</label>
                                                        <input name="imatge8" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge8" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 8" value="{{ old('imatge8') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Buscar imagen 8</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    @if($modulo->imatge8)   
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img8" value="1">
                                                            ¿Eliminar imagen 8?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$modulo->imatge8") }}' alt="Módulos Naymo" with=200 height=92>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imagen 9</label>
                                                        <input name="imatge9" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge9" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 9" value="{{ old('imatge9') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Buscar imagen 9</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    @if($modulo->imatge9)   
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img9" value="1">
                                                            ¿Eliminar imagen 9?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$modulo->imatge9") }}' alt="Módulos Naymo" with=200 height=92>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imagen 10</label>
                                                        <input name="imatge10" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge10" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 10" value="{{ old('imatge10') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Buscar imagen 10</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    @if($modulo->imatge10)   
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img10" value="1">
                                                            ¿Eliminar imagen 10?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$modulo->imatge10") }}' alt="Módulos Naymo" with=200 height=92>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imagen 11</label>
                                                        <input name="imatge11" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge11" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 11" value="{{ old('imatge11') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Buscar imagen 11</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    @if($modulo->imatge11)   
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img11" value="1">
                                                            ¿Eliminar imagen 11?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$modulo->imatge11") }}' alt="Módulos Naymo" with=200 height=92>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imagen 12</label>
                                                        <input name="imatge12" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge12" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 12" value="{{ old('imatge12') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Buscar imagen 12</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    @if($modulo->imatge12)   
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img12" value="1">
                                                            ¿Eliminar imagen 12?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$modulo->imatge12") }}' alt="Módulos Naymo" with=200 height=92>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imagen 13</label>
                                                        <input name="imatge13" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge13" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 13" value="{{ old('imatge13') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Buscar imagen 13</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    @if($modulo->imatge13)   
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img13" value="1">
                                                            ¿Eliminar imagen 13?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$modulo->imatge13") }}' alt="Módulos Naymo" with=200 height=92>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imagen 14</label>
                                                        <input name="imatge14" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge14" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 14" value="{{ old('imatge14') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Buscar imagen 14</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    @if($modulo->imatge14)   
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img14" value="1">
                                                            ¿Eliminar imagen 14?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$modulo->imatge14") }}' alt="Módulos Naymo" with=200 height=92>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imagen 15</label>
                                                        <input name="imatge15" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge15" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 15" value="{{ old('imatge15') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Buscar imagen 15</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    @if($modulo->imatge15)   
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img15" value="1">
                                                            ¿Eliminar imagen 15?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$modulo->imatge15") }}' alt="Módulos Naymo" with=200 height=92>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imagen 16</label>
                                                        <input name="imatge16" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge16" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 16" value="{{ old('imatge16') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Buscar imagen 16</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    @if($modulo->imatge16)   
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img16" value="1">
                                                            ¿Eliminar imagen 16?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$modulo->imatge16") }}' alt="Módulos Naymo" with=200 height=92>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imagen 17</label>
                                                        <input name="imatge17" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge17" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 17" value="{{ old('imatge17') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Buscar imagen 17</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    @if($modulo->imatge317)   
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img17" value="1">
                                                            ¿Eliminar imagen 17?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$modulo->imatge17") }}' alt="Módulos Naymo" with=200 height=92>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imagen 18</label>
                                                        <input name="imatge18" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge18" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 18" value="{{ old('imatge18') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Buscar imagen 18</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    @if($modulo->imatge18)   
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img18" value="1">
                                                            ¿Eliminar imagen 18?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$modulo->imatge18") }}' alt="Módulos Naymo" with=200 height=92>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imagen 19</label>
                                                        <input name="imatge19" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge19" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 19" value="{{ old('imatge19') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Buscar imagen 19</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    @if($modulo->imatge19)   
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img19" value="1">
                                                            ¿Eliminar imagen 19?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$modulo->imatge19") }}' alt="Módulos Naymo" with=200 height=92>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <div class="form-group">
                                                        <label>Imagen 20</label>
                                                        <input name="imatge20" type="file" class="file-upload-default">
                                                        <div class="input-group col-xs-12">
                                                            <input name="imatge20" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 20" value="{{ old('imatge20') }}">
                                                            <span class="input-group-append">
                                                                <button class="file-upload-browse btn btn-primary" type="button">Buscar imagen 20</button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    @if($modulo->imatge20)   
                                                        <div class="form-check form-check-danger" style="float:right;">
                                                            <input type="checkbox" class="form-check-input" name="del_img20" value="1">
                                                            ¿Eliminar imagen 20?
                                                            <br><br>
                                                            <img src='{{ asset("/storage/$modulo->imatge20") }}' alt="Módulos Naymo" with=200 height=92>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="funcioBoto" class="btn btn-primary mr-2" value="Guardar">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('scripts')
    <script src="{{ asset('backend/vendors/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('backend/js/editorDemo.js') }}"></script>
    <script src="{{ asset('backend/js/file-upload.js') }}"></script>
    <script src="{{ asset('backend/js/select2.min.js') }}"></script>
    <script src="{{ asset('backend/js/select2.js') }}"></script>
@endsection

@endsection