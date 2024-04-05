<x-layout>
    <div class="flex justify-center items-center h-screen ">
        <div class="text-3x1 text-stone-950 uppercase mt-20 ">
            <h1 class="text-8xl  text-cyan-700 font-serif grid place-content-center ">Sign up</h1>
            <div class="grid place-content-center ">
                <form action="/register" method="POST" class=" font-sans flex flex-col justify-center my-10">
                    @csrf
                    <div class="pl-8 font-bold font-serif">
                        <x-input titulo="Name" type="text" nombre="name" />
                    </div>

                    <div class="pl-8 font-bold font-serif">
                        <x-input titulo="Email" type="email" nombre="email" />
                    </div>

                    <div class="pl-8 font-bold font-serif">
                        <x-input titulo="Password" type="password" nombre="password" />
                    </div>

                    <div class="pl-8 font-bold font-serif">
                        <x-input titulo="Birthday" type="date" nombre="birthday" />
                    </div>
                    <br>

                    <div class="grid place-content-center pl-8">
                        <button
                            type="submit"class="bg-purple-400 text-blue-900 font-semibold px-6 py-4 rounded-full text-center font-bold transition ease-in-out delay-150,bg-Emerald-400 hover:translate-y-1 hover:scale-110 hover:bg-blue-500 duration-300 rounded-full bg-blue-400 py-2 px-10"
                            style="width: 190px ">Submit</button>
                    </div>
                </form>
            </div>
        </div>
</x-layout>
