@extends('admin.inc.app')
@section('title', 'Editar Noticia')

@section('content')
<div class="content-wrapper" style="min-height: 234px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Noticias</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item" class="btn btn-default" data-toggle="modal" data-target="#modal-default">Editar</li>
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
                    @if (session('msg'))
                    <div class="alert alert-success text-center">
                        {{ session('msg') }}
                    </div>
                    @endif
                </div>
            </div>
            <div class="card card-default color-palette-box">
                <div class="card-body">
                    <form action="{{ route('admin.pages.noticia.update', [$data]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="customFile">Imagem</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" placeholder="410x285" required class="custom-file-input" id="customFile" value="{{ $data->image }}">
                                        <label class="custom-file-label" for="customFile">Imagem</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="customFile">Titulo</label>
                                    <div class="custom-file">
                                        <input type="text" name="title" value="{{ $data->title }}" required class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="customFile">Descrição</label>
                                    <div class="custom-file">
                                        <input type="text" name="desc" value="{{ $data->desc }}" required class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="customFile">Conteúdo</label>
                                    <textarea name="content" class="form-control" required cols="30" rows="10">
                                    {{ $data->content }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection