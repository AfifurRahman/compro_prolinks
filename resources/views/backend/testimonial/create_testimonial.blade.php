@extends('layouts.app_admin')

@section('content')
<div class="row">
  <div class="col-md-10">
    <div class="block-web">
         <div class="header">
           <h3 class="content-header">
              <a href="{{ route('testimonial') }}"><i class="fa fa-arrow-left"></i></a> &nbsp;
              Form Testimonial
           </h3>
         </div>
         <div class="porlets-content">
            <form action="{{ route('save-testimonial') }}" method="POST" enctype="multipart/form-data" class="form-horizontal row-border">
                @csrf
                <div class="form-group lable-padd">
                    <label class="col-sm-3">Gambar</label>
                    <div class="col-sm-9">
                       @if(!empty($testimonial->image))
                       <img src="{{ url('upload/testimonial/'.$testimonial->image) }}" width="250" height="250" class="preview_image" id="preview_image" style="object-fit: cover;"><br><br>
                       @else
                       <img src="{{ url('backend/images/image_default.png') }}" width="250" height="250" class="preview_image" id="preview_image"><br><br>
                       @endif
                       <input type="file" name="image" id="image" class="upload">
                    </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Nama</label>
                  <div class="col-sm-9">
                     <input type="hidden" name="id" value="{{ !empty($testimonial->id) ? $testimonial->id : NULL }}">
                     <input required type="text" name="nama" id="nama" value="{{ !empty($testimonial->nama) ? $testimonial->nama : '' }}" placeholder="nama" class="form-control">
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Jabatan</label>
                  <div class="col-sm-9">
                      <input type="text" name="jabatan" id="jabatan" value="{{ !empty($testimonial->jabatan) ? $testimonial->jabatan : '' }}" placeholder="jabatan" class="form-control">
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Isi testimonial</label>
                  <div class="col-sm-9">
                    <textarea class="my-editor form-control" name="deskripsi" id="my-editor">{{ !empty($testimonial->deskripsi) ? $testimonial->deskripsi : '' }}</textarea>
                  </div>
                </div>
                
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Link</label>
                  <div class="col-sm-9">
                      <input type="text" name="link" id="link" value="{{ !empty($testimonial->link) ? $testimonial->link : '' }}" placeholder="link" class="form-control">
                  </div>
                </div>
                <div class="form-group lable-padd">
                    <label class="col-sm-3">Status</label>
                    <div class="col-sm-9">
                        <select required class="form-control" name="status" id="status">
                          <option value="">-- status --</option>
                          <option value="1" {{ !empty($testimonial->status) && $testimonial->status == 1 ? 'selected': '' }}>Aktif</option>
                          <option value="0" {{ !empty($testimonial->status) && $testimonial->status == 0 ? 'selected': '' }}>Non Aktif</option>
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