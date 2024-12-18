<html>
    <head>

        @php
            wp_head();
        @endphp

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&display=swap" rel="stylesheet">

    </head>

    <body {{ body_class('bg-blue') }}>

        <main class="text-cream font-unbounded font-normal container mx-auto px-4 py-10">
            @yield('content')
        </main>

        @php
            wp_footer();
        @endphp

    </body>
</html>
