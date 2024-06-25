@extends('layouts.app_admin')

@section('content')
	<div class="row">
        <div class="col-md-12">
          	<div class="block-web">
	            <div class="header">
	            	<h3 class="content-header">List Insights</h3>
	            </div>
	            <div class="porlets-content">
	            	<a href="{{ route('create-artikel') }}" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Tambah Insights</a>&nbsp;
	            	<a href="{{ route('kategori-artikel') }}" class="btn btn-warning"><i class="fa fa-list-alt"></i>&nbsp; Kategori Insights</a> <br><br>
	            	<table class="table table-hover table-bordered" id="dynamic-table">
	            		<thead>
	            			<tr>
		            			<th>No</th>
		            			<th>Gambar</th>
		            			<th>Kategori</th>
		            			<th>Judul Insights</th>
		            			<th>Penulis</th>
		            			<th>Status</th>
		            			<th>Action</th>
		            		</tr>
	            		</thead>
	            		<tbody>
	            			@if(count($artikel) > 0)
		            			@foreach($artikel as $artikels)
			            			<tr>
				            			<td>{{ $loop->iteration }}</td>
				            			<td width="80">
				            				@if(!empty($artikels->image))
			              					<img src="{{ url('upload/artikel/'.$artikels->image) }}" width="150" height="150" class="preview_image" id="preview_image" style="object-fit: cover;"><br><br>
			              					@else
			              					<img src="{{ url('backend/images/image_default.png') }}" width="150" height="150" class="preview_image" id="preview_image"><br><br>
			              					@endif
				            			</td>
				            			<td>{{ !empty($artikels->RefCategory->nama_kategori) ? $artikels->RefCategory->nama_kategori : '-' }}</td>
				            			<td>{{ $artikels->judul }}</td>
				            			<td>{{ !empty($artikels->RefPenulis->nama) ? $artikels->RefPenulis->nama : '-' }} - {{ !empty($artikels->RefPenulis->jabatan) ? $artikels->RefPenulis->jabatan : '-' }}</td>
				            			<td width="120">
				            				@if($artikels->status == 1)
				            				<span class="label label-success">Aktif</span>
				            				@else
				            				<span class="label label-danger">Non Aktif</span>
				            				@endif
				            			</td>
				            			<td width="120">
				            				<a href="{{ route('edit-artikel', $artikels->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>&nbsp;
				            				<a href="{{ route('delete-artikel', $artikels->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i></a>
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