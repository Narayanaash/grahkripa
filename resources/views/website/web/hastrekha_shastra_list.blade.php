@extends('website.template.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h1 class="contact_us">हस्त-रेखा</h1>
                </center>
            </div>
        </div>
    </div>
    <!-- hs about ind wrapper Start -->
    <div class="hs_about_indx_main_wrapper" style="padding-top: 30px;">
        <div class="container">
            <div class="row home-content-main">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="home-content" style="margin-top: 24.5%;">
                        <ul class="main-nav list-unstyled text-center">
                            <li>
                                <a class="ratna" href="{{route('website.web.ratna')}}">
                                    <span>रत्न</span>
                                </a>
                            </li>

                            <li>
                                <a class="naksha2" href="{{route('website.web.hastrekha_shastra')}}">
                                    <span>हस्त रेखा</span>
                                </a>
                            </li>   
                        </ul>
                    </div>      
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <h4 style="margin-top: 20px; margin-bottom: 10px;">ज्योतिषाचार्य से पूछे:-</h4>
                    @include('website.include.sidebar_form')
                </div>
            </div>
        </div>
    </div>
    <!-- hs about ind wrapper End -->

@endsection