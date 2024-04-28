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
			<h4>Team</h4>		

				<div class="row">
					<div class="col-md-12">
						<a style="float: right;margin-bottom: 10px;"  href="#" data-bs-toggle="modal" data-bs-target="#addTeamMemberModal" class="btn btn-success">Add Team</a>
					</div>
					<div class="col-md-12">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<td>#</td>
								<td>Image</td>
								<td>Title</td>
								<td>Job Title</td>
								<td>Active?</td>
								<td>Actions</td>
							</tr>
						</thead>		

						<tbody>
							@foreach($team as $c)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td><img src="{{Storage::disk('public')->url('team/'.$c->image)}}" width="200" height="200" /></td>
									<td>{{$c->name}}</td>
									<td>{{$c->job_title}}</td>
									<td>{{$c->is_active?'Yes':'No'}}</td>
									<td>{{$c->visitor_count}}</td>
									<td>
										<a data-bs-toggle="modal" data-bs-target="#editTeamMemberModal{{$c->id}}" class="btn btn-info btn-sm">Edit</a>
										<a href="{{route('admin.team.delete',['id'=>$c->id])}}" class="btn btn-danger btn-sm">Delete</a>
									</td>
								</tr>


								<div class="modal fade" id="editTeamMemberModal{{$c->id}}" tabindex="-1" aria-hidden="true">
			                        <div class="modal-dialog modal-dialog-centered">
			                          <div class="modal-content">
			                            <div class="modal-header">
			                              <h5 class="modal-title">Edit Team</h5>
			                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			                            </div>
			                            <div class="modal-body">
			                            	<form method="post" action="{{route('admin.team.update')}}" id="careerListForm{{$c->id}}" enctype="multipart/form-data">
			                            		@csrf
			                            		<input type="hidden" name="id" value="{{$c->id}}">
			                            		<div class="row">
			                            			<div class="col-md-12">
			                            				<label>Name</label>
			                            				<input type="text" required name="name" value="{{$c->name}}" class="form-control">
			        	                    		</div>

			        	                    		<div class="col-md-12">
			                            				<label>Job Title</label>
			                            				<input type="text" required value="{{$c->job_title}}" name="job_title" class="form-control">
			        	                    		</div>

			        	                    		<div class="col-md-6">
			                            				<label>Image</label>
			                            				<input type="file" name="image" class="form-control">
			        	                    		</div>

			                            			<div class="col-md-6">
			                            				<label>Active?</label>
			                            				<select name="active" required class="form-control">
															<option <?php if($c->is_active==1) echo 'selected="selected"'; ?> value="1">Yes</option>	
															<option <?php if($c->is_active==0) echo 'selected="selected"'; ?> value="0">No</option>
														</select>
			        	                    		</div>        	                    		

			    	                        	</div>
				                            </form>
			                            </div>
			                            <div class="modal-footer">
			                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			                              <button type="button" data-form_id="careerListForm{{$c->id}}" class="btn btn-primary submit_modal_form">Save changes</button>
			                            </div>
			                          </div>
			                        </div>
			                      </div>

							@endforeach
						</tbody>		
					</table>
					</div>	
				</div>
			</div>
		</div>


				<div class="modal fade" id="addTeamMemberModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Add New Team</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            	<form method="post" action="{{route('admin.team.save')}}" id="careerListForm" enctype="multipart/form-data">
                            		@csrf
                            		<div class="row">
                            			<div class="col-md-12">
                            				<label>Name</label>
                            				<input type="text" required name="name" class="form-control">
        	                    		</div>

        	                    		<div class="col-md-12">
                            				<label>Job Title</label>
                            				<input type="text" required name="job_title" class="form-control">
        	                    		</div>

        	                    		<div class="col-md-6">
                            				<label>Image</label>
                            				<input type="file" required name="image" class="form-control">
        	                    		</div>

                            			<div class="col-md-6">
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