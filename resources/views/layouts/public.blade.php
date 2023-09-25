<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="public/images/favicon.ico" type="image/x-icon">
    <title>DC Comics</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])


</head>
<body>

    @include("partials.header")

    @yield('content')
    
</body>
</html>