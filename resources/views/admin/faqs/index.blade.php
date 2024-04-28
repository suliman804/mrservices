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
                <h4>FAQS</h4>

                <div class="row">
                    <div class="col-md-12">
                        <a style="float: right;margin-bottom: 10px;" href="{{route('admin.faqs.create')}}"
                            class="btn btn-success">Add FAQS</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Date</td>
                                    <td>title</td>
                                    <td>Message</td>
                                    <td>Actions</td>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($faqs as $c)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$c->created_at}}</td>
                                    <td>{{$c->title}}</td>
                                    <td> {{substr(strip_tags(html_entity_decode($c->message)),0,88) }}</td>
                                    <td>
                                        <a href="{{route('admin.faqs.edit',['id'=>$c->id])}}"
                                            class="btn btn-info btn-sm">Edit</a>
                                        <a href="{{route('admin.faqs.delete',['id'=>$c->id])}}"
                                            class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection