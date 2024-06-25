@extends('layouts.app_admin')

@section('content')
<div class="row">
  <div class="col-md-10">
    <div class="block-web">
         <div class="header">
           <h3 class="content-header">
              <a href="{{ route('industries') }}"><i class="fa fa-arrow-left"></i></a> &nbsp;
              Form Industries
           </h3>
         </div>
         <div class="porlets-content">
            <form action="{{ route('save-industries') }}" method="POST" enctype="multipart/form-data" class="form-horizontal row-border">
                @csrf
                <div class="form-group lable-padd">
                    <label class="col-sm-3">Gambar</label>
                    <div class="col-sm-9">
                       @if(!empty($industries->image))
                       <img src="{{ url('upload/industries/'.$industries->image) }}" width="300" height="300" class="preview_image" id="preview_image" style="object-fit: cover;"><br><br>
                       @else
                       <img src="{{ url('backend/images/image_default.png') }}" width="300" height="300" class="preview_image" id="preview_image"><br><br>
                       @endif
                       <input type="file" name="image" id="image" class="upload">
                    </div>
                </div>
                <div class="form-group lable-padd">
                    <label class="col-sm-3">Upload Dokumen</label>
                    <div class="col-sm-9">
                        <input type="file" name="value5" id="value5" accept="application/pdf">
                        <span class="text-danger">document extension : .pdf</span>
                        <div>
                          @if(!empty($industries->value5))
                              <a href="{{ url('upload/industries/'.$industries->value5) }}" target="_blank" class="btn btn-primary">Download dokumen<i class="fa fa-download"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group lable-padd">
                    <label class="col-sm-3">Upload Icon</label>
                    <div class="col-sm-9">
                        @if(!empty($industries->value4))
                          <img src="{{ url('upload/industries/'.$industries->value4) }}" width="48" height="48" class="preview_icon" id="preview_icon" style="object-fit: cover;"><br><br>
                        @else
                          <img src="{{ url('backend/images/image_default.png') }}" width="48" height="48" class="preview_icon" id="preview_icon"><br><br>
                        @endif
                        <input type="file" name="value4" id="value4" accept="image/*">
                        <span class="text-danger">extension : .jpg, .png, .jpeg</span>
                    </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Nama Industri</label>
                  <div class="col-sm-9">
                     <input type="hidden" name="id" value="{{ !empty($industries->id) ? $industries->id : NULL }}">
                     <input required type="text" name="title" id="title" value="{{ !empty($industries->title) ? $industries->title : '' }}" placeholder="nama industries" class="form-control">
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Judul Industri</label>
                  <div class="col-sm-9">
                     <input required type="text" name="value1" id="value1" value="{{ !empty($industries->value1) ? $industries->value1 : '' }}" placeholder="description" class="form-control">
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Deskripsi</label>
                  <div class="col-sm-9">
                    <textarea class="form-control my-editor" name="description" id="my-editor" rows="6">{{ !empty($industries->description) ? $industries->description : '' }}</textarea>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Link</label>
                  <div class="col-sm-9">
                      <input type="text" name="link" id="link" value="{{ !empty($industries->link) ? $industries->link : '' }}" placeholder="link" class="form-control">
                  </div>
                </div>
                <div class="form-group lable-padd">
                    <label class="col-sm-3">Status</label>
                    <div class="col-sm-9">
                        <select required class="form-control" name="status" id="status">
                          <option value="">-- status --</option>
                          <option value="1" {{ !empty($industries->status) && $industries->status == 1 ? 'selected': '' }}>Aktif</option>
                          <option value="0" {{ !empty($industries->status) && $industries->status == 0 ? 'selected': '' }}>Non Aktif</option>
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
<script>
    CKEDITOR.replace('my-editor');
</script>
@endpush