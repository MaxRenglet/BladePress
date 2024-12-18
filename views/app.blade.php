<html>
<head>

@php
    wp_head();
@endphp

</head>

<body {{ body_class() }}>
    
<main>
    @yield('content')
</main>


@php
    wp_footer();
@endphp


</body>
</html>

