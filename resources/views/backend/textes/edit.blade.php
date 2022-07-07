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
                        <h2>Modificar textos</h2>
                        <p> * Campos obligatorios </p>
                        <br>
                        <form class="forms-sample" method="post" action="{{ route('backend.textes.update', ['texte' => $texte->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @error('descripcio')
                                <div class='alert alert-danger' role='alert'>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror

                            <div class="form-group">
                                <label for="exampleInputEmail3">Textos portada *:</label>
                                <!-- <input id="descripcio" type="hidden" name="descripcio" value="{{ $texte->descripcio }}"> -->
                                <textarea
                                    class="form-control @error('descripcio') is-invalid @enderror" 
                                    id="summernoteExample" 
                                    name="descripcio" 
                                >
                                    {{ $texte->descripcio }}
                                </textarea>
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