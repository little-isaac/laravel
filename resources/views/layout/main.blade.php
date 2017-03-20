<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo env('APP_NAME'); ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>
     window.theme = window.theme || {};
window.cn = function (o) {
    return"undefined" == typeof o || null == o || "" == o.toString().trim()
};
</script>
<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,600" rel="stylesheet">
<link href="{{ URL::asset('css/style.css') }}?t=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        @include('includes.header')
        <main class="mainPageContent">
        @yield('content')
        </main>
        @include('includes.footer')
        @include('includes.footer-script')
    </body>
</html>
