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
          <h4 class="box-title">{{ $judul }} Pemilih</h4>
        </div>
        <div class="box-body">

          <div class="row mb-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <form action="/generate" method="POST">
                @csrf
                <label for="data">Jumlah Data</label>
                <div class="input-group">
                  <input type="number" class="form-control" name="data" placeholder="Masukan jumlah data">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>


    <div class="modal fade" id="modal-import">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
            </button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <form action="/pemilih/pemilih_import" method="POST" enctype="multipart/form-data">
              
              {{ csrf_field() }}
 
              <label>Pilih file excel</label>
              <div class="form-group">
                <input type="file" class="form-control" name="file" required="required">
              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection