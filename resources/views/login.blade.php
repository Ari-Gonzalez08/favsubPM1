<x-layout>
    <div class="flex justify-center items-center h-screen">
<div class="text-5x1 text-violet-800 uppercase mt-20 ">
  <h1 class="text-9xl  text-purple-600 font-serif grid place-content-center ">Log In</h1>

  <div class="grid place-content-center ">
    <form action="/login" method="POST" class=" font-sans flex flex-col justify-center my-12">
       @csrf
        <div  class="pl-8 font-bold font-serif">
            <x-input titulo="Email" type="text" nombre="email"/>
        </div>

        <div class="pl-8 font-bold font-serif">
            <x-input titulo="Password" type="password" nombre="password"/>
        </div>
        <br>

        <div class="grid place-content-center pl-8">
        <button type="submit"class="bg-purple-400 text-blue-900 font-semibold px-6 py-4 rounded-full text-center font-bold transition ease-in-out delay-150,bg-blue-200 hover:translate-y-1 hover:scale" style="width: 190px ">Submit</button>
        </div>
    </form>
</div>
</div>
</x-layout>
