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
          <h3 class="box-title">{{ $judul }} Periode {{ $tahun_ajaran }}</h3>
          <div class="pull-right">
                <a href="/live_action?tahun_ajaran={{$tahun_ajaran}}" class="btn btn-primary d-print-none"><i class="fa fa-arrow-left"></i> Kembali</a>
              </div>
        </div>
        <div class="box-body">
          <div class="row">

            @foreach($result as $row)
            <div class="col-md-4">

              <div class="box box-danger shadow">
                <div class="box-header with-border">
                  <h3 class="box-title">
                    
                  </h3>
                </div>
                <div class="box-body">
                  <img src="{{ url('img/kandidat/') .  '/' . $row->gambar }}" alt="" class="img-responsive">
                  <table class="table table-bordered">
                    <tr>
                      <th>Nama</th>
                      <td>{{$row->nm_kandidat}}</td>
                    </tr>
                    <tr>
                      <th>Kelass</th>
                      <td>{{$row->kelas->nm_kelas}}</td>
                    </tr>
                    <tr>
                      <th>Hasil Suara</th>
                      <th>{{ $row->jml_suara }}</th>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!-- /.box -->

    </section>
@endsection