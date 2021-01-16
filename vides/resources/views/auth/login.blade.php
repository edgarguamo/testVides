<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        </x-slot>
        <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">
            Login
        </h2>
        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="block text-xs font-semibold text-gray-600 uppercase">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="block text-xs font-semibold text-gray-600 uppercase mt-8">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block w-full py-3 px-1 mt-2 mb-4
                text-gray-800 appearance-none 
                border-b-2 border-gray-100
                focus:text-gray-500 focus:outline-none focus:border-gray-200" type="email" name="email" :value="old('email')" placeholder="e-mail address" required autofocus />
            </div>

            <div class="block mt-12 text-xs font-semibold text-gray-600 uppercase">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block w-full py-3 px-1 mt-2 mb-4
                text-gray-800 appearance-none 
                border-b-2 border-gray-100
                focus:text-gray-500 focus:outline-none focus:border-gray-200" type="password" name="password" placeholder="password" required autocomplete="current-password" />
            </div>

            <x-jet-button class="w-full py-3 mt-10 bg-gray-800 rounded-sm
                font-medium text-white uppercase
                focus:outline-none hover:bg-gray-700 hover:shadow-none">
                    {{ __('Login') }}
                </x-jet-button>

            <div class="sm:flex sm:flex-wrap mt-8 sm:mb-4 text-sm text-center">
                <div class="block mt-4">
                    <label for="remember_me" class="flex-2">
                        <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <p class="flex-1 text-gray-500 text-md mx-4 my-1 sm:my-auto">
                    --o--
                </p>
    
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
    
                    
                </div>
            </div>
            
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
