@extends('Client.template.base')
@section('content')

<main id="main">

  <section class="about">
    <div class="container-fluid">
      <div class="row">
        <center>
            <div class="col-xl-10 col-lg-10 icon-boxes d-flex flex-column px-lg-5" style="text-align: justify;">
              <img style="margin-top: 80px; width: 100%;" src="{{url("public/$berita->foto")}}">
              <h3 style="margin-top: 30px">{{$berita->judul}}</h3>
              <span><i class="fa fa-clock-o"> </i> {{$berita->updated_at->diffForHumans()}} | <i class="fa fa-tag"> </i> {{$berita->kategori->nama}}</span>
              <p style="text-align: justify-all;">{!! nl2br($berita->konten)!!}</p>
            </div>
        </center>
      </div>
    </div>
  </section>

</main>

@endsection