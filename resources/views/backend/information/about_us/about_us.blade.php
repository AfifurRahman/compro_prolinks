@extends('layouts.app_admin')

@section('content')
	<div class="row">
        <div class="col-md-8">
          	<div class="block-web">
	            <div class="header">
	            	<h3 class="content-header">Form About Us</h3>
	            </div>
	            <div class="porlets-content">
	            	<form action="{{ route('save-about-us') }}" method="POST" enctype="multipart/form-data" class="form-horizontal row-border">
	            		@csrf
              			<div class="form-group lable-padd">
              				<label class="col-sm-3">Title</label>
              				<div class="col-sm-9">
              					<input type="hidden" name="id" value="{{ !empty($about_us->id) ? $about_us->id : NULL }}">
              					<input required type="text" name="title" id="title" value="{{ !empty($about_us->title) ? $about_us->title : '' }}" class="form-control">
              				</div>
              			</div>
              			<div class="form-group lable-padd">
              				<label class="col-sm-3">Deskripsi (Home Page)</label>
              				<div class="col-sm-9">
              					<textarea class="form-control my-editor" max="2" name="value1" id="value1" rows="6">{{ !empty($about_us->value1) ? $about_us->value1 : '' }}</textarea>
              					<div class="red_text">* Maksimal 255 kata</div>
              				</div>
              			</div>
              			<div class="form-group lable-padd">
              				<label class="col-sm-3">Deskripsi (About Us)</label>
              				<div class="col-sm-9">
              					<textarea class="form-control my-editor" name="description" id="description" rows="6">{{ !empty($about_us->description) ? $about_us->description : '' }}</textarea>
              				</div>
              			</div>
              			<div class="form-group lable-padd">
              				<label class="col-sm-3">Gambar</label>
              				<div class="col-sm-9">
              					@if(!empty($about_us->image))
              					<img src="{{ url('upload/about-us/'.$about_us->image) }}" width="250" height="250" class="preview_image" id="preview_image" style="object-fit: cover;"><br><br>
              					@else
              					<img src="{{ url('backend/images/image_default.png') }}" width="250" height="250" class="preview_image" id="preview_image"><br><br>
              					@endif
              					<input type="file" name="image" id="image" class="upload">
              				</div>
              			</div>
                    <input type="hidden" name="status" id="status" value="1">
              			
              			<div class="form-group">
              				<button type="submit" class="btn btn-success col-md-12">
              					Simpan
              				</button>
              			</div>
	            	</form>
	            </div>
	        </div>
	    </div>
	</div>
@endsection

@push('scripts')
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('value1');
    CKEDITOR.replace('description');
</script>
@endpush