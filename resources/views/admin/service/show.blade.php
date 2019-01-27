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
						<h4 class="card-title ">Show Service</h4>
					</div>
					<div class="card-body">
						<div class="card-content">
							<div class="row">
								<div class="col-md-12">
									<b>Title: </b>{{ $service->title }}<br>
									<hr>
									<strong>Description: </strong><br>
										<img src="{{ asset('uploads/service/'.$service->image) }}" style="width: 35%;">
									<p style="text-align: justify;">
										{{ $service->description }}
									</p>
								</div>
							</div>
							<a href="{{ route('service.index') }}" class="btn btn-danger">Back</a>
							<div class="clearfix"></div>
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