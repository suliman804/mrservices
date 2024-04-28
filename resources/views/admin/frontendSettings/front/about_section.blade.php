@extends('backendPartials.default')
@section('section')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        @include('admin.frontendSettings.partialsn.homepage_settings_sidebar')
                    </div>

                    <div class="col-md-10">
                        <h4>About Us Settings</h4>
                        <div class="col-md-12">
                            <form method="post" action="{{route('admin.save.about')}}" enctype="multipart/form-data">
                                @csrf
                                <hr>
                                <label>Image</label>
                                <input type="file" name="image" id="image" accept="image/*" class="form-control">
                                <label>About us Content</label>
                                <textarea class="form-control" col="5" row="5" name="content" aria-label="About Us"
                                    required>{!!$about->content??''!!}</textarea>
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary mt-2">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('jsOutside')

<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>

<script>
CKEDITOR.replace('about_us');
</script>

@endsection