@extends('layouts.app_admin')

@section('content')
	<div class="row">
        <div class="col-md-12">
          	<div class="block-web">
	            <div class="header">
	            	<h3 class="content-header">List Industries</h3>
	            </div>
	            <div class="porlets-content">
	            	<a href="{{ route('create-industries') }}" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Tambah Industries</a> <br><br>
	            	<table class="table table-hover table-bordered" id="dynamic-table">
	            		<thead>
	            			<tr>
		            			<th>No</th>
		            			<th>Image</th>
		            			<th>Icon</th>
		            			<th>File</th>
		            			<th>Industries</th>
		            			<th>Description</th>
		            			<th>Status</th>
		            			<th>Action</th>
		            		</tr>
	            		</thead>
	            		<tbody>
	            			@if(count($industries) > 0)
		            			@foreach($industries as $industries)
			            			<tr>
				            			<td>{{ $loop->iteration }}</td>
				            			<td width="80">
				            				@if(!empty($industries->image))
			              					<img src="{{ url('upload/industries/'.$industries->image) }}" width="150" height="150" class="preview_image" id="preview_image" style="object-fit: cover;"><br><br>
			              					@else
			              					<img src="{{ url('backend/images/image_default.png') }}" width="150" height="150" class="preview_image" id="preview_image"><br><br>
			              					@endif
				            			</td>
				            			<td width="80">
				            				@if(!empty($industries->value4))
			              					<img src="{{ url('upload/industries/'.$industries->value4) }}" width="48" height="48" class="preview_icon" id="preview_icon" style="object-fit: cover;"><br><br>
			              					@else
			              					<img src="{{ url('backend/images/image_default.png') }}" width="48" height="48" class="preview_icon" id="preview_icon"><br><br>
			              					@endif
				            			</td>
				            			<td width="80">
				            				@if(!empty($industries->value5))
			              						<a href="{{ url('upload/industries/'.$industries->value5) }}" class="btn btn-default">Download <i class="fa fa-download"></i></a>
			              					@endif
			              				</td>
				            			<td>{{ $industries->title }}</td>
				            			<td>{!! Str::limit($industries->description, 200) !!}</td>
				            			<td width="120">
				            				@if($industries->status == 1)
				            				<span class="label label-success">Aktif</span>
				            				@else
				            				<span class="label label-danger">Non Aktif</span>
				            				@endif
				            			</td>
				            			<td width="120">
				            				<a href="{{ route('edit-industries', $industries->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>&nbsp;
				            				<a href="{{ route('delete-industries', $industries->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i></a>
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