<x-layouts.layout>
    <div class="overflow-x-auto h-full w-full">
        <a href="{{route("alumnos.create")}}">
            <button class="btn btn-primary">Crear Usuario</button>
        </a>
        <table class="table table-xs table-pin-rows table-pin-cols w-full">
            <thead>
            <tr>
                @foreach($campos as $campo)
                    <th class="p-3">{{$campo}}</th>
                    <th></th>
                    <th></th>
                @endforeach
            </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $usuario)
                <tr>

                    <td>{{$usuario->nombre}}</td>
                    <td>{{$usuario->apellido}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>{{$usuario->fecha_nacimiento}}</td>

                    <!--Botón de borrar-->
                    <td>
                        <form action="/usuarios/{{$usuario->id}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button onclick="confirmarDelete(event)"
                                    class="cursor-pointer on-hover:bg-red-500 p-2 rounded-full ">
                                <svg class="h-6 w-6 hover:bg-red-600" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 448 512">
                                    <!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path
                                        d="M136.7 5.9L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-8.7-26.1C306.9-7.2 294.7-16 280.9-16L167.1-16c-13.8 0-26 8.8-30.4 21.9zM416 144L32 144 53.1 467.1C54.7 492.4 75.7 512 101 512L347 512c25.3 0 46.3-19.6 47.9-44.9L416 144z"/>
                                </svg>
                            </button>

                        </form>
                    </td>
                    <td>
                        <!--editar-->
                        <a href="{{route("alumnos.edit",$usuario->id)}}" class="cursor-pointer">
                            <button class="btn btn-sm btn-warning">Editar</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

        <script>
            function confirmarDelete(event) {
                event.preventDefault();
                if (confirm("Seguro que quieres borrar"))
                    event.target.closest("form").submit();

            }
        </script>

</x-layouts.layout>
