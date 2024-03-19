<x-layout>
<div class="text-5x1 text-green-800 uppercase">
  <h1 class="text-9xl text-fuchsia-300">Log In</h1>
    <form action="/login" method="POST" class="flex flex-col justify-center my-12">
       @csrf
        <div>
            <x-input titulo="Email" type="text" nombre="email"/>
        </div>
        <div class="">
            <x-input titulo="Password" type="password" nombre="password"/>
        </div>

        <button type="submit" class="bg-purple-900 text-white font-semibold px-5py-2 rounded-2x text-center">Log In</button>
    </form>
</x-layout>
