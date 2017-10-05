<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')

    {{-- CSS --}}
    @include('includes.styles')
</head>
<body>

    <header>
        @include('includes.header')
    </header>

    <main>
        @yield('content')    
    </main>

    <footer>
        @include('includes.footer')
    </footer>

    {{-- JS --}}
    @include('includes.scripts')
</body>
</html>