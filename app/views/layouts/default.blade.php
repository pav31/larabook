<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Larabook</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css">
</head>
<body>

    @include('layouts.partials.nav')

    <div class="container">
        @include('flash::message')

        @yield('content')
    </div>


    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script>$('#flash-overlay-modal').modal();</script>

</body>
</html>