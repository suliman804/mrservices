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
                <h4>Edit Service</h4>
                <form method="post" action="{{route('admin.review.update')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$review->id}}">
                    <div class="row">
                        <div class="col-md-9">

                            <div class="row">
                                <div class="col-md-12">
                                    <label>name</label>
                                    <input type="text" required name="name" class="form-control"
                                        value="{{$review->name}}">
                                </div>
                                @if ($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name') }}
                                </div>
                                @endif

                                <div class="col-md-4">
                                    <label>Email</label>
                                    <input type="email" required name="email" class="form-control"
                                        value="{{$review->email}}">
                                </div>
                                @if ($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email') }}
                                </div>
                                @endif

                                <div class="col-md-4">
                                    <label>Phone No</label>
                                    <input type="text" required name="phone" class="form-control"
                                        value="{{$review->phone}}">
                                </div>
                                @if ($errors->has('phone'))
                                <div class="text-danger">
                                    {{ $errors->first('phone') }}
                                </div>
                                @endif


                                <div class="col-md-12">
                                    <label>Message</label>
                                    <textarea name="message" class="form-control">{!!$review->message!!}</textarea>
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
CKEDITOR.replace('message');
</script>
@endsection