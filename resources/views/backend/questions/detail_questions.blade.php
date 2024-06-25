@extends('layouts.app_admin')

@section('content')
	<div class="row">
        <div class="col-md-12">
          	<div class="block-web">
	            <div class="header">
	            	<h3 class="content-header">
	            		<a href="{{ route('questions') }}"><i class="fa fa-arrow-left"></i></a> &nbsp;
	            		List Questions
	            	</h3>
	            </div>
	            <div class="porlets-content">
	            	<table class="table table-hover table-bordered" id="dynamic-table">
	            		<tr>
	            			<th width="150">Date</th>
	            			<td>{!! !empty($questions->created_at) ? date('d F Y H:i:s', strtotime($questions->created_at)) : '-' !!}</td>
	            		</tr>
	            		<tr>
	            			<th>Fullname</th>
	            			<td>{{ !empty($questions->nama_depan) ? $questions->nama_depan : '-' }}</td>
	            		</tr>
	            		<tr>
	            			<th>Email</th>
	            			<td>{{ !empty($questions->email) ? $questions->email: '-' }}</td>
	            		</tr>
	            		<tr>
	            			<th>Contact</th>
	            			<td>{{ !empty($questions->no_hp) ? $questions->no_hp: '-' }}</td>
	            		</tr>
	            		<tr>
	            			<th>Message</th>
	            			<td>{{ !empty($questions->pesan) ? $questions->pesan: '-' }}</td>
	            		</tr>
	            	</table>
	            </div>
	        </div>
	    </div>
	</div>
@endsection