@extends('layouts.app_admin')

@section('content')
<div class="row">
  <div class="col-sm-3 col-sm-6">
    <div class="information green_info">   
      <div class="information_inner">
        <div class="info green_symbols"><i class="fa fa-edit icon"></i></div>
        <span>TOTAL ARTICLE </span>
        <h1 class="bolded">{{ $total_article }}</h1>
        <div class="infoprogress_green">
          <div class="greenprogress"></div>
        </div>
        <div class="pull-right" id="work-progress1">
          <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-3 col-sm-6">
    <div class="information blue_info">
      <div class="information_inner">
      <div class="info blue_symbols"><i class="fa fa-comments icon"></i></div>
        <span>TOTAL QUESTIONS</span>
        <h1 class="bolded">{{ $total_questions }}</h1>
        <div class="infoprogress_blue">
          <div class="blueprogress"></div>
        </div>
        <div class="pull-right" id="work-progress2">
          <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-3 col-sm-6">
    <div class="information red_info">
      <div class="information_inner">
      <div class="info red_symbols"><i class="fa fa-users icon"></i></div>
        <span>TOTAL TEAM</span>
        <h1 class="bolded">{{ $total_team }}</h1>
        <div class="infoprogress_red">
          <div class="redprogress"></div>
        </div>
        <div class="pull-right" id="work-progress3">
          <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-3 col-sm-6">
   <div class="information gray_info">
      <div class="information_inner">
      <div class="info gray_symbols"><i class="fa fa-cog icon"></i></div>
        <span>TOTAL SERVICES </span>
        <h1 class="bolded">{{ $total_services }}</h1>
        <div class="infoprogress_gray">
          <div class="grayprogress"></div>
        </div>
        <div class="pull-right" id="work-progress4">
          <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-lg-6">
      <section class="panel green_border horizontal_border_2">
        <div class="block-web">
          <div class="header">
            <div class="actions"> <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a> <a href="#" class="refresh"><i class="fa fa-repeat"></i></a> <a href="#" class="close-down"><i class="fa fa-times"></i></a> </div>
            <h3>Log User</h3>
          </div>
          <div class="porlets-content">
            <table class="table table-bordered">
                <tr>
                    <th width="100">Nama</th>
                    <td>{{ Auth::user()->name }}</td>
                </tr>
                <tr>
                    <th>IP Address</th>
                    <td>{{ $_SERVER[ 'REMOTE_ADDR' ] }}</td>
                </tr>
                <tr>
                    <th>Browser</th>
                    <td>{{ $_SERVER['HTTP_USER_AGENT'] }}</td>
                </tr>
            </table>
          </div>
        </div>
      </section>
    </div>
</div>
@endsection
