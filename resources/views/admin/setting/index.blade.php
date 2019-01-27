@extends('layouts.app')
@section('title','Setting')
@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('backend/datatable/dataTables.bootstrap.min.css')}}">
@endpush
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<a href="{{route('setting.create')}}" class="btn btn-primary">Add New</a>
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title ">All Setting</h4>
					</div>
					<div class="card-body">
						<div class="card-content table-responsive">
							<table id="dataTable" class="table table-striped table-bordered" style="width:100%">
								<thead class=" text-primary">
									<th>
										ID
									</th>
									<th>
										Email
									</th>
									<th>
										Phone
									</th>
									<th>
										Address
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
									@foreach($settings as $setting)
									<tr>
										<td>{{$loop->index+1}}</td>
										<td>{{$setting->email}}</td>
										<td>{{$setting->phone}}</td>
										<td>{{$setting->address}}</td>
										<td>{{$setting->created_at}}</td>
										<td>{{$setting->updated_at}}</td>
										<td>
											<a href="{{ route('setting.show',$setting->id) }}" class="btn-sm btn btn-success"><i class="material-icons">details</i></a>
											<a href="{{route('setting.edit', $setting->id)}}" class="btn-sm btn btn-success"><i class="material-icons">mode_edit</i></a>
												<form id="delete-form-{{$setting->id}}" action="{{route('setting.destroy', $setting->id)}}" style="display: none;" method="POST">
												@csrf
												@method('DELETE')	
												</form>
											<button type="button" class="btn-sm btn btn-danger" onclick="if (confirm('Are you sure want to Delete?')) {
												event.preventDefault();
												document.getElementById('delete-form-{{$setting->id}}').submit();
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