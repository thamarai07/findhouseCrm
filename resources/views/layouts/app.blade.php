<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <!-- Include your CSS and other head elements here -->
        @vite('resources/css/app.css')
        <script src="https://ajax.googleapis.com/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body class="flex">
        @include('partials.sidebar')
        <div class="w-[100%]">
            <div class="">
                @yield('content') 
            </div>
        </div>
        @include('partials.footer')
    </body>
</html>
