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
          <h3 class="box-title">{{ $judul }}</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-3">
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{ $jml_jurusan }}</h3>

                  <p>Jumlah Jurusan</p>
                </div>
                <div class="icon">
                  <i class="fa fa-university"></i>
                </div>
                <a href="/jurusan" class="small-box-footer">
                  Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>{{ $jml_kelas }}</h3>

                  <p>Jumlah Kelas</p>
                </div>
                <div class="icon">
                  <i class="fa fa-server"></i>
                </div>
                <a href="/kelas" class="small-box-footer">
                  Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{{ $jml_kandidat }}</h3>

                  <p>Jumlah Kandidat</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <a href="/kandidat" class="small-box-footer">
                  Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>{{ $jml_pemilih }}</h3>

                  <p>Jumlah Pemilih</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="/pemilih" class="small-box-footer">
                  Selengkapnya <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box -->

    </section>
@endsection