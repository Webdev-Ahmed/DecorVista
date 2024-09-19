@props(['title' => 'DecorVista | Interior Designer', 'nav' => false, 'class' => '', 'margin' => false])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <title>{{ $title }}</title>
</head>
<body>

    @if ($nav)
      <x-nav />
    @endif

    <main class="{{ $margin ? "mx-12" : "mx-0" }} {{ $class }}">
        {{ $slot }}
    </main>

</body>
</html>
