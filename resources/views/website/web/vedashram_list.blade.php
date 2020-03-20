@extends('website.template.master')
@section('content')
    <!-- hs about ind wrapper Start -->
    <div class="hs_about_indx_main_wrapper" style="padding-top: 30px; margin-top: 50px;">
        <div class="container">
            <div class="row home-content-main">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="home-content" style="margin-top: 24.5%;">
                        <ul class="main-nav list-unstyled text-center">
                            <li>
                                <a class="hand2" href="{{route('website.web.vedashram')}}">
                                    <span>वेदाआश्रम</span>
                                </a>
                            </li>

                            <li>
                                <a class="kundali_dosh2" href="{{route('website.web.vedik_nitya_krama')}}">
                                    <span>वैदिक नित्य कर्म</span>
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