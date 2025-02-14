<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layouts.meta_tag')
</head>
<body style="font-family: 'Noto Serif Bengali', serif;">
<!-- Page Heading -->
    <!-- Page Heading -->
    <header class="bg-white dark:bg-gray-800 shadow">
            @yield('app-header')
    </header>
   
<!-- Page Body Message -->
    <main>
        @yield('app-body-message')
    </main>
<!-- Page Footer -->
    <footer class="bg-white rounded-lg shadow-sm dark:bg-gray-900 m-4">
        @include('frontend.layouts.footer')
    </footer>
</body>
</html>