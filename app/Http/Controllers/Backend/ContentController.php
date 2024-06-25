<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\ContentModel;
use App\Models\ArtikelModel;
use App\Models\KategoriArtikelModel;
use App\Models\TeamModel;

class ContentController extends Controller
{
	public function slider()
    {
    	$slider = ContentModel::where('type_content', 1)->get();
    	return view('backend.content.slider.slider', compact('slider'));
    }

    public function create_slider($id=NULL)
    {
    	$slider = NULL;
    	if ($id != NULL) {
    		$slider = ContentModel::where('type_content', 1)->where('id', $id)->first();
    	}
    	
    	return view('backend.content.slider.create_slider', compact('slider'));
    }

    public function edit_slider($id=NULL)
    {
    	$slider = NULL;
    	if ($id != NULL) {
    		$slider = ContentModel::where('type_content', 1)->where('id', $id)->first();
    	}
    	
    	return view('backend.content.slider.create_slider', compact('slider'));
    }

    public function save_slider(Request $request)
    {
    	try {
    		$create = $this->save_content($request, 1, 'upload/slider');
    		
		  	if ($create) {
		  		Alert::success('Success', 'Slider berhasil di perbaharui');
		  	}else{
		  		Alert::error('Error', 'Gagal');
		  	}

		} catch (\Exception $e) {
			Alert::error('Error', $e->getMessage());
		}

    	return redirect(route('slider'));
    }

    public function delete_slider($id)
    {
    	$slider = ContentModel::where('type_content', 1)->where('id', $id)->first();
    	if (!empty($slider->image)) {
    		unlink(public_path('upload/slider/'.$slider->image));
    	}

    	$delete = ContentModel::where('type_content', 1)->where('id', $id)->delete();
    	if ($delete) {
    		Alert::success('Success', 'Slider berhasil di hapus');
    	}else{
    		Alert::error('Error', 'Gagal');
    	}

    	return redirect(route('slider'));
    }

    public function kategori_artikel()
    {
    	$kategori_artikel = KategoriArtikelModel::get();
    	return view('backend.content.artikel.kategori_artikel', compact('kategori_artikel'));
    }

    public function create_kategori_artikel($id=NULL)
    {
    	$kategori_artikel = NULL;
    	if ($id != NULL) {
    		$kategori_artikel = KategoriArtikelModel::where('id', $id)->first();
    	}
    	
    	return view('backend.content.artikel.create_kategori_artikel', compact('kategori_artikel'));
    }

    public function edit_kategori_artikel($id=NULL)
    {
    	$kategori_artikel = NULL;
    	if ($id != NULL) {
    		$kategori_artikel = KategoriArtikelModel::where('id', $id)->first();
    	}
    	
    	return view('backend.information.artikel.create_kategori_artikel', compact('kategori_artikel'));
    }

    public function save_kategori_artikel(Request $request)
    {
    	$id = $request->input('id');

    	try {

    		$result = false;
    		if ($id == NULL) {
    			$kategori_artikel = new KategoriArtikelModel;
    			$kategori_artikel->nama_kategori = $request->input('nama_kategori');
    			$kategori_artikel->slug = Str::slug($request->input('nama_kategori'), '-');
    			$kategori_artikel->status = $request->input('status');
    			
    			$result = $kategori_artikel->save();
    		}else{
    			$param['nama_kategori'] = $request->input('nama_kategori');
    			$param['slug'] = Str::slug($request->input('nama_kategori'), '-');
    			$param['status'] = $request->input('status');
    			
    			$result = KategoriArtikelModel::where('id', $id)->update($param);
    		}

		  	if ($result) {
		  		Alert::success('Success', 'Kategori Artikel berhasil di perbaharui');
		  	}else{
		  		Alert::error('Error', 'Gagal');
		  	}

		} catch (\Exception $e) {
			Alert::error('Error', $e->getMessage());
		}

    	return redirect(route('kategori-artikel'));
    }

    public function delete_kategori_artikel($id)
    {
    	$delete = KategoriArtikelModel::where('id', $id)->delete();
    	if ($delete) {
    		Alert::success('Success', 'Kategori Artikel berhasil di hapus');
    	}else{
    		Alert::error('Error', 'Gagal');
    	}

    	return redirect(route('kategori-artikel'));
    }

