<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @include('includes.styles')

    <title>@yield('title')</title>

</head>

<body>
    <main>

        @yield('content')

    </main>


    <!-- Script-->

            @include('includes.scripts')

    <!-- Last Script -->

</body>

</html>
