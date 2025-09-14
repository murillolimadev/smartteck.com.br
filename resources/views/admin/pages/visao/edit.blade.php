@extends('admin.inc.app')
@section('title', 'Visão')

@section('content')
<div class="content-wrapper" style="min-height: 234px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Visão</h1>
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
                            {{ session('msg') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="card card-default color-palette-box">
                <div class="row">
                    <div class="col-12">
                        <form
                            action="{{ route('admin.pages.visao.update', ['id'=>$visao->id]) }}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('put') }}
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="customFile">Imagem</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" required class="custom-file-input"
                                            placeholder="410x285" id="customFile">
                                        <label class="custom-file-label" for="customFile">Imagem 100x100</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="customFile">Descrição</label>
                                        <textarea name="content" class="form-control" required cols="30"
                                            rows="10">{{ $visao->content }}</textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Atualiar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
