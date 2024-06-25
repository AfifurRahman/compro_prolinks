<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\ContentModel;

class ServicesController extends Controller
{
	public function accounting_services()
    {
    	$accounting_services = ContentModel::where('type_content', 4)->get();
    	return view('backend.services.accounting_services.accounting_services', compact('accounting_services'));
    }

    public function create_accounting_services($id=NULL)
    {
    	$accounting_services = NULL;
    	if ($id != NULL) {
    		$accounting_services = ContentModel::where('type_content', 4)->where('id', $id)->first();
    	}
    	
    	return view('backend.services.accounting_services.create_accounting_services', compact('accounting_services'));
    }

    public function edit_accounting_services($id=NULL)
    {
    	$accounting_services = NULL;
    	if ($id != NULL) {
    		$accounting_services = ContentModel::where('type_content', 4)->where('id', $id)->first();
    	}
    	
    	return view('backend.services.accounting_services.create_accounting_services', compact('accounting_services'));
    }

    public function save_accounting_services(Request $request)
    {
    	try {
    		$create = $this->save_content($request, 4, 'upload/accounting-services');
    		
		  	if ($create) {
		  		Alert::success('Success', 'Accounting Service berhasil di perbaharui');
		  	}else{
		  		Alert::error('Error', 'Gagal');
		  	}

		} catch (\Exception $e) {
			Alert::error('Error', $e->getMessage());
		}

    	return redirect(route('accounting-services'));
    }

    public function delete_accounting_services($id)
    {
    	$accounting_services = ContentModel::where('type_content', 4)->where('id', $id)->first();
    	if (!empty($accounting_services->image)) {
    		unlink(public_path('upload/accounting-services/'.$accounting_services->image));
    	}

    	$delete = ContentModel::where('type_content', 4)->where('id', $id)->delete();
    	if ($delete) {
    		Alert::success('Success', 'Accounting Service berhasil di hapus');
    	}else{
    		Alert::error('Error', 'Gagal');
    	}

    	return redirect(route('accounting-services'));
    }

    public function tax_services()
    {
    	$tax_services = ContentModel::where('type_content', 5)->get();
    	return view('backend.services.tax_services.tax_services', compact('tax_services'));
    }

    public function create_tax_services($id=NULL)
    {
    	$tax_services = NULL;
    	if ($id != NULL) {
    		$tax_services = ContentModel::where('type_content', 5)->where('id', $id)->first();
    	}
    	
    	return view('backend.services.tax_services.create_tax_services', compact('tax_services'));
    }

    public function edit_tax_services($id=NULL)
    {
    	$tax_services = NULL;
    	if ($id != NULL) {
    		$tax_services = ContentModel::where('type_content', 5)->where('id', $id)->first();
    	}
    	
    	return view('backend.services.tax_services.create_tax_services', compact('tax_services'));
    }

    public function save_tax_services(Request $request)
    {
    	try {
    		$create = $this->save_content($request, 5, 'upload/tax-services');
    		
		  	if ($create) {
		  		Alert::success('Success', 'Tax Services berhasil di perbaharui');
		  	}else{
		  		Alert::error('Error', 'Gagal');
		  	}

		} catch (\Exception $e) {
			Alert::error('Error', $e->getMessage());
		}

    	return redirect(route('tax-services'));
    }

    public function delete_tax_services($id)
    {
    	$tax_services = ContentModel::where('type_content', 5)->where('id', $id)->first();
    	if (!empty($tax_services->image)) {
    		unlink(public_path('upload/tax-services/'.$tax_services->image));
    	}

    	$delete = ContentModel::where('type_content', 5)->where('id', $id)->delete();
    	if ($delete) {
    		Alert::success('Success', 'Tax Services berhasil di hapus');
    	}else{
    		Alert::error('Error', 'Gagal');
    	}

    	return redirect(route('tax-services'));
    }

    public function finance_services()
    {
    	$finance_services = ContentModel::where('type_content', 6)->get();
    	return view('backend.services.finance_services.finance_services', compact('finance_services'));
    }

    public function create_finance_services($id=NULL)
    {
    	$finance_services = NULL;
    	if ($id != NULL) {
    		$finance_services = ContentModel::where('type_content', 6)->where('id', $id)->first();
    	}
    	
    	return view('backend.services.finance_services.create_finance_services', compact('finance_services'));
    }

    public function edit_finance_services($id=NULL)
    {
    	$finance_services = NULL;
    	if ($id != NULL) {
    		$finance_services = ContentModel::where('type_content', 6)->where('id', $id)->first();
    	}
    	
    	return view('backend.services.finance_services.create_finance_services', compact('finance_services'));
    }

    public function save_finance_services(Request $request)
    {
    	try {
    		$create = $this->save_content($request, 6, 'upload/finance-services');
    		
		  	if ($create) {
		  		Alert::success('Success', 'Finance Services berhasil di perbaharui');
		  	}else{
		  		Alert::error('Error', 'Gagal');
		  	}

		} catch (\Exception $e) {
			Alert::error('Error', $e->getMessage());
		}

    	return redirect(route('finance-services'));
    }

    public function delete_finance_services($id)
    {
    	$finance_services = ContentModel::where('type_content', 6)->where('id', $id)->first();
    	if (!empty($finance_services->image)) {
    		unlink(public_path('upload/finance-services/'.$finance_services->image));
    	}

    	$delete = ContentModel::where('type_content', 6)->where('id', $id)->delete();
    	if ($delete) {
    		Alert::success('Success', 'Finance Services berhasil di hapus');
    	}else{
    		Alert::error('Error', 'Gagal');
    	}

    	return redirect(route('finance-services'));
    }

