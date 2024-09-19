<x-layout :nav="true">
  <section class="w-full max-h-[1080px] h-screen pt-16 pb-6">
    <div class="w-full h-full relative rounded-xl overflow-hidden">
      <h1
        class="text-8xl max-lg:text-7xl max-md:text-6xl max-sm:text-5xl left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 absolute font-bold text-white z-[99]">
        Gallery</h1>
      <img src="images/pexels-medhat-ayad-122846-383568.jpg" alt="Home"
        class="w-full h-full object-cover filter brightness-75">
    </div>
  </section>

  <section
    class="w-full mb-12 max-md:pb-4 gap-6 [--column-count:1] xl:[--column-count:4] lg:[--column-count:3] md:[--column-count:2] sm:[--column-count:1] h-auto">
    <div id="masonry-layout">
      <img loading="lazy" class="rounded-xl mb-4" src="images/pexels-houzlook-3356416.jpg" alt="">
      <img loading="lazy" class="rounded-xl mb-4" src="images/pexels-medhat-ayad-122846-383568.jpg" alt="">
      <img loading="lazy" class="rounded-xl mb-4" src="images/pexels-valeriya-1129413.jpg" alt="">
      <img loading="lazy" class="rounded-xl mb-4" src="images/pexels-pixabay-271624.jpg" alt="">
      <img loading="lazy" class="rounded-xl mb-4" src="images/pexels-fotios-photos-1090638.jpg" alt="">
      <img loading="lazy" class="rounded-xl mb-4" src="images/pexels-houzlook-3356416.jpg" alt="">
      <img loading="lazy" class="rounded-xl mb-4" src="images/pexels-medhat-ayad-122846-383568.jpg" alt="">
      <img loading="lazy" class="rounded-xl mb-4" src="images/pexels-valeriya-1129413.jpg" alt="">
      <img loading="lazy" class="rounded-xl mb-4" src="images/pexels-pixabay-271624.jpg" alt="">
      <img loading="lazy" class="rounded-xl mb-4" src="images/pexels-fotios-photos-1090638.jpg" alt="">
    </div>
  </section>
</x-layout>

<x-footer />

<style>
  #masonry-layout {
    columns: 4;
  }

  @media (max-width: 1280px) {
    #masonry-layout {
      columns: 4;
    }
  }

  @media (max-width: 1024px) {
    #masonry-layout {
      columns: 3;
    }
  }

  @media (max-width: 768px) {
    #masonry-layout {
      columns: 2;
    }
  }

  @media (max-width: 640px) {
    #masonry-layout {
      columns: 1;
    }
  }
</style>
