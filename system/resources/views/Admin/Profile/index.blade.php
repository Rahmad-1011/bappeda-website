@extends('Admin.template.Base.base')
@section('content')

            <div class="page-title">
              <div class="col-md-12 col-ms-12">
                @include('Admin.template.utils.notif')
              </div>
              <div class="title_left">
                <h3><b>Profile BAPPEDA Kabupaten Ketapang</b></h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">

              @include('Admin.Profile.create')


              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Profile BAPPEDA Kabupaten Ketapang</h2>
                    <a style="float: right;">
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#kategori"><i class="fa fa-plus-square"></i> Profile BAPPEDA</button>
                    </a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                          @foreach($list_profile as $profile)
                          <div class="card">
                            <div class="card-body">
                              <p class="card-text" style="text-align: justify;">{!! nl2br ($profile->konten) !!}</p>
                              <img style="width: 100%; margin-bottom: 20px;" src="{{url("public/$profile->foto")}}">
                              <div class="btn-group">
                              <center>
                              <a href="{{url('Admin/profile-bappeda/edit', $profile->id)}}">
                                <button type="button" class="btn btn-warning" style="width: 40px; border-radius: 5px"><i class="fa fa-edit"></i></button>
                              </a>
                              <div class="btn-group">
                                @include('Admin.template.utils.delete', ['url'=>url('Admin/profile-bappeda', $profile->id)])
                              </div>
                              </center>
                            </div>
                            </div>
                          </div>
                          <br>
                          @endforeach
                        </div>
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