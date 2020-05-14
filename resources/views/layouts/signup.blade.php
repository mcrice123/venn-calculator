<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Venn Calculator</title>

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo URL::to('/'); ?>/css/app.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body>
        @yield('content')

        <script src="<?php echo URL::to('/'); ?>/js/signup.js"></script>
    </body>
</html>
