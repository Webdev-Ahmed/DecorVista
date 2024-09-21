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
  <title>Register | DecorVista</title>
</head>
<body>
<main class="w-full mx-auto max-w-[1920px] relative">
  <section class="flex">
    <div class="w-[70%] max-md:w-full h-screen rounded-xl overflow-hidden rounded-l-none">
      <img src="images/pexels-fotios-photos-1090638.jpg" class="w-full h-full object-cover" alt="Register Image">
    </div>

    <form method="POST" action="/auth/register"
      class="flex flex-col max-md:w-full max-md:absolute max-md:h-full max-md:bg-white/80 w-[30%] p-8 justify-center">
      @csrf

      <h1 class="text-4xl text-center mb-6 font-bold tracking-tighter">Register</h1>

      <div class="flex gap-x-2">
        <div class="flex flex-col mb-4">
          <label for="firstName" class="text-sm">First Name:</label>
          <input placeholder="Enter your First Name"
            class="py-1.5 placeholder:text-sm placeholder:text-orange-950/40 w-full bg-orange-50/70 border-[1px] mt-2 border-orange-950/10 max-md:border-orange-950/60 rounded-full px-4"
            type="text" id="firstName" name="firstName" required>

          @error('firstName')
          <span class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        <div class="flex flex-col mb-4">
          <label for="lastName" class="text-sm">Last Name:</label>
          <input placeholder="Enter your Last Name (optional)"
            class="py-1.5 placeholder:text-sm placeholder:text-orange-950/40 w-full bg-orange-50/70 border-[1px] mt-2 border-orange-950/10 max-md:border-orange-950/60 rounded-full px-4"
            type="text" id="lastName" name="lastName">

          @error('lastName')
          <span class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="flex flex-col mb-4">
        <label for="username" class="text-sm">Username:</label>
        <input placeholder="Enter your username"
          class="py-1.5 placeholder:text-sm placeholder:text-orange-950/40 w-full bg-orange-50/70 border-[1px] mt-2 border-orange-950/10 max-md:border-orange-950/60 rounded-full px-4"
          type="text" id="username" name="username" required>

        @error('username')
        <span class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="flex flex-col mb-4">
        <label for="email" class="text-sm">Email:</label>
        <input placeholder="Enter your email"
          class="py-1.5 placeholder:text-sm placeholder:text-orange-950/40 w-full bg-orange-50/70 border-[1px] mt-2 border-orange-950/10 max-md:border-orange-950/60 rounded-full px-4"
          type="email" id="email" name="email" required>

        @error('email')
        <span class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="flex flex-col mb-4">
        <label for="password" class="text-sm">Password:</label>
        <input placeholder="Enter your password"
          class="py-1.5 placeholder:text-sm placeholder:text-orange-950/40 w-full bg-orange-50/70 border-[1px] mt-2 border-orange-950/10 max-md:border-orange-950/60 rounded-full px-4"
          type="password" id="password" name="password" required>

        @error('password')
        <span class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="flex flex-col mb-4">
        <label for="password_confirmation" class="text-sm">Confirm Password:</label>
        <input placeholder="Enter your password_confirmation"
          class="py-1.5 placeholder:text-sm placeholder:text-orange-950/40 w-full bg-orange-50/70 border-[1px] mt-2 border-orange-950/10 max-md:border-orange-950/60 rounded-full px-4"
          type="password" id="password_confirmation" name="password_confirmation" required>

        @error('password_confirmation')
        <span class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="flex text-sm ">
        <p>Already have an account?</p>
        &nbsp;
        <a href="/login" class="text-orange-500">Log in</a>
      </div>

      <button type="submit"
        class="px-4 py-2 hover:bg-neutral-950 hover:text-neutral-100 transition-colors rounded-full border-neutral-950 border-[1px] mt-2"
      type="submit">Register</button>
    </form>
  </section>
</main>
</body>
</html>
