<!doctype html>
<html @php(language_attributes())>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        @php(do_action('get_header')) 
        @php(wp_head()) 
        @vite([ 'resources/css/icon.min.css', 'resources/css/app.css', 'resources/css/main.scss', 'resources/js/jquery.js', 'resources/js/app.js' ])
    </head>
    <body @php(body_class())> 
        @php(wp_body_open()) 
        @include('sections.header') 
        <main class="section-main">
            
            @yield('content')

        </main> 
        @include('sections.footer') 
        @php(do_action('get_footer')) 
        @php(wp_footer()) 
        @yield('scripts')
    </body>
</html>