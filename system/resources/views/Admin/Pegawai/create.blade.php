<div class="modal fade bd-example-modal-lg" id="create" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pegawai BAPPEDA</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card">

                                <div class="card-body">
                                    <div class="x_content">
                                    <br />
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{url('Admin/pegawai/simpan')}}" enctype="multipart/form-data">
                                      @csrf

                                      <div class="row" style="margin-bottom: -15px;">
                                        <label class="col-md-12 col-sm-12">Data Diri</label> 
                                      </div>
                                      <hr style="border-color: #2A3F54;">
                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="nama">Nama Lengkap
                                          </label>
                                          <input type="text" id="nama" name="nama" required="required" class="form-control">
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="tmpt_lahir">Jenis Kelamin
                                          </label>
                                          <select name="jenis_kelamin" class="form-control" required>
                                          <option value="" hidden>--Pilih Jenis Kelamin--</option>
                                              <option value="Laki-laki">Laki-laki</option>
                                              <option value="Perempuan">Perempuan</option>
                                          </select>
                                        </div>
                                      </div>

                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="tmpt_lahir">Tempat Lahir
                                          </label>
                                          <input type="text" id="tmpt_lahir" name="tmpt_lahir" required="required" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="tgl_lahir">Tanggal Lahir
                                          </label>
                                          <input type="date" id="tgl_lahir" name="tgl_lahir" required="required" class="form-control">
                                        </div>
                                      </div>
                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="alamat">Alamat
                                          </label>
                                          <input type="text" id="alamat" name="alamat" required="required" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="file">Foto Pegawai
                                          </label>
                                          <input type="file" onchange="readFoto(event)" id="file" name="foto" required accept="image/*">
                                          <img id="output" style="width: 100%; margin-top: 5px" alt="">
                                        </div>
                                      </div>

                                      <div class="row" style="margin-bottom: -15px; margin-top: 40px;">
                                        <label class="col-md-12 col-sm-12">Pangkat</label> 
                                      </div>
                                      <hr style="border-color: #2A3F54;">
                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="gol_pangkat">Golongan
                                          </label>
                                          <input type="text" id="gol_pangkat" name="gol_pangkat" required="required" class="form-control">
                                        </div>

                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="tmt_pangkat">TMT
                                          </label>
                                          <input type="text" id="tmt_pangkat" name="tmt_pangkat" required="required" class="form-control">
                                        </div>
                                      </div>

                                      <div class="row" style="margin-bottom: -15px; margin-top: 40px;">
                                        <label class="col-md-12 col-sm-12">Jabatan</label> 
                                      </div>
                                      <hr style="border-color: #2A3F54;">

                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="nip">NIP
                                          </label>
                                          <input type="text" id="nip" name="nip" required="required" class="form-control">
                                        </div>

                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="jabatan">Jabatan
                                          </label>
                                          <input type="text" id="jabatan" name="jabatan" required="required" class="form-control">
                                        </div>
                                      </div>
                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="jenis_jabatan">Jenis Jabatan
                                          </label>
                                          <input type="text" id="jenis_jabatan" name="jenis_jabatan" required="required" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="eselon">Eselon
                                          </label>
                                          <input type="text" id="eselon" name="eselon" required="required" class="form-control">
                                        </div>
                                      </div>
                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="m_kerja_bln">M.Kerja - Bulan
                                          </label>
                                          <input type="text" id="m_kerja_bln" name="m_kerja_bln" required="required" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="m_kerja_thn">M.Kerja - Tahun
                                          </label>
                                          <input type="text" id="m_kerja_thn" name="m_kerja_thn" required="required" class="form-control">
                                        </div>
                                      </div>

                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="lthn_jabatan">Latihan Jabatan
                                          </label>
                                          <input type="text" id="lthn_jabatan" name="lthn_jabatan" required="required" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="lthn_jabatan_thn">Latihan Jabatan - Tahun
                                          </label>
                                          <input type="text" id="lthn_jabatan_thn" name="lthn_jabatan_thn" required="required" class="form-control">
                                        </div>
                                      </div>

                                      <div class="row" style="margin-bottom: -15px; margin-top: 40px;">
                                        <label class="col-md-12 col-sm-12">Pendidikan</label> 
                                      </div>
                                      <hr style="border-color: #2A3F54;">
                                      <div class="item form-group">
                                        <div class="col-md-3 col-sm-3 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="pendidikan">Pendidikan
                                          </label>
                                          <input type="text" id="pendidikan" name="pendidikan" required="required" class="form-control">
                                        </div>
                                        <div class="col-md-3 col-sm-3 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="jurusan_pendidikan">Jurusan Pendidikan
                                          </label>
                                          <input type="text" id="jurusan_pendidikan" name="jurusan_pendidikan" required="required" class="form-control">
                                        </div>
                                        <div class="col-md-3 col-sm-3 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="thn_lulus">Tahun Lulus
                                          </label>
                                          <input type="text" id="thn_lulus" name="thn_lulus" required="required" class="form-control">
                                        </div>
                                        <div class="col-md-3 col-sm-3 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="tk_ijazah">TK Ijazah
                                          </label>
                                          <input type="text" id="tk_ijazah" name="tk_ijazah" required="required" class="form-control">
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