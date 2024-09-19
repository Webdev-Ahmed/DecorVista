<x-layout class="!px-0">
  <section class="flex">
    <div class="w-[70%] max-md:w-full h-screen rounded-xl overflow-hidden rounded-l-none">
      <img src="images/pexels-fotios-photos-1090638.jpg" class="w-full h-full object-cover" alt="Register Image">
    </div>

    <form method="POST" action="/register"
      class="flex flex-col max-md:w-full max-md:absolute max-md:h-full max-md:bg-white/80 w-[30%] p-8 justify-center">
      @csrf
      @method('POST')

      <h1 class="text-4xl text-center mb-6 font-bold tracking-tighter">Appoint a desginer</h1>

      <x-input name='name' required="required" type="text" placeholder='Enter your name'>Name</x-input>
      <x-input name='username' required="required" type="text" placeholder='Enter your username'>Username</x-input>
      <x-input name='email' required="required" type="email" placeholder='Enter your email'>Email</x-input>
      <x-input name='password' required="required" type="password" placeholder='Enter your password'>Password</x-input>
      <x-input name='password_confirmation' required="required" type="password" placeholder='Confirm Password'>Confirm
        Password</x-input>

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
</x-layout>
