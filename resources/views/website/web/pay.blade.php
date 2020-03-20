@extends('website.template.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h1 class="contact_us">PAY करें</h1>
                </center>
            </div>
        </div>
    </div>
    <!-- hs about ind wrapper Start -->
    <div class="hs_about_indx_main_wrapper" style="padding-top: 30px;">
        <div class="container">
            <div class="home-content-main clearfix">
            <p>इस पेज पर आपको यह बताया जा रहा है कि आप किस तरीके से Payment कर सकते हैं | Payment करने के दौरान प्राप्त Receipt को सुरक्षित रखें और मांगे जाने पर हमें info@grahkripa.com पर भेजें |</p>
            <div class="row mt-xl">
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <h4 class="h4">Cash, Cheque or DD Deposit:-</h4><hr>
                    <table class="text-white">
                        <tbody><tr>
                            <td width="110px"><p>A/C NAME  </p></td>
                            <td><p>: Lakshyadhar Sharma</p></td>
                        </tr>
                        <tr>
                            <td><p>A/C NO </p></td>
                            <td><p>: 39199282240</p></td>
                        </tr>
                        <tr>
                            <td><p>BANK </p></td>
                            <td><p>: State Bank of India(SBI)</p></td>
                        </tr>
                        <tr>
                            <td><p>BRANCH </p></td>
                            <td><p>: Noonmati (Guwahati) </p></td>
                        </tr>
                        <tr>
                            <td><p>IFS CODE </p></td>
                            <td><p>: SBIN0006196</p></td>
                        </tr>
                    </tbody></table>
                    <h4 class="mt-xl">Debit Card, Credit Card, Net Banking and other Online payment options:-</h4><hr>
                    <div class="row  mb-xl mt-xl">
                        <div class="col-sm-12">
                                <a href="#" class="btn btn-info payment-button" target="_blank">
                                    Pay Now
                                </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5 col-xs-12">
                    @if(session()->has('msg'))
                        <small>{!! session()->get('msg') !!}</small>
                    @endif
                    <h4>अपनी पेमेंट डिटेल्स भेजें :</h4>
                    <form action="{{route('payment_post')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                    @csrf             
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" data-animation="true" data-placement="top" data-toggle="tooltip" title="Your Name" placeholder="Full Name" name="name" required="required">
                                 @if($errors->has('name'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="email" class="form-control" data-animation="true" data-placement="top" data-toggle="tooltip" title="Your Email" placeholder="Email Address" name="email">
                                @if($errors->has('email'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">                     
                                <input type="text" class="form-control" placeholder="Mobile Number" name="phone" required="required" minlength="10" maxlength="13">
                                @if($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea type="text" class="form-control" rows="4" placeholder="Your Message" name="message" style="resize: vertical;"></textarea>
                                @if($errors->has('message'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">                     
                                <input type="file" id="file" class="form-control" placeholder="Select Receipt" data-placement="top" data-toggle="tooltip" title="Payment Receipt" name="file" required="required">
                                <label for="file" class="payment_label">Select Receipt</label>
                                <small style="color: orange; display: block;">(note: only image file allowed)</small>
                                @if($errors->has('file'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">                    
                            <div class="pl-lg">
                                <input type="submit" value="Submit" class="btn btn-info">&nbsp;&nbsp;
                            </div>
                        </div>                      
                    </form>
                </div>
            </div>
        </div>
            <div style="width: 100%; height: 70px;"></div>
            @include('website.include.bottom_form')
        </div>
    </div>
    <!-- hs about ind wrapper End -->

@endsection