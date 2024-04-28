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

					<div class="col-md-12">
						<a style="float: right;margin-bottom: 10px;" href="#" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal" class="btn btn-success">Add New</a>
					</div>

					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<td>#</td>
								<td>Name</td>
								<td>Is-Active</td>
								<td>Action</td>
							</tr>
						</thead>		

						<tbody>
							@foreach($careers as $c)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$c->name}}</td>
									<td>{{$c->is_active?'Yes':'No'}}</td>
									<td>
										
											@if($c->is_active)
												<a href="{{route('admin.careers_list.status',['id'=>$c->id])}}" class="btn btn-warning">{{'Set In-active'}}</a>
											@else
												<a href="{{route('admin.careers_list.status',['id'=>$c->id])}}" class="btn btn-success">{{'Set Active'}}</a>
											@endif
										</a>			
									</td>
								</tr>
							@endforeach
						</tbody>		
					</table>
				</div>
				{{$careers->links()}}
			</div>
		</div>
		


											<div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Add New Career</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            	<form method="post" action="{{route('admin.careers_list.save')}}" id="careerListForm">
                            		@csrf
                            		<div class="row">
                            			<div class="col-md-12">
                            				<label>Title</label>
                            				<input type="text" required name="title" class="form-control">
        	                    		</div>

                            			<div class="col-md-12">
                            				<label>Active?</label>
                            				<select name="active" required class="form-control">
												<option value="1">Yes</option>	
												<option value="0">No</option>
											</select>
        	                    		</div>        	                    		

    	                        	</div>
	                            </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" data-form_id="careerListForm" class="btn btn-primary submit_modal_form">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>


	</div>
</div>
@endsection