<div class="totopshow">
    <a href="#" class="back-to-top">
        <img alt="Back to Top" src="{{ asset('home/images/240x70.png') }}" /></a>
</div>
<header id="ttr_header">
    <div id="ttr_header_inner">
        <div class="headerforeground01">
        </div>
        <div class="ttr_headershape01">
            <div class="html_content">
                <p>
                    <span style="font-size:0.857em;color:rgba(243,243,243,1);">
                        {{ auth()->user()->name ?? '' }}
                    </span>
                </p>
            </div>
        </div>
    </div>
</header>
