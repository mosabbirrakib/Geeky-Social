@extends('layouts.app')
@section('title','Setting')
@push('css')

@endpush
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title ">Edit Setting</h4>
					</div>
					<div class="card-body">
						<div class="card-content">
							<form action="{{route('setting.update', $setting->id)}}" method="POST" enctype="multipart/form-data">
								@csrf
								@method('PUT')
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="bmd-label-floating">Email</label>
											<input type="text" class="form-control" name="email" value="{{ $setting->email }}">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="bmd-label-floating">Phone</label>
											<input type="text" class="form-control" name="phone" value="{{ $setting->phone }}">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="bmd-label-floating">Address</label>
											<input type="text" class="form-control" name="address" value="{{ $setting->address }}">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="bmd-label-floating">About</label>
											<textarea class="form-control" placeholder="Enter About" name="about">{{ $setting->about }}</textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="bmd-label-floating">What We Are</label>
											<textarea class="form-control" placeholder="Enter What We Are" name="what_we_are">{{ $setting->what_we_are }}</textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<label class="bmd-label-floating">About Image</label>
										<input type="file" name="about_pic">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<label class="bmd-label-floating">What We Are Image</label>
										<input type="file" name="what_we_are_pic">
									</div>
								</div>
								<a href="{{route('setting.index')}}" class="btn btn-danger">Back</a>
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