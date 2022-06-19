@extends('Admin.template.Base.base')
@section('content')

            <div class="page-title">
              <div class="col-md-12 col-ms-12">
                @include('Admin.template.utils.notif')
              </div>
              <div class="title_left">
                <h3><b>BERITA</b></h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">

              @include('Admin.Berita.create')


              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Berita</h2>
                    <a style="float: right;">
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#create"><i class="fa fa-plus-square"></i> Berita Baru</button>
                    </a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row" style="margin-bottom: 20px;">
                      <div class="animated flipInY col-lg-6 col-md-6 col-sm-6  ">
                         <div class="tile-stats border-0 shadow bg-base">
                           <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                           </div>
                           <div class="count">{{$list_berita->count()}}</div>
                           <h3>Postingan</h3>
                           <p>Jumlah Postingan Yang Sudah Diupload</p>
                        </div>
                      </div>
                    </div>
                      <div class="row">
                        @foreach($list_berita as $berita)
                        <div class="col-md-3">
                          <div class="card border-0 shadow">
                            <div class="thumbnail">
                              <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="{{url("public/$berita->foto")}}" class="img-fluid" />
                                <div class="mask">
                                  @include('Admin.template.utils.delete', ['url'=>url('Admin/berita', $berita->id)])
                                  <div class="tools tools-bottom">
                                    <a href="{{url('Admin/berita', $berita->id)}}"><i class="fa fa-link"></i></a>
                                    <a href="{{url('Admin/berita/edit', $berita->id)}}"><i class="fa fa-pencil"></i></a>
                                  </div>
                                </div>
                              </div>
                              <div class="caption">
                                <p>{{$berita->judul}}</p>
                              </div>
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