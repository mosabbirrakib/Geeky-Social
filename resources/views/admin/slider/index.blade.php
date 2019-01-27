@extends('layouts.app')
@section('title','Slider')
@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('backend/datatable/dataTables.bootstrap.min.css')}}">
@endpush
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<a href="{{route('slider.create')}}" class="btn btn-primary">Add New</a>
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title ">All Slider</h4>
					</div>
					<div class="card-body">
						<div class="card-content table-responsive">
							<table id="dataTable" class="table table-striped table-bordered" style="width:100%">
								<thead class=" text-primary">
									<th>
										ID
									</th>
									<th>
										Title
									</th>
									<th>
										Sub Title
									</th>
									<th>
										Slider Image
									</th>
									<th>
										Created At
									</th>
									<th>
										Updated At
									</th>
									<th>
										Action
									</th>
								</thead>
								<tbody>
									@foreach($sliders as $slider)
									<tr>
										<td>{{$loop->index+1}}</td>
										<td>{{$slider->title}}</td>
										<td>{{$slider->sub_title}}</td>
										<td><img class="img-responsive img-thumbnail" src="{{ asset('uploads/slider/'.$slider->image) }}" style="height: 100px;width: 100px;"></td>
										<td>{{$slider->created_at}}</td>
										<td>{{$slider->updated_at}}</td>
										<td>
											<a href="{{route('slider.edit', $slider->id)}}" class="btn-sm btn btn-success"><i class="material-icons">mode_edit</i></a>
												<form id="delete-form-{{$slider->id}}" action="{{route('slider.destroy', $slider->id)}}" style="display: none;" method="POST">
												@csrf
												@method('DELETE')	
												</form>
											<button type="button" class="btn-sm btn btn-danger" onclick="if (confirm('Are you sure want to Delete?')) {
												event.preventDefault();
												document.getElementById('delete-form-{{$slider->id}}').submit();
											}else{
												event.preventDefault();
											}"><i class="material-icons">delete</i></button>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('scripts')
<script type="text/javascript" src="{{asset('backend/datatable/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/datatable/dataTables.bootstrap.min.js')}}"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#dataTable').DataTable();
	} );
</script>
@endpush