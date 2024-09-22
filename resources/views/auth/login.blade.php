<x-layout class="!px-0">
  @if (Session::has('message'))
    <div
      class="absolute px-4 py-2 font-semibold top-4 left-1/2 -translate-x-1/2 rounded-xl flex text-lg bg-red-50 text-red-600">
      {{ Session::get('message') }}
    </div>
  @endif

  <section class="flex">
    <div class="w-[70%] max-md:w-[100%] h-screen rounded-xl overflow-hidden rounded-l-none">
      <img class="w-full h-full object-cover" src="images/pexels-fotios-photos-1090638.jpg" alt="Login Image">
    </div>

    <form method="POST" action="/auth/login"
      class="flex flex-col max-md:w-[100%] max-md:absolute max-md:bg-white/80 max-md:h-full w-[30%] p-8 justify-center">
      @csrf
      @method('POST')

      <h1 class="text-4xl text-center mb-6 font-bold tracking-tighter">Login</h1>

      <x-input name='username' required="required" type="text" placeholder='Enter your username'>Username</x-input>

      <x-input name='password' required="required" type="password" placeholder='Enter your password'>Password</x-input>


      <div class="flex text-sm">
        <p>Don't have an account?</p>
        &nbsp;
        <a href="/register" class="text-orange-500">Sign Up</a>
      </div>

      <button
        class="px-4 py-2 hover:bg-neutral-950 hover:text-neutral-100 transition-colors rounded-full border-neutral-950 border-[1px] mt-2"
        type="submit">Login</button>
    </form>
  </section>
</x-layout>
