<!-- 保存在 resources/views/layouts/app.blade.php 文件中 -->

<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('sidebar')
    This is the master 页面
@show

@section('header')
    <div>
        <p>hahahahhahha</p>
    </div>
@show
<div class="container">
    @yield('content')
</div>
</body>

<script>@yield('script') </script>
</html>
