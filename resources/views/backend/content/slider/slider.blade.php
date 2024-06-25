@extends('layouts.app_admin')

@section('content')
	<div class="row">
        <div class="col-md-12">
          	<div class="block-web">
	            <div class="header">
	            	<h3 class="content-header">List Slider</h3>
	            </div>
	            <div class="porlets-content">
	            	<a href="{{ route('create-slider') }}" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Tambah Slider</a> <br><br>
	            	<table class="table table-hover table-bordered" id="dynamic-table">
	            		<thead>
	            			<tr>
		            			<th>No</th>
		            			<th>Gambar</th>
		            			<th>Nama Slider</th>
		            			<th>Link</th>
		            			<th>Status</th>
		            			<th>Action</th>
		            		</tr>
	            		</thead>
	            		<tbody>
	            			@if(count($slider) > 0)
		            			@foreach($slider as $sliders)
			            			<tr>
				            			<td>{{ $loop->iteration }}</td>
				            			<td width="80">
				            				@if(!empty($sliders->image))
			              					<img src="{{ url('upload/slider/'.$sliders->image) }}" width="200" height="80" class="preview_image" id="preview_image" style="object-fit: cover;"><br><br>
			              					@else
			              					<img src="{{ url('backend/images/image_default.png') }}" width="200" height="80" class="preview_image" id="preview_image"><br><br>
			              					@endif
				            			</td>
				            			<td>{!! html_entity_decode($sliders->description) !!}</td>
				            			<td>{{ $sliders->link }}</td>
				            			<td width="120">
				            				@if($sliders->status == 1)
				            				<span class="label label-success">Aktif</span>
				            				@else
				            				<span class="label label-danger">Non Aktif</span>
				            				@endif
				            			</td>
				            			<td width="120">
				            				<a href="{{ route('edit-slider', $sliders->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>&nbsp;
				            				<a href="{{ route('delete-slider', $sliders->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i></a>
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