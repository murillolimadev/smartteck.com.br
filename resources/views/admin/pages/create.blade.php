@extends('admin.layouts.app')
@section('title', 'Cadastrar projeto')

@section('content')
    <div class="content-wrapper" style="min-height: 234px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Projeto</h1>
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

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-info">

                        <form action="{{ route('project.env.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                                @if (session('msg'))
                                    <div class="alert alert-success text-center" style="color: yellow">
                                        {{ session('msg') }}
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nome</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nome completo">
                                </div>
                                <div class="form-group">
                                    <label>Descrição</label>
                                    <textarea class="form-control" name="desc" rows="3" placeholder="Descreva o projeto..."></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Imagem</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="img">
                                            <label class="custom-file-label" for="exampleInputFile">File</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Tecnologias</label>
                                    <input type="text" name="tec" class="form-control"
                                        placeholder="Tecnologias usadas no projeto...">
                                </div>
                                <input type="submit" class="btn btn-default" value="Enviar">
                            </div>

                        </form>

                    </div>
                </div>

            </div>

        </section>
        <!-- /.content -->
    </div>
@endsection
