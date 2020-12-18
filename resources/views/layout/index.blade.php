<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Tim tro |  @yield('title')</title>
        <base href = "{{asset('')}}">
        <link rel="stylesheet" type="text/css" href="css/style-index.css">
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" data-auto-a11y="true"></script>
        <link rel="stylesheet" href=".https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href=".https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        
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
</html>