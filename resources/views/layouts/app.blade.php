<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="192x192" href="https://buzzvel.com/favicon-96x96.png">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="https://preview.colorlib.com/theme/bft/bootstrap-footer-17/css/A.ionicons.min.css+style.css,Mcc.bnVW-mDmyB.css.pagespeed.cf.imjSJubmRP.css" />

        <title>Weekend</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        @stack('styles')

    </head>
    <body>

        <div class="container">
            @yield('content')
        </div>

        @include('components.footer.footer')

        @stack('scripts')
    </body>
</html>
