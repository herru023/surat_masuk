@extends('layouts.dashboardindex')
@section('viewindex')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ route('index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="{{ route('rekap') }}" class="tip-bottom">Rekap</a> <a href="{{ route('indexjcamat') }}" class="tip-bottom">Jadwal Camat</a> </div>
    <h1>Jadwal Camat</h1>
  </div>


  <div class="container-fluid"><hr>

  <div class="btn-group">
    <button class="btn btn-info">Aksi</button>
    <button data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="{{ route('agendacamat') }}"><i class="icon icon-plus"></i> Tambah Jadwal</a></li>
      <li><a href="{{ route('printcamat') }}" target="_blank"><i class="icon icon-print"></i> Print</a></li>
    </ul>
  </div>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Jadwal Camat</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Hari, Waktu dan Tanggal</th>
                  <th>Kegiatan</th>
                  <th>Tempat</th>
                  <th>bertugas</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              	<?php $no = 0;?>
              	@foreach($agenda2 as $row)
              	<?php $no++;?>
              	 <tr>
              	 	<td>{{ $no }}</td>
              	 	<td>{{ $row->hari }}, {{ $row->waktu }}, {{ $row->tglkegiatan }}</td>
              	 	<td>{{ $row->kegiatan }}</td>
              	 	<td>{{ $row->tempat }}</td>
              	 	<td>{{ $row->bertugas }}</td>
              	 	<td class="taskOptions">
                    <a href="{{ route('editcamat', $row->id) }}" style="float: left;" class="btn btn-primary btn-mini"><i class="icon icon-edit"></i> Edit</a>
                    <form action="{{ route('deletecamat', $row->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button style="float: left" class="btn btn-danger btn-mini" type="submit" onclick="return confirm('Anda yakin ingin menghapus?')"><i class="icon icon-remove"></i> Hapus</button>
                    </form> 
                  </td>
              	 </tr>
              	 @endforeach
              </tbody>
            </table>
          </div>	     
        </div>
      </div>
    </div>
  </div>

</div>




@endsection