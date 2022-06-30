@extends('backend.layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css" integrity="sha512-494Ejp/5WyoRNfh+nPLhSCQPHhcsbA5PoIGv2/FuEo+QLfW+L7JQGPdh8Qy2ZOmkF27pyYlALrxteMiKau1tyw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('backend/vendors/css/vendor.bundle.addons.css') }}">
@endsection

@section('content')

    <div class="main-panel">        
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h2>Insertar nuevo Módulo</h2>
                            <p> * Campos obligatoris </p>
                            <br>
                            <form class="forms-sample" method="POST" action="{{ route('backend.modulos.store') }}" enctype="multipart/form-data" novalidate>
                                @csrf
                                @error('titol_esp')
                                    <div class='alert alert-danger' role='alert'>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                @error('descripcio')
                                    <div class='alert alert-danger' role='alert'>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleInputEmail3">Título *:</label>
                                    <input name="titol_esp" type="text" class="form-control @error('titol_esp') is-invalid @enderror" id="exampleInputEmail3" placeholder="Títol" value="{{ old('titol_esp') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Descripción *:</label>
                                    <input id="descripcio" type="hidden" name="descripcio" value="{{ old('descripcio') }}">
                                    <trix-editor 
                                        class="form-control @error('descripcio') is-invalid @enderror"
                                        input="descripcio">
                                    </trix-editor>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Marca:</label>
                                    <input name="marca" type="text" class="form-control @error('marca') is-invalid @enderror" id="exampleInputEmail3" placeholder="Marca" value="{{ old('marca') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Modelo:</label>
                                    <input name="modelo" type="text" class="form-control @error('modelo') is-invalid @enderror" id="exampleInputEmail3" placeholder="Modelo" value="{{ old('modelo') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Categoría:</label>
                                    <select id="categoria_id" name="categoria_id" class="form-control js-example-basic-single w-100">
                                        @foreach ($categorias as $categoria)
                                            <option 
                                                value="{{ $categoria->id }}"
                                                {{ old('categorias_id') == $categoria->id ? 'selected' : '' }}
                                            >
                                                {{ $categoria->titol }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Medida:</label>
                                    <input name="medida" type="text" class="form-control @error('medida') is-invalid @enderror" id="exampleInputEmail3" placeholder="Medida" value="{{ old('medida') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Núm. habitaciones:</label>
                                    <input name="num_hab" type="text" class="form-control @error('num_hab') is-invalid @enderror" id="exampleInputEmail3" placeholder="Núm. habitacions" value="{{ old('num_hab') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Núm. plazas:</label>
                                    <input name="num_plazas" type="text" class="form-control @error('num_plazas') is-invalid @enderror" id="exampleInputEmail3" placeholder="Núm. plazas" value="{{ old('num_plazas') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Año:</label>
                                    <input name="ano" type="text" class="form-control @error('ano') is-invalid @enderror" id="exampleInputEmail3" placeholder="Año" value="{{ old('ano') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Precio:</label>
                                    <input name="precio" type="text" class="form-control @error('precio') is-invalid @enderror" id="exampleInputEmail3" placeholder="Precio" value="{{ old('precio') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Orden (ej: 1):</label>
                                    <input name="ordre" type="text" class="form-control" id="exampleInputEmail3" placeholder="Orden" value="{{ old('ordre') }}">
                                </div>
                                <div class="form-group">
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
                                <div class="row grid-margin">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 style="color:red">Subir imagenes en formato: jpg, png o gif</h4>
                                                <br>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group">
                                                            <label>Imagen 1</label>
                                                            <input name="imatge1" type="file" class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input name="imatge1" type="text" class="form-control @error('imatge1') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imagen 1" value="{{ old('imatge1') }}">
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
                                                                <input name="imatge2" type="text" class="form-control @error('imatge2') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imagen 2" value="{{ old('imatge2') }}">
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
                                                                <input name="imatge3" type="text" class="form-control @error('imatge3') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imagen 3" value="{{ old('imatge3') }}">
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
                                                                <input name="imatge4" type="text" class="form-control @error('imatge4') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imagen 4" value="{{ old('imatge4') }}">
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
                                                                <input name="imatge5" type="text" class="form-control @error('imatge5') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imagen 5" value="{{ old('imatge5') }}">
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
                                                                <input name="imatge6" type="text" class="form-control @error('imatge6') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imagen 6" value="{{ old('imatge6') }}">
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
                                                                <input name="imatge7" type="text" class="form-control @error('imatge7') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imagen 7" value="{{ old('imatge7') }}">
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
                                                                <input name="imatge8" type="text" class="form-control @error('imatge8') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imagen 8" value="{{ old('imatge8') }}">
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
                                                                <input name="imatge9" type="text" class="form-control @error('imatge9') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imagen 9" value="{{ old('imatge9') }}">
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
                                                                <input name="imatge10" type="text" class="form-control @error('imatge10') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imagen 10" value="{{ old('imatge10') }}">
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
                                                                <input name="imatge11" type="text" class="form-control @error('imatge11') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imagen 11" value="{{ old('imatge11') }}">
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
                                                                <input name="imatge12" type="text" class="form-control @error('imatge12') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imagen 12" value="{{ old('imatge12') }}">
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
                                                                <input name="imatge13" type="text" class="form-control @error('imatge13') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imagen 13" value="{{ old('imatge13') }}">
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
                                                                <input name="imatge14" type="text" class="form-control @error('imatge14') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imagen 14" value="{{ old('imatge14') }}">
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
                                                                <input name="imatge15" type="text" class="form-control @error('imatge15') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imagen 15" value="{{ old('imatge15') }}">
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
                                                                <input name="imatge16" type="text" class="form-control @error('imatge16') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imagen 16" value="{{ old('imatge16') }}">
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
                                                                <input name="imatge17" type="text" class="form-control @error('imatge17') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imagen 17" value="{{ old('imatge17') }}">
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
                                                                <input name="imatge18" type="text" class="form-control @error('imatge18') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imagen 18" value="{{ old('imatge18') }}">
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
                                                                <input name="imatge19" type="text" class="form-control @error('imatge19') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imagen 19" value="{{ old('imatge19') }}">
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
                                                                <input name="imatge20" type="text" class="form-control @error('imatge20') is-invalid @enderror file-upload-info" readonly="readonly" placeholder="Imagen 20" value="{{ old('imatge20') }}">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js" integrity="sha512-wEfICgx3CX6pCmTy6go+PmYVKDdi4KHhKKz5Xx/boKOZOtG7+rrm2fP7RUR2o4m/EbPdwbKWnP05dvj4uzoclA==" crossorigin="anonymous" defer></script>
    <script src="{{ asset('backend/js/file-upload.js') }}"></script>
    <script src="{{ asset('backend/js/select2.min.js') }}"></script>
    <script src="{{ asset('backend/js/select2.js') }}"></script>
@endsection

@endsection