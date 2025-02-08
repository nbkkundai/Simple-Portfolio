<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Add these lines -->
    @viteReactRefresh
    @vite(['resources/css/app.css'])
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @yield('head')
    @yield('styles')
    {{-- <style>
        :root {
            --header-height: 64px; /* Adjust this to match your header height */
        }
        .content {
            padding-top: var(--header-height);
            min-height: calc(100vh - var(--header-height));
        }
    </style> --}}
</head>
<body>
    <div id="main-content" class="main-content sidebar-collapsed">

        @include('.partials.header')
        <div class="content">
            @yield('content')
        </div>
        @include('.partials.footer')
    </div>

    @yield('scripts')
</body>
</html>
