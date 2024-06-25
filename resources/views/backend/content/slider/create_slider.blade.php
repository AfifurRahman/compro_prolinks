@extends('layouts.app_admin')

@section('content')
<div class="row">
  <div class="col-md-10">
    <div class="block-web">
         <div class="header">
           <h3 class="content-header">
              <a href="{{ route('slider') }}"><i class="fa fa-arrow-left"></i></a> &nbsp;
              Form Slider
           </h3>
         </div>
         <div class="porlets-content">
            <form action="{{ route('save-slider') }}" method="POST" enctype="multipart/form-data" class="form-horizontal row-border">
                @csrf
                <div class="form-group lable-padd">
                    <label class="col-sm-3">Gambar Slider</label>
                    <div class="col-sm-9">
                       @if(!empty($slider->image))
                       <img src="{{ url('upload/slider/'.$slider->image) }}" width="250" height="250" class="preview_image" id="preview_image" style="object-fit: cover;"><br><br>
                       @else
                       <img src="{{ url('backend/images/image_default.png') }}" width="250" height="250" class="preview_image" id="preview_image"><br><br>
                       @endif
                       <input {{ !empty($slider->id) ? '':'required' }} type="file" name="image" id="image" class="upload">
                    </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Deskripsi</label>
                  <div class="col-sm-9">
                    <input type="hidden" name="id" value="{{ !empty($slider->id) ? $slider->id : NULL }}">
                    <textarea class="my-editor form-control ckeditor" name="description" id="my-editor">{{ !empty($slider->description) ? $slider->description : '' }}</textarea>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Link</label>
                  <div class="col-sm-9">
                      <input type="text" name="link" id="link" value="{{ !empty($slider->link) ? $slider->link : '' }}" placeholder="link" class="form-control">
                  </div>
                </div>
                <div class="form-group lable-padd">
                    <label class="col-sm-3">Status</label>
                    <div class="col-sm-9">
                        <select required class="form-control" name="status" id="status">
                          <option value="">-- status --</option>
                          <option value="1" {{ !empty($slider->status) && $slider->status == 1 ? 'selected': '' }}>Aktif</option>
                          <option value="0" {{ !empty($slider->status) && $slider->status == 0 ? 'selected': '' }}>Non Aktif</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                         <button type="submit" class="btn btn-success col-md-12">
                            Simpan
                         </button>
                    </div>
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
    </script>
@endpush