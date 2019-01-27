@extends('layouts.app')
@section('title','Service')
@push('css')

@endpush
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title ">Add New Service</h4>
					</div>
					<div class="card-body">
						<div class="card-content">
							<form action="{{route('service.store')}}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="bmd-label-floating">Title</label>
											<input type="text" class="form-control" name="title" placeholder="Enter Slider Title">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="bmd-label-floating">Description</label>
											<textarea class="form-control" name="description" placeholder="Enter Description"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<label class="bmd-label-floating">Service Image</label>
										<input type="file" name="image">
									</div>
								</div>
								<a href="{{route('service.index')}}" class="btn btn-danger">Back</a>
								<button type="submit" class="btn btn-primary">Save</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('scripts')

@endpush