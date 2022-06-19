@extends('Client.template.base')
@section('content')

<main id="main">

  <section class="about">
    <div class="container-fluid">
      <div class="row">
        @foreach($profile as $profile)
        <div class="col-xl-8 col-lg-8 icon-boxes d-flex flex-column px-lg-5">
          <h3 style="margin-top: 100px; margin-left: 90px">Profile BAPPEDA Kabupaten Ketapang</h3>
          <p style="margin-left: 90px; text-align: justify;">{!! nl2br($profile->konten)!!}</p>
        </div>
        <div class="col-xl-4 col-lg-4 icon-boxes d-flex flex-column px-lg-5">
          <img style="margin-top: 100px; width: 100%; margin-bottom: 20px;" src="{{url("public/$profile->foto")}}">
        </div>
        @endforeach
      </div>
    </div>
  </section>

</main>

@endsection