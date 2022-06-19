@extends('Admin.template.Base.base')
@section('content')

<div class="row">
  <div class="x_panel">
    <div class="x_title">
      <h2>Edit Surat Masuk</h2>
        <a class="btn btn-primary" onclick="history.back()" style="float: right; border-radius: 10px; background-color:  #2A3F54; color: #ECF0F1;">
          <i class="fa fa-arrow-left"></i> Kembali
        </a>
      <div class="clearfix"></div>
    </div>
                  <div class="x_content">
                      <form method="POST" action="{{url('Admin/visi-misi/simpan', $visimisi->id)}}" enctype="multipart/form-data">
                                      @method("PUT")
                                      @csrf
                                      <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="nama">Nama
                                          </label>
                                          <input type="text" id="nama" name="nama" value="{{$visimisi->nama}}" required="required" class="form-control">
                                        </div>
                                      </div>
                                      <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="nama">Konten
                                          </label>
                                          <textarea name="konten" class="form-control">{!!nl2br ($visimisi->konten) !!}</textarea>
                                        </div>
                                      </div>
                                      <div class="ln_solid"></div>
                                      <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 offset-md-12">
                                          <button type="submit" class="btn btn-success" style="float: right;"><i class="fa fa-check"></i> Simpan</button>
                                        </div>
                                      </div>

                                    </form>
                  </div>
  </div>
</div>

@endsection