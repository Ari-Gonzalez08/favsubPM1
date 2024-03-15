<x-layout>
<div class="text-5x1 text-green-600 uppercase">
  <h1 class="text-9xl text-fuchsia-700">Log In</h1>
    <form action="/login" method="POST" class="flex flex-col justify-center my-12">
       @csrf
        <div>
            <x-input título="Email" type="text" nombre="email"/>
        </div>
        <div class="">
            <x-input título="Password" type="password" nombre="password"/>
        </div>

        <button type="submit" class="bg-lime-200 text-white font-semibold px-5py-2 rounded-2x">Log In</button>
    </form>
</x-layout>
