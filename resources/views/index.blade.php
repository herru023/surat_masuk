@extends('layouts.dashboardindex')
@section('viewindex')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ route('index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="{{ route('indexjcamat') }}"> <i class="icon-pencil"></i> Agenda Camat</a> </li>
        <li class="bg_ly"> <a href="{{ route('suratmasuk') }}"> <i class="icon-pencil"></i> Surat Masuk </a> </li>
        <li class="bg_lh"> <a href="{{ route('suratkeluar') }}"> <i class="icon-pencil"></i> Surat Keluar </a> </li>
        <li class="bg_lo"> <a href="{{ route('cutitahunan') }}"> <i class="icon-pencil"></i> Cuti Tahunan</a> </li>
        <li class="bg_lg"> <a href="{{ route('suratimb') }}"> <i class="icon-pencil"></i> Surat IMB</a> </li>
        <li class="bg_ls"> <a href="{{ route('rekap') }}"> <i class="icon-inbox"></i> Laporan</a> </li>  
<!--         <li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i> Full width</a> </li>
        <li class="bg_lo span3"> <a href="form-common.html"> <i class="icon-th-list"></i> Forms</a> </li>
        <li class="bg_ls"> <a href="buttons.html"> <i class="icon-tint"></i> Buttons</a> </li>
        <li class="bg_lb"> <a href="interface.html"> <i class="icon-pencil"></i>Elements</a> </li>
        <li class="bg_lg"> <a href="calendar.html"> <i class="icon-calendar"></i> Calendar</a> </li>
        <li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> Error</a> </li> -->
      </ul>
    </div>
    <hr>
      <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-bookmark"></i></span>
          <h5>Home</h5>
        </div>
        <div class="widget-content">
          <h3 style="text-align: center;">Kecamatan Banjarmasin Tengah</h3>

          <p style="text-align: center;">Banjarmasin Tengah adalah salah satu kecamatan di Kota Banjarmasin, Provinsi Kalimantan Selatan, Indonesia. Banjarmasin Tengah merupakan kecamatan termuda di kota Banjarmasin, yang wilayahnya dibentuk dari penggabungan beberapa kelurahan yang yang berasal dari kecamatan Banjar Barat dan Banjar Timur. 
          </p>
          <hr>
          <img src="{{asset('publicadmin/img/new/img2.gif')}}" alt="demo-image"  class="tangah">
        </div>
      </div>

  </div>
</div>


@endsection