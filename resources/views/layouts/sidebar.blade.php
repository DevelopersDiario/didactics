<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>

    <header>
        @include('includes.header')
    </header>

    <main>
        @yield('content')    

        <div class="sidebar">
            this is the sidebar
        </div>
    </main>

    <footer>
        @include('includes.footer')
    </footer>

    {{-- JS --}}
</body>
</html>