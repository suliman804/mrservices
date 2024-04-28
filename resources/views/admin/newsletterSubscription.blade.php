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
                <h4>Newsletter Subscription</h4>
                <div class="row">

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Date</td>
                                <td>Email</td>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach($subscriptions as $sub)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$sub->created_at}}</td>
                                <td>{{$sub->email}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{$subscriptions->links()}}
            </div>
        </div>

    </div>
</div>


@endsection