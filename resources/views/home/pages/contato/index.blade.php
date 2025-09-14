@extends('home.inc.app')
@section('title', 'Contatos')
@section('content')
    {{-- <div id="wowslider-container1"> --}}
    <!-- Start WOWSlider.com BODY section -->
    {{-- <div class="ws_images">
            <ul>
                <li>
                    <img src="{{ asset('upload/slider/01.png') }}" alt="bootstrap carousel example" title=""
                        id="wows1_0" />
                </li>
                <li>
                    <img src="{{ asset('upload/slider/02.png') }}" alt="bootstrap carousel example" title=""
                        id="wows1_0" />
                </li>
            </ul>
        </div> --}}
    <!-- End WOWSlider.com BODY section -->
    {{-- </div> --}}
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(home/img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Contato</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Contato</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h6 class="text-primary text-uppercase">// Contate-nós //</h6>
                <h1 class="mb-5">
                    Entre em contato e tire suas dúvidas.
                </h1>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// <e-mail>
                                        E-mail</e-mail> //</h5>
                                <p class="m-0"><i
                                        class="fa fa-envelope-open text-primary me-2"></i>contato@smartteck.com.br</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">
                                    // Em geral //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>info@smartteck.com.br
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Dúvidas //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>99 98178-1992</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!4v1748371977680!6m8!1m7!1s7GXs-tbGSIk8PX9sTN1tXA!2m2!1d-6.557793133046332!2d-47.44319606437021!3f36.59608636102535!4f12.97828503593361!5f0.7820865974627469"
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        {{-- <p class="mb-4">Entre em contato e tire suas dúvidas.</p> --}}
                        <div class="row">
                            <div class="col-md-12">
                                @if (session('msg'))
                                    <div class="alert alert-success text-center">
                                        {{ session('msg') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="name" placeholder="Seu nome">
                                        <label for="name">Seu nome</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" placeholder="Seu E-mail">
                                        <label for="email">Seu E-mail</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                                        <label for="subject">Assunto</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="" name="message" style="height: 100px"></textarea>
                                        <label for="message">Mensagem</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
