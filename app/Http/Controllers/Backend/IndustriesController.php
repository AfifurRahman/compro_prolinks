<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\ContentModel;

class IndustriesController extends Controller
{
	public function industries()
    {
    	$industries = ContentModel::where('type_content', 2)->get();
    	return view('backend.industries.industries', compact('industries'));
    }

    public function create_industries($id=NULL)
    {
    	$industries = NULL;
    	if ($id != NULL) {
    		$industries = ContentModel::where('type_content', 2)->where('id', $id)->first();
    	}
    	
    	return view('backend.industries.create_industries', compact('industries'));
    }

    public function edit_industries($id=NULL)
    {
    	$industries = NULL;
    	if ($id != NULL) {
    		$industries = ContentModel::where('type_content', 2)->where('id', $id)->first();
    	}
    	
    	return view('backend.industries.create_industries', compact('industries'));
    }

    public function save_industries(Request $request)
    {
    	try {
    		$create = $this->save_content($request, 2, 'upload/industries');
    		
		  	if ($create) {
		  		Alert::success('Success', 'Industries berhasil di perbaharui');
		  	}else{
		  		Alert::error('Error', 'Gagal');
		  	}

		} catch (\Exception $e) {
			Alert::error('Error', $e->getMessage());
		}

    	return redirect(route('industries'));
    }

    public function save_content($request, $type_content, $uploadPath=NULL)
    {
    	$id = $request->input('id');

    	$result = false;
    	if ($id == NULL) {
			$content = new ContentModel;
			$content->type_content = $type_content;
			$content->title = $request->input('title');
			$content->description = $request->input('description');
			$content->link = $request->input('link');
			$content->slug = Str::slug($request->input('title'), '-');
			$content->status = $request->input('status');
			$content->value1 = $request->input('value1');
			$content->value2 = $request->input('value2');
			$content->value3 = $request->input('value3');
			
			if($request->hasFile('image') && $uploadPath != NULL){
				$content->image = $this->upload_image($request, $type_content, $uploadPath);
			}

			if($request->hasFile('value5') && $uploadPath != NULL){
				$content->value5 = $this->upload_document($request, $type_content, $uploadPath);
			}

			if($request->hasFile('value4') && $uploadPath != NULL){
				$content->value4 = $this->upload_icon($request, $type_content, $uploadPath);
			}

			$result = $content->save();
		}else{
			$param['title'] = $request->input('title');
			$param['description'] = $request->input('description');
			$param['link'] = $request->input('link');
			$param['slug'] = Str::slug($request->input('title'), '-');
			$param['status'] = $request->input('status');
			$param['value1'] = $request->input('value1');
			$param['value2'] = $request->input('value2');
			$param['value3'] = $request->input('value3');
			
			if($request->hasFile('image') && $uploadPath != NULL){
				$param['image']  = $this->upload_image($request, $type_content, $uploadPath);
			}

			if($request->hasFile('value5') && $uploadPath != NULL){
				$param['value5']  = $this->upload_document($request, $type_content, $uploadPath);
			}

			if($request->hasFile('value4') && $uploadPath != NULL){
				$param['value4']  = $this->upload_icon($request, $type_content, $uploadPath);
			}

			$result = ContentModel::where('id', $id)->update($param);
		}

    	return $result;
    }

    public function upload_image($request, $type_content, $path)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        //delete image if exist in folder
        // if ($request->input('id') != NULL) {
        // 	$check = ContentModel::where('id', $request->input('id'))->where('type_content', $type_content)->first();
        // 	if (!empty($check->image)) {
        // 		unlink(public_path($path.'/'.$check->image));
        // 	}
        // }     

    	$imageName = time().'.'.$request->image->extension();  
        $upload = $request->image->move(public_path($path), $imageName);
        
        return $imageName;
    }

    public function upload_document($request, $type_content, $path)
    {
        $request->validate([
            'value5' => 'required|mimes:pdf',
        ]);

        //delete value5 if exist in folder
        if ($request->input('id') != NULL) {
        	$check = ContentModel::where('id', $request->input('id'))->where('type_content', $type_content)->first();
        	if (!empty($check->value5)) {
        		unlink(public_path($path.'/'.$check->value5));
        	}
        }     

    	$imageName = time().'.'.$request->value5->extension();  
        $upload = $request->value5->move(public_path($path), $imageName);
        
        return $imageName;
    }

    public function upload_icon($request, $type_content, $path)
    {
        $request->validate([
            'value4' => 'required|image|mimes:jpeg,png,jpg,svg',
        ]);

        //delete value4 if exist in folder
        if ($request->input('id') != NULL) {
        	$check = ContentModel::where('id', $request->input('id'))->where('type_content', $type_content)->first();
        	if (!empty($check->value4)) {
        		unlink(public_path($path.'/'.$check->value4));
        	}
        }     

    	$imageName = time().'.'.$request->value4->extension();  
        $upload = $request->value4->move(public_path($path), $imageName);
        
        return $imageName;
    }
}