<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title') | Venn Calculator</title>

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo URL::to('/'); ?>/css/app.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body>
        <div id="app">
            <div id="@yield('container')" class="page-container">
                <md-app md-waterfall md-mode="fixed">
                    <md-app-toolbar class="md-primary">
                        <h2 class="md-title">@yield('title')</h2>
                    </md-app-toolbar>

                    <md-app-drawer md-permanent="full">
                        <md-toolbar class="md-transparent" md-elevation="0">
                            <h1><strong>Venn Calculator</strong></h1>
                        </md-toolbar>

                        <md-list>
                            <md-list-item active-class="highlighted" href="/" exact>
                                <md-icon>home</md-icon>
                                <span class="md-list-item-text">Home</span>
                            </md-list-item>

                            <md-list-item href="/comparison">
                                <md-icon>bar_chart</md-icon>
                                <span class="md-list-item-text">Run Comparison</span>
                            </md-list-item>

                            <md-list-item href="/suppliers">
                                <md-icon>store</md-icon>
                                <span class="md-list-item-text">Suppliers</span>
                            </md-list-item>

                            <md-list-item href="/items">
                                <md-icon>list</md-icon>
                                <span class="md-list-item-text">Items</span>
                            </md-list-item>

                            <md-list-item href="/about">
                                <md-icon>portrait</md-icon>
                                <span class="md-list-item-text">About</span>
                            </md-list-item>

                            <md-list-item href="/logout" onclick="event.preventDefault(); console.log('LOging out!');
                                                            document.getElementById('logout-form').submit();">
                                <md-icon>exit_to_app</md-icon>
                                <span class="md-list-item-text">Log Out</span>
                                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                </form>
                            </md-list-item>
                        </md-list>
                    </md-app-drawer>
                    @yield('content')
                </md-app>
            </div>
        </div>

        <script src="<?php echo URL::to('/'); ?>/js/app.js"></script>
        <script>
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
        </script>
        <script src="<?php echo URL::to('/'); ?>/js/pages/@yield('container').js"></script>

    </body>
</html>
