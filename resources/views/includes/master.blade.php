<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container-fluid fluid-bg">
    <div class="container">
            @include('includes.header')
    </div>
</div>
<div class="container mrg-tp">
            @yield('content')
</div>
            @include('includes.script')
    <!--footer  >
        @include('includes.footer')
    </footer-->


</body>
</html>
 