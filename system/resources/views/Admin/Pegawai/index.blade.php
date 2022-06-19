@extends('Admin.template.Base.base')
@section('content')

            <div class="page-title">
              <div class="col-md-12 col-ms-12">
                @include('Admin.template.utils.notif')
              </div>
              <div class="title_left">
                <h3><b>DATA PEGAWAI</b></h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">

              @include('Admin.Pegawai.create')


              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Berita</h2>
                    <a style="float: right;">
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#create"><i class="fa fa-plus-square"></i> Pegawai</button>
                    </a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row" style="margin-bottom: 20px;">
                      <div class="animated flipInY col-lg-6 col-md-6 col-sm-6  ">
                         <div class="tile-stats border-0 shadow bg-base">
                           <div class="icon"><i class="fa fa-users"></i>
                           </div>
                           <div class="count">{{$list_pegawai->count()}}</div>
                           <h3>Pegawai</h3>
                           <p>Jumlah pegawai BAPPEDA Kabupaten Ketapang</p>
                        </div>
                      </div>
                    </div>
                      <div class="row">
                        @foreach($list_pegawai as $pegawai)
                        <div class="col-md-3">
                          <div class="card border-0 shadow" style="width: 14rem;">
                            @if(!empty($user->foto))
                              <img class="card-img-top" style="height: 18rem;" src="{{url("public/$pegawai->foto")}}" alt="Card image cap">
                            @else
                              <img src="{{url('public')}}/assets/images/user.png">
                            @endif
                            
                            <div class="card-body">
                              <center>
                                <div class="btn-group">
                                  <a class="btn btn-info" href="{{url('Admin/pegawai', $pegawai->id)}}" style="margin-right: 10px; border-radius: 5px;"><i class="fa fa-link"></i></a>
                                  <a class="btn btn-warning" href="{{url('Admin/pegawai/edit', $pegawai->id)}}" style="margin-right: 10px; border-radius: 5px;"><i class="fa fa-pencil"></i></a>
                                  @include('Admin.template.utils.delete', ['url'=>url('Admin/pegawai', $pegawai->id)])
                                </div>
                              <p class="card-text" style="font-size: 14pt; margin-top: 10px; color: #2A3F54"><b>{{$pegawai->nama}}</b></p>
                              <p>{{$pegawai->jabatan}}</p>
                              </center>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
                  </div>
                </div>
                </div>
              </div>
            </div>

  <script type="text/javascript">
    var readFoto= function(event) {
      var input = event.target;
      var reader = new FileReader();
      reader.onload = function(){
        var dataURL = reader.result;
        var output = document.getElementById('output');
        output.src = dataURL;
      };
      reader.readAsDataURL(input.files[0]);
    };
  </script>

@endsection

@push('style')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#konten').summernote();
    });
  </script>


@endpush