    public function artikel()
    {
    	$artikel = ArtikelModel::get();
    	return view('backend.content.artikel.artikel', compact('artikel'));
    }

    public function create_artikel($id=NULL)
    {
    	$artikel = NULL;
    	if ($id != NULL) {
    		$artikel = ArtikelModel::where('id', $id)->first();
    	}

    	$kategori_artikel = KategoriArtikelModel::where('status', 1)->get();
    	$team = TeamModel::where('status', 1)->get();

    	return view('backend.content.artikel.create_artikel', compact('artikel', 'kategori_artikel', 'team'));
    }

    public function edit_artikel($id=NULL)
    {
    	$artikel = NULL;
    	if ($id != NULL) {
    		$artikel = ArtikelModel::where('id', $id)->first();
    	}

    	$kategori_artikel = KategoriArtikelModel::where('status', 1)->get();
    	$team = TeamModel::where('status', 1)->get();

    	return view('backend.information.artikel.create_artikel', compact('artikel', 'kategori_artikel', 'team'));
    }

    public function save_artikel(Request $request)
    {
    	$id = $request->input('id');

    	try {

    		$result = false;
    		if ($id == NULL) {
    			$artikel = new ArtikelModel;
    			$artikel->category_article_id = $request->input('category_article_id');
    			$artikel->judul = $request->input('judul');
    			$artikel->deskripsi = $request->input('deskripsi');
    			$artikel->penulis = $request->input('penulis');
    			$artikel->slug = Str::slug($request->input('judul'), '-');
    			$artikel->link = $request->input('link');
    			$artikel->status = $request->input('status');
                $artikel->from = $request->input('from');
                $artikel->meta_title = $request->input('meta_title');
                $artikel->meta_description = $request->input('meta_description');
    			
    			if($request->hasFile('image')){
    				$artikel->image = $this->upload_image_artikel($request, 'upload/artikel');
    			}

    			$result = $artikel->save();
    		}else{
    			$param['category_article_id'] = $request->input('category_article_id');
    			$param['judul'] = $request->input('judul');
    			$param['deskripsi'] = $request->input('deskripsi');
    			$param['penulis'] = $request->input('penulis');
    			$param['slug'] = Str::slug($request->input('judul'), '-');
    			$param['link'] = $request->input('link');
    			$param['status'] = $request->input('status');
                $param['from'] = $request->input('from');
                $param['meta_title'] = $request->input('meta_title');
                $param['meta_description'] = $request->input('meta_description');
    			
    			if($request->hasFile('image')){
    				$param['image']  = $this->upload_image_artikel($request, 'upload/artikel');
    			}

    			$result = ArtikelModel::where('id', $id)->update($param);
    		}

		  	if ($result) {
		  		Alert::success('Success', 'Artikel berhasil di perbaharui');
		  	}else{
		  		Alert::error('Error', 'Gagal');
		  	}

		} catch (\Exception $e) {
			Alert::error('Error', $e->getMessage());
		}

    	return redirect(route('artikel'));
    }

    public function delete_artikel($id)
    {
    	$artikel = ArtikelModel::where('id', $id)->first();
    	if (!empty($artikel->image)) {
    		unlink(public_path('upload/artikel/'.$artikel->image));
    	}

    	$delete = ArtikelModel::where('id', $id)->delete();
    	if ($delete) {
    		Alert::success('Success', 'Artikel berhasil di hapus');
    	}else{
    		Alert::error('Error', 'Gagal');
    	}

    	return redirect(route('artikel'));
    }

    public function why_choose_us()
    {
        $why_choose_us = ContentModel::where('type_content', 8)->get();
        return view('backend.content.why_choose_us.why_choose_us', compact('why_choose_us'));
    }

    public function create_why_choose_us($id=NULL)
    {
        $why_choose_us = NULL;
        if ($id != NULL) {
            $why_choose_us = ContentModel::where('type_content', 8)->where('id', $id)->first();
        }
        
        return view('backend.content.why_choose_us.create_why_choose_us', compact('why_choose_us'));
    }

