<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Aero Admin Template')</title>
    <!-- FontAwsome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <link rel="stylesheet" href="{{asset('Assets/css/bootstrap.min.css')}}"> -->

    <!-- Google chart CDN -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- Plugins css -->
    <link rel="stylesheet" href="{{ asset('Assets/css/c3.min.css') }}" type="text/css">
    <!-- Core css -->
    <link rel="stylesheet" href="{{ asset('Assets/css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Assets/css/theme1.css') }}" type="text/css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('Assets/css/theme_style.css') }}" type="text/css">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

   
</head>

<body class="font-sans antialiased">
    @yield('content')



    <!-- bootstrap cdn JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- FontAwsome JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
        integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jQuery CDN-->
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <!-- <script src="{{asset('Assets/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('Assets/js/jquery.min.js')}}"></script> -->

    <!-- Vendor js -->
    <script src="{{asset('Assets/js/lib.vendor.bundle.js')}}"></script>
    <!-- counterUp js -->
    <script src="{{asset('Assets/js/counterup.bundle.js')}}"></script>
    <!-- Core JS -->
    <script src="{{asset('Assets/js/core.js')}}"></script>
    <script src="{{asset('Assets/js/project-index.js')}}"></script>
    <script src="{{asset('Assets/js/donught.js')}}"></script>

    <script>
    $(document).ready(function() {
        //success message autohide
        setTimeout(function() {
            $(".errorMsg").fadeOut('slow')
        }, 2000);
    });
    </script>
</body>

</html>