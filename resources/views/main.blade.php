<x-layouts.layout>
    @guest
    <div      class="hero h-full"      style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);"
    >
        <div class="hero-overlay"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                <p class="mb-5">
                    Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                    quasi. In deleniti eaque aut repudiandae et a id nisi.
                </p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </div>
    @endguest
    @auth
            <div class="card bg-base-100 image-full w-96 shadow-sm p-5 m-3 bg-gray-400">
                <figure>
                    <img
                        src="{{asset('images/students.jpeg')}}"
                        alt="Shoes"
                    class="w-full h-48 p-3 rounded-sm"
                    />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">Gestión Alumnos</h2>
                    <p>Podrás gestionar alumnos del instituto</p>
                    <div class="card-actions justify-end">
                        <a href="alumnos"><button class="btn btn-primary">Ver Alumnos</button></a>
                    </div>
                </div>
            </div>
        @endauth
</x-layouts.layout>
