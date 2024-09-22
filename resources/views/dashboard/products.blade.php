<x-layout class="flex" :nav="true">
  <x-sidebar></x-sidebar>

  <section class="ml-10 w-full max-h-[1080px] h-screen pt-20 pb-6">
    <table class="w-full">
      <thead>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Brand</th>
        <th>Added At</th>
      </thead>
      <tbody class="mt-5 text-center">
        @foreach ($products as $product)
          <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->brand }}</td>
            <td>{{ $product->created_at->format('d/m/Y') }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </section>
</x-layout>
