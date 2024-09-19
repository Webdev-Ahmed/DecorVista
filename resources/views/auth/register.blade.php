<x-layout>
  <section class="flex">
    <div class="w-[70%] h-screen rounded-xl overflow-hidden rounded-l-none">
      <img src="images/pexels-fotios-photos-1090638.jpg" class="w-full h-full object-cover" alt="Register Image">
    </div>

    <form method="POST" action="/register" class="flex flex-col w-[30%] p-8 justify-center">
      @csrf
      @method("POST")

      <h1 class="text-4xl text-center mb-6 font-bold tracking-tighter">Register</h1>

      <div class="flex flex-col mb-4">
        <label for="name" class="text-sm">Name:</label>
        <input placeholder="Enter your name" class="px-2 py-1.5 w-full placeholder:text-sm placeholder:text-emerald-950/40 bg-emerald-50 rounded-lg mt-2" type="text" id="name" name="name" required>
      </div>

      <div class="flex flex-col mb-4">
        <label for="username" class="text-sm">Username:</label>
        <input placeholder="Enter your username" class="px-2 py-1.5 w-full placeholder:text-sm placeholder:text-emerald-950/40 bg-emerald-50 rounded-lg mt-2" type="text" id="username" name="username" required>
      </div>

      <div class="flex flex-col mb-4">
        <label for="email" class="text-sm">Email:</label>
        <input placeholder="Enter your email" class="px-2 py-1.5 w-full placeholder:text-sm placeholder:text-emerald-950/40 bg-emerald-50 rounded-lg mt-2" type="text" id="email" name="email" required>
      </div>

      <div class="flex flex-col mb-4">
        <label for="password"  class="text-sm">Password:</label>
        <input placeholder="Enter your password" class="px-2 py-1.5 w-full placeholder:text-sm placeholder:text-emerald-950/40 bg-emerald-50 rounded-lg mt-2" type="text" id="password" name="password" required>
      </div>

      <div class="flex flex-col mb-2">
        <label for="password_confirmation"  class="text-sm">Confirm Password:</label>
        <input placeholder="Confirm Password" class="px-2 py-1.5 w-full placeholder:text-sm placeholder:text-emerald-950/40 bg-emerald-50 rounded-lg mt-2" type="text" id="password_confirmation" name="password_confirmation" required>
      </div>

      <div class="flex text-sm ">
        <p>Already have an account?</p>
        &nbsp;
        <a href="/login" class="text-emerald-500">Log in</a>
      </div>

      <button class="w-full bg-emerald-500 p-2 rounded-lg mt-2 hover:bg-emerald-600 transition-colors text-white">Sign Up</button>
    </form>
  </section>
</x-layout>
