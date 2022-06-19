@extends('Admin.template.base')
@section('content')

            <div class="page-title">
      @include('Admin.template.utils.notif')
              <div class="title_left">
                <h3><b>Beranda</b></h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Selamat Datang :)</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      Silahkan Daftar dihalaman User, atau <u><a href="{{url('0/registrasi')}}">klik disini</a></u>
                  </div>
                </div>
              </div>
            </div>

@endsection