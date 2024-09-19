<nav id="nav-bar"
  class="flex justify-between fixed w-full max-md:px-4 bg-white/60 duration-300 transition-colors backdrop-blur-md items-center px-12 py-2 z-[99]">
  <h6 class="text-3xl max-md:text-2xl font-semibold">DecorVista</h6>

  <ul class="flex space-x-4 items-center max-md:hidden">
    <li><a href="/products">Products</a></li>
    <li><a href="/gallery">Gallery</a></li>
    <li><a href="/appoint">Appoint</a></li>
    <li><a href="/panel">Panel</a></li>
    <li>
      <a href="/login">
        <button
          class="px-3 py-1 hover:bg-neutral-950 hover:text-neutral-100 transition-colors rounded-full border-neutral-950 border-[1px]">
          Login
        </button>
      </a>
    </li>
  </ul>

  <div class="md:hidden">
    <button id="open-btn" class="text-lg -rotate-45 duration-300" onclick="openDropDown()">&#x2715;</button>

    <ul id="drop-down"
      class="absolute backdrop-blur-md invisible pointer-events-none opacity-0 bg-transparent duration-300 left-0 w-full p-4 rounded-xl rounded-t-none top-12 flex flex-col gap-y-2">
      <li><a href="/products">Products</a></li>
      <li><a href="/gallery">Gallery</a></li>
      <li><a href="/appoint">Appoint</a></li>
      <li><a href="/panel">Panel</a></li>
      <li class="text-right absolute bottom-4 right-4">
        <a href="/login">
          <button
            class="px-3 py-1 hover:bg-neutral-950 hover:text-neutral-100 transition-colors rounded-full border-neutral-950 border-[1px]">
            Login
          </button>
        </a>
      </li>
    </ul>
  </div>

</nav>

<script>
  const dropDown = document.querySelector("#drop-down");
  const navbar = document.querySelector("#nav-bar")
  const openButton = document.querySelector("#open-btn")

  const openDropDown = () => {
    dropDown.classList.toggle("!visible");
    dropDown.classList.toggle("!pointer-events-auto");
    dropDown.classList.toggle("!opacity-100");
    dropDown.classList.toggle("!bg-white");
    navbar.classList.toggle("!bg-white");
    openButton.classList.toggle("!rotate-0");
  }
</script>
