<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-header">
          <center>
            @if(!empty($user->foto))
              <img style="width: 100px; height: 100px; border-radius: 50px;" src="{{url("public/$user->foto")}}" class="img-fluid">
            @else
              <img src="{{url('public')}}/assets/images/user.png">
            @endif
          </center>
        </div>
        <div class="card-body" align="center">
          <p style="font-size: 16pt"><b>Nama : {{Auth::user()->nama}}</b></p>
          <p style="font-size: 12pt">Username : {{$user->username}}</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#EditProfile">Edit Data Admin</button>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#GantiPassword">Ganti Password</button>
      </div>
    </div>
  </div>
</div>



<!-- Update Profile -->
                <div class="modal fade" id="EditProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Profil</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{url('Admin/profile/update')}}" method="post" class="contact-form mb-3" enctype="multipart/form-data">
                                    @csrf
                                    @method("PUT")
                                      <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="nama">Nama
                                          </label>
                                          <input type="text" id="nama" name="nama" required="required" value="{{$user->nama}}" class="form-control">
                                        </div>
                                      </div>
                                      <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="username">Username
                                          </label>
                                          <input type="text" id="username" name="username" required="required" value="{{$user->username}}" class="form-control">
                                        </div>
                                      </div>
                                      <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 mb-3">
                                          <label class="col-form-label col-md-12 col-sm-12" for="foto">Masukan Foto
                                          </label>
                                          <input type="file" id="foto" name="foto" accept="image/*">
                                        </div>
                                      </div>
                                      <button class="btn btn-primary btn-block">Update Profil</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<!-- Ganti Password -->
                <div class="modal fade" id="GantiPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ganti Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{url('Admin/profile/ganti-password')}}" method="post" class="contact-form mb-3" enctype="multipart/form-data">
                                    @csrf
                                    @method("PUT")

                                      <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="lama">Password Lama <b>*</b>
                                          </label>
                                          <input type="Password" class="form-control" name="lama" @error('lama') is-invalid @enderror required>
                                          @error('lama')
                                          <label>
                                              <div class="invalid-feedback" style="color: #FF0000">
                                                  {{$message}}
                                              </div>
                                          </label>
                                          @enderror
                                        </div>
                                      </div>

                                      <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="baru">Password Baru <b>*</b>
                                          </label>
                                          <input type="Password" class="form-control" name="baru" @error('baru') is-invalid @enderror required>
                                          @error('baru')
                                          <label>
                                              <div class="invalid-feedback" style="color: #FF0000">
                                                  {{$message}}
                                              </div>
                                          </label>
                                          @enderror
                                        </div>
                                      </div>

                                      <div class="item form-group">
                                        <div class="col-md-12 col-sm-12 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="konfirmasi">Konfirmasi Password Baru Anda <b>*</b>
                                          </label>
                                          <input type="Password" class="form-control" name="konfirmasi" @error('konfirmasi') is-invalid @enderror required>
                                          @error('konfirmasi')
                                          <label>
                                              <div class="invalid-feedback" style="color: #FF0000">
                                                  {{$message}}
                                              </div>
                                          </label>
                                          @enderror
                                        </div>
                                      </div>
                                      <button class="btn btn-success btn-block">Ganti Password</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
