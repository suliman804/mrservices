@extends('backendPartials.default')
@section('section')
<style type="text/css">
.margin {
    padding: 3px;
}

.input {
    border-radius: 5px;
}
</style>
<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-body">
                <h4>Review Add</h4>
                <form method="post" action="{{route('admin.review.save')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label>name</label>
                            <input type="text" required name="name" class="form-control" value="{{ old('name') }}">
                        </div>
                        @if ($errors->has('name'))
                        <div class="text-danger">
                            {{ $errors->first('name') }}
                        </div>
                        @endif
                        <div class="col-md-4">
                            <label>Email</label>
                            <input type="email"  name="email" class="form-control" value="{{ old('email') }}">
                        </div>
                        @if ($errors->has('email'))
                        <div class="text-danger">
                            {{ $errors->first('email') }}
                        </div>
                        @endif
                        <div class="col-md-4">
                            <label>Phone No</label>
                            <input type="text"  name="phone" class="form-control" value="{{ old('phone') }}">
                        </div>
                        @if ($errors->has('phone'))
                        <div class="text-danger">
                            {{ $errors->first('phone') }}
                        </div>
                        @endif
                        <div class="col-md-12">
                            <label>Message.</label>
                            <textarea name="message" class="form-control" value="{{ old('message') }}"></textarea>
                        </div>
                        @if ($errors->has('message'))
                        <div class="text-danger">
                            {{ $errors->first('message') }}
                        </div>
                        @endif
                        <div class="col-md-12">
                            <button name="submit" class="btn btn-success mt-3 btn-raised">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>
@endsection
@section('jsOutside')
<script src="https://cdn.ckeditor.com/4.20.1/full/ckeditor.js"></script>

<script>
CKEDITOR.replace('short_desc');
CKEDITOR.replace('message');
</script>
@endsection