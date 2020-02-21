@extends('layouts.app')


@section('content')

<section class="content-header">
      <h1>
        {{ $judul }}
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h4 class="box-title">{{ $judul }}</h4>

          <div class="pull-right">
	          <a href="/kandidat/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
          </div>

        </div>
        <div class="box-body">

          @if(Session::get('sukses'))
          <div class="alert alert-success alert-dismissible">
            <button class="close" data-dismiss="alert">
              &times;
            </button>
            <h4><i class="fa fa-check"></i> Berhasil</h4>
            <p>Data Berhasil {{ Session::get('sukses') }}</p>
          </div>
          @endif

          @if(Session::get('gagal'))
          <div class="alert alert-danger alert-dismissible">
            <button class="close" data-dismiss="alert">
              &times;
            </button>
            <h4><i class="fa fa-ban"></i> Gagal</h4>
            <p>{{ Session::get('gagal') }}</p>
          </div>
          @endif

        	<div class="row">
        		<div class="col-lg-12">
        			<div class="table-responsive w-100">
		        		<table class="table table-bordered table-striped table-hovered w-100">
		        			<thead>
		        				<tr>
                      <td>No Urut</td>
		        					<td>Nama kandidat</td>
                      <td>Kelas</td>
                      <td>Jurusan</td>
                      <td>Jk</td>
                      <td>Suara</td>
                      <td>Periode</td>
                      <td>Foto</td>
		        					<td><i class="fa fa-gears"></i></td>
		        				</tr>
		        			</thead>
		        			<tbody>
								
								<?php $i=1 ?>
		        				@foreach($kandidat as $row)
		        					<tr>
		        						<td>{{ $row->no_urut }}</td>
                        <td>{{ $row->nm_kandidat }}</td>
                        <td>{{ $row->kelas->nm_kelas}}</td>
                        <td>{{ $row->jurusan->nm_jurusan }}</td>
                        <td>
                          @if($row->jk == 'P')
                            Perempuan
                          @else
                            Laki-Laki
                          @endif
                        </td>
                        <td>{{ $row->jml_suara}}</td>
                        <td>{{ $row->tahun_ajaran}}</td>
                        <td><img src="{{ url('img/kandidat/' . $row->gambar) }}" alt="Foto Kandidat" width="50"></td>
		        						<td>
		        							<a href="/kandidat/edit/{{ $row->id_kandidat }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
		        							<a onclick="return confirm('Apakah anda yakin?')" href="/kandidat/destroy/{{ $row->id_kandidat }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
		        						</td>
		        					</tr>

		        				@endforeach
		        				
		        			</tbody>
		        		</table>
		        	</div>
        		</div>
        	</div>
	

        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
@endsection