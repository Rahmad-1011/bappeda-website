@extends('Admin.template.Base.base')
@section('content')

<div class="row">
  <div class="x_panel">
    <div class="x_title">
      <h2>Edit Surat Masuk</h2>
        <button class="btn btn-primary float-right" onclick="history.back()" style="border-radius: 10px; background-color:  #2A3F54; color: #ECF0F1;">
          <i class="fa fa-arrow-left"></i> Kembali
        </button>
      <div class="clearfix"></div>
    </div>
                  <div class="x_content">
                      <form method="POST" action="{{url('Admin/berita/simpan', $berita->id)}}" enctype="multipart/form-data">
                                      @method("PUT")
                                      @csrf
                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-3 col-sm-3" for="kategori">Kategori
                                          </label>
                                          <select name="id_kategori" class="form-control">
                                          <option>--Pilih Kategori--</option>
                                            @foreach($list_kategori as $kategori)
                                              <option value="{{$kategori->id}}">{{$kategori->nama}}</option>
                                            @endforeach
                                          </select>
                                        </div>

                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-3 col-sm-3" for="tanggal">Tanggal
                                          </label>
                                          <input id="tanggal" value="{{$berita->tanggal}}" class="date-picker form-control" name="tanggal" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                          <script>
                                            function timeFunctionLong(input) {
                                              setTimeout(function() {
                                                input.type = 'text';
                                              }, 60000);
                                            }
                                          </script>
                                        </div>
                                      </div>

                                      <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="judul">Judul Berita
                                          </label>
                                          <input type="text" id="judul" name="judul" required="required" class="form-control" value="{{$berita->judul}}">
                                        </div>
                                      </div>

                                      <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="lampiran">Konten
                                          </label>
                                          <textarea name="konten" id="summernote" class="form-control">{!!nl2br($berita->konten)!!}</textarea>
                                        </div>
                                      </div>

                                      <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="foto">Lampirkan Foto
                                          </label>
                                          <input type="file" id="foto" name="foto" accept="image/*">
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

@push('style')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#edit').summernote();
    });
  </script>
@endpush