<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UsersModel;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UsersController extends Controller
{
    public function profile()
    {
    	$users = UsersModel::where('id', Auth::user()->id)->first();
    	return view('backend.users.profile', compact('users'));
    }

    public function save_profile(Request $request)
    {
    	try {

		  	$update = UsersModel::where('id', Auth::user()->id)->update([
	    		'name' => $request->input('name'),
	    		'email' => $request->input('email'),
	    	]);

		  	if ($update) {
		  		Alert::success('Success', 'Users berhasil di update');
		  	}else{
		  		Alert::error('Error', 'Gagal');
		  	}

		} catch (\Exception $e) {
			Alert::error('Error', $e->getMessage());
		}

    	return redirect(route('profile'));
    }

    public function change_password(Request $request)
    {
    	try {

		  	$update = UsersModel::where('id', Auth::user()->id)->update([
	    		'password' => Hash::make($request->input('password'))
	    	]);

		  	if ($update) {
		  		Alert::success('Success', 'Password berhasil di ubah');
		  	}else{
		  		Alert::error('Error', 'Gagal');
		  	}

		} catch (\Exception $e) {
			Alert::error('Error', $e->getMessage());
		}

    	return redirect(route('profile'));
    }
}
