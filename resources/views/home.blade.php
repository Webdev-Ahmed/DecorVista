<x-layout :margin="true" :nav="true">
  <section class="w-full h-screen pt-16 pb-6">
    <div class="w-full h-full relative rounded-xl overflow-hidden">
      <h1 class="text-8xl left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 absolute font-bold text-white z-[99]">Contemporary.</h1>
      <img src="images/pexels-charlotte-may-5825527.jpg" alt="Home" class="w-full h-full filter brightness-75">
    </div>
  </section>

  <section class="flex gap-6 h-[600px]">
    <div class="rounded-xl overflow-hidden w-[75%]">
      <img src="images/pexels-fotoaibe-1571460.jpg" class="w-full h-full" alt="">
    </div>
    <div class="w-[35%] h-full flex flex-col gap-6">
      <div class="h-[auto] w-full bg-orange-100 rounded-xl p-8">
        <button class="px-4 py-2 hover:bg-neutral-950 hover:text-neutral-100 transition-colors rounded-full border-neutral-950 border-[1px]">Aesthetic</button>
        <p class="mt-4 text-xl font-medium leading-relaxed">
          Aesthetic Interior where every piece <br> tells a story of style.
        </p>
        <h1 class="font-bold text-5xl mt-7">Into a gallery of elegence</h1>
      </div>
      <div class="h-full rounded-xl overflow-hidden">
        <img src="images/pexels-valeriya-1129413.jpg" alt="">
      </div>
    </div>
  </section>

  <section class="flex py-16 px-[15%] justify-between">
    <div class="flex flex-col gap-y-3">
      <h1 class="text-7xl font-semibold">500+</h1>
      <p class="text-neutral-950/50 text-lg">Products</p>
    </div>
    <div class="flex flex-col gap-y-3">
      <h1 class="text-7xl font-semibold">20+</h1>
      <p class="text-neutral-950/50 text-lg">Designers</p>
    </div>
    <div class="flex flex-col gap-y-3">
      <h1 class="text-7xl font-semibold">50+</h1>
      <p class="text-neutral-950/50 text-lg">Satisfied Customers</p>
    </div>
    <div class="flex flex-col gap-y-3">
      <h1 class="text-7xl font-semibold">1<sup>st</sup></h1>
      <p class="text-neutral-950/50 text-lg">Top 1 in Pakistan</p>
    </div>
  </section>
</x-layout>
