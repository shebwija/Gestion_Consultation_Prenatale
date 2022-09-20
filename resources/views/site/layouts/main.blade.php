<!DOCTYPE html>
<html lang="fr">

<head>
    @include('site.layouts.style')
</head>

<body>
    @include('site.require.header')

    @yield('content')

    @include('site.require.footer')

    @include('site.layouts.js')
</body>

</html>
