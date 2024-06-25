@extends('layouts.app_admin')

@section('content')
<div class="row">
  <div class="col-md-10">
    <div class="block-web">
         <div class="header">
           <h3 class="content-header">
              <a href="{{ route('kategori-artikel') }}"><i class="fa fa-arrow-left"></i></a> &nbsp;
              Form Kategori Insights
           </h3>
         </div>
         <div class="porlets-content">
            <form action="{{ route('save-kategori-artikel') }}" method="POST" class="form-horizontal row-border">
                @csrf
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Kategori Insights</label>
                  <div class="col-sm-9">
                     <input type="hidden" name="id" value="{{ !empty($kategori_artikel->id) ? $kategori_artikel->id : NULL }}">
                     <input required type="text" name="nama_kategori" id="nama_kategori" value="{{ !empty($kategori_artikel->nama_kategori) ? $kategori_artikel->nama_kategori : '' }}" placeholder="kategori insights" class="form-control">
                  </div>
                </div>
                <div class="form-group lable-padd">
                    <label class="col-sm-3">Status</label>
                    <div class="col-sm-9">
                        <select required class="form-control" name="status" id="status">
                          <option value="">-- status --</option>
                          <option value="1" {{ !empty($kategori_artikel->status) && $kategori_artikel->status == 1 ? 'selected': '' }}>Aktif</option>
                          <option value="0" {{ !empty($kategori_artikel->status) && $kategori_artikel->status == 0 ? 'selected': '' }}>Non Aktif</option>
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