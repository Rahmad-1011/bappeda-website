@extends('Client.template.base')
@section('content')

  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Website BAPPEDA</h1>
      <h2>Selamat Datang di Website BAPPEDA Kabupaten Ketapang</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="content border-0 shadow">
              <h3>Prosedur Pelayanan di BAPPEDA Kabupaten Ketapang</h3>
              	<button type="button" class="btn btn-info" style="background-color: #B0E0E6; color: #191970; border-radius: 30px; width: 200px;" data-toggle="modal" data-target="#exampleModalCenter">
				  Lihat Disini
				</button>

				<!-- Modal -->
				
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-6 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0 border-0 shadow">
                  	@foreach($kaban as $pegawai)
                    <img src="{{url("public/$pegawai->foto")}}" style="width: 100%; border-radius: 10px; height: 240px;">
                    <h4 style="margin-top: 10px;">Kepala BAPPEDA</h4>
                    <p>{{$pegawai->nama}}</p>
                    @endforeach
                  </div>
                </div>
                <div class="col-xl-6 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0 border-0 shadow">
                    @foreach($sekban as $pegawai)
                    <img src="{{url("public/$pegawai->foto")}}" style="width: 100%; border-radius: 10px; height: 240px;">
                    <h4 style="margin-top: 10px;">Sekretaris</h4>
                    <p>{{$pegawai->nama}}</p>
                    @endforeach
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
  </section>

<section id="why-us" class="about">
      <div class="container-fluid">

        <div class="row" style="margin-top: -20px">
          
          <div class="col-xl-7 col-lg-6 icon-boxes flex-column align-items-stretch justify-content-center px-lg-5">
            <div class="row border-0" style="margin-left: 60px">
            <h3 style="margin-bottom: 20px;">Kabar BAPPEDA</h3>
            @foreach($list_berita as $berita)
            <div class="card mb-3 border-0 shadow">
              <img class="card-img-top" style="width: 100%; height: 350px;" src="{{url("public/$berita->foto")}}" alt="Card image cap">
              <div class="card-body">
                <a href="{{url('Berita', $berita->id)}}"><h5 class="card-title">{{$berita->judul}}</h5></a>
                <p class="card-text">{!! nl2br (str_word_count("$berita->konten") > 60 ? substr("$berita->konten",0,200)."[..]" : "$berita->konten") !!}</p>
                <p class="card-text"><small class="text-muted">Edited {{$berita->updated_at->diffForHumans()}}</small></p>
              </div>
            </div>
            @endforeach
              {{$list_berita->links()}}
              </div>
          </div>

          <div class="col-xl-4 col-lg-6 justify-content-center">
            <div class="row border-0 shadow">
            @foreach($nilai as $nilai)
              <h3 style="text-align: center; font-size: 12pt; width: 100%">{{$nilai->nama}}</h3>
               <img style="width: 490px;" src="{{url("public/$nilai->foto")}}">
            @endforeach
            <iframe src="https://calendar.google.com/calendar/embed?src=bappedakabupatenketapang%40gmail.com&ctz=Asia%2FPontianak" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
          </div>

          
        </div>

      </div>
  </section>

	<section id="why-us" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-users"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{$pegawai->count()}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Pegawai</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-image"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{$galeri->count()}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Galeri</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fa fa-file-archive-o"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{$anjab->count()}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Dokumen ANJAB</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fa fa-file-archive-o"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{$sop->count()}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Dokumen SOP</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->
</main>

@endsection