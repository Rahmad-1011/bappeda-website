@extends('Client.template.base')
@section('content')

<main id="main">

  <section class="about">
    <div class="container-fluid">
      <div class="row">
        <center>
            <div class="col-xl-12 col-lg-12 icon-boxes d-flex flex-column px-lg-5" style="text-align: justify;">
              <h3 style="margin-top: 120px;">Berita BAPPEDA Kabupaten Ketapang</h3>
              <div class="row">
              @foreach($list_galeri as $galeri)
              <div class="col-md-6" style="margin-top: 20px;">
                  <div class="card mb-3 border-0 shadow">
                    <img class="card-img-top" style="width: 100%; height: 350px;" src="{{url("public/$galeri->foto")}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{$galeri->nama}}</h5>
                      <p class="card-text"><small class="text-muted">Edited {{$galeri->updated_at->diffForHumans()}}, By {{$galeri->user->nama}}</small></p>
                    </div>
                  </div>
              </div>
              @endforeach
              {{$list_galeri->links()}}
              </div>
              </div>
            </div>
        </center>
      </div>
    </div>
  </section>

</main>


@endsection