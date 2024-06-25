@extends('layouts.app_admin')

@section('content')
	<div class="row">
        <div class="col-md-8">
          	<div class="block-web">
	            <div class="header">
	            	<h3 class="content-header">Form Contact</h3>
	            </div>
	            <div class="porlets-content">
	            	<form action="{{ route('save-contact') }}" method="POST" enctype="multipart/form-data" class="form-horizontal row-border">
	            		@csrf
              			<div class="form-group lable-padd">
              				<label class="col-sm-3">Title</label>
              				<div class="col-sm-9">
              					<input type="hidden" name="id" value="{{ !empty($contact->id) ? $contact->id : NULL }}">
              					<input required type="text" name="title" id="title" value="{{ !empty($contact->title) ? $contact->title : '' }}" class="form-control">
              				</div>
              			</div>
              			<div class="form-group lable-padd">
              				<label class="col-sm-3">Alamat</label>
              				<div class="col-sm-9">
              					<textarea class="form-control my-editor" name="description" id="my-editor" rows="6">{{ !empty($contact->description) ? $contact->description : '' }}</textarea>
              				</div>
              			</div>
              			<div class="form-group lable-padd">
                      <label class="col-sm-3">Telp 1</label>
                      <div class="col-sm-9">
                        <input type="text" name="value1" id="value1" value="{{ !empty($contact->value1) ? $contact->value1 : '' }}" class="form-control">
                      </div>
                    </div>
                    <div class="form-group lable-padd">
                      <label class="col-sm-3">Telp 2</label>
                      <div class="col-sm-9">
                        <input type="text" name="value2" id="value2" value="{{ !empty($contact->value2) ? $contact->value2 : '' }}" class="form-control">
                      </div>
                    </div>
                    <div class="form-group lable-padd">
                      <label class="col-sm-3">No Whatsapp</label>
                      <div class="col-sm-9">
                        <input type="text" name="value3" id="value3" value="{{ !empty($contact->value3) ? $contact->value3 : '' }}" class="form-control">
                      </div>
                    </div>
                    <div class="form-group lable-padd">
                      <label class="col-sm-3">Email</label>
                      <div class="col-sm-9">
                        <input type="text" name="value4" id="value4" value="{{ !empty($contact->value4) ? $contact->value4 : '' }}" class="form-control">
                      </div>
                    </div>
                    <div class="form-group lable-padd">
                      <label class="col-sm-3">MAP</label>
                      <div class="col-sm-9">
                        <input type="text" name="link" id="link" value="{{ !empty($contact->link) ? $contact->link : '' }}" class="form-control">
                        
                      </div>
                    </div>
                    <div class="form-group lable-padd">
                      <label class="col-sm-3">Status</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="status" id="status">
                          <option value="">-- status --</option>
                          <option value="1" {{ !empty($contact->status) && $contact->status == 1 ? 'selected': '' }}>Aktif</option>
                          <option value="0" {{ !empty($contact->status) && $contact->status == 0 ? 'selected': '' }}>Non Aktif</option>
                        </select>
                      </div>
                    </div>
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
    CKEDITOR.replace('my-editor');
    </script>
@endpush