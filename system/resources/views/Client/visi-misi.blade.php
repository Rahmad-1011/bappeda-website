@extends('Client.template.base')
@section('content')

<main id="main">

  <section class="about">
    <div class="container-fluid">
      <div class="row">
        @foreach($visimisi as $visimisi)
        <div class="col-xl-6 col-lg-6 icon-boxes d-flex flex-column px-lg-5">
          <h3 style="margin-top: 100px; margin-left: 90px">{{$visimisi->nama}}</h3>
          <p style="margin-left: 90px; text-align: justify;">{!! nl2br($visimisi->konten)!!}</p>
        </div>
        @endforeach
      </div>
    </div>
  </section>

</main>

@endsection