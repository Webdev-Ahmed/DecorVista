<x-layout class="flex" :nav="true">
  <x-sidebar></x-sidebar>

  <section class="ml-10 w-full max-h-[1080px] h-screen pt-20 pb-6">
    <table class="w-full">
      <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Role</th>
      </thead>
      <tbody class="mt-5 text-center">
        @foreach ($users as $user)
          <tr>
            <td>{{ $user->firstName }}</td>
            <td>{{ $user->lastName }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </section>
</x-layout>
