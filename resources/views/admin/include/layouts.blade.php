<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/assets/frontend/css/styles.css" rel="stylesheet"/>
</head>
<body>
<!-- Responsive navbar-->
@include('admin.include.header')
<!-- Page header with logo and tagline-->
<!-- Page content-->
<div class="container" style="min-height: 550px;">
    <div class="row">
        @yield('content')
    </div>
</div>
<!-- Footer-->
@include('admin.include.footer')
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="/assets/frontend/js/scripts.js"></script>
</body>
</html>
