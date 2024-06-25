@extends('layouts.app_admin')

@section('content')
	<div class="row">
        <div class="col-md-6">
          	<div class="block-web">
	            <div class="header">
	            	<h3 class="content-header">Form Users</h3>
	            </div>
	            <div class="porlets-content">
              		<form action="{{ route('save-profile') }}" method="POST" class="form-horizontal row-border">
              			@csrf
              			<div class="form-group">
              				<label>Nama User</label>
              				<input required type="text" name="name" id="name" class="form-control" value="{{ !empty($users->name) ? $users->name : '' }}">
              			</div>
              			<div class="form-group">
              				<label>Email</label>
              				<input required type="email" name="email" id="email" class="form-control" value="{{ !empty($users->email) ? $users->email : '' }}">
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
	    <div class="col-md-6">
          	<div class="block-web">
	            <div class="header">
	            	<h3 class="content-header">Ganti Password</h3>
	            </div>
	            <div class="porlets-content">
	            	<form action="{{ route('change-password') }}" method="POST" class="form-horizontal row-border">
	            		@csrf
              			<div class="form-group">
              				<label>New Password</label>
              				<input required type="password" name="password" id="password" class="form-control">
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

<script type="text/javascript">
	
</script>