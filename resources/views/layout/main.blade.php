<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="body_wrapper">
            @include('includes.header')
            <!--main-->
            <main class="mainPageContent">
                @yield('content')
            </main>
            @include('includes.footer')
        </div>
        <div class="black_bg Fixed"></div>
        @include('includes.footer-script')
    </body>
</html>
