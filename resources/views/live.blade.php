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
          @if(isset($_GET['tahun_ajaran']))
           <div class="pull-right">
                <a href="/live" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
              </div>
          @endif
        </div>
        <div class="box-body">
        
        @if(!isset($_GET['tahun_ajaran']))
          <h4>Silahkan Masukan Tahun Ajaran</h4>
          <div class="row">
            <div class="col-md-4">
              <form action="/live_action" class="form-inline" method="GET">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="20xx/20xx" name="tahun_ajaran">
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary btn-flat">Submit</button>
                  </span>
                </div>
              </form>
                 @if($errors->has('tahun_ajaran'))
                  <small style="color:red">{{ $errors->first('tahun_ajaran')}}</small>
                @endif
            </div>
          </div>
        </div>
        @else
          <h4 class="text-center mb-5">Hasil Pengumutan Suara Calon Ketua Osis {{ $_GET['tahun_ajaran' ]}} </h4>
          <div class="row mt-5">
            <div class="col-md-6">
              <canvas id="myChart"></canvas>
            </div>
            <div class="col-md-6">
              <canvas id="myChartDonut"></canvas>
            </div>
          </div>

          @if(isset($_GET['tahun_ajaran']))
          <div class="row mt-5">
            <div class="col-md-12 text-center">
              <a href="/done/{{ $_GET['tahun_ajaran'] }}" class="btn btn-primary">Selesai</a>
            </div>
          </div>
        @endif


        @endif


      </div>
      <!-- /.box -->

    </section>

    <?php 

      $jessica = DB::table('data_pemilihan')->where('id_kandidat', 1)->get()->count();
      $bella   = DB::table('data_pemilihan')->where('id_kandidat', 14)->get()->count();
      $nezuko  = DB::table('data_pemilihan')->where('id_kandidat', 15)->get()->count();

     ?>

     <input type="hidden" class="bella" value="<?= $bella ?>">
     <input type="hidden" class="jessica" value="<?= $jessica ?>">
     <input type="hidden" class="nezuko" value="<?= $nezuko ?>">

@endsection