<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Panel de Control
        </h2>
    </x-slot>

    <x-jet-validation-errors class="mb-4" />
    <div>
    <h3 class="text-center font-semibold text-3xl mt-10 lg:text-4xl text-gray-800">Lista de Usuarios</h3>
    <div class=" grid justify-items-center mb-8">
        <a  class="border border-gray-800 bg-gray-800 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline" href="{{route('users.create')}}">
            Crear Usuario</a>
    </div>
    <div class="overflow-x-auto">
        <table id="Usuarios" align="center" class="table table-bordered table-striped w-4/6">
            <div class="rounded-md">
                <thead class="bg-primary text-white">
                    <tr class="bg-gray-800 rounded-md">
                        <th class="px-16 py-2" scope="col">Id</th>
                        <th class="px-16 py-2" scope="col">Nombre</th>
                        <th class="px-16 py-2" scope="col">Rol</th>
                        <th class="px-16 py-2" scope="col">Empresa</th>
                        <th class="px-16 py-2" scope="col">Configuracion</th>
                    </tr>
                </thead>
            </div>    
            <tbody>    
                @foreach ($users as $user)
                    <tr class="bg-white border-4 border-gray-200">
                        <td class="px-16 items-center">{{ $user->id }}</td>
                        <td class="px-16 items-center">{{ $user->name }}</td>
                        <td class="px-16 items-center">
                            @foreach ($user->roles as $role)
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    {{ $role->title }}
                                </span>
                            @endforeach   
                        </td>
                        <td class="px-16 items-center">{{ $user->email }}</td>                           
                        <td>
                            <div class="px-16 items-center flex gap-3">
                                <form action="{{ route('users.edit', $user->id) }}" >
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button link type="submit" class="uppercase p-3 flex items-center bg-blue-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg rounded-full w-12 h-12 ">
                                        <svg width="32" height="32"  viewBox="0 0 32 32" style="transform: rotate(360deg);"><path d="M29 27.586l-7.552-7.552a11.018 11.018 0 1 0-1.414 1.414L27.586 29zM4 13a9 9 0 1 1 9 9a9.01 9.01 0 0 1-9-9z" fill="currentColor"></path></svg>
                                    </button>
                                </form>
                                <form class="inline-block" action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="uppercase p-3 flex items-center bg-red-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg rounded-full w-12 h-12 ">
                                        <svg width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" style="transform: rotate(360deg);">
                                            <path d="M12 12h2v12h-2z" fill="currentColor"></path>
                                            <path d="M18 12h2v12h-2z" fill="currentColor"></path>
                                            <path d="M4 6v2h2v20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8h2V6zm4 22V8h16v20z" fill="currentColor"></path>
                                            <path d="M12 2h8v2h-8z" fill="currentColor"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>             
                    </tr>
                    
                @endforeach
            </tbody>
            
        </table>
        <div class="lg:w-5/6 md:w-12/12">
            {{$users->links()}}        
        </div>
    </div>
    
        <script src="{{asset('js/style.js')}}"></script>    
</x-app-layout>
