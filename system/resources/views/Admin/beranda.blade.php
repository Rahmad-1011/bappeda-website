@extends('Admin.template.Base.base')
@section('content')

            <div class="page-title">
              <div class="col-md-12 col-sm-12">
                @include('Admin.template.utils.notif')
              </div>
              <div class="title_left">
                <h3><b>BERANDA</b></h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Selamat Datang <b>{{$user->nama}}</b> :)</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      Di Sistem Informasi BAPPEDA Ketapang (SI BAKET)
                  </div>
                </div>
              </div>
            </div>

            <div class="x_content">
              <div class="row">
                <div class="animated flipInY col-lg-12 col-md-12 col-sm-12  ">
                   <div class="tile-stats border-0 shadow text-white bg-base">
                     <div class="icon"><i class="fa fa-group"></i>
                     </div>
                     <div class="count">{{$pegawai->count()}}</div>
                     <h3>Pegawai</h3>
                     <p>Jumlah Pegawai BAPPEDA Kabupaten Ketapang</p>
                  </div>
                </div>
                <div class="animated flipInY col-lg-6 col-md-6 col-sm-6  ">
                   <div class="tile-stats border-0 shadow bg-base">
                     <div class="icon"><i class="fa fa-calendar"></i>
                     </div>
                     <div class="count">{{$kegiatan->count()}}</div>
                     <h3>Kegiatan</h3>
                     <p>Jumlah Kegiatan Yang Akan Diikuti Pegawai</p>
                  </div>
                </div>
                <div class="animated flipInY col-lg-6 col-md-6 col-sm-6  ">
                   <div class="tile-stats border-0 shadow bg-base">
                     <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                     </div>
                     <div class="count">{{$berita->count()}}</div>
                     <h3>Postingan</h3>
                     <p>Jumlah Postingan Yang Sudah Diupload</p>
                  </div>
                </div>
              </div>
            </div>

@endsection