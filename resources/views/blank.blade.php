<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    @vite('resources/css/app.css')
    @fluxStyles
</head>
<body>
@yield('content')
@fluxScripts
</body>
</html>
