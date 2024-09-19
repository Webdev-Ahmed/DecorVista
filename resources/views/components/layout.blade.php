@props(['title' => 'DecorVista | Interior Designer'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <title>{{ $title }}</title>
</head>
<body>

    <main>
        {{ $slot }}
    </main>

</body>
</html>
