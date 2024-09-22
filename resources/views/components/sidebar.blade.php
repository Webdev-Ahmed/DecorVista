<section class="w-fit max-h-[1080px] h-screen pt-16 pb-6">
  <aside class="!bg-gray-50 rounded-xl w-[300px] h-full z-[99] relative">
    <ul class="w-full p-3 space-y-3 flex flex-col">
      <a class="bg-gray-100 {{ request()->is('panel') ? 'bg-orange-200/40' : '' }} rounded-lg py-3 px-4"
        href="/panel">Profile</a>

      @if (session('user.role') == 'admin')
        <a class="bg-gray-100 {{ request()->is('panel/user') ? 'bg-orange-200/40' : '' }} rounded-lg py-3 px-4"
          href="/panel/user">User</a>
      @endif

      @if (session('user.role') == 'admin')
        <a class="bg-gray-100 {{ request()->is('panel/products') ? 'bg-orange-200/40' : '' }} rounded-lg py-3 px-4"
          href="/panel/products">Products</a>
      @endif
    </ul>
  </aside>
</section>
