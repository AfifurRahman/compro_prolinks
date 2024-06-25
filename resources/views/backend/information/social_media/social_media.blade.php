@extends('layouts.app_admin')

@section('content')
	<div class="row">
        <div class="col-md-12">
          	<div class="block-web">
	            <div class="header">
	            	<h3 class="content-header">List Social Media</h3>
	            </div>
	            <div class="porlets-content">
	            	<a href="{{ route('create-social-media') }}" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Tambah Social Media</a> <br><br>
	            	<table class="table table-hover table-bordered" id="dynamic-table">
	            		<thead>
	            			<tr>
		            			<th>No</th>
		            			<th>Images/Icon</th>
		            			<th>Nama Social Media</th>
		            			<th>Link</th>
		            			<th>Status</th>
		            			<th>Action</th>
		            		</tr>
	            		</thead>
	            		<tbody>
	            			@if(count($social_media) > 0)
		            			@foreach($social_media as $social_medias)
			            			<tr>
				            			<td>{{ $loop->iteration }}</td>
				            			<td width="80">
				            				@if(!empty($social_medias->image))
			              					<img src="{{ url('upload/social-media/'.$social_medias->image) }}" width="25" height="25" class="preview_image" id="preview_image" style="object-fit: cover;"><br><br>
			              					@else
			              					<img src="{{ url('backend/images/image_default.png') }}" width="25" height="25" class="preview_image" id="preview_image"><br><br>
			              					@endif
				            			</td>
				            			<td>{{ $social_medias->title }}</td>
				            			<td>{{ $social_medias->link }}</td>
				            			<td width="120">
				            				@if($social_medias->status == 1)
				            				<span class="label label-success">Aktif</span>
				            				@else
				            				<span class="label label-danger">Non Aktif</span>
				            				@endif
				            			</td>
				            			<td width="120">
				            				<a href="{{ route('edit-social-media', $social_medias->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>&nbsp;
				            				<a href="{{ route('delete-social-media', $social_medias->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i></a>
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