@extends('layouts.app_admin')

@section('content')
	<div class="row">
        <div class="col-md-12">
          	<div class="block-web">
	            <div class="header">
	            	<h3 class="content-header"><a href="{{ route('artikel') }}"><i class="fa fa-arrow-left"></i></a> &nbsp;List Kategori Insights</h3>
	            </div>
	            <div class="porlets-content">
	            	<a href="{{ route('create-kategori-artikel') }}" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Tambah Kategori Insights</a><br><br>
	            	<table class="table table-hover table-bordered" id="dynamic-table">
	            		<thead>
	            			<tr>
		            			<th>No</th>
		            			<th>Kategori</th>
		            			<th>Status</th>
		            			<th>Action</th>
		            		</tr>
	            		</thead>
	            		<tbody>
	            			@if(count($kategori_artikel) > 0)
		            			@foreach($kategori_artikel as $kategori_artikels)
			            			<tr>
				            			<td width="100">{{ $loop->iteration }}</td>
				            			<td>{{ $kategori_artikels->nama_kategori }}</td>
				            			<td width="120">
				            				@if($kategori_artikels->status == 1)
				            				<span class="label label-success">Aktif</span>
				            				@else
				            				<span class="label label-danger">Non Aktif</span>
				            				@endif
				            			</td>
				            			<td width="120">
				            				<a href="{{ route('edit-kategori-artikel', $kategori_artikels->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>&nbsp;
				            				<a href="{{ route('delete-kategori-artikel', $kategori_artikels->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i></a>
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