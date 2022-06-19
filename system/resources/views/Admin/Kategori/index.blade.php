@extends('Admin.template.Base.base')
@section('content')

            <div class="page-title">
              <div class="col-md-12 col-ms-12">
                @include('Admin.template.utils.notif')
              </div>
              <div class="title_left">
                <h3><b>KATEGORI</b></h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">

              @include('Admin.Kategori.create')


              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Kategori</h2>
                    <a style="float: right;">
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#kategori"><i class="fa fa-plus-square"></i> Kategori</button>
                    </a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable-fixed-header" class="table table-striped table-borderedless table-hover" style="width:100%">
                      <thead>
                        <tr style="text-align: center;">
                          <th style="width: 30px;">No</th>
                          <th style="width: 90px;">Menu</th>
                          <th>Nama</th>
                          <th style="width: 30px;">#</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach($list_kategori as $kategori)
                        <tr>
                          <td style="width: 50px;">{{$loop->iteration}}</td>
                          <td>
                            <div class="btn-group">
                              <center>
                              <a href="{{url('Admin/kategori/edit', $kategori->id)}}">
                                <button type="button" class="btn btn-warning" style="width: 40px;"><i class="fa fa-edit"></i></button>
                              </a>
                              <a href="{{url('Admin/kategori', $kategori->id)}}">
                                <button class="btn btn-info" style="width: 40px;"><i class="fa fa-info"></i></button>
                              </a>
                              </center>
                            </div>
                          </td>
                          <td>{{$kategori->nama}}</td>
                          <td>
                            <center>
                            <div class="btn-group">
                              @include('Admin.template.utils.delete', ['url'=>url('Admin/kategori', $kategori->id)])
                            </div>
                            </center>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
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