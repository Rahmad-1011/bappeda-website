  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">bappedakabupatenketapang@gmail.com</a>
        <i class="bi bi-phone"></i> (0534) 32658
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="" class="scrollto"><span class="d-none d-md-inline">
          <?php 
            $tanggal = mktime(date('m'), date("d"), date('Y'));
            echo "Tanggal : <b> " . date("d-m-Y", $tanggal ) . "</b>";
            date_default_timezone_set("Asia/Jakarta");
            $jam = date ("H:i");
            echo " | Pukul : <b> " . $jam . " " ." </b> ";
            $a = date ("H");
            if (($a>=6) && ($a<=11)) {
                echo " <b>, Selamat Pagi !! </b>";
            }else if(($a>=11) && ($a<=15)){
                echo " , Selamat  Siang !! ";
            }elseif(($a>15) && ($a<=18)){
                echo ", Selamat Sore !!";
            }else{
                echo ", <b> Selamat Malam </b>";
            }
         ?>
      </span></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">BAPPEDA Ketapang</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{url('Beranda')}}" class="nav-link scrollto {{request()->is('Beranda') ? 'active' : ''}}">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto {{request()->is('Profil/Visi-Misi') ? 'active' : ''}}" href="{{url('Profil/Visi-Misi')}}">Visi & Misi</a></li>

              <li><a class="nav-link scrollto {{request()->is('Profil/Profile-BAPPEDA') ? 'active' : ''}}" href="{{url('Profil/Profile-BAPPEDA')}}">Profil Singkat BAPPEDA Ketapang</a></li>

              <li><a class="nav-link scrollto {{request()->is('Profil/Pegawai') ? 'active' : ''}}" href="{{url('Profil/Pegawai')}}">Pegawai BAPPEDA Kabupaten Ketapang</a></li>
            </ul>
          </li>
          <li><a href="{{url('Berita')}}" class="nav-link scrollto {{request()->is('Berita*') ? 'active' : ''}}">Berita</a></li>
          <li class="dropdown"><a href="#"><span>Data Informasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto {{request()->is('Dokumen/Anjab') ? 'active' : ''}}" href="{{url('Dokumen/Anjab')}}">ANJAB</a></li>
              <li><a class="nav-link scrollto {{request()->is('Dokumen/SOP') ? 'active' : ''}}" href="{{url('Dokumen/SOP')}}">SOP</a></li>
            </ul>
          </li>
          <li><a href="{{url('Galeri')}}" class="nav-link scrollto {{request()->is('Galeri') ? 'active' : ''}}">Galeri</a></li>
          <li><a class="nav-link scrollto" href="https://www.lapor.go.id" target="_blank">Pengaduan Publik</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      

    </div>
  </header><!-- End Header -->