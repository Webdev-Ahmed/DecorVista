<x-layout class="flex" :nav="true">
  <x-sidebar></x-sidebar>

  <section class="ml-10 w-full max-h-[1080px] h-screen pt-20 pb-6">
    <span class="font-extrabold uppercase text-black/40">Name:</span>
    <div class="flex gap-x-2 text-4xl mb-6">
      <h1>{{ session('user.firstName') }}</h1>
      <h1>{{ session('user.lastName') }}</h1>
    </div>
    <span class="font-extrabold uppercase text-black/40">Email:</span>
    <div class="flex gap-x-2 text-4xl mb-6">
      <h1>{{ session('user.email') }}</h1>
    </div>
    <span class="font-extrabold uppercase text-black/40">Role:</span>
    <div class="flex gap-x-2 text-4xl">
      <h1 class="capitalize">{{ session('user.role') }}</h1>
    </div>
    <a href="/panel/edit-user/{{ session('user.id') }}"><button
        class="px-4 py-2 mt-6 w-fit hover:bg-neutral-950 hover:text-neutral-100 transition-colors rounded-full border-neutral-950 border-[1px]">Edit
        Account Info</button></a>
  </section>
</x-layout>
