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
                            <h2>Insertar módulo</h2>
                            <p> * Campos obligatoris </p>
                            <br>
                            <form class="forms-sample" method="POST" action="{{ route('backend.modulos.store') }}" enctype="multipart/form-data" novalidate>
                                @csrf
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
                                    <input name="titol" type="text" class="form-control @error('titol') is-invalid @enderror" id="exampleInputEmail3" placeholder="Título" value="{{ old('titol') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Descripción *:</label>
                                    <!-- <input id="descripcio" type="hidden" name="descripcio" value="{{ old('descripcio') }}"> -->
                                    <textarea
                                        class="form-control @error('descripcio') is-invalid @enderror" 
                                        id="summernoteExample" 
                                        name="descripcio" 
                                    >
                                        {{ old('descripcio') }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Categoría:</label>
                                    <select id="categorias_id" name="categorias_id" class="form-control js-example-basic-single w-100">
                                        @foreach ($categorias as $categoria)
                                            @if ( $categoria->id == 1)
                                                <option 
                                                    value="{{ $categoria->id }}"
                                                    {{ old('categorias_id') == $categoria->id ? 'selected' : '' }}
                                                >
                                                    {{ $categoria->titol }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail3">Marca:</label>
                                        <input name="marca" type="text" class="form-control @error('marca') is-invalid @enderror" id="exampleInputEmail3" placeholder="Marca" value="{{ old('marca') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail3">Modelo:</label>
                                        <input name="modelo" type="text" class="form-control @error('modelo') is-invalid @enderror" id="exampleInputEmail3" placeholder="Modelo" value="{{ old('modelo') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail3">Medidas:</label>
                                        <input name="medida" type="text" class="form-control @error('medida') is-invalid @enderror" id="exampleInputEmail3" placeholder="Medida" value="{{ old('medida') }}">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail3">Núm. habitaciones:</label>
                                        <input name="num_hab" type="text" class="form-control @error('num_hab') is-invalid @enderror" id="exampleInputEmail3" placeholder="Núm. habitacions" value="{{ old('num_hab') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail3">Núm. plazas:</label>
                                        <input name="num_plazas" type="text" class="form-control @error('num_plazas') is-invalid @enderror" id="exampleInputEmail3" placeholder="Núm. plazas" value="{{ old('num_plazas') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail3">Año:</label>
                                        <input name="ano" type="text" class="form-control @error('ano') is-invalid @enderror" id="exampleInputEmail3" placeholder="Año" value="{{ old('ano') }}">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail3">Precio:</label>
                                        <input name="precio" type="text" class="form-control @error('precio') is-invalid @enderror" id="exampleInputEmail3" placeholder="Precio" value="{{ old('precio') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail3">Orden (ej: 1):</label>
                                        <input name="ordre" type="text" class="form-control" id="exampleInputEmail3" placeholder="Orden" value="{{ old('ordre') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail3">Portada:</label>
                                        <select id="portada" name="portada" class="form-control w-100">
                                            <option value="Si"
                                                {{ old('portada') == "Si" ? 'selected' : '' }}
                                            >
                                                Si
                                            </option>
                                            <option value="No"
                                                {{ old('portada') == "No" ? 'selected' : '' }}
                                            >
                                                No
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row grid-margin">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 style="color:red">Subir imágenes en formato: jpg, png o gif</h4>
                                                <br>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imagen 1</label>
                                                            <input name="imatge1" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge1" type="text" class="form-control @error('imatge1') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imagen 1" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Buscar foto</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imagen 2</label>
                                                            <input name="imatge2" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge2" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 2" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Buscar foto</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imagen 3</label>
                                                            <input name="imatge3" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge3" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 3" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Buscar foto</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imagen 4</label>
                                                            <input name="imatge4" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge4" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 4" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Buscar foto</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imagen 5</label>
                                                            <input name="imatge5" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge5" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 5" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Buscar foto</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imagen 6</label>
                                                            <input name="imatge6" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge6" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 6" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Buscar foto</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imagen 7</label>
                                                            <input name="imatge7" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge7" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 7" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Buscar foto</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imagen 8</label>
                                                            <input name="imatge8" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge8" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 8" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Buscar foto</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imagen 9</label>
                                                            <input name="imatge9" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge9" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 9" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Buscar foto</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imagen 10</label>
                                                            <input name="imatge10" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge10" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 10" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Buscar foto</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imagen 11</label>
                                                            <input name="imatge11" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge11" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 11" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Buscar foto</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imagen 12</label>
                                                            <input name="imatge12" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge12" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 12" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Buscar foto</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imagen 13</label>
                                                            <input name="imatge13" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge13" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 13" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Buscar foto</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imagen 14</label>
                                                            <input name="imatge14" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge14" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 14" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Buscar foto</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imagen 15</label>
                                                            <input name="imatge15" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge15" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 15" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Buscar foto</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imagen 16</label>
                                                            <input name="imatge16" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge16" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 16" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Buscar foto</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imagen 17</label>
                                                            <input name="imatge17" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge17" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 17" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Buscar foto</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imagen 18</label>
                                                            <input name="imatge18" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge18" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 18" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Buscar foto</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imagen 19</label>
                                                            <input name="imatge19" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge19" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 19" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Buscar foto</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imagen 20</label>
                                                            <input name="imatge20" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge20" type="text" class="form-control file-upload-info" readonly="readonly" placeholder="Imagen 20" value="">
                                                                <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Buscar foto</button>
                                                                </span>
                                                            </div>
                                                        </div>
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