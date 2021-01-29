@include('layouts.header')
<body class="home-style7">
<!--Preloader area start here-->
{{--<div id="loader" class="loader">--}}
{{--<div class="loader-container">--}}
{{--<div class='loader-icon'>--}}
{{--<img src="assets/images/pre-logo.png" alt="">--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
@include('layouts.menu')
<!--Preloader area End here-->
<div class="main-content">
    @yield('content')
</div>
@include('layouts.footer')
</body>
</html>
