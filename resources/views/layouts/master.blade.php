<html>
    <head>
        <title>@yield('title')</title>

        <link rel="stylesheet" href="/assets/css/style.css" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

        <script src="/assets/js/app.js"></script>
    </head>
    <body>
        @section('menu')
            This is the master menu.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>