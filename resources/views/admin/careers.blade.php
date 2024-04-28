@extends('backendPartials.default')
@section('section')
<style type="text/css">
	.margin{
		padding: 3px;
	}
	.input{
		border-radius: 5px;
	}
</style>
<div class="row">
	<div class="col-md-12">
		
		<div class="card">
			<div class="card-body">
			<h4>Careers</h4>		
				<div class="row">	

				<form method="get" action="?">	
					<div class="row mb-2 mt-2">
						<div class="col-md-6 pl-0" style="padding-left: 0px;">
							<input type="text" name="search" class="form-control" value="{{\Request::get('search')}}">
						</div>

						<div class="col-md-4">
							<select class="form-control" name="type">
								<option <?php if(\Request::has('type') && \Request::get('type')=='all') echo 'selected="selected"'; ?> value="all">All</option>
								<option <?php if(\Request::has('type') && \Request::get('type')=='unread') echo 'selected="selected"'; ?> value="unread">Un-Read</option>
								<option <?php if(\Request::has('type') && \Request::get('type')=='read') echo 'selected="selected"'; ?> value="read">Read</option>
							</select>
						</div>

						<div class="col-md-2">
							<button type="submit" class="btn btn-success">Submit</button>
						</div>		
					</div>
				</form>


					<div class="col-md-12 pl-0" style="padding-left: 0px;">
						<button class="btn btn-success mb-2 btn-sm" style="display:none" id="mark_as_read">Mark as Read</button>
						<a href="{{route('admin.mark_as_read.careers.us')}}" class="btn btn-primary mb-2 btn-sm">Mark All as Read</a>
					</div>


					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<td># <input type="checkbox" id="checkall"></td>
								<td>Name</td>
								<td>Email</td>
								<td>Phone</td>
								<td>Add</td>
								<td>J.D</td>
								<td>Exp</td>
								<td>Tech.</td>
								<td>CV</td>
								<td>Date</td>
								<td>Action</td>
							</tr>
						</thead>		

						<tbody>
							@foreach($careers as $c)
								<tr>
									<td>@if($c->is_read!=1)<i style="font-size: 10px; color: red" class="bi bi-circle-fill"></i>@endif {{$loop->iteration}} <input type="checkbox" id="check{{$c->id}}" class="checkboxestd" value="{{$c->id}}"></td>
									<td>{{$c->name}}</td>
									<td>{{$c->email}}</td>
									<td>{{$c->phone}}</td>
									<td>{{$c->address}}</td>
									<td>{{$c->joining_date}}</td>
									<td>{{$c->experience}}</td>
									<td>{{$c->technology}}</td>
									<td>{{$c->cv}}</td>
									<td>{{$c->created_at}}</td>
									<td>
										<a download href="{{\Storage::disk('public')->url('cvs/'.$c->cv)}}"><i class="bi bi-download" title="Download CV"></i></a>

										<a href="{{route('admin.careers.reply',['id'=>$c->id])}}"><i class="bi bi-reply-all-fill" title="Reply to CV"></i></a>
									</td>
								</tr>
							@endforeach
						</tbody>		
					</table>	
				</div>
				{{$careers->links()}}
			</div>
		</div>
		
	</div>
</div>

<form method="post" action="{{route('admin.readALL.careers')}}" id="contact_read_form">
	@csrf
	<input type="hidden" name="read_list" id="read_list">
</form>

@endsection