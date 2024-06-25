@extends('layouts.app_admin')

@section('content')
	<div class="row">
        <div class="col-md-12">
          	<div class="block-web">
	            <div class="header">
	            	<h3 class="content-header">List Testimonial</h3>
	            </div>
	            <div class="porlets-content">
	            	<a href="{{ route('create-testimonial') }}" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Tambah testimonial</a>&nbsp;
	            	<br><br>
	            	<table class="table table-hover table-bordered" id="dynamic-table">
	            		<thead>
	            			<tr>
		            			<th>No</th>
		            			<th>Gambar</th>
		            			<th>Nama</th>
		            			<th>Jabatan</th>
		            			<th>Deskripsi</th>
		            			<th>Status</th>
		            			<th>Action</th>
		            		</tr>
	            		</thead>
	            		<tbody>
	            			@if(count($testimonial) > 0)
		            			@foreach($testimonial as $testimonials)
			            			<tr>
				            			<td>{{ $loop->iteration }}</td>
				            			<td width="80">
				            				@if(!empty($testimonials->image))
			              					<img src="{{ url('upload/testimonial/'.$testimonials->image) }}" width="150" height="150" class="preview_image" id="preview_image" style="object-fit: cover;"><br><br>
			              					@else
			              					<img src="{{ url('backend/images/image_default.png') }}" width="150" height="150" class="preview_image" id="preview_image"><br><br>
			              					@endif
				            			</td>
				            			<td>{{ $testimonials->nama }}</td>
				            			<td>{{ $testimonials->jabatan }}</td>
				            			<td>{!! html_entity_decode($testimonials->deskripsi) !!}</td>
				            			<td width="120">
				            				@if($testimonials->status == 1)
				            				<span class="label label-success">Aktif</span>
				            				@else
				            				<span class="label label-danger">Non Aktif</span>
				            				@endif
				            			</td>
				            			<td width="120">
				            				<a href="{{ route('edit-testimonial', $testimonials->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>&nbsp;
				            				<a href="{{ route('delete-testimonial', $testimonials->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i></a>
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