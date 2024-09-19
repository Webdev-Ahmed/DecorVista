<x-layout :nav="true">
  <section class="w-full max-h-[1080px] h-screen pt-16 pb-6">
    <div class="w-full h-full relative rounded-xl overflow-hidden">
      <h1
        class="text-8xl max-lg:text-7xl max-md:text-6xl max-sm:text-5xl left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 absolute font-bold text-white z-[99]">
        Designers</h1>
      <img src="images/pexels-charlotte-may-5825527.jpg" alt="Home"
        class="w-full h-full object-cover filter brightness-75">
    </div>
  </section>

  <section class="flex gap-6 h-auto max-md:flex-col">
    <div class="rounded-xl overflow-hidden w-[75%] h-[600px] max-md:w-full ">
      <img src="images/pexels-fotoaibe-1571460.jpg" class="w-full h-full object-cover" alt="">
    </div>
    <div class="w-[35%] max-md:w-full h-[600px] flex flex-col gap-6">
      <div class="h-[auto] w-full bg-orange-100 rounded-xl p-8">
        <button
          class="px-4 py-2 hover:bg-neutral-950 hover:text-neutral-100 transition-colors rounded-full border-neutral-950 border-[1px]">Aesthetic</button>
        <p class="mt-4 text-xl max-xl:text-lg max-lg:text-base font-medium leading-relaxed">
          Aesthetic Interior where every piece <br> tells a story of style.
        </p>
        <h1 class="font-bold text-5xl max-xl:text-4xl max-lg:text-3xl max-md:text-4xl mt-7 max-md:mt-4">Into a gallery
          of elegence
        </h1>
      </div>
      <div class="h-full rounded-xl overflow-hidden">
        <img src="images/pexels-valeriya-1129413.jpg" class="object-cover" alt="">
      </div>
    </div>
  </section>

  <section
    class="grid grid-cols-4 max-xl:px-[5%] max-md:px-4 max-md:grid max-md:grid-cols-2 max-md:text-center max-md:gap-y-12 py-16 px-[15%] justify-between w-full overflow-hidden">
    <div class="flex flex-col gap-y-3">
      <h1 class="text-7xl max-lg:text-5xl max-sm:text-4xl font-medium">500+</h1>
      <p class="text-neutral-950/70 text-lg max-xl:text-base max-md:text-sm">Products</p>
    </div>
    <div class="flex flex-col gap-y-3">
      <h1 class="text-7xl max-lg:text-5xl max-sm:text-4xl font-medium">20+</h1>
      <p class="text-neutral-950/70 text-lg max-xl:text-base max-md:text-sm">Designers</p>
    </div>
    <div class="flex flex-col gap-y-3">
      <h1 class="text-7xl max-lg:text-5xl max-sm:text-4xl font-medium">50+</h1>
      <p class="text-neutral-950/70 text-lg max-xl:text-base max-md:text-sm">Satisfied Customers</p>
    </div>
    <div class="flex flex-col gap-y-3">
      <h1 class="text-7xl max-lg:text-5xl max-sm:text-4xl font-medium">1<sup>st</sup></h1>
      <p class="text-neutral-950/70 text-lg max-xl:text-base max-md:text-sm">Top 1 in Pakistan</p>
    </div>
  </section>

  <section class="h-[600px] max-lg:h-[500px] flex max-md:flex-col max-md:h-auto gap-x-6">
    <div class="rounded-xl overflow-hidden w-[50%] max-md:w-full">
      <img src="images/pexels-houzlook-3356416.jpg" class="w-full h-full max-h-[600px] object-cover">
    </div>
    <div class="flex flex-col justify-center w-[50%] max-md:w-full max-md:mt-8">
      <span class="text-lg mb-6">Elegence ⋅ Timeless</span>

      <h1 class="text-7xl max-xl:text-6xl max-lg:text-5xl max-md:text-4xl font-semibold leading-snug">
        Modern Style
        <br>
        Timeless Charm
      </h1>
      <p class="text-lg max-lg:text-base max-sm:text-sm max-sm:max-w-[40ch] max-w-[60ch] mt-6 leading-normal">Discover
        DecorVista's 2024
        preview, featuring
        stunning
        designs,
        awesome products, and much more ✨</p>
      <button
        class="px-4 py-2 mt-6 w-fit hover:bg-neutral-950 hover:text-neutral-100 transition-colors rounded-full border-neutral-950 border-[1px]">See
        More!</button>
    </div>
  </section>
</x-layout>

<section class="w-full h-[600px] max-md:h-auto bg-black mt-20 flex justify-center items-center">
  <div class="max-w-[1920px] w-full h-full flex max-md:flex-col">
    <div class="w-[50%] max-md:w-full flex flex-col justify-center px-12 max-md:px-4 max-md:py-12 h-full ">
      <h1 class="text-7xl text-white max-xl:text-6xl max-lg:text-5xl max-md:text-4xl font-semibold leading-snug">
        Engage with us in
        <br>
        Conversation.
      </h1>
      <p class="text-white/80 max-w-[65ch] mt-10 max-md:text-sm">
        In a global world based on communication, a brand must look beyond its borders, open up to new experiences, and
        dare to be different. Meeting the brightest minds of one's time is the most effective way to nurture creativity
      </p>
    </div>
    <div class="w-[50%] max-md:w-full px-12 max-md:px-4 h-full max-md:pb-6 flex items-center justify-center">
      <img src="images/pexels-pixabay-271624.jpg" class="w-full h-[400px] max-w-[650px] rounded-xl object-cover">
    </div>
  </div>
</section>

<x-footer></x-footer>
