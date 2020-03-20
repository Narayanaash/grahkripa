
@extends('admin.layouts.dbapp')

@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-6 col-md-4 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-photo"></i></div>
                  <div class="count">
                    @php
                        if(!empty($total_image))
                           print $total_image;
                        else
                           print "0";
                    @endphp
                  </div>
                  <h3>Total</h3>
                  <p>Gallery Image</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-6 col-md-4 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
                  <div class="count">
                    @php
                        if(!empty($total_payment))
                           print $total_payment;
                        else
                           print "0";
                    @endphp
                  </div>
                  <h3>Total</h3>
                  <p>Payments received</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection