@extends('admin.layouts.app')
@section('title', 'Dashboard')

@section('content')
    <div class="content-wrapper" style="min-height: 234px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Mensagem</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            {{-- <li class="breadcrumb-item" class="btn btn-default" data-toggle="modal"
                                data-target="#modal-default"><a href="#">Cadastrar</a></li> --}}
                            {{-- <li class="breadcrumb-item active">Fixed Layout</li> --}}
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
                        <table class="table table-bordered table-hover dataTable dtr-inline">
                            <tr>
                                <td><b>Nome:</b> {{ $data->name }}</td>
                                <td><b>E-mail:</b> {{ $data->email }}</td>
                                <td><b>Assunto:</b> {{ $data->subject }}</td>
                            </tr>
                            <tr>
                                <td colspan="3">{{ $data->message }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
