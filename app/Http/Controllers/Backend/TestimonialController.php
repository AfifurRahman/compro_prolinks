<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\TestimonialModel;

class TestimonialController extends Controller
{
    public function testimonial()
    {
    	$testimonial = TestimonialModel::get();
    	return view('backend.testimonial.testimonial', compact('testimonial'));
    }

    public function create_testimonial($id=NULL)
    {
    	$testimonial = NULL;
    	if ($id != NULL) {
    		$testimonial = TestimonialModel::where('id', $id)->first();
    	}
    	
    	return view('backend.testimonial.create_testimonial', compact('testimonial'));
    }

    public function edit_testimonial($id=NULL)
    {
    	$testimonial = NULL;
    	if ($id != NULL) {
    		$testimonial = TestimonialModel::where('id', $id)->first();
    	}
    	
    	return view('backend.testimonial.create_testimonial', compact('testimonial'));
    }

    public function save_testimonial(Request $request)
    {
    	$id = $request->input('id');

    	try {

    		$result = false;
    		if ($id == NULL) {
    			$testimonial = new TestimonialModel;
    			$testimonial->nama = $request->input('nama');
    			$testimonial->jabatan = $request->input('jabatan');
    			$testimonial->deskripsi = $request->input('deskripsi');
    			$testimonial->link = $request->input('link');
    			$testimonial->slug = Str::slug($request->input('nama'), '-');
    			$testimonial->status = $request->input('status');

    			if($request->hasFile('image')){
    				$testimonial->image = $this->upload_image($request, 'upload/testimonial');
    			}
    			
    			$result = $testimonial->save();
    		}else{
    			$param['nama'] = $request->input('nama');
    			$param['jabatan'] = $request->input('jabatan');
    			$param['deskripsi'] = $request->input('deskripsi');
    			$param['link'] = $request->input('link');
    			$param['slug'] = Str::slug($request->input('nama'), '-');
    			$param['status'] = $request->input('status');

    			if($request->hasFile('image')){
    				$param['image']  = $this->upload_image($request, 'upload/testimonial');
    			}
    			
    			$result = TestimonialModel::where('id', $id)->update($param);
    		}

		  	if ($result) {
		  		Alert::success('Success', 'Testimonial berhasil di perbaharui');
		  	}else{
		  		Alert::error('Error', 'Gagal');
		  	}

		} catch (\Exception $e) {
			Alert::error('Error', $e->getMessage());
		}

    	return redirect(route('testimonial'));
    }

    public function delete_testimonial($id)
    {
    	$testimonial = TestimonialModel::where('id', $id)->first();
    	if (!empty($testimonial->image)) {
    		unlink(public_path('upload/testimonial/'.$testimonial->image));
    	}

    	$delete = TestimonialModel::where('id', $id)->delete();
    	if ($delete) {
    		Alert::success('Success', 'Testimonial berhasil di hapus');
    	}else{
    		Alert::error('Error', 'Gagal');
    	}

    	return redirect(route('testimonial'));
    }

    public function upload_image($request, $path)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        //delete image if exist in folder
        if ($request->input('id') != NULL) {
        	$check = TestimonialModel::where('id', $request->input('id'))->first();
        	if (!empty($check->image)) {
        		unlink(public_path($path.'/'.$check->image));
        	}
        }     

    	$imageName = time().'.'.$request->image->extension();  
        $upload = $request->image->move(public_path($path), $imageName);
        
        return $imageName;
    }
}
