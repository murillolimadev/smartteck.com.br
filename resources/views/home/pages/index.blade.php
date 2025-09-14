@extends('home.inc.app')
@section('title', 'Home')

@section('content')
    <!-- Start WOWSlider.com BODY section -->
    <div id="wowslider-container1">
        <div class="ws_images">
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
        </div>
        <!-- End WOWSlider.com BODY section -->

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 text-center col-md-6 wow fadeInUp">
                        <img src="{{ asset('upload/visao/01.jpj') }}" alt="" width="140">
                        <div class="ps-4">
                            <h5 class="mb-3">Visão</h5>
                            <p style="font-size: 14px">
                                Ser reconhecida como uma empresa concretizadora de sonhos.
                            </p>
                            {{-- <a class="text-secondary border-bottom" href="">Read More</a> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 text-center col-md-6 wow fadeInUp">
                        {{-- <img src="{{ asset('upload/missao/' . $missao->image)  }}" alt="" width="140"> --}}
                        <div class="ps-4">
                            <h5 class="mb-3">Missão</h5>
                            <p style="font-size: 14px">Transformar sonhos em realidade é o que nos motiva, proporcionar a melhor parte do sonho das
                                pessoas</p>
                            {{-- <a class="text-secondary border-bottom" href="">Read More</a> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 text-center col-md-6 wow fadeInUp">
                        {{-- <img src="{{ asset('upload/valores/' . $valores->image) }}" alt="" width="140"> --}}
                        <div class="ps-4">
                            <h5 class="mb-3">Valores</h5>
                            <p style="font-size: 14px">
                                Excelência profissional,respeito ao ser humano de forma integral.
                            </p>
                            {{-- <a class="text-secondary border-bottom" href="">Read More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Fact Start -->
        <div class="container-fluid fact bg-dark my-5 py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-check fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                        <p class="text-white mb-0">Anos de experiência
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                        <p class="text-white mb-0">
                            Técnicos especializados</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-users fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                        <p class="text-white mb-0">Satisfied Clients
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-car fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                        <p class="text-white mb-0">Projetos Completos
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact End -->

    </div>

    <!-- noticias Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h6 class="text-primary text-uppercase">// novidades //</h6>
                <h1 class="mb-5">Notícias</h1>
            </div>
            <div class="row g-4">
                @foreach ($noticias as $item)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="upload/noticias/{{ $item->image }}" alt="">

                            </div>
                            <div class="bg-light text-center p-4">
                                <a href="{{ route('noticia.view', [$item->id]) }}"
                                    class="fw-bold mb-0">{{ $item->title }}</a>
                                {{-- <small>Fonte:</small> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- noticias End -->
@endsection
