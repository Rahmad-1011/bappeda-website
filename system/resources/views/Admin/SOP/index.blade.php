@extends('Admin.template.Base.base')
@section('content')

            <div class="page-title">
              <div class="col-md-12 col-ms-12">
                @include('Admin.template.utils.notif')
              </div>
              <div class="title_left">
                <h3><b>SOP</b></h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">

              @include('Admin.SOP.create')


              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar SOP</h2>
                    <a style="float: right;">
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#create"><i class="fa fa-plus-square"></i> SOP</button>
                    </a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                        @foreach($list_sop as $sop)
                        <div class="col-md-3">
                          <div class="card">
                            <div class="thumbnail">
                              <div class="image view view-first">
                                <center>
                                <img style="display: block; width: 100px; margin-top: 10px;" src="{{url('public')}}/images/files.png" class="img-fluid" />
                                </center>
                                <div class="mask">
                                  @include('Admin.template.utils.delete', ['url'=>url('Admin/sop', $sop->id)])
                                  <div class="tools tools-bottom">
                                    <a href="{{url('Admin/sop/edit', $sop->id)}}"><i class="fa fa-pencil"></i></a>
                                    <a id="detail" class="btn btn-primary btn-xs" 
                                        data-toggle="modal" data-target="#modal-detail-{{$sop->id}}"
                                    ><i class="fa fa-eye"></i></a>
                                  </div>
                                </div>
                              </div>
                              <div class="caption">
                                <p style="text-align: center;">{{$sop->nama}}</p>
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

<!-- Large modal -->
@foreach($list_sop as $sop)
<div class="modal fade bd-example-modal-lg" id="modal-detail-{{$sop->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detail SOP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="nama"><strong>SOP :</strong> {{$sop->nama}}, <span>{{$sop->created_at->diffForHumans()}}</span></p>
        <iframe style="width: 100%; height: 650px" src="{{"/public/$sop->file"}}" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</div>
@endforeach


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