@extends('layouts.app_admin')

@section('content')
	<div class="row">
        <div class="col-md-10">
          	<div class="block-web">
	            <div class="header">
	            	<h3 class="content-header">
	            		<a href="{{ route('team') }}"><i class="fa fa-arrow-left"></i></a> &nbsp;
	            		Form Team
	            	</h3>
	            </div>
	            <div class="porlets-content">
	            	<form action="{{ route('save-team') }}" method="POST" enctype="multipart/form-data" class="form-horizontal row-border">
	            		@csrf
	            		<div class="form-group lable-padd">
              				<label class="col-sm-3">Nama</label>
              				<div class="col-sm-9">
              					<input type="hidden" name="id" value="{{ !empty($team->id) ? $team->id : NULL }}">
              					<input required type="text" name="nama" id="nama" value="{{ !empty($team->nama) ? $team->nama : '' }}" placeholder="nama" class="form-control">
              				</div>
              			</div>
              			<div class="form-group lable-padd">
              				<label class="col-sm-3">Jabatan</label>
              				<div class="col-sm-9">
              					<input required type="text" name="jabatan" id="jabatan" value="{{ !empty($team->jabatan) ? $team->jabatan : '' }}" placeholder="jabatan" class="form-control">
              				</div>
              			</div>
              			<div class="form-group lable-padd">
              				<label class="col-sm-3">Email</label>
              				<div class="col-sm-9">
              					<input required type="email" name="email" id="email" value="{{ !empty($team->email) ? $team->email : '' }}" placeholder="email" class="form-control">
              				</div>
              			</div>
              			<div class="form-group lable-padd">
              				<label class="col-sm-3">Nomor HP 1</label>
              				<div class="col-sm-9">
              					<input required type="text" name="no_hp1" id="no_hp1" value="{{ !empty($team->no_hp1) ? $team->no_hp1 : '' }}" placeholder="nomor hp 1" class="form-control">
              				</div>
              			</div>
              			<div class="form-group lable-padd">
              				<label class="col-sm-3">Nomor HP 2</label>
              				<div class="col-sm-9">
              					<input type="text" name="no_hp2" id="no_hp2" value="{{ !empty($team->no_hp2) ? $team->no_hp2 : '' }}" placeholder="nomor hp 2" class="form-control">
              				</div>
              			</div>
              			<div class="form-group lable-padd">
              				<label class="col-sm-3">Alamat</label>
              				<div class="col-sm-9">
              					<textarea name="alamat" id="alamat" placeholder="alamat" class="form-control" rows="6">{{ !empty($team->alamat) ? $team->alamat : '' }}</textarea>
              				</div>
              			</div>
              			<div class="form-group lable-padd">
              				<label class="col-sm-3">Quotes</label>
              				<div class="col-sm-9">
              				   <textarea name="quotes" id="quotes" placeholder="quotes" class="form-control" rows="3">{{ !empty($team->quotes) ? $team->quotes : '' }}</textarea>
              				   <small>max 255 character</small>
                                          </div>
              			</div>
                                   <div class="form-group lable-padd">
                                          <label class="col-sm-3">Description</label>
                                          <div class="col-sm-9">
                                                 <textarea name="description" id="description" placeholder="description" class="form-control" rows="3">{{ !empty($team->description) ? $team->description : '' }}</textarea>
                                          </div>
                                   </div>
                                   <div class="form-group lable-padd">
                                          <label class="col-sm-3">Education Journey</label>
                                          <div class="col-sm-9">
                                                 <textarea name="education" id="education" placeholder="education" class="form-control" rows="3">{{ !empty($team->education) ? $team->education : '' }}</textarea>
                                          </div>
                                   </div>
              			<div class="form-group lable-padd">
              				<label class="col-sm-3">Link facebook</label>
              				<div class="col-sm-9">
              					<input type="text" name="link_fb" id="link_fb" value="{{ !empty($team->link_fb) ? $team->link_fb : '' }}" placeholder="link facebook" class="form-control">
              				</div>
              			</div>
              			<div class="form-group lable-padd">
              				<label class="col-sm-3">Link Twitter</label>
              				<div class="col-sm-9">
              					<input type="text" name="link_twitter" id="link_twitter" value="{{ !empty($team->link_twitter) ? $team->link_twitter : '' }}" placeholder="link twitter" class="form-control">
              				</div>
              			</div>
              			<div class="form-group lable-padd">
              				<label class="col-sm-3">Link Instagram</label>
              				<div class="col-sm-9">
              					<input type="text" name="link_ig" id="link_ig" value="{{ !empty($team->link_ig) ? $team->link_ig : '' }}" placeholder="link instagram" class="form-control">
              				</div>
              			</div>
              			<div class="form-group lable-padd">
              				<label class="col-sm-3">Link Linkedin</label>
              				<div class="col-sm-9">
              					<input type="text" name="link_linkedin" id="link_linkedin" value="{{ !empty($team->link_linkedin) ? $team->link_linkedin : '' }}" placeholder="link linkedin" class="form-control">
              				</div>
              			</div>
              			<div class="form-group lable-padd">
              				<label class="col-sm-3">Link Google</label>
              				<div class="col-sm-9">
              					<input type="text" name="link_google" id="link_google" value="{{ !empty($team->link_google) ? $team->link_google : '' }}" placeholder="link google" class="form-control">
              				</div>
              			</div>
              			<div class="form-group lable-padd">
              				<label class="col-sm-3">Foto Team</label>
              				<div class="col-sm-9">
              					@if(!empty($team->image))
              					<img src="{{ url('upload/team/'.$team->image) }}" width="250" height="250" class="preview_image" id="preview_image" style="object-fit: cover;"><br><br>
              					@else
              					<img src="{{ url('backend/images/image_default.png') }}" width="250" height="250" class="preview_image" id="preview_image"><br><br>
              					@endif
              					<input type="file" name="image" id="image" class="upload">
              				</div>
              			</div>
              			<div class="form-group lable-padd">
              				<label class="col-sm-3">Status</label>
              				<div class="col-sm-9">
              					<select required class="form-control" name="status" id="status">
              						<option value="">-- status --</option>
              						<option value="1" {{ !empty($team->status) && $team->status == 1 ? 'selected': '' }}>Aktif</option>
              						<option value="0" {{ !empty($team->status) && $team->status == 0 ? 'selected': '' }}>Non Aktif</option>
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
    CKEDITOR.replace('description');
    CKEDITOR.replace('education');
</script>
@endpush