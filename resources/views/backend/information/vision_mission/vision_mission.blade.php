@extends('layouts.app_admin')

@section('content')
	<div class="row">
      <div class="col-md-6">
          	<div class="block-web">
	            <div class="header">
	            	<h3 class="content-header">Form Vision</h3>
	            </div>
	            <div class="porlets-content">
	            	<form action="{{ route('save-vision') }}" method="POST" enctype="multipart/form-data">
	            		@csrf
              			<div class="form-group">
              				<label>Title</label>
              				<div>
              					<input type="hidden" name="id" value="{{ !empty($vision->id) ? $vision->id : NULL }}">
              					<input required type="text" name="title" id="title" value="{{ !empty($vision->title) ? $vision->title : 'VISION' }}" readonly class="form-control">
              				</div>
              			</div>
              			<div class="form-group lable-padd">
              				<label>Description</label>
              				<div>
              					<textarea class="form-control my-editor" name="description" id="my-editor" rows="6">{{ !empty($vision->description) ? $vision->description : '' }}</textarea>
              				</div>
              			</div>
                    <div class="form-group lable-padd">
                      <label>Gambar</label>
                      <div>
                        @if(!empty($vision->image))
                        <img src="{{ url('upload/vision/'.$vision->image) }}" width="250" height="250" class="preview_image_vision" id="preview_image_vision" style="object-fit: cover;"><br><br>
                        @else
                        <img src="{{ url('backend/images/image_default.png') }}" width="250" height="250" class="preview_image_vision" id="preview_image_vision"><br><br>
                        @endif
                        <input type="file" name="image" id="image" class="upload-vision">
                      </div>
                    </div>
                    <div class="form-group lable-padd">
                      <label>Status</label>
                      <div>
                        <select required class="form-control" name="status" id="status">
                          <option value="">-- status --</option>
                          <option value="1" {{ !empty($vision->status) && $vision->status == 1 ? 'selected': '' }}>Aktif</option>
                          <option value="2" {{ !empty($vision->status) && $vision->status == 2 ? 'selected': '' }}>Non Aktif</option>
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
                <h3 class="content-header">Form Mission</h3>
              </div>
              <div class="porlets-content">
                <form action="{{ route('save-mission') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group lable-padd">
                      <label>Title</label>
                      <div>
                        <input type="hidden" name="id" value="{{ !empty($mission->id) ? $mission->id : NULL }}">
                        <input required type="text" name="title" id="title" value="{{ !empty($mission->title) ? $mission->title : 'MISSION' }}" readonly class="form-control">
                      </div>
                    </div>
                    <div class="form-group lable-padd">
                      <label>Desciption</label>
                      <div>
                        <textarea class="form-control my-editor2" name="description" id="my-editor2" rows="6">{{ !empty($mission->description) ? $mission->description : '' }}</textarea>
                      </div>
                    </div>
                    <div class="form-group lable-padd">
                      <label>Gambar</label>
                      <div>
                        @if(!empty($mission->image))
                        <img src="{{ url('upload/mission/'.$mission->image) }}" width="250" height="250" class="preview_image_mission" id="preview_image_mission" style="object-fit: cover;"><br><br>
                        @else
                        <img src="{{ url('backend/images/image_default.png') }}" width="250" height="250" class="preview_image_mission" id="preview_image_mission"><br><br>
                        @endif
                        <input type="file" name="image" id="image" class="upload-mission">
                      </div>
                    </div>
                    <div class="form-group lable-padd">
                      <label>Status</label>
                      <div>
                        <select required class="form-control" name="status" id="status">
                          <option value="">-- status --</option>
                          <option value="1" {{ !empty($mission->status) && $mission->status == 1 ? 'selected': '' }}>Aktif</option>
                          <option value="2" {{ !empty($mission->status) && $mission->status == 2 ? 'selected': '' }}>Non Aktif</option>
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
</script>
@endpush