<!doctype html>
<html lang="en">
<head>
    @yield('title')
    {{HTML::style('extensions/css/bootstrap.css')}}
    {{HTML::style('extensions/css/bootstrap-theme.css')}}
    {{HTML::script('extensions/js/jquery.js')}}
    {{HTML::script('extensions/js/bootstrap.js')}}
</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Meow! Cms</a>
            </div>
            <ul class="nav navbar-nav">
                @yield('navlist')
            </ul>
            @if(Auth::check())
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Exit</a></li>
                </ul>
            @endif
        </div>
    </nav>
</header>
@yield('content')
</body>
</html>
