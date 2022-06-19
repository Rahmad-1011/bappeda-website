@extends('Admin.template.base')
@section('content')

<div class="row">
  <div class="x_panel">
    <div class="x_title">
      <h2>Registrasi Admin</h2>
      <div class="clearfix"></div>
    </div>
                  <div class="x_content">
                      <form method="POST" action="{{url('0/registrasi')}}" enctype="multipart/form-data">
                                      @csrf
                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-3 col-sm-3" for="nama">Nama
                                          </label>
                                          <input type="text" id="nama" name="nama" required="required" class="form-control">
                                        </div>
                                      </div>

                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-3 col-sm-3" for="username">Username
                                          </label>
                                          <input type="text" id="username" name="username" required="required" class="form-control">
                                        </div>
                                      </div>

                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-6 col-sm-6" for="password">Password
                                          </label>
                                          <input type="password" id="password" name="password" required="required" class="form-control">
                                        </div>
                                      </div>
                                      <div class="ln_solid"></div>
                                      <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 offset-md-12">
                                          <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
                                        </div>
                                      </div>

                                    </form>
                  </div>
  </div>
</div>

@endsection