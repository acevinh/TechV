<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Bootstrap 5.3.3 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-..." crossorigin="anonymous">
    

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}"/>
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
  
    <div class="fullwidth-template">
        {{-- slide --}}
        @include('clients.blocks.banner')
     
        {{-- brand --}}
        @include('clients.blocks.brand')
      
        {{-- hot --}}
        @include('clients.fields.hot')
       
{{-- flashsale --}}
@include('clients.fields.flashSale')
{{-- xiaomi --}}
@include('clients.fields.xiaoMi')
{{-- realme --}}
@include('clients.fields.realme')
{{-- iphone --}}
@include('clients.fields.iphone')
{{-- ipad --}}
@include('clients.fields.ipad')
{{-- samsung --}}
@include('clients.fields.samsung')
{{-- accessory --}}
@include('clients.fields.accessory')
{{-- reviewer --}}
@include('clients.fields.reviewer')
{{-- advisory --}}
@include('clients.fields.advisory')


        {{-- content --}}
        @yield('content')
    </div>
    {{-- footer --}}
    @include('clients.blocks.footer')
    <a href="#" class="backtotop active">
        <i class="fa fa-angle-up"></i>
    </a>
    @yield('js')

    <!-- Bootstrap 5.3.3 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>

    <script src="{{asset('assets/js/jquery-1.12.4.min.js')}}"></script>
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
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>