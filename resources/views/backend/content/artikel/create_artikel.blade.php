@extends('layouts.app_admin')

@section('content')
<div class="row">
  <div class="col-md-10">
    <div class="block-web">
         <div class="header">
           <h3 class="content-header">
              <a href="{{ route('artikel') }}"><i class="fa fa-arrow-left"></i></a> &nbsp;
              Form Insights
           </h3>
         </div>
         <div class="porlets-content">
            <form action="{{ route('save-artikel') }}" method="POST" enctype="multipart/form-data" class="form-horizontal row-border">
                @csrf
                <div class="form-group lable-padd">
                    <label class="col-sm-2">Gambar Insights</label>
                    <div class="col-sm-9">
                       @if(!empty($artikel->image))
                       <img src="{{ url('upload/artikel/'.$artikel->image) }}" width="250" height="250" class="preview_image" id="preview_image" style="object-fit: cover;"><br><br>
                       @else
                       <img src="{{ url('backend/images/image_default.png') }}" width="250" height="250" class="preview_image" id="preview_image"><br><br>
                       @endif
                       <input type="file" name="image" id="image" class="upload">
                    </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-2">Kategori Insights</label>
                  <div class="col-sm-9">
                     <select class="form-control" name="category_article_id" id="category_article_id">
                        <option value="">-- pilih kategori artikel --</option>
                        @if(count($kategori_artikel) > 0)
                          @foreach($kategori_artikel as $category)
                            <option value="{{ $category->id }}" {{ !empty($artikel->category_article_id) && $artikel->category_article_id == $category->id ? 'selected':'' }} >{{ $category->nama_kategori }}</option>
                          @endforeach
                        @endif
                     </select>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-2">Judul Insights</label>
                  <div class="col-sm-9">
                     <input type="hidden" name="id" value="{{ !empty($artikel->id) ? $artikel->id : NULL }}">
                     <input required type="text" name="judul" id="judul" value="{{ !empty($artikel->judul) ? $artikel->judul : '' }}" placeholder="judul artikel" class="form-control">
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-2">Isi Insights</label>
                  <div class="col-sm-9">
                    <textarea class="my-editor form-control" name="deskripsi" id="my-editor">{{ !empty($artikel->deskripsi) ? $artikel->deskripsi : '' }}</textarea>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-2">Penulis</label>
                  <div class="col-sm-9">
                      <select required name="penulis" id="penulis" class="form-control">
                        <option value="">- pilih penulis -</option>
                        <option value="1">Team Prolinks</option>
                        @if(count($team) > 0)
                          @foreach($team as $teams)
                            <option value="{{ $teams->id }}" {{ !empty($artikel->penulis) && $artikel->penulis == $teams->id ? 'selected':'' }} >{{ $teams->nama }} - {{ $teams->jabatan }}</option>
                          @endforeach
                        @endif
                      </select>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-2">From</label>
                  <div class="col-sm-9">
                      <select required name="from" id="from" class="form-control">
                        <option value="">- Pilih from -</option>
                        <option value="1">Protemus Consulting</option>
                        <option value="2">Other</option>
                      </select>
                  </div>
                </div>
                <div class="form-group lable-padd" id="view-link" style="display: none;">
                  <label class="col-sm-2">Link Referensi</label>
                  <div class="col-sm-9">
                      <input type="text" name="link" id="link" value="{{ !empty($artikel->link) ? $artikel->link : '' }}" placeholder="link" class="form-control">
                  </div>
                </div>
                <div class="form-group lable-padd">
                    <label class="col-sm-2">Status</label>
                    <div class="col-sm-9">
                        <select required class="form-control" name="status" id="status">
                          <option value="">-- status --</option>
                          <option value="1" {{ !empty($artikel->status) && $artikel->status == 1 ? 'selected': '' }}>Aktif</option>
                          <option value="0" {{ !empty($artikel->status) && $artikel->status == 0 ? 'selected': '' }}>Non Aktif</option>
                        </select>
                    </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-2">Meta Title</label>
                  <div class="col-sm-9">
                      <input type="text" name="meta_title" id="meta_title" value="{{ !empty($artikel->meta_title) ? $artikel->meta_title : '' }}" placeholder="meta title" class="form-control">
                      <small>max 60 character</small>
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-2">Meta Description</label>
                  <div class="col-sm-9">
                      <input type="text" name="meta_description" id="meta_description" value="{{ !empty($artikel->meta_description) ? $artikel->meta_description : '' }}" placeholder="meta description" class="form-control">
                      <small>max 160 character</small>
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
<!-- <script type="text/javascript" src="{{ url('backend/plugins/ckeditor/ckeditor.js') }}"></script> -->
<script>
    CKEDITOR.replace('my-editor');

    $(document).ready(function(){
      $("#from").change(function(){
        var from = $("#from").val();
        /* jika from nya others */
        if (from == 2) {
          $("#link").prop("required", true);
          $("#view-link").css("display", "block");
        }else{
          $("#link").prop("required", false);
          $("#view-link").css("display", "none");
        }
        
      });
    });
</script>
@endpush