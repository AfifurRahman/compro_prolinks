@extends('layouts.app_admin')

@section('content')
	<div class="row">
        <div class="col-md-12">
          	<div class="block-web">
	            <div class="header">
	            	<h3 class="content-header">List Team</h3>
	            </div>
	            <div class="porlets-content">
	            	<a href="{{ route('create-team') }}" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Tambah Team</a> <br><br>
	            	<table class="table table-hover table-bordered" id="dynamic-table">
	            		<thead>
	            			<tr>
		            			<th>Foto</th>
		            			<th>Nama</th>
		            			<th>Jabatan</th>
		            			<th>Email</th>
		            			<th>Status</th>
		            			<th>Action</th>
		            		</tr>
	            		</thead>
	            		<tbody>
	            			@if(count($team) > 0)
		            			@foreach($team as $teams)
			            			<tr>
				            			<td width="150">
				            				@if(!empty($teams->image))
			              					<img src="{{ url('upload/team/'.$teams->image) }}" width="150" height="150" class="preview_image" id="preview_image" style="object-fit: cover;"><br><br>
			              					@else
			              					<img src="{{ url('backend/images/image_default.png') }}" width="150" height="150" class="preview_image" id="preview_image"><br><br>
			              					@endif
				            			</td>
				            			<td>{{ $teams->nama }}</td>
				            			<td>{{ $teams->jabatan }}</td>
				            			<td>{{ $teams->email }}</td>
				            			<td width="120">
				            				@if($teams->status == 1)
				            				<span class="label label-success">Aktif</span>
				            				@else
				            				<span class="label label-danger">Non Aktif</span>
				            				@endif
				            			</td>
				            			<td width="120">
				            				<a href="{{ route('edit-team', $teams->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>&nbsp;
				            				<a href="{{ route('delete-team', $teams->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i></a>
				            			</td>
				            		</tr>
			            		@endforeach
		            		@endif
	            		</tbody>
	            	</table>
	            </div>
	        </div>
	    </div>
@endsection