@extends('home.layout.app')
@section('title', 'Sobre')

@section('content')

    <body class="Projects">
        <div class="totopshow">
            <a href="#" class="back-to-top"><img alt="Back to Top" src="images/gototop0.png" /></a>
        </div>
        <div id="ttr_page" class="container">
            @include('home.layout.header')
            @include('home.layout.nav')

            <div id="ttr_content_and_sidebar_container">
                <div id="ttr_content">
                    <div id="ttr_content_margin" class="container-fluid">

                        <div class="ttr_Projects_html_row2 row">
                            <div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="ttr_Projects_html_column20">
                                    <div
                                        style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;">
                                    </div>
                                    <div class="html_content">
                                        <p style="text-align:Center;"><span
                                                style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:2.571em;color:rgba(53,181,235,1);">
                                                SOBRE-NÓS</span></p>
                                    </div>
                                    <div
                                        style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;">
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                            <div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
                            </div>
                            <div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="ttr_Projects_html_column21">
                                    <div
                                        style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;">
                                    </div>
                                    <div class="html_content">
                                        <p style="line-height:1.97183098591549;"><span
                                                style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:1.429em;">
                                                O que é o SAAE
                                            </span></p>
                                        <p style="margin:0.71em 0em 0.36em 0em;line-height:1.54929577464789;"><span
                                                style="font-family:'Roboto','Arial';font-weight:300;font-size:1.143em;">
                                                O Serviço Autônomo de Água e Esgoto é uma Autarquia Municipal criada pela
                                                lei Nº 115/69 na gestão do prefeito *********, com
                                                personalidade jurídica própria, dispondo de autonomia econômico-financeira e
                                                administrativa dentro dos limites traçados na própria lei de criação. Tendo
                                                como área de atuação, a exploração com exclusividade dos serviços captação,
                                                tratamento e distribuição de água em todo o município de Estreito e algumas
                                                outras atribuições inerentes a esse ramo de prestação de serviços.
                                            </span>
                                        </p>
                                    </div>
                                    <div
                                        style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;">
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                            <div class="clearfix visible-sm-block visible-md-block visible-xs-block">
                            </div>

                        </div>
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                    </div>
                </div>
                <div style="clear:both">
                </div>
            </div>
            @include('home.layout.footer')
        </div>
        <script type="text/javascript">
            WebFontConfig = {
                google: {
                    families: ['Roboto+Slab:700', 'Roboto+Slab']
                }
            };
            (function() {
                var wf = document.createElement('script');
                wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                    '://ajax.googleapis.com/ajax/libs/webfont/1.0.31/webfont.js';
                wf.type = 'text/javascript';
                wf.async = 'true';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(wf, s);
            })();
        </script>
    </body>
@endsection
