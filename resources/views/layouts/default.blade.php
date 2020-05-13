<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

@include('includes.style')

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    {{-- SIDEBAR --}}
@include('includes.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

@include('includes.topbar')

        <!-- Begin Page Content -->
        <div class="container-fluid">


           {{-- isi Content --}}
           @yield('content')

           

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

@include('includes.footer')

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
@include('includes.modal')

 {{-- SCRIPT --}}
@include('includes.scripts')

</body>

</html>
