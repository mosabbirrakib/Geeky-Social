@extends('layouts.app')
@section('title','Contact')
@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('backend/datatable/dataTables.bootstrap.min.css')}}">
@endpush
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title ">All Contact</h4>
					</div>
					<div class="card-body">
						<div class="card-content table-responsive">
							<table id="dataTable" class="table table-striped table-bordered" style="width:100%">
								<thead class=" text-primary">
									<th>
										ID
									</th>
									<th>
										Name
									</th>
									<th>
										Email
									</th>
									<th>
										Comment
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
									@foreach($contacts as $contact)
									<tr>
										<td>{{$loop->index+1}}</td>
										<td>{{$contact->name}}</td>
										<td>{{$contact->email}}</td>
										<td>{{$contact->comment}}</td>
										<td>{{$contact->created_at}}</td>
										<td>{{$contact->updated_at}}</td>
										<td>
												<form id="delete-form-{{$contact->id}}" action="{{route('contact.destroy', $contact->id)}}" style="display: none;" method="POST">
												@csrf
												@method('DELETE')	
												</form>
											<button type="button" class="btn-sm btn btn-danger" onclick="if (confirm('Are you sure want to Delete?')) {
												event.preventDefault();
												document.getElementById('delete-form-{{$contact->id}}').submit();
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