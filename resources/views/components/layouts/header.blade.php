<header class="bg-header h-header">
    @guest
        <button class="btn btn-sm btn-primary"><a href="login">Login</a></button>
        <button class="btn btn-sm btn-primary">Register</button>
    @endguest
    @auth
        {{auth()->user()->name}}
            <button class="btn btn-sm btn-primary">Logout</button>
    @endauth

</header>
