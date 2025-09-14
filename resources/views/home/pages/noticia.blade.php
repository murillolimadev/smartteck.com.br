@extends('home.layouts.app')

@section('title', 'Noticias')
@section('content')
    <div id="ttr_content_margin" class="container-fluid">
        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
        <div class="ttr_Training_html_row0 row">
            <div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height: auto;">
                <div class="ttr_Training_html_column00">
                    <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                    <div class="html_content" style="margin-bottom: 40px;">
                        <p style="text-align:Center;"><span
                                style="font-family:'Arial';font-weight:700;font-size:2em;color:rgba(5,38,55,1);">
                                NOTICIAS</span></p>
                    </div>
                    <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                    <div style="clear:both;"></div>
                </div>
            </div>
            <div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
            </div>
        </div>
        @foreach ($data as $item)
            <div class="ttr_Training_html_row1 row">
                <div class="post_column col-lg-4 col-md-4 col-sm-4 col-xs-12" style="height: 247px;">
                    <div class="ttr_Training_html_column10" style="height: inherit;">
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                        <div class="html_content">
                            <p>
                                <span class="ttr_image"
                                    style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 0em 0em;"><span><img
                                            class="ttr_uniform" src="{{ asset('home/assets/images/40.png') }}"
                                            style="max-width:300px;max-height:300px;"></span></span>
                            </p>
                        </div>
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
                <div class="clearfix visible-xs-block">
                </div>

                <div class="post_column col-lg-8 col-md-8 col-sm-8 col-xs-12" style="height: auto;">
                    <div class="ttr_Training_html_column11">
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                        <div class="html_content">
                            <p><span
                                    style="font-family:'Arial';font-weight:700;font-size:1.143em;color:rgba(52,52,52,1);">A</span><span
                                    style="font-family:'Arial';font-weight:700;font-size:1.143em;color:rgba(52,52,52,1);">LIQUAM</span><span
                                    style="font-family:'Arial';font-weight:700;font-size:1.143em;color:rgba(52,52,52,1);">
                                </span><span
                                    style="font-family:'Arial';font-weight:700;font-size:1.143em;color:rgba(52,52,52,1);">LIBERO</span><span
                                    style="font-family:'Arial';font-weight:700;font-size:1.143em;color:rgba(52,52,52,1);">
                                </span><span
                                    style="font-family:'Arial';font-weight:700;font-size:1.143em;color:rgba(52,52,52,1);">NISI</span><span
                                    style="font-family:'Arial';font-weight:700;font-size:1.143em;color:rgba(52,52,52,1);">
                                </span><span
                                    style="font-family:'Arial';font-weight:700;font-size:1.143em;color:rgba(52,52,52,1);">IMPERDIAT</span><span
                                    style="font-family:'Arial';font-weight:700;font-size:1.143em;color:rgba(52,52,52,1);">
                                </span><span
                                    style="font-family:'Arial';font-weight:700;font-size:1.143em;color:rgba(52,52,52,1);">AT</span>
                            </p>
                            <p style="margin:0.71em 0em 0.36em 0em;"><span
                                    style="font-family:'Arial';font-weight:700;color:rgba(231,76,60,1);">OCTOBER 20,
                                    2015</span>
                            </p>
                            <p style="margin:1.43em 0em 0.36em 0em;line-height:1.76056338028169;"><span
                                    style="color:rgba(5,38,55,1);">G</span><span style="color:rgba(5,38,55,1);">ravida
                                    vehicula,
                                    nisl.Praesent mattis, massa quis</span><span
                                    style="color:rgba(5,38,55,1);">.</span><span style="color:rgba(5,38,55,1);"> luctus
                                    fermentum, turpis mi volutpat justo, eu volutpat enim
                                    diam</span><span style="color:rgba(5,38,55,1);">. </span><span
                                    style="color:rgba(5,38,55,1);">Praesent mattis, massa quis</span><span
                                    style="color:rgba(5,38,55,1);">.</span><span style="color:rgba(5,38,55,1);"> luctus
                                    fermentum, turpis mi volutpat justo</span><span
                                    style="color:rgba(5,38,55,1);">.G</span><span style="color:rgba(5,38,55,1);">ravida
                                    vehicula, nisl.Praesent mattis, massa quis</span><span
                                    style="color:rgba(5,38,55,1);">.</span><span style="color:rgba(5,38,55,1);"> luctus
                                    fermentum, turpis mi volutpat justo, eu volutpat enim diam</span><span
                                    style="color:rgba(5,38,55,1);">. </span><span style="color:rgba(5,38,55,1);">Praesent
                                    mattis, massa quis</span><span style="color:rgba(5,38,55,1);">.</span><span
                                    style="color:rgba(5,38,55,1);">
                                    {{ $item->content }}
                                </span><span style="color:rgba(5,38,55,1);">.</span></p>
                            <p style="margin:1.43em 0em 0.36em 0em;line-height:1.76056338028169;"><span><a href="#"
                                        target="_self" class="btn btn-md btn-default">LER MAIS</a></span></p>
                        </div>
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                        <div style="clear:both;"></div>
                    </div>
                </div>


            </div>
            <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
        @endforeach

    </div>
@endsection
