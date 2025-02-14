<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layouts.meta_tag')
</head>
<body style="font-family: 'Noto Serif Bengali', serif;">
<!-- Page Heading -->
    <header>
        @yield('header-message-above')
        @include('frontend.layouts.header')
    </header>
   
<!-- Page Body Message -->
    <main>
        @yield('body-message')
    </main>
<!-- Page Footer -->
    <footer class="bg-white rounded-lg shadow-sm dark:bg-gray-900 m-4">
        @include('frontend.layouts.footer')
    </footer>
</body>
</html>