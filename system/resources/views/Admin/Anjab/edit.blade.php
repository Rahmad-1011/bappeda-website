@extends('Admin.template.Base.base')
@section('content')

<div class="row">
  <div class="x_panel">
    <div class="x_title">
      <h2>Edit Data ANJAB</h2>
        <a class="btn btn-primary" href="{{url('Admin/anjab')}}" style="float: right; border-radius: 10px; background-color:  #2A3F54; color: #ECF0F1;">
          <i class="fa fa-arrow-left"></i> Kembali
        </a>
      <div class="clearfix"></div>
    </div>
                  <div class="x_content">
                      <form method="POST" action="{{url('Admin/anjab/simpan', $anjab->id)}}" enctype="multipart/form-data">
                         @method("PUT")
                         @csrf
                         <div class="item form-group">
                           <div class="col-md-12 col-sm-12 ">
                             <label class="col-form-label col-md-12 col-sm-12" for="nama">Nama ANJAB
                             </label>
                             <input type="text" id="nama" name="nama" value="{{$anjab->nama}}" required="required" class="form-control">
                           </div>
                         </div>
                         <div class="item form-group">
                           <div class="col-md-12 col-sm-12 ">
                             <label class="col-form-label col-md-12 col-sm-12" for="file">Lampirkan File
                             </label>
                             <input type="file" id="file" name="file">
                           </div>
                         </div>
                         <div class="ln_solid"></div>
                         <div class="item form-group">
                           <div class="col-md-12 col-sm-12 offset-md-12">
                             <button type="submit" class="btn btn-success" style="float: right;"><i class="fa fa-check"></i> Simpan</button>
                           </div>
                         </div>

                       </form>
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
      $('#edit').summernote();
    });
  </script>
@endpush