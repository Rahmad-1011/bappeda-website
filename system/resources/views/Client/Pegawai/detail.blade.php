@extends('Client.template.base')
@section('content')

<main id="main">

  <section class="about">
    <div class="container-fluid">
      <div class="row">
        <h3 style="margin-top: 100px; margin-left: 90px; margin-bottom: 30px;">Data Pegawai BAPPEDA Kabupaten Ketapang
          <button class="btn btn-primary" onclick="history.back()" style="margin-left: 490px; border-radius: 10px; background-color:  #2A3F54; color: #ECF0F1;">
                <i class="fa fa-arrow-left"></i> Kembali
                
              </button>
        </h3>
        
        <div class="col-xl-8 col-lg-8 col-sm-8 icon-boxes d-flex flex-column px-lg-5">
                      <table style="margin-left: 90px">
                        <tbody>
                          <tr>
                            <td style="width: 200px">Nama</td>
                            <td>:</td>
                            <td>{{$pegawai->nama}}</td>
                          </tr>
                          <tr>
                            <td style="width: 200px">NIP</td>
                            <td>:</td>
                            <td>{{$pegawai->nip}}</td>
                          </tr>
                          <tr>
                            <td style="width: 200px">Jenis Kelamin</td>
                            <td>:</td>
                            <td>{{$pegawai->jenis_kelamin}}</td>
                          </tr>
                          <tr>
                            <td style="width: 200px">Tempat, Tanggal Lahir</td>
                            <td>:</td>
                            <td>{{$pegawai->tmpt_lahir}}, {{ date('d M Y', strtotime($pegawai->tgl_lahir)) }}</td>
                          </tr>
                          <tr>
                            <td style="width: 200px">Jabatan</td>
                            <td>:</td>
                            <td>{{$pegawai->jabatan}}</td>
                          </tr>
                          <tr>
                            <td style="width: 200px">Jenis Jabatan</td>
                            <td>:</td>
                            <td>{{$pegawai->jenis_jabatan}}</td>
                          </tr>
                          <tr>
                            <td style="width: 200px">Golongan Pangkat</td>
                            <td>:</td>
                            <td>{{$pegawai->gol_pangkat}}</td>
                          </tr>
                          <tr>
                            <td style="width: 200px">Pendidikan</td>
                            <td>:</td>
                            <td>{{$pegawai->pendidikan}}</td>
                          </tr>
                          <tr>
                            <td style="width: 200px">Tahun Lulus</td>
                            <td>:</td>
                            <td>{{$pegawai->thn_lulus}}</td>
                          </tr>
                          <tr>
                            <td style="width: 200px">TK Ijazah</td>
                            <td>:</td>
                            <td>{{$pegawai->tk_ijazah}}</td>
                          </tr>
                          <tr>
                            <td style="width: 200px">Alamat</td>
                            <td>:</td>
                            <td>{{$pegawai->alamat}}</td>
                          </tr>
                        </tbody>
                      </table>
        </div>
        <div class="col-xl-4 col-lg-4 icon-boxes d-flex flex-column px-lg-5">
          @if(!empty($pegawai->foto))
            <img style="width: 100%; margin-bottom: 20px;" src="{{url("public/$pegawai->foto")}}" class="img-fluid">
          @else
             <img style="width: 100%; margin-bottom: 20px;" src="{{url('public')}}/assets/images/user.png">
          @endif
        </div>
      </div>
    </div>
  </section>

</main>

@endsection