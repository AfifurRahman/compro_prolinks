@extends('layouts.app_admin')

@section('content')
	<div class="row">
        <div class="col-md-12">
          	<div class="block-web">
	            <div class="header">
	            	<h3 class="content-header">List Questions</h3>
	            </div>
	            <div class="porlets-content">
	            	<table class="table table-hover table-bordered" id="dynamic-table">
	            		<thead>
	            			<tr>
		            			<th>No</th>
		            			<th>Date</th>
		            			<th>Fullname</th>
		            			<th>Email</th>
		            			<th>No HP</th>
		            			<th>Action</th>
		            		</tr>
	            		</thead>
	            		<tbody>
	            			@if(count($questions) > 0)
		            			@foreach($questions as $questionss)
			            			<tr>
				            			<td>{{ $loop->iteration }}</td>
				            			<td>{!! date('d F Y H:i:s', strtotime($questionss->created_at)) !!}</td>
				            			<td>{{ $questionss->nama_depan }}</td>
				            			<td>{{ $questionss->email }}</td>
				            			<td>{{ $questionss->no_hp }}</td>
				            			<td>
				            				<a href="{{ route('detail-questions', $questionss->id) }}" class="btn btn-primary"><i class="fa fa-list-alt"></i></a>
				            			</td>
				            		</tr>
			            		@endforeach
		            		@endif
	            		</tbody>
	            	</table>
	            </div>
	        </div>
	    </div>
	</div>
@endsection