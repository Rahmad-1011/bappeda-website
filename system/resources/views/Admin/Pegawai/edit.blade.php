@extends('Admin.template.Base.base')
@section('content')

<div class="row">
  <div class="x_panel">
    <div class="x_title">
      <h2>Edit Data Pegawai Bappeda</h2>
      <button class="btn btn-primary" onclick="history.back()" style="float: right; border-radius: 10px; background-color:  #2A3F54; color: #ECF0F1;">
          <i class="fa fa-arrow-left"></i> Kembali
      </button>
      <div class="clearfix"></div>
    </div>
                  <div class="x_content">
                      <form method="POST" action="{{url('Admin/pegawai/simpan', $pegawai->id)}}" enctype="multipart/form-data">
                         @method("PUT")
                         @csrf
                         <div class="row" style="margin-bottom: -15px;">
                                        <label class="col-md-12 col-sm-12">Data Diri</label> 
                                      </div>
                                      <hr style="border-color: #2A3F54;">
                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="nama">Nama Lengkap
                                          </label>
                                          <input type="text" id="nama" name="nama" required="required" value="{{$pegawai->nama}}" class="form-control">
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="tmpt_lahir">Jenis Kelamin
                                          </label>
                                          <select name="jenis_kelamin" class="form-control" required>
                                          <option value="{{$pegawai->jenis_kelamin}}" hidden>{{$pegawai->jenis_kelamin}}</option>
                                              <option value="Laki-laki">Laki-laki</option>
                                              <option value="Perempuan">Perempuan</option>
                                          </select>
                                        </div>
                                      </div>

                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="tmpt_lahir">Tempat Lahir
                                          </label>
                                          <input type="text" id="tmpt_lahir" name="tmpt_lahir" value="{{$pegawai->tmpt_lahir}}" required="required" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="tgl_lahir">Tanggal Lahir
                                          </label>
                                          <input type="date" id="tgl_lahir" name="tgl_lahir" value="{{$pegawai->tgl_lahir}}" required="required" class="form-control">
                                        </div>
                                      </div>
                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="alamat">Alamat
                                          </label>
                                          <input type="text" id="alamat" name="alamat" required="required" value="{{$pegawai->alamat}}" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="file">Foto Pegawai
                                          </label>
                                          <input type="file" id="file" name="foto">
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
                                          <input type="text" id="gol_pangkat" name="gol_pangkat" value="{{$pegawai->gol_pangkat}}" required="required" class="form-control">
                                        </div>

                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="tmt_pangkat">TMT
                                          </label>
                                          <input type="text" id="tmt_pangkat" name="tmt_pangkat" value="{{$pegawai->tmt_pangkat}}" required="required" class="form-control">
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
                                          <input type="text" id="nip" name="nip" required="required" value="{{$pegawai->nip}}" class="form-control">
                                        </div>

                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="jabatan">Jabatan
                                          </label>
                                          <input type="text" id="jabatan" name="jabatan" required="required" value="{{$pegawai->jabatan}}" class="form-control">
                                        </div>
                                      </div>
                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="jenis_jabatan">Jenis Jabatan
                                          </label>
                                          <input type="text" id="jenis_jabatan" name="jenis_jabatan" value="{{$pegawai->jenis_jabatan}}" required="required" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="eselon">Eselon
                                          </label>
                                          <input type="text" id="eselon" name="eselon" required="required" value="{{$pegawai->eselon}}" class="form-control">
                                        </div>
                                      </div>
                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="m_kerja_bln">M.Kerja - Bulan
                                          </label>
                                          <input type="text" id="m_kerja_bln" name="m_kerja_bln" required="required" value="{{$pegawai->m_kerja_bln}}" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="m_kerja_thn">M.Kerja - Tahun
                                          </label>
                                          <input type="text" id="m_kerja_thn" name="m_kerja_thn" required="required" value="{{$pegawai->m_kerja_thn}}" class="form-control">
                                        </div>
                                      </div>

                                      <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="lthn_jabatan">Latihan Jabatan
                                          </label>
                                          <input type="text" id="lthn_jabatan" name="lthn_jabatan" required="required" value="{{$pegawai->lthn_jabatan}}" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="lthn_jabatan_thn">Latihan Jabatan - Tahun
                                          </label>
                                          <input type="text" id="lthn_jabatan_thn" name="lthn_jabatan_thn" value="{{$pegawai->lthn_jabatan_thn}}" required="required" class="form-control">
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
                                          <input type="text" id="pendidikan" name="pendidikan" value="{{$pegawai->pendidikan}}" required="required" class="form-control">
                                        </div>
                                        <div class="col-md-3 col-sm-3 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="jurusan_pendidikan">Jurusan Pendidikan
                                          </label>
                                          <input type="text" id="jurusan_pendidikan" name="jurusan_pendidikan" value="{{$pegawai->jurusan_pendidikan}}" required="required" class="form-control">
                                        </div>
                                        <div class="col-md-3 col-sm-3 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="thn_lulus">Tahun Lulus
                                          </label>
                                          <input type="text" id="thn_lulus" name="thn_lulus" required="required" value="{{$pegawai->thn_lulus}}" class="form-control">
                                        </div>
                                        <div class="col-md-3 col-sm-3 ">
                                          <label class="col-form-label col-md-12 col-sm-12" for="tk_ijazah">TK Ijazah
                                          </label>
                                          <input type="text" id="tk_ijazah" name="tk_ijazah" value="{{$pegawai->tk_ijazah}}" required="required" class="form-control">
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