<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
	<link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<style type="text/css">
	body{
		padding-top:30px;
		padding-left: 200px;
		background-color: #8fc1c8;
	}
	.glyphicon { 
		margin-bottom: 10px;margin-right: 10px;
	}
	small {
		display: block;
		line-height: 1.428571429;
		color: #999;
	}
	.myform{
		width: 190%;
	}
	.img-rounded {
    border-radius: 125px;
    height: 200px;
    width: 200px;
    margin-left: 50px;
	}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<div class="well well-sm">
					<a href="/"><i class="glyphicon glyphicon-home"></i></a>
					<div class="row">
						<div class="col-sm-6 col-md-4">
							@if($users->avatar > 0)
							<img src="{{ asset('uploads/userprofile_pic/'.$users->avatar) }}" alt="avatar" class="img-rounded img-responsive" />
							@else
							<img src="{{ asset('uploads/userprofile_pic/default.jpg') }}" alt="avatar" class="img-rounded img-responsive">
							@endif
							<hr><strong>About</strong><br>
							<p style="text-align: justify;">{{ $users->about }}</p>
						</div>

						<div class="col-sm-6 col-md-8">
							<h4>{{ Auth::user()->name }}</h4>
							<small><cite title="San Francisco, USA">{{ Auth::user()->address }} <i class="glyphicon glyphicon-map-marker">
							</i></cite></small>
							<p>
								<i class="glyphicon glyphicon-envelope"></i>{{ Auth::user()->email }}
								<br />
								<i class="glyphicon glyphicon-phone"></i>{{ Auth::user()->phone }}
								<br />
								<i class="glyphicon glyphicon-education"></i>{{ Auth::user()->designation }}
							</p>
							<hr>
								<!-- Split button -->
							<div class="btn-group">
								<h3>Edit Profile</h3>
								<form action="{{ route('user.update',$users->id) }}" method="POST"enctype="multipart/form-data" class="myform">
									@csrf
										<div class="form-group">
											<label for="name">Name</label>
											<input type="text" class="form-control" id="name" name="name" value="{{ $users->name }}" ">
										</div>
										<div class="form-group">
											<label for="email">Email</label>
											<input type="email" class="form-control" id="email" name="email" value="{{ $users->email }}" ">
										</div>
										<div class="form-group">
											<label for="phone">Phone</label>
											<input type="text" class="form-control" id="phone" name="phone" value="{{ $users->phone }}">
										</div>
										<div class="form-group">
											<label for="designation">Designation</label>
											<input type="text" class="form-control" id="designation" name="designation" value="{{ $users->designation }}">
										</div>
										<div class="form-group">
											<label for="address">Address</label>
											<input type="text" class="form-control" id="address" name="address" value="{{ $users->address }}">
										</div>
										<div class="form-group">
											<label for="address">About</label>
											<textarea class="form-control" name="about">{{ $users->about }}</textarea>
										</div>
										<div class="form-group">
											<label for="password"> New Password</label>
											<input type="password" class="form-control" id="password" name="password">
										</div>
										<div class="form-group">
											<label for="avatar"> Profile Picture</label>
											<input type="file" name="avatar">
										</div>
										<button type="submit" class="btn btn-primary">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="{{ asset('backend/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	{!! Toastr::message() !!}
</body>
</html>