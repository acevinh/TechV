<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamingtheme.kiendaotac.com/html/kobolg/home-04.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Dec 2024 19:22:04 GMT -->
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/chosen.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.scrollbar.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/lightbox.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/flaticon.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/megamenu.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dreaming-attribute.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}"/>
    @yield('css')
    <title>Kobolg - HTML Template </title>
</head>
<body>
    {{-- header --}}
@include('clients.blocks.header')
    {{-- end header --}}
<div class="fullwidth-template">
    {{-- slide --}}
    @include('clients.blocks.banner')
    {{-- endslide --}}
{{-- brand --}}
@include('clients.blocks.brand')
{{-- end brand --}}
    {{-- content --}}
   
    @yield('content')

</div>
{{-- footer --}}
@include('clients.blocks.footer')
<a href="#" class="backtotop active">
    <i class="fa fa-angle-up"></i>
</a>
@yield('js')
<script src="{{asset('assets/js/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/chosen.min.js')}}"></script>
<script src="{{asset('assets/js/countdown.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/lightbox.min.js')}}"></script>
<script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/slick.js')}}"></script>
<script src="{{asset('assets/js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('assets/js/threesixty.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/mobilemenu.js')}}"></script>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>


<script src="{{asset('assets/js/functions.js')}}"></script>
</body>

<!-- Mirrored from dreamingtheme.kiendaotac.com/html/kobolg/home-04.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Dec 2024 19:22:07 GMT -->
</html>