    public function badan_usaha()
    {
    	$badan_usaha = ContentModel::where('type_content', 7)->get();
    	return view('backend.services.badan_usaha.badan_usaha', compact('badan_usaha'));
    }

    public function create_badan_usaha($id=NULL)
    {
    	$badan_usaha = NULL;
    	if ($id != NULL) {
    		$badan_usaha = ContentModel::where('type_content', 7)->where('id', $id)->first();
    	}
    	
    	return view('backend.services.badan_usaha.create_badan_usaha', compact('badan_usaha'));
    }

    public function edit_badan_usaha($id=NULL)
    {
    	$badan_usaha = NULL;
    	if ($id != NULL) {
    		$badan_usaha = ContentModel::where('type_content', 7)->where('id', $id)->first();
    	}
    	
    	return view('backend.services.badan_usaha.create_badan_usaha', compact('badan_usaha'));
    }

    public function save_badan_usaha(Request $request)
    {
        $id = $request->input('id');

    	try {
            $array = array(
                'IDR' => array(
                    'idr_lite' => $request->input('idr_lite'),
                    'idr_full' => $request->input('idr_full'),
                    'idr_plus' => $request->input('idr_plus'),
                ),
                'konsultasi_gratis' => array(
                    'konsultasi_gratis_lite' => $request->input('konsultasi_gratis_lite'),
                    'konsultasi_gratis_full' => $request->input('konsultasi_gratis_full'),
                    'konsultasi_gratis_plus' => $request->input('konsultasi_gratis_plus'),
                ),
                'akta_perusahaan' => array(
                    'akta_perusahaan_lite' => $request->input('akta_perusahaan_lite'),
                    'akta_perusahaan_full' => $request->input('akta_perusahaan_full'),
                    'akta_perusahaan_plus' => $request->input('akta_perusahaan_plus'),
                ),
                'sk_menkuham' => array(
                    'sk_menkuham_lite' => $request->input('sk_menkuham_lite'),
                    'sk_menkuham_full' => $request->input('sk_menkuham_full'),
                    'sk_menkuham_plus' => $request->input('sk_menkuham_plus'),
                ),
                'npwp_skt' => array(
                    'npwp_skt_lite' => $request->input('npwp_skt_lite'),
                    'npwp_skt_full' => $request->input('npwp_skt_full'),
                    'npwp_skt_plus' => $request->input('npwp_skt_plus'),
                ),
                'siup' => array(
                    'siup_lite' => $request->input('siup_lite'),
                    'siup_full' => $request->input('siup_full'),
                    'siup_plus' => $request->input('siup_plus'),
                ),
                'nib_tdp_api' => array(
                    'nib_tdp_api_lite' => $request->input('nib_tdp_api_lite'),
                    'nib_tdp_api_full' => $request->input('nib_tdp_api_full'),
                    'nib_tdp_api_plus' => $request->input('nib_tdp_api_plus'),
                ),
                'virtual_office' => array(
                    'virtual_office_lite' => $request->input('virtual_office_lite'),
                    'virtual_office_full' => $request->input('virtual_office_full'),
                    'virtual_office_plus' => $request->input('virtual_office_plus'),
                ),
            );

            if ($id == NULL) {
                $content = new ContentModel;
                $content->type_content = 7;
                $content->title = $request->input('title');
                $content->description = json_encode($array);
                $content->link = $request->input('link');
                $content->slug = Str::slug($request->input('title'), '-');
                $content->status = $request->input('status');
                $content->value1 = $request->input('value1');
                $content->value2 = $request->input('value2');
                $content->value3 = $request->input('value3');
                $content->value4 = $request->input('value4');
                $content->value5 = $request->input('value5');
                
                if($request->hasFile('image') && $uploadPath != NULL){
                    $content->image = $this->upload_image($request, 7, $uploadPath);
                }

                $create = $content->save();
            }else{
                $param['title'] = $request->input('title');
                $param['description'] = json_encode($array);
                $param['link'] = $request->input('link');
                $param['slug'] = Str::slug($request->input('title'), '-');
                $param['status'] = $request->input('status');
                $param['value1'] = $request->input('value1');
                $param['value2'] = $request->input('value2');
                $param['value3'] = $request->input('value3');
                $param['value4'] = $request->input('value4');
                $param['value5'] = $request->input('value5');

                if($request->hasFile('image') && $uploadPath != NULL){
                    $param['image']  = $this->upload_image($request, 7, $uploadPath);
                }

                $create = ContentModel::where('id', $id)->update($param);
            }
    		
		  	if ($create) {
		  		Alert::success('Success', 'Badan Usaha berhasil di perbaharui');
		  	}else{
		  		Alert::error('Error', 'Gagal');
		  	}

		} catch (\Exception $e) {
			Alert::error('Error', $e->getMessage());
		}

    	return redirect(route('badan-usaha'));
    }

    public function delete_badan_usaha($id)
    {
    	$badan_usaha = ContentModel::where('type_content', 7)->where('id', $id)->first();
    	if (!empty($badan_usaha->image)) {
    		unlink(public_path('upload/badan-usaha/'.$badan_usaha->image));
    	}

    	$delete = ContentModel::where('type_content', 7)->where('id', $id)->delete();
    	if ($delete) {
    		Alert::success('Success', 'Badan Usaha berhasil di hapus');
    	}else{
    		Alert::error('Error', 'Gagal');
    	}

    	return redirect(route('badan-usaha'));
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
}
