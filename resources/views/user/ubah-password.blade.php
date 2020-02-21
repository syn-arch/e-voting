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
             <div class="row">
               <div class="col-md-2"></div>
               <div class="col-md-8">
                <form action="/user/ubah_password_proses" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="pw_lama">Password Lama</label>
                    <input type="text" name="pw_lama" id="pw_lama" class="form-control" placeholder="Password Lama">
                      @if($errors->has('pw_lama'))
                      <small style="color:red">{{ $errors->first('pw_lama')}}</small>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="pw1">Password baru</label>
                    <input type="text" name="pw1" id="pw1" class="form-control" placeholder="Password baru">
                      @if($errors->has('pw1'))
                      <small style="color:red">{{ $errors->first('pw1')}}</small>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="pw2">Konfirmasi Password Baru</label>
                    <input type="text" name="pw2" id="pw2" class="form-control" placeholder="Konfirmasi Password Baru">
                      @if($errors->has('pw2'))
                      <small style="color:red">{{ $errors->first('pw2')}}</small>
                    @endif
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                      Submit  
                    </button>
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