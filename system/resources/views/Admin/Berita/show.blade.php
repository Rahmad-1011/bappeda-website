@extends('Admin.template.Base.base')
@section('content')

            <div class="page-title">
              <div class="col-md-12 col-sm-12">
                @include('Admin.template.utils.notif')
              </div>
              <div class="title_left">
                <h3><b>DETAIL BERITA</b></h3>
              </div>
              <button class="btn btn-primary" onclick="history.back()" style="float: right; border-radius: 10px; background-color:  #2A3F54; color: #ECF0F1;">
                <i class="fa fa-arrow-left"></i> Kembali
              </button>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 mt-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>{{$berita->judul}}</h2>
                    <div class="clearfix"></div>
                    <p><b>By <u>{{$berita->user->nama}}</u></b>, <i class="fa fa-calendar"></i> {{$berita->created_at->diffforHumans()}}</p>
                    <p><i class="fa fa-folder-open"></i> {{$berita->kategori->nama}}</p>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      {!!nl2br($berita->konten)!!}
                    </div>
                      <img style="width: 100%;" src="{{url("public/$berita->foto")}}" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>

@endsection