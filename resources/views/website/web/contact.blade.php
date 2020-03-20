@extends('website.template.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h1 class="contact_us">Contact Us</h1>
                </center>
            </div>
        </div>
    </div>
    <!-- hs about ind wrapper Start -->
    <div class="hs_about_indx_main_wrapper" style="padding-top: 20px;">
        <div class="container">
            <div class="row home-content-main">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="image_placeholder">
                        <img src="web/images/contact/placeholder.jpg" style="width: 40%;" class="img-responsive">
                    </div>
                    <p class="contact_details">
                        <b class="red">Name :-</b> पंडित - लक्ष्यधर शास्त्री (वेदाचार्य)<br>
                        <b class="red">Phone :-</b> 6003599846<br>
                        <b class="red">Whatsapps :-</b> 9854602824<br>
                        <b class="red">E-mail :-</b> info@grahkripa.com<br>
                        <b class="red">Address :-</b> Bakaitari, Goalpara, Assam - 783125<br>
                    </p>
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