<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Lancers') }} - @yield('title')</title>

    {{--  <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>  --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset('favicon.png') }}">


    <!-- Styles -->
    {{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}


   {{--  //inline styles  --}}

    @yield('styles')

</head>
<body>

    {{--  //top navigation bar  --}}
    @yield('header')

    {{--  //sidebar  --}}
    @auth
       @yield('sidebar')
    @endauth

    {{-- //the content --}}


    @yield('content')

    @yield('footer')


    {{--  //scripts  --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <script>
      $("#image_selecter").on("click", function() {
        $("#picture").trigger("click");
      });


     function image1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image_selecter')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(100);
            };

            reader.readAsDataURL(input.files[0]);
        }
   var upload_button = document.getElementById("picture_upload");
   upload_button.style.display = "block";
    }

    </script>

   {{--  // inline scrpt  --}}

   @yield('script')

</body>
<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });
</script>
</html>
