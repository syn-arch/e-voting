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

        </div>
        <div class="box-body">

          <div class="row">
            <div class="col-md-5">
              <img src="{{ url('img/admin/' . $user->gambar) }}" alt="profile picture" class="img-responsive">
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap" value="{{ $user->nm_admin }}" disabled>
                  @if($errors->has('nama'))
                  <small style="color:red">{{ $errors->first('nama')}}</small>
                @endif
              </div>
              <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select name="jk" id="jk" class="form-control" disabled>
                  <option value="L" {{ $user->jk == "L" ? 'selected' : '' }} >Laki-Laki</option>
                  <option value="P" {{ $user->jk == "P" ? 'selected' : '' }} >Perempuan</option>
                </select>
                  @if($errors->has('jk'))
                  <small style="color:red">{{ $errors->first('jk')}}</small>
                @endif
              </div>
              <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Telepon" value="{{ $user->telepon }}" disabled>
                  @if($errors->has('telepon'))
                  <small style="color:red">{{ $errors->first('telepon')}}</small>
                @endif
              </div>
              <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="E-mail" value="{{ $user->email }}" disabled>
                  @if($errors->has('email'))
                  <small style="color:red">{{ $errors->first('email')}}</small>
                @endif
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" value="{{ $user->alamat }}" disabled>
                  @if($errors->has('alamat'))
                  <small style="color:red">{{ $errors->first('alamat')}}</small>
                @endif
              </div>
              <div class="form-group">
               <a href="/user/edit-my-profile" class="btn btn-primary btn-block">
                 <i class="fa fa-edit"></i> Edit Profile
               </a>
              </div>                
            </div>
          </div>
	

        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
@endsection