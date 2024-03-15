<x-layout>
    <h1>Sign up</h1>
    <form action="/register" method="POST">
@csrf
    <div>
      <x-input título="Name" type="text" nombre="name"/>
    </div>

    </div>
      <x-input título="Email" type="text" nombre="email"/>
    <div>

    </div>
    <x-input título="Password" type="password" nombre="password"/>
    </div>

    <div>
    <x-input título="Birthday" type="date" nombre="birthday"/>
    </div>
<button type="submit">Submit</button>
</form>
<x-layout>



