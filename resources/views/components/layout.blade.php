@props(['title' => 'DecorVista | Interior Designer', 'nav' => false, 'class' => '', 'margin' => false])

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
    rel="stylesheet">
  @vite(['resources/js/app.js', 'resources/css/app.css'])
  <title>{{ $title }}</title>
</head>

<body>

  @if ($nav)
    <x-nav />
  @endif

  <main class="px-12 max-md:px-4 w-full mx-auto max-w-[1920px] relative {{ $class }}">
    {{ $slot }}
  </main>

</body>

</html>
