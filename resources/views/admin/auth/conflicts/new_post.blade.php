@extends('admin.layouts.dbapp')

@section('content')
<div class="right_col" role="main">
  <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Add Gallery Image</h2>
            <div class="clearfix"></div>
            <center>
                @if(session()->has('msg'))
                    <b>{!! session()->get('msg') !!}</b>
                @endif
            </center>
          </div>
          <div class="x_content"><br />
                <form method="POST" action="{{ route('conflicts_add_post_script') }}" autocomplete="off" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="well" style="overflow: auto">
                        <div class="form-row mb-10">
                            <div class="col-md-6 col-sm-6 col-xs-12 mb-3">
                                <label for="category">Select image to upload</label>
                                <input type="file" class="form-control" name="file" accept="/*">
                                @if($errors->has('file'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-12 col-sm-6 col-xs-12 text-right">
                        <button type="submit" name="submit" class="btn btn-primary text-bold">Upload Now</button>
                      </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
@section("script")
<script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('post_desc');
    CKEDITOR.replace('post_desc1');
</script>

@endsection
