@extends('admin.inc.app')
@section('title', 'Missão')

@section('content')
<div class="content-wrapper" style="min-height: 234px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Missão</h1>
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
                        {{$missao->content}}
                    </div><br>
                    <a href="{{ route('admin.pages.missao.edit', ['id'=>$missao]) }}">Editar</a>
                </div>
               
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
