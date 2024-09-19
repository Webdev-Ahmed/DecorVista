<x-layout>
  <section class="flex">
    <div class="w-[70%] h-screen rounded-xl overflow-hidden rounded-l-none">
      <img class="w-full h-full object-cover" src="images/pexels-fotios-photos-1090638.jpg" alt="Login Image">
    </div>

    <form method="POST" action="/login" class="flex flex-col w-[30%] p-8 justify-center">
      @csrf
      @method("POST")

      <h1 class="text-4xl text-center mb-6 font-bold tracking-tighter">Login</h1>

      <div class="flex flex-col mb-4">
        <label for="username" class="text-sm">Username:</label>
        <input placeholder="Enter your username" class="py-1.5 placeholder:text-sm placeholder:text-orange-950/40 w-full bg-orange-50/70 border-[1px] mt-2 border-orange-950/10 rounded-full px-4" type="text" id="username" name="username" required>
      </div>

      <div class="flex flex-col mb-2">
        <label for="password"  class="text-sm">Password:</label>
        <input placeholder="Enter your password" class="py-1.5 placeholder:text-sm placeholder:text-orange-950/40 w-full bg-orange-50/70 border-[1px] mt-2 border-orange-950/10 rounded-full px-4" type="text" id="password" name="password" required>
      </div>

      <div class="flex text-sm">
        <p>Don't have an account?</p>
        &nbsp;
        <a href="/register" class="text-orange-500">Sign Up</a>
      </div>

      <button class="px-4 py-2 hover:bg-neutral-950 hover:text-neutral-100 transition-colors rounded-full border-neutral-950 border-[1px] mt-2" type="submit">Login</button>
    </form>
  </section>
</x-layout>
