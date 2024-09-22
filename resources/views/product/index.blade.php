<x-layout :nav="true">
  <section class="w-full max-h-[1080px] h-screen pt-16 pb-6 max-md:pb-4">
    <div class="w-full h-full relative rounded-xl overflow-hidden">
      <h1
        class="text-8xl max-lg:text-7xl max-md:text-6xl max-sm:text-5xl left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 absolute font-bold text-white z-[99]">
        Products</h1>
      <img src="{{ asset('images/pexels-linda-gschwentner-154780054-10924906.jpg') }}" alt="Home"
        class="w-full h-full object-cover filter brightness-75">
    </div>
  </section>

  <section
    class="w-full grid grid-cols-4 max-md:gap-4 mb-12 max-md:pb-4 max-lg:grid-cols-2 max-sm:grid-cols-1 max-xl:grid-cols-3 gap-2 h-auto">
    @foreach ($products as $product)
      <a href="/products/{{ $product->id }}">
        <div class="aspect-square bg-neutral-100 rounded-xl overflow-hidden p-3">
          <img src="{{ asset($product->imgUrl) }}" class="w-full h-[70%] object-cover rounded-lg" alt="">
          <div class="w-full overflow-hidden" id="p_info">
            <h1 class="mt-2 text-2xl font-semibold">
              {{ $product->name }}
            </h1>
            <p class="max-xl:text-sm text-base leading-5 max-xl:leading-4">
              {{ $product->description }}
            </p>
          </div>
        </div>
      </a>
    @endforeach
  </section>
</x-layout>

<x-footer></x-footer>

<style>
  #p_info {
    word-wrap: break-word;
  }
</style>
