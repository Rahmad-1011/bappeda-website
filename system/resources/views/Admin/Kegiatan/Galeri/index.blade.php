@extends('Admin.template.Base.base')
@section('content')

            <div class="page-title">
              <div class="col-md-12 col-ms-12">
                @include('Admin.template.utils.notif')
              </div>
              <div class="title_left">
                <h3><b>Galeri BAPPEDA</b></h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">

              @include('Admin.Kegiatan.Galeri.create')


              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Galeri BAPPEDA</h2>
                    <a style="float: right;">
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#create"><i class="fa fa-plus-square"></i> Galeri</button>
                    </a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                        @foreach($list_galeri as $galeri)
                        <div class="col-md-3">
                          <div class="card border-0 shadow">
                            <div class="thumbnail">
                              <div class="image view view-first">
                                <img style="width: 100%; display: block;" src="{{url("public/$galeri->foto")}}" class="img-fluid" />
                                <div class="mask">
                                  @include('Admin.template.utils.delete', ['url'=>url('Admin/galeri', $galeri->id)])
                                  <div class="tools tools-bottom">
                                    <a href="{{url('Admin/galeri', $galeri->id)}}"><i class="fa fa-link"></i></a>
                                    <a href="{{url('Admin/galeri/edit', $galeri->id)}}"><i class="fa fa-pencil"></i></a>
                                  </div>
                                </div>
                              </div>
                              <div class="caption">
                                <p>{{$galeri->nama}}</p>
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