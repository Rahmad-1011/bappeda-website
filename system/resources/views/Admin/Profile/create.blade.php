<div class="modal fade bd-example-modal-lg" id="kategori" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Profile BAPPEDA</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <div class="x_content">
                                    <br />
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{url('Admin/profile-bappeda/simpan')}}" enctype="multipart/form-data">
                                      @csrf

                                      <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="nama">Konten
                                          </label>
                                          <textarea name="konten" class="form-control"></textarea>
                                        </div>
                                      </div>
                                      <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="foto">Lampirkan Foto
                                          </label>
                                          <input type="file" id="foto" name="foto" accept="image/*">
                                        </div>
                                      </div>
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