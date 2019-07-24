<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','Second App')</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
<div class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{Route('home')}}">Weibo App</a>
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item"><a class="nav-link" href="{{Route('help')}}">帮助</a></li>
            <li class="nav-item"><a class="nav-link" href="{{Route('about')}}">关于</a></li>
        </ul>
    </div>

</div>
<div class="container">
    @yield('content')
</div>
</body>
</html>