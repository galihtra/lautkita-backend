<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') &mdash; LautKita</title>
    <link rel="stylesheet" href="../vendors/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../css/style_landing_page.css">
</head>

<body>

    @yield('header')

    <!-- Content -->
    @yield('main')

    <!-- Footer -->
    @include('landing_pages.components.footer')

    <script src="../vendors/jquery/jquery.min.js"></script>
    <script src="../vendors/popper.js/popper.min.js"></script>
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>
