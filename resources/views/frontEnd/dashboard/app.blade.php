<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link href="{{ asset('frontEnd/user/css/styles.css') }}" rel="stylesheet" />
        <script src="{{ asset('frontEnd/user/js/all.min.js') }}" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        @include('frontEnd.dashboard.include.header')
        <div id="layoutSidenav">
            @include('frontEnd.dashboard.include.left-menu')
            <div id="layoutSidenav_content">
                @yield('content')
                @include('frontEnd.dashboard.include.footer')
            </div>
        </div>
        <script src="{{ asset('frontEnd/user/js/jquery-3.4.1.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('frontEnd/user/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('frontEnd/user/js/scripts.js') }}"></script>
        <script src="{{ asset('frontEnd/user/js/Chart.min.js') }}" crossorigin="anonymous"></script>
        <!--image instant Show script-->
          <script type="text/javascript">
            $(document).ready(function(){
              $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                  $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
              });
            });
          </script>
    </body>
</html>
