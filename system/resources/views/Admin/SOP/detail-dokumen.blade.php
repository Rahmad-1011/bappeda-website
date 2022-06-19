@extends('Admin.template.Base.base')
@section('content')

<div class="row">
  <div class="x_panel">
    <div class="x_title">
      <h2>Edit Data SOP</h2>
        <a class="btn btn-primary" href="{{url('Admin/sop')}}" style="float: right; border-radius: 10px; background-color:  #2A3F54; color: #ECF0F1;">
          <i class="fa fa-arrow-left"></i> Kembali
        </a>
      <div class="clearfix"></div>
    </div>
                  <div class="x_content">
                      <iframe style="width: 100%; height: 2000px" src="{{"/public/$sop->file"}}"></iframe>
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