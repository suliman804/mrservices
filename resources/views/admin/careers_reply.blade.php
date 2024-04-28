@extends('backendPartials.default')
@section('section')
<div class="row">
	<div class="col-md-12">
		
		<div class="card">
			<div class="card-body">
			<h4>Careers Reply</h4>		
				<div class="row">
					
					<form method="post" action="{{route('admin.career.reply.save')}}">
						@csrf
						<input type="hidden" name="id" value="{{$career->id}}">
						<div class="row">
							<div class="col-md-3">
								<label>Name</label>
								<input type="text" class="form-control" readonly  value="{{$career->name}}">
							</div>
							<div class="col-md-3">
								<label>Email</label>
								<input type="text" class="form-control" readonly  value="{{$career->email}}">
							</div>
							<div class="col-md-3">
								<label>Phone</label>
								<input type="text" class="form-control" readonly  value="{{$career->phone}}">
							</div>

							<div class="col-md-3">
								<label>Applied For Tech.</label>
								<input type="text" class="form-control" readonly  value="{{$career->technology}}">
							</div>

							<div class="col-md-12">
								<label>Type text here</label>
								<textarea class="form-control" id="reply" name="reply">
								</textarea>
							</div>			

							<div class="col-md-3 mt-5">
								<input type="submit" class="btn btn-success" value="Submit">
							</div>																		
						</div>
					</form>

				</div>
			</div>
		</div>
		
	</div>
</div>
@endsection
@section('jsOutside')
	<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
	 <script>
           CKEDITOR.replace( 'reply' );
     </script>
@endsection