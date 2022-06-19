@extends('Client.template.base')
@section('content')

<main id="main">

  <section class="about">
    <div class="container-fluid">
      <div class="row">
        <h3 style="margin-top: 100px; margin-left: 90px; margin-bottom: 30px;">Data Pegawai Sekretariat</h3>
        <div class="col-xl-12 col-lg-12 col-sm-12 icon-boxes d-flex flex-column px-lg-5">
        <div class="row">
                        @foreach($list_pegawai as $pegawai)
                        <div class="col-md-3">
                          <a href="{{url('Profil/Pegawai', $pegawai->id)}}">
                          <div class="card border-0 shadow" style="width: 14rem;">
                            @if(!empty($pegawai->foto))
                              <img class="card-img-top" style="height: 16rem;" src="{{url("public/$pegawai->foto")}}" alt="Card image cap">
                            @else
                              <img src="{{url('public')}}/assets/images/user.png">
                            @endif
                            
                            <div class="card-body">
                              <center>
                              <p class="card-text" style="font-size: 14pt; margin-top: 10px; color: #2A3F54"><b>{{$pegawai->nama}}</b></p>
                              <p>{{$pegawai->jabatan}}</p>
                              </center>
                            </div>
                          </div>
                          </a>
                        </div>
                        @endforeach
                      </div>
        </div>
      </div>
    </div>
  </section>

</main>

@endsection