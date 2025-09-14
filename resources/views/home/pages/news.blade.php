@extends('home.layout.app')
@section('title', 'Noticías')

@section('content')

    <body class="Projects">
        <div class="totopshow">
            <a href="#" class="back-to-top">
                <img alt="Back to Top" src="{{ asset('home/assets/images/gototop0.png') }}" /></a>
        </div>
        <div id="ttr_page" class="container">
            @include('home.layout.header')
            @include('home.layout.nav')

            <div class="ttr_Projects_html_row0 row">
                <div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height: auto;">
                    <div class="ttr_Projects_html_column00">
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                        <div class="html_content">
                            <p style="text-align:Center;"><span
                                    style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:2.571em;color:rgba(53,181,235,1);">
                                    NOTÍCIAS
                                </span></p>
                        </div>
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
                <div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
                </div>
                <div class="post_column col-lg-4 col-md-6 col-sm-6 col-xs-12" style="height: auto;">
                    <div class="ttr_Projects_html_column01">
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                        <div class="html_content">
                            <p style="text-align:Center;">
                                <span class="ttr_image"
                                    style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 0.15em 0em;"><span><img
                                            class="ttr_uniform" src="{{ asset('home/assets/images/saae6.jpeg') }}"
                                            style="max-width:350px;"></span>
                                </span>
                            <span
                                style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:1.429em;color:rgba(34,34,34,1);">
                                TESTE
                            </span>
                            <p>sadsa dsad sad das dsadsa dsa dsad sa</p><br>
                            <a href="Ler mais">Ler mais</a>
                            </p>
                        </div>
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
                <div class="post_column col-lg-4 col-md-6 col-sm-6 col-xs-12" style="height: auto;">
                    <div class="ttr_Projects_html_column01">
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                        <div class="html_content">
                            <p style="text-align:Center;">
                                <span class="ttr_image"
                                    style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 0.15em 0em;"><span><img
                                            class="ttr_uniform" src="{{ asset('home/assets/images/saae6.jpeg') }}"
                                            style="max-width:350px;"></span>
                                </span>
                            <span
                                style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:1.429em;color:rgba(34,34,34,1);">
                                TESTE
                            </span>
                            <p>sadsa dsad sad das dsadsa dsa dsad sa</p><br>
                            <a href="Ler mais">Ler mais</a>
                            </p>
                        </div>
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
                <div class="post_column col-lg-4 col-md-6 col-sm-6 col-xs-12" style="height: auto;">
                    <div class="ttr_Projects_html_column01">
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                        <div class="html_content">
                            <p style="text-align:Center;">
                                <span class="ttr_image"
                                    style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 0.15em 0em;"><span><img
                                            class="ttr_uniform" src="{{ asset('home/assets/images/saae6.jpeg') }}"
                                            style="max-width:350px;"></span>
                                </span>
                            <span
                                style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:1.429em;color:rgba(34,34,34,1);">
                                TESTE
                            </span>
                            <p>sadsa dsad sad das dsadsa dsa dsad sa</p><br>
                            <a href="Ler mais">Ler mais</a>
                            </p>
                        </div>
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
                <div class="clearfix visible-xs-block">
                </div>




            </div>

            @include('home.layout.footer')
    </body>
@endsection
