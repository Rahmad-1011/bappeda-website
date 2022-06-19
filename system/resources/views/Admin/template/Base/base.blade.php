<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BAPPEDA Ketapang</title>

    <!-- Bootstrap -->
    <link href="{{url('public')}}/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('public')}}/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('public')}}/assets/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{url('public')}}/assets/build/css/custom.min.css" rel="stylesheet">

    <link href="{{url('public')}}/assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">


    <style>
        .float-right{
            float: right;
        }
        .bg-base{
            background-color: #2A3F54;
            color: #fff;
        }
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('Admin.template.Base.sidebar')

        <!-- top navigation -->
        @include('Admin.template.Base.navbar')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="background-color: #DCDCDC">
          <div class="">
            @yield('content')
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('Admin.template.Base.footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{url('public')}}/assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{url('public')}}/assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="{{url('public')}}/assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{url('public')}}/assets/vendors/nprogress/nprogress.js"></script>

    <script src="{{url('public')}}/assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="{{url('public')}}/assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{url('public')}}/assets/vendors/pdfmake/build/vfs_fonts.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="{{url('public')}}/assets/build/js/custom.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#summernote').summernote();
        });
    </script>

  </body>
</html>

