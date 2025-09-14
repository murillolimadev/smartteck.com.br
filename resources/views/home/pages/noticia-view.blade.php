@extends('home.inc.app')
@section('title', 'Noticia -')

@section('content')
<!-- noticias Start -->
<div class="container-xxl py-5" style="margin-bo25ttom: 110px;">
    <div class="container" style="margin-bottom: 150px;">
        <div class="wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp; text-align: left;">
            <div class="row">
                <div class="col-8">
                    <h1 class="mb-12">{{ $data->title }}</h1>
                    <h4>{{ $data->desc }}</h4>
                    <p>{{ $data->content }}</p>
                </div>
                <div class="col-4">
                    <img src="{{ asset('upload/noticias/' . $data->image) }}" class="news">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- noticias End -->
@endsection