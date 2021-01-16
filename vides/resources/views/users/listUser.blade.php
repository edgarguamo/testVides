<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Panel de Control
        </h2>
    </x-slot>

    <div class="grid place-items-center pt-10 h-4/6">
        <div class="w-10/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-4/12">
        <h2 class="text-center ">Crear Usuario</h2>
            <form action="{{route('dashboard.createUser')}}" method="POST" class="mt-6">
                @csrf
                <div class="flex justify-between gap-3">
                    <span class="w-1/2">
                        <label for="name" class="block text-xs font-semibold text-gray-600 uppercase">Name</label>
                        <input id="name" type="text" name="name" placeholder="Carlos Alberto" autocomplete="given-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                    </span>
                    <span class="w-1/2">
                        <label for="rol" class="block text-xs font-semibold text-gray-600 uppercase">Rol</label>
                        <input id="rol" type="text" name="rol" placeholder="Admin" autocomplete="family-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                    </span>
                </div>
                <label for="hotel" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Empresa</label>
                <input id="hotel" type="text" name="enterprise" placeholder="john.doe@company.com" autocomplete="email" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                <label for="email" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">E-mail</label>
                <input id="email" type="email" name="email" placeholder="john.doe@company.com" autocomplete="email" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                <label for="password" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Password</label>
                <input id="password" type="password" name="password" placeholder="********" autocomplete="new-password" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                <label for="password-confirm" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Confirm password</label>
                <input id="password-confirm" type="password" name="password-confirm" placeholder="********" autocomplete="new-password" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                    Registrar
                </button>
            </form>
        </div>
    </div>

    <h3 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">Lista de Usuarios</h3>

    <table id="hoteles" align="center" class="table table-bordered table-striped w-4/6">
        <div class="index-hospitality">
            <thead class="bg-primary text-white">
                <tr class="bg-gray-800">
                    <th class="px-16 py-2" scope="col">Id</th>
                    <th class="px-16 py-2" scope="col">Nombre</th>
                    <th class="px-16 py-2" scope="col">Rol</th>
                    <th class="px-16 py-2" scope="col">Empresa</th>
                </tr>
            </thead>
            
            <tbody>    
                @foreach ($users as $user)
                    <tr class="bg-white border-4 border-gray-200">
                        <td class="px-16 items-center">{{ $user->id }}</td>
                        <td class="px-16 items-center">{{ $user->name }}</td>
                        <td class="px-16 items-center">{{ $user->rol }}</td>
                        <td class="px-16 items-center">{{ $user->enterprise }}</td>                
                    </tr>
                @endforeach
            </tbody>
        </div>
    </table>
    <div class="lg:w-5/6 md:w-12/12">
    {{$users->links()}}
    </div>
    
</x-app-layout>