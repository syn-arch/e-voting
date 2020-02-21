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
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h4 class="box-title">{{ $judul }}</h4>

              <div class="pull-right">
                <a href="/kandidat" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
              </div>

            </div>
            <div class="box-body">
             <div class="row">
               <div class="col-md-2"></div>
               <div class="col-md-8">
                <form action="/kandidat/store" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label for="nm_kandidat">Nama kandidat</label>
                    <input type="text" name="nm_kandidat" id="nm_kandidat" class="form-control" placeholder="Nama kandidat">
                    @if($errors->has('nm_kandidat'))
                      <small style="color:red">{{ $errors->first('nm_kandidat')}}</small>
                    @endif
                    </div>
                  <div class="form-group">
                    <label for="no_urut">Nomor Urut</label>
                    <input type="number" name="no_urut" id="no_urut" class="form-control" placeholder="Nomor Urut">
                      @if($errors->has('no_urut'))
                      <small style="color:red">{{ $errors->first('no_urut')}}</small>
                    @endif
                  </div>
                  <div class="form-group">
                      <label for="id_kelas">Kelas</label>
                      <select name="id_kelas" id="id_kelas" class="form-control">
                        @foreach($kelas as $k)
                          <option value="{{ $k->id_kelas }}">{{ $k->nm_kelas }}</option>
                        @endforeach
                      </select>
                      @if($errors->has('id_kelas'))
                        <small style="color:red">{{ $errors->first('id_kelas')}}</small>
                      @endif
                  </div>
                  <div class="form-group">
                      <label for="id_kelas">Jurusan</label>
                      <select name="id_jurusan" id="id_jurusan" class="form-control">
                        @foreach($jurusan as $k)
                          <option value="{{ $k->id_jurusan }}">{{ $k->nm_jurusan }}</option>
                        @endforeach
                      </select>
                      @if($errors->has('id_jurusan'))
                        <small style="color:red">{{ $errors->first('id_jurusan')}}</small>
                      @endif
                  </div>
                  <div class="form-group">
                      <label for="jk">Jenis Kelamin</label>
                      <select name="jk" id="jk" class="form-control">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                      @if($errors->has('jk'))
                        <small style="color:red">{{ $errors->first('jk')}}</small>
                      @endif
                  </div>
                  <div class="form-group">
                      <label for="email">E-mail</label>
                      <input type="text" name="email" id="email" class="form-control" placeholder="E-mail">
                      @if($errors->has('email'))
                        <small style="color:red">{{ $errors->first('email')}}</small>
                      @endif
                  </div>
                  <div class="form-group">
                      <label for="telepon">Telepon</label>
                      <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Telepon">
                      @if($errors->has('telepon'))
                        <small style="color:red">{{ $errors->first('telepon')}}</small>
                      @endif
                  </div>
                  <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control" placeholder="Alamat"></textarea>
                      @if($errors->has('alamat'))
                        <small style="color:red">{{ $errors->first('alamat')}}</small>
                      @endif
                  </div>
                  <div class="form-group">
                      <label for="visi">Visi</label>
                      <textarea name="visi" id="visi" cols="30" rows="10" class="form-control" placeholder="Visi"></textarea>
                      @if($errors->has('visi'))
                        <small style="color:red">{{ $errors->first('visi')}}</small>
                      @endif
                  </div>
                  <div class="form-group">
                    <label for="misi">Misi</label>
                      <textarea name="misi" id="misi" cols="30" rows="10" class="form-control" placeholder="Misi"></textarea>
                      @if($errors->has('misi'))
                      <small style="color:red">{{ $errors->first('misi')}}</small>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="tahun_ajaran">Tahun Ajaran</label>
                    <input type="text" name="tahun_ajaran" id="tahun_ajaran" class="form-control" placeholder="Tahun Ajaran">
                      @if($errors->has('tahun_ajaran'))
                      <small style="color:red">{{ $errors->first('tahun_ajaran')}}</small>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="gambar">Foto</label>
                    <input type="file" name="gambar" id="gambar" class="form-control" placeholder="Foto">
                      @if($errors->has('gambar'))
                      <small style="color:red">{{ $errors->first('gambar')}}</small>
                    @endif
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Submit" class="btn btn-primary btn-block">
                  </div>
                </form>
               </div>
             </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    
@endsection