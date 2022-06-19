@extends('Admin.template.Base.base')
@section('content')

            <div class="page-title">
              <div class="col-md-12 col-sm-12">
                @include('Admin.template.utils.notif')
              </div>
              <div class="title_left">
                <h3><b>DETAIL Galeri</b></h3>
              </div>
              <a class="btn btn-primary" href="{{url('Admin/galeri')}}" style="float: right; border-radius: 10px; background-color:  #2A3F54; color: #ECF0F1;">
                <i class="fa fa-arrow-left"></i> Kembali
              </a>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 mt-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>{{$galeri->nama}}</h2>
                    <div class="clearfix"></div>
                    <p><i class="fa fa-calendar"></i> {{$galeri->created_at->diffforHumans()}}</p>
                  </div>
                  <div class="x_content">
                    <center>
                      <img style="width: 60%; margin-bottom: 20px;" src="{{url("public/$galeri->foto")}}" class="img-fluid">
                    </center>
                  </div>
                </div>
              </div>
            </div>

@endsection