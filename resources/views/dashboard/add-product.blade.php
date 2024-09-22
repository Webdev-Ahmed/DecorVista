<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
    rel="stylesheet">
  @vite(['resources/js/app.js', 'resources/css/app.css'])
  <title>Register | DecorVista</title>
</head>

<body>
  <main class="w-full mx-auto max-w-[1920px] relative">
    <section class="flex">
      <div class="w-[70%] max-md:w-full h-screen rounded-xl overflow-hidden rounded-l-none">
        <img src="{{ asset('images/pexels-linda-gschwentner-154780054-10924906.jpg') }}"
          class="w-full h-full object-cover" alt="Register Image">
      </div>

      <form method="POST" action="/products/create/new" enctype="multipart/form-data"
        class="flex flex-col max-md:w-full max-md:absolute max-md:h-full max-md:bg-white/80 w-[30%] p-8 justify-center">
        @csrf

        <h1 class="text-4xl text-center mb-6 font-bold tracking-tighter">Add new product</h1>


        <div class="flex flex-col mb-4">
          <label for="name" class="text-sm">Name:</label>
          <input placeholder="Enter product's Name"
            class="py-1.5 placeholder:text-sm placeholder:text-orange-950/40 w-full bg-orange-50/70 border-[1px] mt-2 border-orange-950/10 max-md:border-orange-950/60 rounded-full px-4"
            type="text" id="name" name="name" required>

          @error('name')
            <span class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col mb-4">
          <label for="category" class="text-sm">Category:</label>
          {{-- <input placeholder="Enter product's category"
            class="py-1.5 placeholder:text-sm placeholder:text-orange-950/40 w-full bg-orange-50/70 border-[1px] mt-2 border-orange-950/10 max-md:border-orange-950/60 rounded-full px-4"
            type="text" id="category" name="category" required> --}}
          <select
            class="py-1.5 placeholder:text-sm placeholder:text-orange-950/40 w-full bg-orange-50/70 border-[1px] mt-2 border-orange-950/10 max-md:border-orange-950/60 rounded-full px-4"
            name="category" id="category">
            @foreach ($categories as $category)
              <option class="bg-orange-100" value="{{ strtolower($category->category_name) }}">
                {{ $category->category_name }}
              </option>
            @endforeach
          </select>

          @error('category')
            <span class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col mb-4">
          <label for="brand" class="text-sm">Brand:</label>
          <input placeholder="Enter product's brand"
            class="py-1.5 placeholder:text-sm placeholder:text-orange-950/40 w-full bg-orange-50/70 border-[1px] mt-2 border-orange-950/10 max-md:border-orange-950/60 rounded-full px-4"
            type="text" id="brand" name="brand" required>

          @error('brand')
            <span class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col mb-4">
          <label for="price" class="text-sm">Price:</label>
          <input placeholder="Enter product's price"
            class="py-1.5 placeholder:text-sm placeholder:text-orange-950/40 w-full bg-orange-50/70 border-[1px] mt-2 border-orange-950/10 max-md:border-orange-950/60 rounded-full px-4"
            type="number" min="1" id="price" name="price" required>

          @error('price')
            <span class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col mb-4">
          <label for="discount" class="text-sm">Discount (optional):</label>
          <input placeholder="Enter product's discount (optional)"
            class="py-1.5 placeholder:text-sm placeholder:text-orange-950/40 w-full bg-orange-50/70 border-[1px] mt-2 border-orange-950/10 max-md:border-orange-950/60 rounded-full px-4"
            type="number" min="0" max="100" id="discount" name="discount">

          @error('discount')
            <span class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col mb-4">
          <label for="description" class="text-sm">Description:</label>
          <textarea placeholder="Enter product's description"
            class="py-2 placeholder:text-sm resize-none placeholder:text-orange-950/40 w-full bg-orange-50/70 border-[1px] mt-2 border-orange-950/10 max-md:border-orange-950/60 rounded-full px-4"
            id="description" name="description" required></textarea>

          @error('description')
            <span class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col mb-4">
          <label for="image" class="text-sm">Image:</label>
          <input placeholder="Enter product's image"
            class="py-1.5 placeholder:text-sm placeholder:text-orange-950/40 w-full bg-orange-50/70 border-[1px] mt-2 border-orange-950/10 max-md:border-orange-950/60 rounded-full px-4"
            type="file" id="image" name="image" required></input>

          @error('image')
            <span class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
          class="px-4 py-2 hover:bg-neutral-950 hover:text-neutral-100 transition-colors rounded-full border-neutral-950 border-[1px] mt-2"
          type="submit">Add Product</button>
      </form>
    </section>
  </main>
</body>

</html>
