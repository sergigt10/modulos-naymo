@extends('backend.layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('backend/vendors/css/vendor.bundle.addons.css') }}">
@endsection

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <!-- Missatges enviats desde el controller -->
                    @if(session('estat'))
                        <div class="alert alert-success" role="alert">
                            {{ session('estat') }}
                        </div>
                    @endif
                    <br>
                    <h2>Notícies</h2>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Títol</th>
                                            <th data-orderable="false">Editar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($textes as $texte)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('backend.textes.edit', ['texte' => $texte->id]) }}" style="color: black;">
                                                        Textos portada
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('backend.textes.edit', ['texte' => $texte->id]) }}" style="color: black;">
                                                        <i class="mdi mdi-pencil menu-icon"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       

@endsection

@section('scripts')
    <script src="{{ asset('backend/vendors/js/vendor.bundle.addons.js') }}"></script>
    <script src="{{ asset('backend/js/data-table.js') }}"></script>
@endsection