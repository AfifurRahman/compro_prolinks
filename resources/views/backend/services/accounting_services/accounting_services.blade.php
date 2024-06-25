@extends('layouts.app_admin')

@section('content')
	<div class="row">
        <div class="col-md-12">
          	<div class="block-web">
	            <div class="header">
	            	<h3 class="content-header">List Accounting Services</h3>
	            </div>
	            <div class="porlets-content">
	            	<a href="{{ route('create-accounting-services') }}" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Tambah Services</a> <br><br>
	            	<table class="table table-hover table-bordered" id="dynamic-table">
	            		<thead>
	            			<tr>
		            			<th>No</th>
		            			<th>Gambar/Icon</th>
		            			<th>Nama Services</th>
		            			<th>Harga</th>
		            			<th>Status</th>
		            			<th>Action</th>
		            		</tr>
	            		</thead>
	            		<tbody>
	            			@if(count($accounting_services) > 0)
		            			@foreach($accounting_services as $accounting_services)
			            			<tr>
				            			<td>{{ $loop->iteration }}</td>
				            			<td width="80">
				            				@if(!empty($accounting_services->image))
			              					<img src="{{ url('upload/accounting-services/'.$accounting_services->image) }}" width="30" height="30" class="preview_image" id="preview_image" style="object-fit: cover;"><br><br>
			              					@else
			              					<img src="{{ url('backend/images/image_default.png') }}" width="30" height="30" class="preview_image" id="preview_image"><br><br>
			              					@endif
				            			</td>
				            			<td>{{ $accounting_services->title }}</td>
				            			<td>IDR {{ number_format($accounting_services->value1) }}</td>
				            			<td width="120">
				            				@if($accounting_services->status == 1)
				            				<span class="label label-success">Aktif</span>
				            				@else
				            				<span class="label label-danger">Non Aktif</span>
				            				@endif
				            			</td>
				            			<td width="120">
				            				<a href="{{ route('edit-accounting-services', $accounting_services->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>&nbsp;
				            				<a href="{{ route('delete-accounting-services', $accounting_services->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i></a>
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