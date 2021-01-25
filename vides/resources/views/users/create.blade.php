<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Panel de Control
        </h2>
    </x-slot>
<div class="grid place-items-center pt-10 h-4/6">
    <div class="w-10/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-4/12">
    <h2 class="text-center ">Crear Usuario</h2>
        <form action="{{route('users.store')}}" method="POST" class="mt-6">
            @csrf
            <div class="flex justify-between gap-3">
                
                <!--Nombre-->
                
                <span class="w-1/2">
                    <label for="name" class="block text-xs font-semibold text-gray-600 uppercase">Name</label>
                    <input id="name" type="text" name="name" placeholder="Carlos Alberto" autocomplete="given-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                </span>

                <!-- Rol-->

                <span class="w-1/2">
                    <label for="roles" class="block text-xs font-semibold text-gray-600 uppercase">Rol</label>
                    <select name="roles[]" id="roles" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 focus:outline-none focus:bg-gray-300 focus:shadow-inner" required>
                        @foreach($roles as $id => $role)
                            <option value="{{ $id }}"{{ in_array($id, old('roles', [])) ? ' selected' : '' }}>{{ $role }}</option>
                        @endforeach
                    </select>
                </span>
            </div>
            
            <!-- email -->
            
            <label for="email" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">E-mail</label>
            <input id="email" type="email" name="email" placeholder="john.doe@company.com" autocomplete="email" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />

            <!-- password -->
            
            <label for="password" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Password</label>
            <input id="password" type="password" name="password" placeholder="********" autocomplete="new-password" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />           
            
            <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                Registrar
            </button>
        </form>
    </div>
</div>
</x-app-layout>