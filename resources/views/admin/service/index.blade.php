@extends('layouts.app')
@section('title','Service')
@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('backend/datatable/dataTables.bootstrap.min.css')}}">
@endpush
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<a href="{{route('service.create')}}" class="btn btn-primary">Add New</a>
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title ">All Services</h4>
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
										Slug
									</th>
									<th>
										Image
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
									@foreach($services as $service)
									<tr>
										<td>{{$loop->index+1}}</td>
										<td>{{$service->title}}</td>
										<td>{{$service->slug}}</td>
										<td><img class="img-responsive img-thumbnail" src="{{ asset('uploads/service/'.$service->image) }}" style="height: 100px;width: 100px;"></td>
										<td>{{$service->created_at}}</td>
										<td>{{$service->updated_at}}</td>
										<td>
											<a href="{{ route('service.show',$service->id) }}" class="btn-sm btn btn-success"><i class="material-icons">details</i></a>
											<a href="{{route('service.edit', $service->id)}}" class="btn-sm btn btn-success"><i class="material-icons">mode_edit</i></a>
												<form id="delete-form-{{$service->id}}" action="{{route('service.destroy', $service->id)}}" style="display: none;" method="POST">
												@csrf
												@method('DELETE')	
												</form>
											<button type="button" class="btn-sm btn btn-danger" onclick="if (confirm('Are you sure want to Delete?')) {
												event.preventDefault();
												document.getElementById('delete-form-{{$service->id}}').submit();
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