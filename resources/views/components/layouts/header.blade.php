<header class="bg-header h-header flex flex-row justify-between px-3 items-center">

    <img class="h-10 w-20 max-h-full" src="{{asset("./images/logo.png")}}" alt="logo">
    <div>
        <h1 class="text-blue-700 text-8xl ">Gestión de instituto</h1>
    </div>
    <div>



    @guest
        <button class="btn btn-sm btn-primary"><a href="login">Login</a></button>
        <button class="btn btn-sm btn-primary">Register</button>
    @endguest
    @auth
        {{auth()->user()->name}}
            <button class="btn btn-sm btn-primary">Logout</button>
    @endauth
    </div>

</header>
