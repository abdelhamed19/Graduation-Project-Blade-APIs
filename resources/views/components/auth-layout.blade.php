<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="{{ asset("https://fonts.googleapis.com") }}">
    <link rel="preconnect" href="{{ asset("https://fonts.gstatic.com") }}" crossorigin>
    <link href="{{ asset("https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800;900;1000&display=swap") }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/all.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>{{ $title }}</title>
</head>
<body>
    {{ $slot }}
    <script src="{{ asset("js/bootstrap.bundle.min.js")}}"></script>
</body>
</html>
