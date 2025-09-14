@extends('admin.inc.app')
@section('title', 'Endereço')

@section('content')
    <div class="content-wrapper" style="min-height: 234px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Endereço</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

       <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if(session('msg'))
                        <div class="alert alert-success text-center">
                            <p>{{ session('msg') }}</p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="card card-default color-palette-box">

                <div class="card-body">
                    <div class="col-12">
                        {{ $data->text ?? ''}}
                    </div><br>
                    <a href="{{ route('admin.pages.endereco.edit', $data->id) }}">Editar</a>
                </div>

            </div>
        </div>
    </section>
    <!-- /.content -->
    </div>

    {{-- modal create --}}
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Cadastrar</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{-- mensagem enviado com sucesso --}}
                <form action="{{ route('admin.pages.endereco.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="customFile">Endereço</label>
                                <div class="custom-file">
                                    <input type="text" name="text" required class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>

                    </div>
                </form>

                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
    <!-- /.modal -->
@endsection
