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
						<h4 class="card-title ">Show Settings</h4>
					</div>
					<div class="card-body">
						<div class="card-content">
							<div class="row">
								<div class="col-md-12">
									<b>Email: </b>{{ $setting->email }}<br>
									<b>Phone: </b>{{ $setting->phone }}<br>
									<b>Address: </b>{{ $setting->address }}<br>
									<hr>
									<strong>About: </strong>
									<p style="text-align: justify;">
										<img src="{{ asset('uploads/about/'.$setting->about_pic) }}">
										{{ $setting->about }}
									</p>
									<br>
									<hr>
									<strong>What We Are: </strong>
									<p style="text-align: justify;">
										<img src="{{ asset('uploads/what_we_are/'.$setting->what_we_are_pic) }}">
										{{ $setting->what_we_are }}
									</p>
								</div>
							</div>
							<a href="{{ route('setting.index') }}" class="btn btn-danger">Back</a>
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