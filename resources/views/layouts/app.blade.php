<!doctype html>
<html lang='en'>

<head>

    <title> @yield('page-title') </title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

</head>

<body class='debug'>

    @include('partials.header')

    @include("partials.jumbo")

    <main>
        @yield('page-main')
    </main>

    @include('partials.footer')


</body>

</html>