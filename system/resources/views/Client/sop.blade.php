@extends('Client.template.base')
@section('content')

<main id="main">

  <section class="about">
    <div class="container-fluid">
      <div class="row">
        <center>
            <div class="col-xl-12 col-lg-12 icon-boxes d-flex flex-column px-lg-5" style="text-align: justify;">
              <h3 style="margin-top: 120px;">SOP BAPPEDA Kabupaten Ketapang</h3>
              <div class="row">
              @foreach($list_sop as $sop)
              <div class="col-md-3" style="margin-top: 20px;">
                <div class="card border-0 shadow" style="width: 18rem; height: 16rem;">
                  <center>
                    <i class="fa fa-file" style="font-size: 70pt; margin-top: 10px; color: #1E90FF"></i>
                  </center>
                  <div class="card-body">
                    <center>
                      <h5 class="card-title">{{$sop->nama}}</h5>
                    </center>
                  </div>
                      <a target="popup" href="{{"/public/$sop->file"}}" class="btn btn-primary"><i class="fa fa-download"></i> Unduh</a>
                </div>
              </div>
              @endforeach
              </div>
            </div>
        </center>
      </div>
    </div>
  </section>

</main>

@endsection