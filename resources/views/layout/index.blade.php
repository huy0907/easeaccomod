<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Tim tro |  @yield('title')</title>
        <base href = "{{asset('')}}">
        <link rel="stylesheet" type="text/css" href="css/style-index.css">
        <script src = "https://code.jquery.com/jquery-3.5.1.min.js" type = "text/javascript"></script> 
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" data-auto-a11y="true"></script>
        @yield('css')
    </head>
    <body>
        <div class="page main">
            <!-- HEADER -->
            @include('layout.header')
            <!--HEADER-->
            <!--MAIN-->
            @yield('content')
            <!--CONTACT-->
            <!--FOOTER-->
            @include('layout.footer')
            <!--FOOTer-->
        </div>
    </body>
    @yield('script')
</html>