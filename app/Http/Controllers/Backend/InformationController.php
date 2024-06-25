<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\InformationModel;
use App\Models\TeamModel;

class InformationController extends Controller
{
    public function homepage()
    {
        $banner1 = InformationModel::where('type_content', 7)->first();
        $banner2 = InformationModel::where('type_content', 8)->first();
        $banner3 = InformationModel::where('type_content', 9)->first();

        return view('backend.homepage.homepage', compact('banner1', 'banner2', 'banner3'));
    }

    public function save_homepage(Request $request, $type)
    {
        try {
            $create = $this->save_information($request, $type, 'upload/homepage');
            
            if ($create) {
                Alert::success('Success', 'Homepage berhasil di perbaharui');
            }else{
                Alert::error('Error', 'Gagal');
            }

        } catch (\Exception $e) {
            Alert::error('Error', $e->getMessage());
        }

        return redirect(route('homepage'));
    }

    public function about_us()
    {
    	$about_us = InformationModel::where('type_content', 1)->first();
    	return view('backend.information.about_us.about_us', compact('about_us'));
    }

    public function save_about_us(Request $request)
    {
    	try {
    		$create = $this->save_information($request, 1, 'upload/about-us');
    		
		  	if ($create) {
		  		Alert::success('Success', 'About Us berhasil di perbaharui');
		  	}else{
		  		Alert::error('Error', 'Gagal');
		  	}

		} catch (\Exception $e) {
			Alert::error('Error', $e->getMessage());
		}

    	return redirect(route('about'));
    }

    public function team()
    {
    	$team = TeamModel::get();
    	return view('backend.information.team.team', compact('team'));
    }

    public function create_team($id=NULL)
    {
    	$team = NULL;
    	if ($id != NULL) {
    		$team = TeamModel::where('id', $id)->first();
    	}
    	
    	return view('backend.information.team.create_team', compact('team'));
    }

    public function edit_team($id=NULL)
    {
    	$team = NULL;
    	if ($id != NULL) {
    		$team = TeamModel::where('id', $id)->first();
    	}
    	
    	return view('backend.information.team.create_team', compact('team'));
    }

    public function save_team(Request $request)
    {
    	$id = $request->input('id');

    	try {

    		$result = false;
    		if ($id == NULL) {
    			$team = new TeamModel;
    			$team->nama = $request->input('nama');
    			$team->jabatan = $request->input('jabatan');
    			$team->email = $request->input('email');
    			$team->no_hp1 = $request->input('no_hp1');
    			$team->no_hp2 = $request->input('no_hp2');
    			$team->alamat = $request->input('alamat');
    			$team->slug = Str::slug($request->input('nama'), '-');
                $team->quotes = $request->input('quotes');
    			$team->description = $request->input('description');
                $team->education = $request->input('education');
                $team->status = $request->input('status');
    			$team->link_fb = $request->input('link_fb');
    			$team->link_twitter = $request->input('link_twitter');
    			$team->link_ig = $request->input('link_ig');
    			$team->link_linkedin = $request->input('link_linkedin');
    			$team->link_google = $request->input('link_google');
    			
    			if($request->hasFile('image')){
    				$team->image = $this->upload_image_team($request, 'upload/team');
    			}

    			$result = $team->save();
    		}else{
    			$param['nama'] = $request->input('nama');
    			$param['jabatan'] = $request->input('jabatan');
    			$param['email'] = $request->input('email');
    			$param['no_hp1'] = $request->input('no_hp1');
    			$param['no_hp2'] = $request->input('no_hp2');
    			$param['alamat'] = $request->input('alamat');
    			$param['slug'] = Str::slug($request->input('nama'), '-');
                $param['quotes'] = $request->input('quotes');
    			$param['description'] = $request->input('description');
                $param['education'] = $request->input('education');
                $param['status'] = $request->input('status');
    			$param['link_fb'] = $request->input('link_fb');
    			$param['link_twitter'] = $request->input('link_twitter');
    			$param['link_ig'] = $request->input('link_ig');
    			$param['link_linkedin'] = $request->input('link_linkedin');
    			$param['link_google'] = $request->input('link_google');

    			if($request->hasFile('image')){
    				$param['image']  = $this->upload_image_team($request, 'upload/team');
    			}

    			$result = TeamModel::where('id', $id)->update($param);
    		}

		  	if ($result) {
		  		Alert::success('Success', 'Data Team berhasil di perbaharui');
		  	}else{
		  		Alert::error('Error', 'Gagal');
		  	}

		} catch (\Exception $e) {
			Alert::error('Error', $e->getMessage());
		}

    	return redirect(route('team'));
    }

    public function delete_team($id)
    {
    	$team = TeamModel::where('id', $id)->first();
    	if (!empty($team->image)) {
    		unlink(public_path('upload/team/'.$team->image));
    	}

    	$delete = TeamModel::where('id', $id)->delete();
    	if ($delete) {
    		Alert::success('Success', 'Data Team berhasil di hapus');
    	}else{
    		Alert::error('Error', 'Gagal');
    	}

    	return redirect(route('team'));
    }

    public function contact()
    {
    	$contact = InformationModel::where('type_content', 2)->first();
    	return view('backend.information.contact.contact', compact('contact'));
    }

    public function save_contact(Request $request)
    {
    	try {
    		$create = $this->save_information($request, 2, NULL);
    		
		  	if ($create) {
		  		Alert::success('Success', 'Contact berhasil di perbaharui');
		  	}else{
		  		Alert::error('Error', 'Gagal');
		  	}

		} catch (\Exception $e) {
			Alert::error('Error', $e->getMessage());
		}

    	return redirect(route('contact'));
    }