    public function edit_why_choose_us($id=NULL)
    {
        $why_choose_us = NULL;
        if ($id != NULL) {
            $why_choose_us = ContentModel::where('type_content', 8)->where('id', $id)->first();
        }
        
        return view('backend.content.why_choose_us.create_why_choose_us', compact('why_choose_us'));
    }

    public function save_why_choose_us(Request $request)
    {
        try {
            $create = $this->save_content($request, 8);
            
            if ($create) {
                Alert::success('Success', 'why_choose_us berhasil di perbaharui');
            }else{
                Alert::error('Error', 'Gagal');
            }

        } catch (\Exception $e) {
            Alert::error('Error', $e->getMessage());
        }

        return redirect(route('why-choose-us'));
    }

    public function delete_why_choose_us($id)
    {
        $delete = ContentModel::where('type_content', 8)->where('id', $id)->delete();
        if ($delete) {
            Alert::success('Success', 'why choose us berhasil di hapus');
        }else{
            Alert::error('Error', 'Gagal');
        }

        return redirect(route('why-choose-us'));
    }

    public function what_makes_us_uniq()
    {
        $what_makes_us_uniq = ContentModel::where('type_content', 9)->get();
        return view('backend.content.what_makes_us_uniq.what_makes_us_uniq', compact('what_makes_us_uniq'));
    }

    public function create_what_makes_us_uniq($id=NULL)
    {
        $what_makes_us_uniq = NULL;
        if ($id != NULL) {
            $what_makes_us_uniq = ContentModel::where('type_content', 9)->where('id', $id)->first();
        }
        
        return view('backend.content.what_makes_us_uniq.create_what_makes_us_uniq', compact('what_makes_us_uniq'));
    }

    public function edit_what_makes_us_uniq($id=NULL)
    {
        $what_makes_us_uniq = NULL;
        if ($id != NULL) {
            $what_makes_us_uniq = ContentModel::where('type_content', 9)->where('id', $id)->first();
        }
        
        return view('backend.content.what_makes_us_uniq.create_what_makes_us_uniq', compact('what_makes_us_uniq'));
    }

    public function save_what_makes_us_uniq(Request $request)
    {
        try {
            $create = $this->save_content($request, 9);
            
            if ($create) {
                Alert::success('Success', 'what makes us uniq berhasil di perbaharui');
            }else{
                Alert::error('Error', 'Gagal');
            }

        } catch (\Exception $e) {
            Alert::error('Error', $e->getMessage());
        }

        return redirect(route('what-makes-us-uniq'));
    }

    public function delete_what_makes_us_uniq($id)
    {
        $delete = ContentModel::where('type_content', 9)->where('id', $id)->delete();
        if ($delete) {
            Alert::success('Success', 'why choose us berhasil di hapus');
        }else{
            Alert::error('Error', 'Gagal');
        }

        return redirect(route('what-makes-us-uniq'));
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
			$content->value4 = $request->input('value4');
			$content->value5 = $request->input('value5');
			
			if($request->hasFile('image') && $uploadPath != NULL){
				$content->image = $this->upload_image($request, $type_content, $uploadPath);
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
			$param['value4'] = $request->input('value4');
			$param['value5'] = $request->input('value5');

			if($request->hasFile('image') && $uploadPath != NULL){
				$param['image']  = $this->upload_image($request, $type_content, $uploadPath);
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
        if ($request->input('id') != NULL) {
        	$check = ContentModel::where('id', $request->input('id'))->where('type_content', $type_content)->first();
        	if (!empty($check->image)) {
        		unlink(public_path($path.'/'.$check->image));
        	}
        }     

    	$imageName = time().'.'.$request->image->extension();  
        $upload = $request->image->move(public_path($path), $imageName);
        
        return $imageName;
    }

    public function upload_image_artikel($request, $path)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        //delete image if exist in folder
        if ($request->input('id') != NULL) {
        	$check = ArtikelModel::where('id', $request->input('id'))->first();
        	if (!empty($check->image)) {
        		unlink(public_path($path.'/'.$check->image));
        	}
        }     

    	$imageName = time().'.'.$request->image->extension();  
        $upload = $request->image->move(public_path($path), $imageName);
        
        return $imageName;
    }

    
}
