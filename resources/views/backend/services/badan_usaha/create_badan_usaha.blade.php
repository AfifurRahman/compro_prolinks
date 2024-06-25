@extends('layouts.app_admin')

@section('content')
<div class="row">
  <div class="col-md-10">
    <div class="block-web">
         <div class="header">
           <h3 class="content-header">
              <a href="{{ route('badan-usaha') }}"><i class="fa fa-arrow-left"></i></a> &nbsp;
              Form Badan Usaha
           </h3>
         </div>
         <div class="porlets-content">
            <form action="{{ route('save-badan-usaha') }}" method="POST" enctype="multipart/form-data" class="form-horizontal row-border">
                @csrf
                <div class="form-group lable-padd">
                    <label class="col-sm-3">Gambar/Icon</label>
                    <div class="col-sm-9">
                       @if(!empty($badan_usaha->image))
                       <img src="{{ url('upload/badan-usaha/'.$badan_usaha->image) }}" width="100" height="100" class="preview_image" id="preview_image" style="object-fit: cover;"><br><br>
                       @else
                       <img src="{{ url('backend/images/image_default.png') }}" width="100" height="100" class="preview_image" id="preview_image"><br><br>
                       @endif
                       <input type="file" name="image" id="image" class="upload">
                    </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Nama Services</label>
                  <div class="col-sm-9">
                     <input type="hidden" name="id" value="{{ !empty($badan_usaha->id) ? $badan_usaha->id : NULL }}">
                     <input required type="text" name="title" id="title" value="{{ !empty($badan_usaha->title) ? $badan_usaha->title : '' }}" placeholder="nama badan_usaha" class="form-control">
                  </div>
                </div>
                <div class="form-group lable-padd">
                  <label class="col-sm-3">Detail Services</label>
                  <div class="col-sm-9">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Deskripsi</th>
                            <th>LITE</th>
                            <th>FULL</th>
                            <th>FULL +</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                            $dtl = "";
                            if(!empty($badan_usaha->description)){
                              $dtl = json_decode($badan_usaha->description, TRUE);
                            }
                            
                          @endphp
                          <tr>
                            <td>IDR</td>
                            <td>
                              <input type="text" name="idr_lite" value="{{ !empty($dtl['IDR']['idr_lite']) ? $dtl['IDR']['idr_lite'] : 0 }}" class="form-control">
                            </td>
                            <td>
                              <input type="text" name="idr_full" value="{{ !empty($dtl['IDR']['idr_full']) ? $dtl['IDR']['idr_full'] : 0 }}" class="form-control">
                            </td>
                            <td>
                              <input type="text" name="idr_plus" value="{{ !empty($dtl['IDR']['idr_plus']) ? $dtl['IDR']['idr_plus'] : 0 }}" class="form-control">
                            </td>
                          </tr>
                          <tr>
                            <td>Konsultasi Gratis</td>
                            <td>
                              <select name="konsultasi_gratis_lite" class="form-control">
                                <option value="YA" {{ !empty($dtl['konsultasi_gratis']['konsultasi_gratis_lite']) && $dtl['konsultasi_gratis']['konsultasi_gratis_lite'] == 'YA' ? 'selected':'' }}>YA</option>
                                <option value="TIDAK" {{ !empty($dtl['konsultasi_gratis']['konsultasi_gratis_lite']) && $dtl['konsultasi_gratis']['konsultasi_gratis_lite'] == 'TIDAK' ? 'selected':'' }}>TIDAK</option>
                              </select>
                            </td>
                            <td>
                              <select name="konsultasi_gratis_full" class="form-control">
                                <option value="YA" {{ !empty($dtl['konsultasi_gratis']['konsultasi_gratis_full']) && $dtl['konsultasi_gratis']['konsultasi_gratis_full'] == 'YA' ? 'selected':'' }}>YA</option>
                                <option value="TIDAK" {{ !empty($dtl['konsultasi_gratis']['konsultasi_gratis_full']) && $dtl['konsultasi_gratis']['konsultasi_gratis_full'] == 'TIDAK' ? 'selected':'' }}>TIDAK</option>
                              </select>
                            </td>
                            <td>
                              <select name="konsultasi_gratis_plus" class="form-control">
                                <option value="YA" {{ !empty($dtl['konsultasi_gratis']['konsultasi_gratis_plus']) && $dtl['konsultasi_gratis']['konsultasi_gratis_plus'] == 'YA' ? 'selected':'' }}>YA</option>
                                <option value="TIDAK" {{ !empty($dtl['konsultasi_gratis']['konsultasi_gratis_plus']) && $dtl['konsultasi_gratis']['konsultasi_gratis_plus'] == 'TIDAK' ? 'selected':'' }}>TIDAK</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td>Akta Perusahaan</td>
                            <td>
                              <select name="akta_perusahaan_lite" class="form-control">
                                <option value="YA" {{ !empty($dtl['akta_perusahaan']['akta_perusahaan_lite']) && $dtl['akta_perusahaan']['akta_perusahaan_lite'] == 'YA' ? 'selected':'' }}>YA</option>
                                <option value="TIDAK" {{ !empty($dtl['akta_perusahaan']['akta_perusahaan_lite']) && $dtl['akta_perusahaan']['akta_perusahaan_lite'] == 'TIDAK' ? 'selected':'' }}>TIDAK</option>
                              </select>
                            </td>
                            <td>
                              <select name="akta_perusahaan_full" class="form-control">
                                <option value="YA" {{ !empty($dtl['akta_perusahaan']['akta_perusahaan_full']) && $dtl['akta_perusahaan']['akta_perusahaan_full'] == 'YA' ? 'selected':'' }}>YA</option>
                                <option value="TIDAK" {{ !empty($dtl['akta_perusahaan']['akta_perusahaan_full']) && $dtl['akta_perusahaan']['akta_perusahaan_full'] == 'TIDAK' ? 'selected':'' }}>TIDAK</option>
                              </select>
                            </td>
                            <td>
                              <select name="akta_perusahaan_plus" class="form-control">
                                <option value="YA" {{ !empty($dtl['akta_perusahaan']['akta_perusahaan_plus']) && $dtl['akta_perusahaan']['akta_perusahaan_plus'] == 'YA' ? 'selected':'' }}>YA</option>
                                <option value="TIDAK" {{ !empty($dtl['akta_perusahaan']['akta_perusahaan_plus']) && $dtl['akta_perusahaan']['akta_perusahaan_plus'] == 'TIDAK' ? 'selected':'' }}>TIDAK</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td>SK Menkuham</td>
                            <td>
                              <select name="sk_menkuham_lite" class="form-control">
                                <option value="YA" {{ !empty($dtl['sk_menkuham']['sk_menkuham_lite']) && $dtl['sk_menkuham']['sk_menkuham_lite'] == 'YA' ? 'selected':'' }}>YA</option>
                                <option value="TIDAK" {{ !empty($dtl['sk_menkuham']['sk_menkuham_lite']) && $dtl['sk_menkuham']['sk_menkuham_lite'] == 'TIDAK' ? 'selected':'' }}>TIDAK</option>
                              </select>
                            </td>
                            <td>
                              <select name="sk_menkuham_full" class="form-control">
                                <option value="YA" {{ !empty($dtl['sk_menkuham']['sk_menkuham_full']) && $dtl['sk_menkuham']['sk_menkuham_full'] == 'YA' ? 'selected':'' }}>YA</option>
                                <option value="TIDAK" {{ !empty($dtl['sk_menkuham']['sk_menkuham_full']) && $dtl['sk_menkuham']['sk_menkuham_full'] == 'TIDAK' ? 'selected':'' }}>TIDAK</option>
                              </select>
                            </td>
                            <td>
                              <select name="sk_menkuham_plus" class="form-control">
                                <option value="YA" {{ !empty($dtl['sk_menkuham']['sk_menkuham_plus']) && $dtl['sk_menkuham']['sk_menkuham_plus'] == 'YA' ? 'selected':'' }}>YA</option>
                                <option value="TIDAK" {{ !empty($dtl['sk_menkuham']['sk_menkuham_plus']) && $dtl['sk_menkuham']['sk_menkuham_plus'] == 'TIDAK' ? 'selected':'' }}>TIDAK</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td>NPWP & SKT</td>
                            <td>
                              <select name="npwp_skt_lite" class="form-control">
                                <option value="YA" {{ !empty($dtl['npwp_skt']['npwp_skt_lite']) && $dtl['npwp_skt']['npwp_skt_lite'] == 'YA' ? 'selected':'' }}>YA</option>
                                <option value="TIDAK" {{ !empty($dtl['npwp_skt']['npwp_skt_lite']) && $dtl['npwp_skt']['npwp_skt_lite'] == 'TIDAK' ? 'selected':'' }}>TIDAK</option>
                              </select>
                            </td>
                            <td>
                              <select name="npwp_skt_full" class="form-control">
                                <option value="YA" {{ !empty($dtl['npwp_skt']['npwp_skt_full']) && $dtl['npwp_skt']['npwp_skt_full'] == 'YA' ? 'selected':'' }}>YA</option>
                                <option value="TIDAK" {{ !empty($dtl['npwp_skt']['npwp_skt_full']) && $dtl['npwp_skt']['npwp_skt_full'] == 'TIDAK' ? 'selected':'' }}>TIDAK</option>
                              </select>
                            </td>
                            <td>
                              <select name="npwp_skt_plus" class="form-control">
                                <option value="YA" {{ !empty($dtl['npwp_skt']['npwp_skt_plus']) && $dtl['npwp_skt']['npwp_skt_plus'] == 'YA' ? 'selected':'' }}>YA</option>
                                <option value="TIDAK" {{ !empty($dtl['npwp_skt']['npwp_skt_plus']) && $dtl['npwp_skt']['npwp_skt_plus'] == 'TIDAK' ? 'selected':'' }}>TIDAK</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td>SIUP</td>
                            <td>
                              <select name="siup_lite" class="form-control">
                                <option value="YA" {{ !empty($dtl['siup']['siup_lite']) && $dtl['siup']['siup_lite'] == 'YA' ? 'selected':'' }}>YA</option>
                                <option value="TIDAK" {{ !empty($dtl['siup']['siup_lite']) && $dtl['siup']['siup_lite'] == 'TIDAK' ? 'selected':'' }}>TIDAK</option>
                              </select>
                            </td>
                            <td>
                              <select name="siup_full" class="form-control">
                                <option value="YA" {{ !empty($dtl['siup']['siup_full']) && $dtl['siup']['siup_full'] == 'YA' ? 'selected':'' }}>YA</option>
                                <option value="TIDAK" {{ !empty($dtl['siup']['siup_full']) && $dtl['siup']['siup_full'] == 'TIDAK' ? 'selected':'' }}>TIDAK</option>
                              </select>
                            </td>
                            <td>
                              <select name="siup_plus" class="form-control">
                                <option value="YA" {{ !empty($dtl['siup']['siup_plus']) && $dtl['siup']['siup_plus'] == 'YA' ? 'selected':'' }}>YA</option>
                                <option value="TIDAK" {{ !empty($dtl['siup']['siup_plus']) && $dtl['siup']['siup_plus'] == 'TIDAK' ? 'selected':'' }}>TIDAK</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td>NIB TDP & API</td>
                            <td>
                              <select name="nib_tdp_api_lite" class="form-control">
                                <option value="YA" {{ !empty($dtl['nib_tdp_api']['nib_tdp_api_lite']) && $dtl['nib_tdp_api']['nib_tdp_api_lite'] == 'YA' ? 'selected':'' }}>YA</option>
                                <option value="TIDAK" {{ !empty($dtl['nib_tdp_api']['nib_tdp_api_lite']) && $dtl['nib_tdp_api']['nib_tdp_api_lite'] == 'TIDAK' ? 'selected':'' }}>TIDAK</option>
                              </select>
                            </td>
                            <td>
                              <select name="nib_tdp_api_full" class="form-control">
                                <option value="YA" {{ !empty($dtl['nib_tdp_api']['nib_tdp_api_full']) && $dtl['nib_tdp_api']['nib_tdp_api_full'] == 'YA' ? 'selected':'' }}>YA</option>
                                <option value="TIDAK" {{ !empty($dtl['nib_tdp_api']['nib_tdp_api_full']) && $dtl['nib_tdp_api']['nib_tdp_api_full'] == 'TIDAK' ? 'selected':'' }}>TIDAK</option>
                              </select>
                            </td>
                            <td>
                              <select name="nib_tdp_api_plus" class="form-control">
                                <option value="YA" {{ !empty($dtl['nib_tdp_api']['nib_tdp_api_plus']) && $dtl['nib_tdp_api']['nib_tdp_api_plus'] == 'YA' ? 'selected':'' }}>YA</option>
                                <option value="TIDAK" {{ !empty($dtl['nib_tdp_api']['nib_tdp_api_plus']) && $dtl['nib_tdp_api']['nib_tdp_api_plus'] == 'TIDAK' ? 'selected':'' }}>TIDAK</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td>Virtual Office 1th</td>
                            <td>
                              <select name="virtual_office_lite" class="form-control">
                                <option value="YA" {{ !empty($dtl['virtual_office']['virtual_office_lite']) && $dtl['virtual_office']['virtual_office_lite'] == 'YA' ? 'selected':'' }}>YA</option>
                                <option value="TIDAK" {{ !empty($dtl['virtual_office']['virtual_office_lite']) && $dtl['virtual_office']['virtual_office_lite'] == 'TIDAK' ? 'selected':'' }}>TIDAK</option>
                              </select>
                            </td>
                            <td>
                              <select name="virtual_office_full" class="form-control">TIDAK
                                <option value="YA" {{ !empty($dtl['virtual_office']['virtual_office_full']) && $dtl['virtual_office']['virtual_office_full'] == 'YA' ? 'selected':'' }}>YA</option>
                                <option value="TIDAK" {{ !empty($dtl['virtual_office']['virtual_office_full']) && $dtl['virtual_office']['virtual_office_full'] == 'TIDAK' ? 'selected':'' }}>TIDAK</option>
                              </select>
                            </td>
                            <td>
                              <select name="virtual_office_plus" class="form-control">
                                <option value="YA" {{ !empty($dtl['virtual_office']['virtual_office_plus']) && $dtl['virtual_office']['virtual_office_plus'] == 'YA' ? 'selected':'' }}>YA</option>
                                <option value="TIDAK" {{ !empty($dtl['virtual_office']['virtual_office_plus']) && $dtl['virtual_office']['virtual_office_plus'] == 'TIDAK' ? 'selected':'' }}>TIDAK</option>
                              </select>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
                
                <div class="form-group lable-padd">
                    <label class="col-sm-3">Status</label>
                    <div class="col-sm-9">
                        <select required class="form-control" name="status" id="status">
                          <option value="">-- status --</option>
                          <option value="1" {{ !empty($badan_usaha->status) && $badan_usaha->status == 1 ? 'selected': '' }}>Aktif</option>
                          <option value="0" {{ !empty($badan_usaha->status) && $badan_usaha->status == 0 ? 'selected': '' }}>Non Aktif</option>
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