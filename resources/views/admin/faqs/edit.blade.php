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
                <h4>Edit FAQS</h4>
                <form method="post" action="{{route('admin.faqs.update')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$faqs->id}}">
                    <div class="row">
                        <div class="col-md-9">

                            <div class="row">
                                <div class="col-md-12">
                                    <label>title</label>
                                    <input type="text" required name="title" class="form-control"
                                        value="{{$faqs->title}}">
                                </div>
                                @if ($errors->has('title'))
                                <div class="text-danger">
                                    {{ $errors->first('title') }}
                                </div>
                                @endif

                                <div class="col-md-12">
                                    <label>Message</label>
                                    <textarea name="message" class="form-control">{!!$faqs->message!!}</textarea>
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