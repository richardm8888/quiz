<html>
    <head>
        <title>@yield('title')</title>
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