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
               <div class="col-md-2"></div>
               <div class="col-md-8">
                <form action="/user/update_profile/{{ $user->id_admin }}" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <input type="hidden" name="gb_lama" value="{{ $user->gambar }}">
                  <div class="form-group">
                    <label for="nm_admin">nama Lengkap</label>
                    <input type="text" name="nm_admin" id="nm_admin" class="form-control" placeholder="nama Lengkap" value="{{ $user->nm_admin }}">
                      @if($errors->has('nm_admin'))
                      <small style="color:red">{{ $errors->first('nm_admin')}}</small>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select name="jk" id="jk" class="form-control">
                      <option value="L" {{ $user->jk == "L" ? 'selected' : '' }} >Laki-Laki</option>
                      <option value="P" {{ $user->jk == "P" ? 'selected' : '' }} >Perempuan</option>
                    </select>
                      @if($errors->has('jk'))
                      <small style="color:red">{{ $errors->first('jk')}}</small>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Telepon" value="{{ $user->telepon }}">
                      @if($errors->has('telepon'))
                      <small style="color:red">{{ $errors->first('telepon')}}</small>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="E-mail" value="{{ $user->email }}">
                      @if($errors->has('email'))
                      <small style="color:red">{{ $errors->first('email')}}</small>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control">{{ $user->alamat }}</textarea>
                      @if($errors->has('alamat'))
                      <small style="color:red">{{ $errors->first('alamat')}}</small>
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
                    <h4>Foto Sebelumnya</h4>
                    <img src="{{ url('img/admin/' . $user->gambar ) }}" alt="Foto Kandidat" class="img-fluid" width="200px">
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