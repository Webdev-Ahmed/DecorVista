<x-layout :nav="true">
  <section class="w-full max-h-[1080px] flex gap-4 h-screen pt-16 pb-6">
    <div class="w-[50%] h-full flex items-center justify-center overflow-hidden">
      <img src="{{ asset($product->imgUrl) }}" class="w-[500px] h-[500px] rounded-xl object-cover" alt="">
    </div>
    <div class="w-[50%] h-full flex flex-col justify-center">
      <button
        class="px-2 py-1 text-sm my-4 w-fit hover:bg-neutral-950 hover:text-neutral-100 transition-colors rounded-full border-neutral-950 border-[1px]">
        {{ $product->brand }}</button>
      <h1 class="text-xl font-semibold">{{ $product->name }}</h1>
      @if ($product->discount != null)
        <div class="flex gap-x-6">
          <h1 class="text-2xl my-2 line-through text-neutral-700">Rs. {{ number_format($product->price) }}</h1>
          <h1 class="text-2xl my-2 text-red-700">Rs.
            {{ number_format($product->price - $product->price * ($product->discount / 100)) }}
          </h1>
        </div>
      @else
        <h1 class="text-2xl my-2 text-red-700">Rs. {{ number_format($product->price) }}</h1>
      @endif
      <p class="text-base max-w-[55ch] break-words">{{ $product->description }}</p>
      <button
        class="px-4 py-2 my-4 w-fit hover:bg-neutral-950 hover:text-neutral-100 transition-colors rounded-full border-neutral-950 border-[1px]">
        Add to Cart</button>
    </div>
  </section>
</x-layout>
