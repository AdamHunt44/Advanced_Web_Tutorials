<!DOCTYPE html><html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        @yield ('page_title', 'Guestbook')
    </title>
    <!-- Stylesheets here -->
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/guestbook.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="title">
        @yield ('page_heading', 'Guestbook')
    </h1>
    @yield ('content')
</div>

<!-- Scripts here -->

</body>
</html>
