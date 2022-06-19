                		<aside class="col-lg-3">
                			<div class="sidebar">
                				<div class="widget widget-search">
                                    <h3 class="widget-title">Search</h3><!-- End .widget-title -->

                                    <form action="#">
                                        <label for="ws" class="sr-only">Search in blog</label>
                                        <input type="search" class="form-control" name="ws" id="ws" placeholder="Search in blog" required>
                                        <button type="submit" class="btn"><i class="icon-search"></i><span class="sr-only">Search</span></button>
                                    </form>
                				</div><!-- End .widget -->

                                <div class="widget widget-cats">
                                    <h3 class="widget-title">Kategori</h3><!-- End .widget-title -->
                                    @foreach($list_kategori as $kategori)
                                    <ul>
                                        <li><a href="#">{{$kategori->nama}}<span>69</span></a></li>
                                    </ul>
                                    @endforeach
                                </div><!-- End .widget -->

                                <div class="widget">
                                    <h3 class="widget-title">Rekomendasi Untuk Anda</h3><!-- End .widget-title -->

                                    <ul class="posts-list">
                                        @foreach($list_berita_rekomendasi as $berita)
                                        <li>
                                            <figure>
                                                <a href="#">
                                                    <img style="width: 100%;" src="{{url("public/$berita->foto")}}" class="img-fluid">
                                                </a>
                                            </figure>

                                            <div>
                                                <span>{{$berita->created_at->diffforHumans()}}</span>
                                                <h4><a href="#">{{$berita->judul}}</a></h4>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul><!-- End .posts-list -->
                                </div><!-- End .widget -->

                                <div class="widget widget-text">
                                    <h3 class="widget-title">BAPPEDA KETAPANG</h3><!-- End .widget-title -->

                                    <div class="widget-text-content">
                                        <center>
                                        <p><b> Visi </b></p>
                                        <p align="justify"> Kabupaten Ketapang yang Maju Menuju Masyarakat Sejahtera</p>
                                        <br>
                                        <p><b> Misi </b></p>
                                        </center>
                                        <p align="justify">
                                            1. Melaksanakan Kepemerintahan yang baik;<br>
                                            2. Meningkatkan Infrastruktur Daerah;<br>
                                            3. Meningkatkan Perekonomian Masyarakat;<br>
                                            4. Meningkatkan Kualitas Sumber Daya Manusia;<br>
                                            5. Pemberdayaan Masyarakat dan Pemerintahan Desa;<br>
                                            6. Meningkatkan Pengelolaan dan Pemanfaatan Sumber Daya
                                            Alam di Kabupaten Ketapang dengan tetap menjaga
                                            kelestarian lingkungan.
                                        </p>
                                    </div><!-- End .widget-text-content -->
                                </div><!-- End .widget -->
                			</div><!-- End .sidebar -->
                		</aside><!-- End .col-lg-3 -->