<html>
    <body>
        @include('header')

        @include('sidebar')

        @yield('content')

        <footer class="footer flexbox-container">
            @include('footer')
        </footer>
    </body>
</html>