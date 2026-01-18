<x-layouts.layout>
    <div class=" flex justify-center items-center h-full bg-gray-400">
        <form action="{{route('alumnos.update', $alumno->id)}}" method="POST" class=" bg-white rounded-xl m-3 p-3 ">
            @csrf
            @method('PATCH')
            <div class="m-3">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" value=" {{$alumno->nombre}}">
                <div class="text-red-500 text-sm">
                {{$errors->first("nombre")}}
                </div>
            </div>
            <div class="m-3">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" value="{{$alumno->apellido}}">
            </div>
            <div class="m-3">
                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{$alumno->fecha_nacimiento}}">
            </div>
            <div class="m-3">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="{{$alumno->email}}">
                <div class="text-red-500 text-sm">
                    {{$errors->first("email")}}
                </div>
            </div>
            <div class="m-3">
                <input class="btn btn-primary" type="submit" value="Guardar">
                <input class="btn btn-primary" type="submit" value="Cancelar">
            </div>
        </form>
    </div>


</x-layouts.layout>
