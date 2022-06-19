        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-file-text"></i> <span>BAPPEDA</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                @if(!empty($user->foto))
                  <img class="img-circle profile_img" style="width: 65px; height: 65px;" src="{{url("public/$user->foto")}}" class="img-fluid">
                @else
                  <img src="{{url('public')}}/assets/images/user.png">
                @endif
              </div>
              <div class="profile_info">
                <span>Halooo</span>
                <h2>{{$user->nama}}</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br/>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a href="{{url('Admin/beranda')}}"><i class="fa fa-home"></i> Beranda</a>
                  </li>
                  <li><a href="{{url('Admin/kategori')}}"><i class="fa fa-folder-open"></i> Kategori</a>
                  </li>
                  <li><a href="{{url('Admin/berita')}}"><i class="fa fa-newspaper-o"></i> Berita</a>
                  </li>
                  <li><a><i class="fa fa-file-archive-o"></i> Arsip <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('Admin/anjab')}}">ANJAB</a></li>
                      <li><a href="{{url('Admin/sop')}}">SOP</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-file-photo-o"></i> Kegiatan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('Admin/galeri')}}">Galeri BAPPEDA</a></li>
                      <li><a href="https://calendar.google.com/calendar/u/0/r" target="_blank">Jadwal Kegiatan</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-list-ol"></i> BAPPEDA <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('Admin/profile-bappeda')}}">Profile BAPPEDA</a></li>
                      <li><a href="{{url('Admin/visi-misi')}}">Visi dan Misi</a></li>
                      <li><a href="{{url('Admin/nilai')}}">Format Nilai IKM</a></li>
                    </ul>
                  </li>
                  <li><a href="{{url('Admin/pegawai')}}"><i class="fa fa-group"></i> Pegawai</a></li>
                  <br>
                  <div class="clearfix"></div>
                  <li><a href="{{url('Beranda')}}"><i class="fa fa-sign-out"></i> Lihat Website</a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>