    public function social_media()
    {
    	$social_media = InformationModel::where('type_content', 3)->get();
    	return view('backend.information.social_media.social_media', compact('social_media'));
    }

    public function create_social_media($id=NULL)
    {
    	$social_media = NULL;
    	if ($id != NULL) {
    		$social_media = InformationModel::where('type_content', 3)->where('id', $id)->first();
    	}
    	
    	return view('backend.information.social_media.create_social_media', compact('social_media'));
    }

    public function edit_social_media($id=NULL)
    {
    	$social_media = NULL;
    	if ($id != NULL) {
    		$social_media = InformationModel::where('type_content', 3)->where('id', $id)->first();
    	}
    	
    	return view('backend.information.social_media.create_social_media', compact('social_media'));
    }

    public function save_social_media(Request $request)
    {
    	try {
    		$create = $this->save_information($request, 3, 'upload/social-media');
    		
		  	if ($create) {
		  		Alert::success('Success', 'Social media berhasil di perbaharui');
		  	}else{
		  		Alert::error('Error', 'Gagal');
		  	}

		} catch (\Exception $e) {
			Alert::error('Error', $e->getMessage());
		}

    	return redirect(route('social-media'));
    }

    public function delete_social_media($id)
    {
    	$social_media = InformationModel::where('type_content', 3)->where('id', $id)->first();
    	if (!empty($social_media->image)) {
    		unlink(public_path('upload/social-media/'.$social_media->image));
    	}

    	$delete = InformationModel::where('type_content', 3)->where('id', $id)->delete();
    	if ($delete) {
    		Alert::success('Success', 'Social media berhasil di hapus');
    	}else{
    		Alert::error('Error', 'Gagal');
    	}

    	return redirect(route('social-media'));
    }

    public function vision_mission()
    {
        $vision = InformationModel::where('type_content', 4)->first();
        $mission = InformationModel::where('type_content', 5)->first();
        return view('backend.information.vision_mission.vision_mission', compact('vision', 'mission'));
    }

    public function save_vision(Request $request)
    {
        try {
            $create_vision = $this->save_information($request, 4, 'upload/vision');
            
            if ($create_vision) {
                Alert::success('Success', 'Visi berhasil di perbaharui');
            }else{
                Alert::error('Error', 'Gagal');
            }

        } catch (\Exception $e) {
            Alert::error('Error', $e->getMessage());
        }

        return redirect(route('vision-mission'));
    }

    public function save_mission(Request $request)
    {
        try {
            $create_mission = $this->save_information($request, 5, 'upload/mission');
            
            if ($create_mission) {
                Alert::success('Success', 'Misi berhasil di perbaharui');
            }else{
                Alert::error('Error', 'Gagal');
            }

        } catch (\Exception $e) {
            Alert::error('Error', $e->getMessage());
        }

        return redirect(route('vision-mission'));
    }

    public function save_information($request, $type_content, $uploadPath=NULL)
    {
    	$id = $request->input('id');

    	$result = false;
    	if ($id == NULL) {
			$information = new InformationModel;
			$information->type_content = $type_content;
			$information->title = $request->input('title');
			$information->description = $request->input('description');
			$information->link = $request->input('link');
			$information->slug = Str::slug($request->input('title'), '-');
			$information->status = $request->input('status');
			$information->value1 = $request->input('value1');
			$information->value2 = $request->input('value2');
			$information->value3 = $request->input('value3');
			$information->value4 = $request->input('value4');
			$information->value5 = $request->input('value5');
			
			if($request->hasFile('image') && $uploadPath != NULL){
				$information->image = $this->upload_image($request, $type_content, $uploadPath);
			}

			$result = $information->save();
		}else{
			$param['title'] = $request->input('title');
			$param['description'] = $request->input('description');
			$param['link'] = $request->input('link');
			$param['slug'] = Str::slug($request->input('title'), '-');
			$param['status'] = $request->input('status');
			$param['value1'] = $request->input('value1');
			$param['value2'] = $request->input('value2');
			$param['value3'] = $request->input('value3');
			$param['value4'] = $request->input('value4');
			$param['value5'] = $request->input('value5');

			if($request->hasFile('image') && $uploadPath != NULL){
				$param['image']  = $this->upload_image($request, $type_content, $uploadPath);
			}

			$result = InformationModel::where('id', $id)->update($param);
		}

    	return $result;
    }

    public function upload_image($request, $type_content, $path)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:9000',
        ]);

        //delete image if exist in folder
        if ($request->input('id') != NULL) {
        	$check = InformationModel::where('id', $request->input('id'))->where('type_content', $type_content)->first();
        	if (!empty($check->image)) {
        		unlink(public_path($path.'/'.$check->image));
        	}
        }     

    	$imageName = time().'.'.$request->image->extension();  
        $upload = $request->image->move(public_path($path), $imageName);
        
        return $imageName;
    }

    public function upload_image_team($request, $path)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        //delete image if exist in folder
        if ($request->input('id') != NULL) {
        	$check = TeamModel::where('id', $request->input('id'))->first();
        	if (!empty($check->image)) {
        		unlink(public_path($path.'/'.$check->image));
        	}
        }     

    	$imageName = time().'.'.$request->image->extension();  
        $upload = $request->image->move(public_path($path), $imageName);
        
        return $imageName;
    }
}
