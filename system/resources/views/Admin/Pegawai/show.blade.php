@extends('Admin.template.Base.base')
@section('content')

            <div class="page-title">
              <div class="col-md-12 col-sm-12">
                @include('Admin.template.utils.notif')
              </div>
              <div class="title_left">
                <h3><b>Data Pegawai BAPPEDA</b></h3>
              </div>
              <button class="btn btn-primary" onclick="history.back()" style="float: right; border-radius: 10px; background-color:  #2A3F54; color: #ECF0F1;">
                <i class="fa fa-arrow-left"></i> Kembali
                
              </button>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 mt-4">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="col-md-8 col-sm-8">
                      <table>
                        <tbody>
                          <tr>
                            <td style="width: 150px">Nama</td>
                            <td>:</td>
                            <td>{{$pegawai->nama}}</td>
                          </tr>
                          <tr>
                            <td style="width: 150px">NIP</td>
                            <td>:</td>
                            <td>{{$pegawai->nip}}</td>
                          </tr>
                          <tr>
                            <td style="width: 150px">Jenis Kelamin</td>
                            <td>:</td>
                            <td>{{$pegawai->jenis_kelamin}}</td>
                          </tr>
                          <tr>
                            <td style="width: 150px">Tempat, Tanggal Lahir</td>
                            <td>:</td>
                            <td>{{$pegawai->tmpt_lahir}}, {{ date('d M Y', strtotime($pegawai->tgl_lahir)) }}</td>
                          </tr>
                          <tr>
                            <td style="width: 150px">Jabatan</td>
                            <td>:</td>
                            <td>{{$pegawai->jabatan}}</td>
                          </tr>
                          <tr>
                            <td style="width: 150px">Jenis Jabatan</td>
                            <td>:</td>
                            <td>{{$pegawai->jenis_jabatan}}</td>
                          </tr>
                          <tr>
                            <td style="width: 150px">Golongan Pangkat</td>
                            <td>:</td>
                            <td>{{$pegawai->gol_pangkat}}</td>
                          </tr>
                          <tr>
                            <td style="width: 150px">Pendidikan</td>
                            <td>:</td>
                            <td>{{$pegawai->pendidikan}}</td>
                          </tr>
                          <tr>
                            <td style="width: 150px">Tahun Lulus</td>
                            <td>:</td>
                            <td>{{$pegawai->thn_lulus}}</td>
                          </tr>
                          <tr>
                            <td style="width: 150px">TK Ijazah</td>
                            <td>:</td>
                            <td>{{$pegawai->tk_ijazah}}</td>
                          </tr>
                          <tr>
                            <td style="width: 150px">Alamat</td>
                            <td>:</td>
                            <td>{{$pegawai->alamat}}</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      @if(!empty($user->foto))
                        <img style="width: 100%;" src="{{url("public/$pegawai->foto")}}" class="img-fluid">
                      @else
                         <img src="{{url('public')}}/assets/images/user.png">
                      @endif
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection