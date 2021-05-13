<!DOCTYPE html>
<html lang="vi">
<header>
@include('inc.layout.partials.head')
@yield('before-css')
@include('inc.layout.partials.css')
@yield('after-css')
</header>
<body>
@include('inc.layout.partials.nav')

@yield('content')

@include('inc.layout.partials.footer')
@yield('before-script')
@include('inc.layout.partials.script')
@yield('after-script')
</body>
</html>
