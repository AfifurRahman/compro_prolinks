@extends('layouts.app_admin')

@section('content')
	<div class="row">
      <div class="col-md-6">
          	<div class="block-web">
	            <div class="header">
	            	<h3 class="content-header">Form Banner 1</h3>
	            </div>
	            <div class="porlets-content">
	            	<form action="{{ route('save-homepage', 7) }}" method="POST" enctype="multipart/form-data">
	            		@csrf
              			<div class="form-group">
              				<label>Title</label>
              				<div>
              					<input type="hidden" name="id" value="{{ !empty($banner1->id) ? $banner1->id : NULL }}">
              					<input required type="text" name="title" id="title" value="{{ !empty($banner1->title) ? $banner1->title : 'BANNER 1' }}" readonly class="form-control">
              				</div>
              			</div>
              			<div class="form-group lable-padd">
              				<label>Description</label>
              				<div>
              					<textarea class="form-control my-editor" name="description" id="my-editor" rows="6">{{ !empty($banner1->description) ? $banner1->description : '' }}</textarea>
              				</div>
              			</div>
                    <div class="form-group lable-padd">
                      <label>Gambar</label>
                      <div>
                        @if(!empty($banner1->image))
                        <img src="{{ url('upload/homepage/'.$banner1->image) }}" width="250" height="250" class="preview_image_banner1" id="preview_image_banner1" style="object-fit: cover;"><br><br>
                        @else
                        <img src="{{ url('backend/images/image_default.png') }}" width="250" height="250" class="preview_image_banner1" id="preview_image_banner1"><br><br>
                        @endif
                        <input type="file" name="image" id="image" class="upload-banner1">
                      </div>
                    </div>
                    <div class="form-group lable-padd">
                      <label>Status</label>
                      <div>
                        <select required class="form-control" name="status" id="status">
                          <option value="">-- status --</option>
                          <option value="1" {{ !empty($banner1->status) && $banner1->status == 1 ? 'selected': '' }}>Aktif</option>
                          <option value="2" {{ !empty($banner1->status) && $banner1->status == 2 ? 'selected': '' }}>Non Aktif</option>
                        </select>
                      </div>
                    </div>
              			<div class="form-group">
              				<button type="submit" class="btn btn-success col-md-12">
              					Submit
              				</button>
              			</div>
	            	</form>
	            </div>
	        </div>
	    </div>
      <div class="col-md-6">
            <div class="block-web">
              <div class="header">
                <h3 class="content-header">Form Banner 2</h3>
              </div>
              <div class="porlets-content">
                <form action="{{ route('save-homepage', 8) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group lable-padd">
                      <label>Title</label>
                      <div>
                        <input type="hidden" name="id" value="{{ !empty($banner2->id) ? $banner2->id : NULL }}">
                        <input required type="text" name="title" id="title" value="{{ !empty($banner2->title) ? $banner2->title : 'BANNER 2' }}" readonly class="form-control">
                      </div>
                    </div>
                    <div class="form-group lable-padd">
                      <label>Desciption</label>
                      <div>
                        <textarea class="form-control my-editor2" name="description" id="my-editor2" rows="6">{{ !empty($banner2->description) ? $banner2->description : '' }}</textarea>
                      </div>
                    </div>
                    <div class="form-group lable-padd">
                      <label>Gambar</label>
                      <div>
                        @if(!empty($banner2->image))
                        <img src="{{ url('upload/homepage/'.$banner2->image) }}" width="250" height="250" class="preview_image_banner2" id="preview_image_banner2" style="object-fit: cover;"><br><br>
                        @else
                        <img src="{{ url('backend/images/image_default.png') }}" width="250" height="250" class="preview_image_banner2" id="preview_image_banner2"><br><br>
                        @endif
                        <input type="file" name="image" id="image" class="upload-banner2">
                      </div>
                    </div>
                    <div class="form-group lable-padd">
                      <label>Status</label>
                      <div>
                        <select required class="form-control" name="status" id="status">
                          <option value="">-- status --</option>
                          <option value="1" {{ !empty($banner2->status) && $banner2->status == 1 ? 'selected': '' }}>Aktif</option>
                          <option value="2" {{ !empty($banner2->status) && $banner2->status == 2 ? 'selected': '' }}>Non Aktif</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-success col-md-12">
                        Submit
                      </button>
                    </div>
                </form>
              </div>
          </div>
      </div>
      <div class="col-md-6">
            <div class="block-web">
              <div class="header">
                <h3 class="content-header">Form Banner 3</h3>
              </div>
              <div class="porlets-content">
                <form action="{{ route('save-homepage', 9) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group lable-padd">
                      <label>Title</label>
                      <div>
                        <input type="hidden" name="id" value="{{ !empty($banner3->id) ? $banner3->id : NULL }}">
                        <input required type="text" name="title" id="title" value="{{ !empty($banner3->title) ? $banner3->title : 'BANNER 3' }}" readonly class="form-control">
                      </div>
                    </div>
                    <div class="form-group lable-padd">
                      <label>Desciption</label>
                      <div>
                        <textarea class="form-control my-editor3" name="description" id="my-editor3" rows="6">{{ !empty($banner3->description) ? $banner3->description : '' }}</textarea>
                      </div>
                    </div>
                    <div class="form-group lable-padd">
                      <label>Gambar</label>
                      <div>
                        @if(!empty($banner3->image))
                        <img src="{{ url('upload/homepage/'.$banner3->image) }}" width="250" height="250" class="preview_image_banner3" id="preview_image_banner3" style="object-fit: cover;"><br><br>
                        @else
                        <img src="{{ url('backend/images/image_default.png') }}" width="250" height="250" class="preview_image_banner3" id="preview_image_banner3"><br><br>
                        @endif
                        <input type="file" name="image" id="image" class="upload-banner3">
                      </div>
                    </div>
                    <div class="form-group lable-padd">
                      <label>Status</label>
                      <div>
                        <select required class="form-control" name="status" id="status">
                          <option value="">-- status --</option>
                          <option value="1" {{ !empty($banner3->status) && $banner3->status == 1 ? 'selected': '' }}>Aktif</option>
                          <option value="2" {{ !empty($banner3->status) && $banner3->status == 2 ? 'selected': '' }}>Non Aktif</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-success col-md-12">
                        Submit
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
    CKEDITOR.replace('my-editor');
    CKEDITOR.replace('my-editor2');
    CKEDITOR.replace('my-editor3');
</script>
@endpush