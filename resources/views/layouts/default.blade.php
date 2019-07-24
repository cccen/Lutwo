<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','Second App')</title>
</head>
<body>
<div class="navbar-dark navbar-nav">
    <div class="container">
        <a class="navbar-brand" href="{{Route('home')}}">Weibo App</a>
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item"><a href="{{Route('help')}}">帮助</a></li>
            <li class="nav-item"><a href="{{Route('about')}}">关于</a></li>
        </ul>
    </div>

</div>
<div class="container">
    @yield('content')
</div>
</body>
</html>