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
	          <a href="/jurusan/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
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
        			<div class="table-responsive">
		        		<table class="table table-bordered table-striped table-hovered">
		        			<thead>
		        				<tr>
		        					<td>No</td>
		        					<td>Nama Jurusan</td>
		        					<td><i class="fa fa-gears"></i></td>
		        				</tr>
		        			</thead>
		        			<tbody>
								
								<?php $i=1 ?>
		        				@foreach($jurusan as $row)
		        					<tr>
		        						<td>{{ $i++ }}</td>
		        						<td>{{ $row->nm_jurusan }}</td>
		        						<td>
		        							<a href="/jurusan/edit/{{ $row->id_jurusan }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
		        							<a href="/jurusan/destroy/{{ $row->id_jurusan }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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