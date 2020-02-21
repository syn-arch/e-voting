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
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="box box-info">
            <div class="box-header with-border">
              <h4 class="box-title">{{ $judul }}</h4>

              <div class="pull-right">
                <a href="/jurusan" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
              </div>

            </div>
            <div class="box-body">
            
              <form action="/jurusan/update/{{ $jurusan->id_jurusan }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <input type="hidden" name="id_jurusan" value="{{ $jurusan->id_jurusan }}">
                <div class="form-group">
                  <label for="nm_jurusan">Nama Jurusan</label>
                  <input type="text" name="nm_jurusan" id="nm_jurusan" class="form-control" placeholder="Nama Jurusan" value="{{ $jurusan->nm_jurusan }}">
                  @if($errors->has('nm_jurusan'))
                  <small style="color:red">{{ $errors->first('nm_jurusan')}}</small>
                @endif
                </div>
                <div class="form-group">
                  <input type="submit" value="Submit" class="btn btn-primary btn-block">
                </div>
              </form>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      

    </section>
@endsection