<x-layout>
    <h1>Sign up</h1>
    <form action="/register" method="POST">
@csrf

      <x-input titulo="Name" type="text" nombre="name"/>

      <x-input titulo="Email" type="text" nombre="email"/>

    <x-input titulo="Password" type="password" nombre="password"/>

    <x-input titulo="Birthday" type="date" nombre="birthday"/>
    
<button type="submit">Submit</button>
</form>
</x-layout>



