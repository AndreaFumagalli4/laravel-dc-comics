<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            @yield('Guest-title')
        </title>
    </head>
    <body>

        @include('guest.partials.header')
        @include('guest.partials.jumbo')

        <main id="guest" class="p-3">
            @yield('guest-main-content')
        </main>

    </body>
</html>