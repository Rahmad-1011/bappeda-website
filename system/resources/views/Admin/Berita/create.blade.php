<div class="modal fade bd-example-modal-lg" id="create" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Berita Baru</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <div class="x_content">
                                    <br />
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{url('Admin/berita/simpan')}}" enctype="multipart/form-data">
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
                                          <input id="tanggal" class="date-picker form-control" name="tanggal" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
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
                                          <input type="text" id="judul" name="judul" required="required" class="form-control">
                                        </div>
                                      </div>

                                      <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="lampiran">Konten
                                          </label>
                                          <textarea name="konten" id="summernote" class="form-control"></textarea>
                                        </div>
                                      </div>

                                      <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="foto">Lampirkan Foto
                                          </label>
                                          <input type="file" id="foto" onchange="readFoto(event)" name="foto" accept="image/*">
                                          <img id="output" style="width: 100%; margin-top: 5px" alt="">
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
                        </div>
                    </div>
                </div>
              </div>