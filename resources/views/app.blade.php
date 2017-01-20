<!DOCTYPE html>
<html lang="en" ng-app="articleApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token()}}">
        <title>Laravel</title>
        {!! Html::style('css/app.css') !!}
        {!! Html::style('bootstrap/css/bootstrap.min.css') !!}
        {!! Html::style('css/bootstrap-switch.min.css') !!}
        {!! Html::style('css/style.css') !!}

        <!-- Fonts -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body ng-controller="articleCtrl">
        <!--      @{{ yo }}--> {{-- This will be considered as angular's expression an not laravel blade --}}
        {{-- 'this is comment' --}}
      
        @include('menu')
        @yield('content')
        <!-- Scripts -->
        {!! Html::script('script/jquery-2.2.3.min.js'); !!}
        {!! Html::script('bootstrap/js/bootstrap.min.js'); !!}
        {!! Html::script('angular/angular.min.js'); !!}
        {!! Html::script('script/isotope.pkgd.min.js'); !!}
        {!! Html::script('script/packery-mode.pkgd.min.js'); !!}
        {!! Html::script('script/jquery.infinitescroll.min.js'); !!}
        {!! Html::script('script/bootstrap-switch.min.js'); !!}    
        {!! Html::script('script/app.js'); !!}    
        {!! Html::script('script/script.js'); !!}    
        {!! Html::script('script/angular-utils-pagination/dirPagination.js'); !!}    
        <script type="text/javascript">
            var APP_URL = {!! json_encode(url('/')) !!};
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
        </script>
    </body>
</html>