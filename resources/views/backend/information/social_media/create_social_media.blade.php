@extends('layouts.app_admin')

@section('content')
<div class="row">
  <div class="col-md-10">
    <div class="block-web">
         <div class="header">
           <h3 class="content-header">
                  <a href="{{ route('social-media') }}"><i class="fa fa-arrow-left"></i></a> &nbsp;
                  Form Social Media
           </h3>
         </div>
         <div class="porlets-content">
            <form action="{{ route('save-social-media') }}" method="POST" enctype="multipart/form-data" class="form-horizontal row-border">
                @csrf
                <div class="form-group lable-padd">
                    <label class="col-sm-3">Images/Icon</label>
                    <div class="col-sm-9">
                       @if(!empty($social_media->image))
                       <img src="{{ url('upload/social-media/'.$social_media->image) }}" width="45" height="45" class="preview_image" id="preview_image" style="object-fit: cover;"><br><br>
                       @else
                       <img src="{{ url('backend/images/image_default.png') }}" width="45" height="45" class="preview_image" id="preview_image"><br><br>
                       @endif
                       <input required type="file" name="image" id="image" class="upload">
                    </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Nama Social Media</label>
                  <div class="col-sm-9">
                     <input type="hidden" name="id" value="{{ !empty($social_media->id) ? $social_media->id : NULL }}">
                     <input required type="text" name="title" id="title" value="{{ !empty($social_media->title) ? $social_media->title : '' }}" placeholder="nama social media" class="form-control">
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Link</label>
                  <div class="col-sm-9">
                      <input required type="text" name="link" id="link" value="{{ !empty($social_media->link) ? $social_media->link : '' }}" placeholder="link" class="form-control">
                  </div>
                </div>
                <div class="form-group lable-padd">
                    <label class="col-sm-3">Status</label>
                    <div class="col-sm-9">
                        <select required class="form-control" name="status" id="status">
                          <option value="">-- status --</option>
                          <option value="1" {{ !empty($social_media->status) && $social_media->status == 1 ? 'selected': '' }}>Aktif</option>
                          <option value="0" {{ !empty($social_media->status) && $social_media->status == 0 ? 'selected': '' }}>Non Aktif</option>
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