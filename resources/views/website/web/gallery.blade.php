@extends('website.template.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h1 class="contact_us">Gallery</h1>
                </center>
            </div>
        </div>
    </div>
    <!-- hs about ind wrapper Start -->
    <div class="hs_about_indx_main_wrapper" style="padding-top: 30px;">
        <div class="container">
            <div class="row home-content-main">
                @if( count($all_gallery_image) == 0 )
                    <div class="text-center"><span class="text-danger">Sorry! No image found</span></div>
                @endif
                <div class="col-md-12">
                    <div id="gallery" class="container-fluid">
                        @foreach( $all_gallery_image as $image )
                        <img src="assets/gallery/{{$image->image}}" class="card img-responsive">
                        @endforeach
                    </div>

                    <div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-body">
                          </div>
                        </div>

                      </div>
                    </div>   
                </div>
                <!-- paginate here -->
                <div class="col-md-12 text-center">
                {{ $all_gallery_image ->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- hs about ind wrapper End -->

@endsection